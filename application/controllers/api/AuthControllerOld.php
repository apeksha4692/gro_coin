<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
// include Rest Controller library
require APPPATH . '/libraries/REST_Controller.php';
class AuthController extends REST_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library( 'form_validation' );
		$this->load->language( 'english' );
		$this->form_validation->set_error_delimiters('', '');

		
	}
	public function decode_jwt_post()
	{   

		$jwt = new JWT();
		$JwtSecretKey = "myGroCoinSecret";
		$_POST = json_decode(file_get_contents("php://input"), true);

		$token_data = $_POST['jwt_token'];

		$token = $jwt->decode($token_data,$JwtSecretKey,'HS256');
		echo json_encode($token);
		// $tokenData = $this->authorization_token->generateToken($token_data);

		// $final = array();
		// $final['token'] = $tokenData;
		// $final['status'] = 'ok';
 
		// $this->response($final); 

	}

	public function signup_post()
	{ 
	    $jwt = new JWT();
		$JwtSecretKey = "myGroCoinSecret";	  
	    $_POST = json_decode(file_get_contents("php://input"), true);

        $this->form_validation->set_rules('token', 'Token', 'required');
        if ($this->form_validation->run() == FALSE)
        {
        	return $this->response(array(
				'status'	=> REST_Controller::HTTP_BAD_REQUEST,
				'message' 	=> validation_errors(),
				'object'	=> new stdClass()
			));
            
        }


        $this->form_validation->set_rules('hash', 'Hash Id', 'required');
        if ($this->form_validation->run() == FALSE)
        {
        	return $this->response(array(
				'status'	=> REST_Controller::HTTP_BAD_REQUEST,
				'message' 	=> validation_errors(),
				'object'	=> new stdClass()
			));
            
        }

        $where = array(
			"account_id"  	 => $_POST['hash'],
		);	
		$checkHash = $this->CommonModel->selectRowDataByCondition($where,'users');

		if(!empty($checkHash))
		{
			return $this->response(array(
					'status'	=> REST_Controller::HTTP_BAD_REQUEST,
					'message' 	=> 'Email-Id already exit',
					'object'	=> new stdClass()
				));

			// $data['status'] 	= 	REST_Controller::HTTP_BAD_REQUEST;
		 //    $data['message'] 	= 	$this->check_value('Hash Id already exit');

			// $token = $jwt->encode($data,$JwtSecretKey,'HS256');
			// echo json_encode($token);
			// exit;
		}

		$users_data 	= array(
        	"token" 		=> $_POST['token'],
        	"account_id" 	=> $_POST['hash'],
    	    "created_at"    =>  date('Y-m-d H:i:s a'),
            "updated_at"    =>  date('Y-m-d H:i:s a'),
        );
        
        $insertUserData  = $this->CommonModel->insertData($users_data,'users');

        if ($insertUserData) 
		{
			$last_id 		= $this->db->insert_id();

			$userDetail = $this->CommonModel->selectRowDataByCondition(array('id' => $last_id),'users');

		    
		    $data['status'] 	= 	REST_Controller::HTTP_OK;
		    $data['message'] 	= 	$this->check_value('Your Registered successfully.');
		    $data['id'] 	 	= 	$this->check_value($userDetail->id);
		    $data['token'] 	 	= 	$this->check_value($userDetail->token);
		    $data['hash_id'] 	= 	$this->check_value($userDetail->account_id);

			return $this->response(array(
				'status'	=> REST_Controller::HTTP_OK,
				'message' 	=> 'Your Registered successfully.',
				'object'	=> $data
			)); 


			// $token = $jwt->encode($data,$JwtSecretKey,'HS256');
			// echo json_encode($token);
			// exit;

		}
		else{
			return $this->response(array(
				'status'	=> REST_Controller::HTTP_BAD_REQUEST,
				'message' 	=> 'Somethings went wrong',
				'object'	=> new stdClass()
			));

			// $data['status'] 	= 	REST_Controller::HTTP_BAD_REQUEST;
		 //    $data['message'] 	= 	$this->check_value('Somethings went wrong');

			// $token = $jwt->encode($data,$JwtSecretKey,'HS256');
			// echo json_encode($token);
			// exit;
        } 
         
	}
}
