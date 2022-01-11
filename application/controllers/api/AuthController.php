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


   //      $this->form_validation->set_rules('hash', 'Hash Id', 'required');
   //      if ($this->form_validation->run() == FALSE)
   //      {
   //      	return $this->response(array(
			// 	'status'	=> REST_Controller::HTTP_BAD_REQUEST,
			// 	'message' 	=> validation_errors(),
			// 	'object'	=> new stdClass()
			// ));
            
   //      }

  //       $where = array(
		// 	"account_id"  	 => $_POST['hash'],
		// );	
		// $checkHash = $this->CommonModel->selectRowDataByCondition($where,'users');

		// if(!empty($checkHash))
		// {
		// 	return $this->response(array(
		// 			'status'	=> REST_Controller::HTTP_BAD_REQUEST,
		// 			'message' 	=> 'Email-Id already exit',
		// 			'object'	=> new stdClass()
		// 		));

		// 	// $data['status'] 	= 	REST_Controller::HTTP_BAD_REQUEST;
		//  //    $data['message'] 	= 	$this->check_value('Hash Id already exit');

		// 	// $token = $jwt->encode($data,$JwtSecretKey,'HS256');
		// 	// echo json_encode($token);
		// 	// exit;
		// }

		$generate_wallet        = $this->bsc_generate_wallet();
     	$generateWallet = json_decode($generate_wallet);
     	$xpub 		=	$generateWallet->xpub;
     	$mnemonic   =   $generateWallet->mnemonic;
     	

     	$bsc_account        = $this->bsc_account($xpub);
     	$bscWalletAddress 	= json_decode($bsc_account);
     	$bsc_wallet_address =$bscWalletAddress->address;


     	$bscPrivateKey        = $this->bsc_private_key($mnemonic);
     	$private_key 	= json_decode($bscPrivateKey);
     	$bsc_private_key =$private_key->key;


     	$users_data 	= array(
        	"token" 		=> $_POST['token'],
        	"account_id" 	=> $bsc_wallet_address,
        	"xpub" 			=> $xpub,
        	"mnemonic" 		=> $mnemonic,
        	"private_key" 	=> $bsc_private_key,
    	    "created_at"    =>  date('Y-m-d H:i:s a'),
            "updated_at"    =>  date('Y-m-d H:i:s a'),
        );
        
        $insertUserData  = $this->CommonModel->insertData($users_data,'users');


        if ($insertUserData) 
		{
			$last_id 		= $this->db->insert_id();

			$userDetail = $this->CommonModel->selectRowDataByCondition(array('id' => $last_id),'users');

		    
		    $data['status'] 				= 	REST_Controller::HTTP_OK;
		    $data['message'] 				= 	'Your create wallet successfully.';
		    $data['id'] 	 				= 	$this->check_value($userDetail->id);
		    $data['token'] 	 				= 	$this->check_value($userDetail->token);
		    $data['gro_wallet_address'] 	= 	$this->check_value($userDetail->account_id);
		    $data['xpub'] 					= 	$this->check_value($userDetail->xpub);
		    $data['mnemonic'] 				= 	$this->check_value($userDetail->mnemonic);
		    $data['private_key'] 			= 	$this->check_value($userDetail->private_key);

			// return $this->response(array(
			// 	'status'	=> REST_Controller::HTTP_OK,
			// 	'message' 	=> 'Your create wallet successfully.',
			// 	'object'	=> $data
			// )); 


			$token = $jwt->encode($data,$JwtSecretKey,'HS256');
			echo json_encode($token);
			exit;

		}
		else{
			// return $this->response(array(
			// 	'status'	=> REST_Controller::HTTP_BAD_REQUEST,
			// 	'message' 	=> 'Somethings went wrong',
			// 	'object'	=> new stdClass()
			// ));

			$data['status'] 	= 	REST_Controller::HTTP_BAD_REQUEST;
		    $data['message'] 	= 	$this->check_value('Somethings went wrong');

			$token = $jwt->encode($data,$JwtSecretKey,'HS256');
			echo json_encode($token);
			exit;
        } 
	}

	public function wallet_balance_post()
	{ 
	    $jwt = new JWT();
		$JwtSecretKey = "myGroCoinSecret";	  
	    $_POST = json_decode(file_get_contents("php://input"), true);

        $this->form_validation->set_rules('wallet_address', 'Wallet address', 'required');
        if ($this->form_validation->run() == FALSE)
        {
        	return $this->response(array(
				'status'	=> REST_Controller::HTTP_BAD_REQUEST,
				'message' 	=> validation_errors(),
				'object'	=> new stdClass()
			));
            
        }

        $user_wallet_address = $_POST['wallet_address'];

        $where = array(
			"account_id"  	 => $_POST['wallet_address'],
		);	
		$checkWalletAvaiable = $this->CommonModel->selectRowDataByCondition($where,'users');

		if(empty($checkWalletAvaiable))
		{
			// return $this->response(array(
			// 		'status'	=> REST_Controller::HTTP_BAD_REQUEST,
			// 		'message' 	=> 'Wallet address not found',
			// 		'object'	=> new stdClass()
			// 	));

			$data['status'] 	= 	REST_Controller::HTTP_BAD_REQUEST;
		    $data['message'] 	= 	$this->check_value('Wallet address not found');

			$token = $jwt->encode($data,$JwtSecretKey,'HS256');
			echo json_encode($token);
			exit;
		}

		$wallet_balance        = $this->wallet_balance($user_wallet_address);
     	$walletBalance = json_decode($wallet_balance);
     	$total_wallet_balance 		=	$walletBalance->balance;
     	// $mnemonic   =   $generateWallet->mnemonic;
     	// print_r($total_wallet_balance);


     	$users_data 	= array(
        	"wallet_balance" 	=> $total_wallet_balance,
    	    "created_at"    =>  date('Y-m-d H:i:s a'),
            "updated_at"    =>  date('Y-m-d H:i:s a'),
        );
        
        $updateUserData  = $this->CommonModel->updateRowByCondition(array('id' => $checkWalletAvaiable->id),'users',$users_data);


        if ($updateUserData) 
		{
			$last_id 		= $this->db->insert_id();

			$userDetail = $this->CommonModel->selectRowDataByCondition(array('id' => $checkWalletAvaiable->id),'users');

		    
		    $data['status'] 				= 	REST_Controller::HTTP_OK;
		    $data['message'] 				= 	'Wallet balance get successfully';
		    $data['id'] 	 				= 	$this->check_value($userDetail->id);
		    $data['token'] 	 				= 	$this->check_value($userDetail->token);
		    $data['gro_wallet_address'] 	= 	$this->check_value($userDetail->account_id);
		    $data['wallet_balance'] 		= 	$this->check_value($userDetail->wallet_balance);
		    // $data['xpub'] 					= 	$this->check_value($userDetail->xpub);
		    // $data['mnemonic'] 				= 	$this->check_value($userDetail->mnemonic);
		    // $data['private_key'] 			= 	$this->check_value($userDetail->private_key);

			// return $this->response(array(
			// 	'status'	=> REST_Controller::HTTP_OK,
			// 	'message' 	=> 'Wallet balance get successfully',
			// 	'object'	=> $data
			// )); 


			$token = $jwt->encode($data,$JwtSecretKey,'HS256');
			echo json_encode($token);
			exit;

		}
		else{
			// return $this->response(array(
			// 	'status'	=> REST_Controller::HTTP_BAD_REQUEST,
			// 	'message' 	=> 'Somethings went wrong',
			// 	'object'	=> new stdClass()
			// ));

			$data['status'] 	= 	REST_Controller::HTTP_BAD_REQUEST;
		    $data['message'] 	= 	$this->check_value('Somethings went wrong');

			$token = $jwt->encode($data,$JwtSecretKey,'HS256');
			echo json_encode($token);
			exit;
        } 
	}

	public function transfer_amount_post(){
		$jwt = new JWT();
		$JwtSecretKey = "myGroCoinSecret";	  
	    $_POST = json_decode(file_get_contents("php://input"), true);

        $this->form_validation->set_rules('from_address', 'From Wallet address', 'required');
        if ($this->form_validation->run() == FALSE)
        {
        	return $this->response(array(
				'status'	=> REST_Controller::HTTP_BAD_REQUEST,
				'message' 	=> validation_errors(),
				'object'	=> new stdClass()
			));
            
        }

        $this->form_validation->set_rules('to_address', 'To Wallet address', 'required');
        if ($this->form_validation->run() == FALSE)
        {
        	return $this->response(array(
				'status'	=> REST_Controller::HTTP_BAD_REQUEST,
				'message' 	=> validation_errors(),
				'object'	=> new stdClass()
			));
            
        }

        $this->form_validation->set_rules('amount', 'Amount', 'required');
        if ($this->form_validation->run() == FALSE)
        {
        	return $this->response(array(
				'status'	=> REST_Controller::HTTP_BAD_REQUEST,
				'message' 	=> validation_errors(),
				'object'	=> new stdClass()
			));
            
        }

        $from_address 	= $_POST['from_address'];
        $to_address 	= $_POST['to_address'];
        $amount 		= $_POST['amount'];

        $where = array(
			"account_id"  	 => $from_address,
		);	
		$fromUserDetail = $this->CommonModel->selectRowDataByCondition(array("account_id" => $from_address),'users');

		if(empty($fromUserDetail))
		{
			return $this->response(array(
					'status'	=> REST_Controller::HTTP_BAD_REQUEST,
					'message' 	=> 'Your from wallet address not found',
					'object'	=> new stdClass()
				));

			// $data['status'] 	= 	REST_Controller::HTTP_BAD_REQUEST;
		 //    $data['message'] 	= 	$this->check_value('Wallet address not found');

			// $token = $jwt->encode($data,$JwtSecretKey,'HS256');
			// echo json_encode($token);
			// exit;
		}

		$toUserDetail = $this->CommonModel->selectRowDataByCondition(array("account_id" => $to_address),'users');

		if(empty($toUserDetail))
		{
			return $this->response(array(
				'status'	=> REST_Controller::HTTP_BAD_REQUEST,
				'message' 	=> 'Your To wallet address not found',
				'object'	=> new stdClass()
			));

			// $data['status'] 	= 	REST_Controller::HTTP_BAD_REQUEST;
		 //    $data['message'] 	= 	$this->check_value('Wallet address not found');

			// $token = $jwt->encode($data,$JwtSecretKey,'HS256');
			// echo json_encode($token);
			// exit;
		}

		$fromPrivateKey 	= 	$fromUserDetail->private_key;
		$from_user_id	 	= 	$fromUserDetail->id;


		// print_r($fromUserDetail->private_key);die;


		$transfer_amount  = $this->transfer_amount($fromPrivateKey,$to_address,$amount);
     	$transferAmount   = json_decode($transfer_amount);
		// print_r($transferAmount);die;

		if(empty($transferAmount->txId)){
			// return $this->response(array(
			// 	'status'	=> REST_Controller::HTTP_BAD_REQUEST,
			// 	'message' 	=> 'Insufficient funds for transfer',
			// 	'object'	=> new stdClass()
			// ));

			$data['status'] 	= 	REST_Controller::HTTP_BAD_REQUEST;
		    $data['message'] 	= 	$this->check_value('Insufficient funds for transfer');

			$token = $jwt->encode($data,$JwtSecretKey,'HS256');
			echo json_encode($token);
			exit;
		}

     	$transaction_id   = $transferAmount->txId;

		$users_data 	= array(
        	"user_id" 			=> $from_user_id,
        	"to_id" 			=> $to_address,
        	"type" 				=> 'transfer_amount',
        	"amount" 			=> $amount,
        	"transaction_id" 	=> $transaction_id,
    	    "created_at"    	=>  date('Y-m-d H:i:s a'),
            "updated_at"    	=>  date('Y-m-d H:i:s a'),
        );
        
        $insertTransactionData  = $this->CommonModel->insertData($users_data,'transaction');


        if ($insertTransactionData) 
		{
			$last_id 		= $this->db->insert_id();

			$transactionDetail = $this->CommonModel->selectRowDataByCondition(array('id' => $last_id),'transaction');

		    
		    $data['status'] 				= 	REST_Controller::HTTP_OK;
		    $data['message'] 				= 	'Amount transfer successfully';
		    $data['id'] 	 				= 	$this->check_value($transactionDetail->id);
		    $data['from_user_id'] 	 		= 	$this->check_value($transactionDetail->user_id);
		    $data['to_user_id'] 			= 	$this->check_value($transactionDetail->to_id);
		    $data['amount'] 				= 	$this->check_value($transactionDetail->amount);
		    $data['transaction_id'] 		= 	$this->check_value($transactionDetail->transaction_id);

			// return $this->response(array(
			// 	'status'	=> REST_Controller::HTTP_OK,
			// 	'message' 	=> 'Amount transfer successfully',
			// 	'object'	=> $data
			// )); 


			$token = $jwt->encode($data,$JwtSecretKey,'HS256');
			echo json_encode($token);
			exit;

		}
		else{
			// return $this->response(array(
			// 	'status'	=> REST_Controller::HTTP_BAD_REQUEST,
			// 	'message' 	=> 'Somethings went wrong',
			// 	'object'	=> new stdClass()
			// ));

			$data['status'] 	= 	REST_Controller::HTTP_BAD_REQUEST;
		    $data['message'] 	= 	$this->check_value('Somethings went wrong');

			$token = $jwt->encode($data,$JwtSecretKey,'HS256');
			echo json_encode($token);
			exit;
        } 
	}
}
