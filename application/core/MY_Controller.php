<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {

	public function __construct() 
	{
	    parent::__construct();

	    
	}

	public function loadAdminView($view,$data=array())
	{
        // $where = array('id'=>$this->session->userdata('ses_admin_id'));
        $where = array('id'=>$this->session->userdata('ses_admin_id'));
        $data['getAdminData'] = $this->CommonModel->getsingle('admin',$where);
        // print_r($data['getAdminData']);die;

		$this->load->view('admin/common/header',$data);
		$this->load->view($view);
		$this->load->view('admin/common/footer');
	}
	
	
    protected function _sendAndroidNotification( $values )
    {
        // print_r($values);die;
        $url = 'https://fcm.googleapis.com/fcm/send';
        // $url = 'https://android.googleapis.com/gcm/send';

        $message = array(
            'title'         => $values['title'],
            'message'       => $values['message'],
            'subject'       => $values['subject'],
            'subtitle'      => '',
            'tickerText'    => '',
            'msgcnt'        => 1,
            'type'          => $values['type'],
            // 'id'            => $values['id'],
            'vibrate'       => 1
        );
        
        $headers = array(
            // 'Authorization: key=AAAAqizjv-A:APA91bHRbgb1O3AnTYPZnwa3xWanE3T8DwrKXxR54K3C4nWznyKBYAExxU7N7XvbxOucaQY7mLqAE4FE0bQKNJ_0HL0EU00iqq65ujcgnPOXQefWMdgRU0Ecxv0LzgWLISpZuOVqxNwe',
            'Authorization: key=AAAAq-4veFQ:APA91bErKLQP-sNxAVH9zF1kTm5loqy_vsxkCGfxoNO35KGTi8M_nCg2gHbb_Twz5z_C4Oj7Geii0eHkFi9A2uwnD2vJLTVMrZCrOOY7oQP5cZGJ4CE8GfEW-FgrNb4cZxy_9SSzSGaT',
            'Content-Type: application/json'
        );

        if(is_array($values['device_id']))
        {
             $fields = array(
                'registration_ids'  => $values['device_id'] ,
                // 'notification'      => $message,
                'notification'              => $message,
            ); 
        }

        else
        {
            $fields = array(
                'to'            => $values['device_id'] ,
                // 'notification'  => $message,
                'notification'          => $message,
            );
        }

        // $fields = array(
        //'registration_ids'    => array( $values['device_id'] ),
        //'data'                => $message,
        //);
        
        $ch = curl_init();
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        
        $result = curl_exec($ch);
        if ($result === FALSE) {
            die('Curl failed: ' . curl_error($ch));
        }
        // print_r($message);exit;
        // print_r($result);exit;
        curl_close($ch);

        return $result;

    }
    
    protected function _sendiOSNotification( $values )
    {

        // print_r($values);die;
        // $gateway = 'ssl://gateway.push.apple.com:2195';
        // $pem = APPPATH.'ios_pem'.DIRECTORY_SEPARATOR . 'pushNotification.pem';

        if ( ENVIRONMENT === 'production' ) {
            $gateway = 'ssl://gateway.push.apple.com:2195';
             $pem = APPPATH.'ios_pem'.DIRECTORY_SEPARATOR . 'pushNotification.pem';
        } else { 
            $gateway = 'ssl://gateway.sandbox.push.apple.com:2195';
             $pem = APPPATH.'ios_pem'.DIRECTORY_SEPARATOR . 'pushNotification.pem';
        }
        // print_r($pem);
        // Create a Stream
        $ctx = stream_context_create();
        // Define the certificate to use 
        stream_context_set_option($ctx, 'ssl', 'local_cert', $pem);
        // Passphrase to the certificate
        stream_context_set_option($ctx, 'ssl', 'passphrase', '1234');
        // print_r($ctx);
        // Open a connection to the APNS server
        $fp = stream_socket_client( $gateway, $err, $errstr, 60, STREAM_CLIENT_CONNECT|STREAM_CLIENT_PERSISTENT, $ctx);
        // print_r($fp);die;
        // Check that we've connected
        if (!$fp) {
            die("Failed to connect: $err $errstr");
        }
        
        // Ensure that blocking is disabled
        stream_set_blocking($fp, 0);

        $body['aps']            =  array(
            'alert'             => $values['message'],
            'badge'             => 1,
            'sound'             => 'default'
        );
        $body['sstx']       =  array(
            'title'         => $values['title'],
            'message'       => $values['message'],
            'subtitle'      => '',
            'tickerText'    => '',
            'msgcnt'        => 1,
            'subject'       => $values['subject'],
            'type'          => $values['type'],
            // 'id'            => $values['id'],
            'vibrate'       => 1
        );
        
        // Encode the payload as JSON
        $payload = json_encode($body);

        // print_r($payload);exit;
        $notification = chr(0) . pack('n', 32) . pack('H*', $values['device_id']) . pack('n', strlen($payload)) . $payload;
         // print_r($notification);exit;
        // Send it to the server
        $result = fwrite($fp, $notification, strlen($notification));
        // print_r($result);exit;
        // Close the connection to the server
        fclose($fp);

        return $result;

    }
}
