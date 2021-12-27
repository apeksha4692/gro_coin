<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StakingUnstakingController extends CI_Controller {

	public function staking()
	{
		// print_r($_POST);die;

		$loginAddressDetail = $this->CommonModel->selectRowDataByCondition(array('account_id' =>  $this->input->post('loginAddress')),'users');

		if(!empty($loginAddressDetail)){
			$data = array(
				"account_id"     		=> $this->input->post('loginAddress'),
				"start_time"  			=> $this->input->post('startDateTime'),
				"finish_time"  			=> $this->input->post('finishDateTime'),
				"reward"  				=> $this->input->post('stakeReward'),
				"stake"  				=> $this->input->post('stakeAmount'),
				"unstake"  				=> 0,
				"created_at"    		=> date('Y-m-d H:i:s a'),
				"updated_at"    		=> date('Y-m-d H:i:s a'),
            );
                
        	$user_data = $this->CommonModel->updateRowByCondition(array('id' => $loginAddressDetail->id),'users',$data);  

        	$user_id = $loginAddressDetail->id;
		}else{

			$data = array(
	           "account_id"     	=> $this->input->post('loginAddress'),
	           "start_time"  		=> $this->input->post('startDateTime'),
	           "finish_time"  		=> $this->input->post('finishDateTime'),
	           "reward"  			=> $this->input->post('stakeReward'),
	           "stake"  			=> $this->input->post('stakeAmount'),
	           "unstake"  			=> 0,
	           "created_at"    		=> date('Y-m-d H:i:s a'),
	           "updated_at"    		=> date('Y-m-d H:i:s a'),
	        );

	        $user_data = $this->CommonModel->insertData($data,'users');

	        $user_id = $this->db->insert_id();

		}

		if($user_data){
    		$data_transaction = array(
	           "user_id"     		=> $user_id,
	           "type"  				=> 'stake',
	           "amount"  			=> $this->input->post('numberOfTokens'),
	           "transaction_id"     => $this->input->post('staketransaction_id'),
	           "created_at"    		=> date('Y-m-d H:i:s a'),
	           "updated_at"    		=> date('Y-m-d H:i:s a'),
	        );

	        $updateData = $this->CommonModel->insertData($data_transaction,'transaction');

	        if($updateData)
	        {
	            echo "1";
	        }else{
	            echo "0";
	        }
    	}
	}

	public function unstaking()
	{

		// print_r($_POST);
		$loginAddressDetail = $this->CommonModel->selectRowDataByCondition(array('account_id' =>  $this->input->post('loginAddress')),'users');

		// print_r($loginAddressDetail);die;
	
		$data = array(
			"account_id"     		=> $this->input->post('loginAddress'),
			"start_time"  			=> $this->input->post('startDateTime'),
			"finish_time"  			=> $this->input->post('finishDateTime'),
			"reward"  				=> $this->input->post('stakeReward'),
			"stake"  				=> 0,
			"unstake"  				=> $this->input->post('stakeAmount'),
			"created_at"    		=> date('Y-m-d H:i:s a'),
			"updated_at"    		=> date('Y-m-d H:i:s a'),
        );
            
    	$user_data = $this->CommonModel->updateRowByCondition(array('id' => $loginAddressDetail->id),'users',$data);  

    	$user_id = $loginAddressDetail->id;
		

		if($user_data){
    		$data_transaction = array(
	           "user_id"     		=> $user_id,
	           "type"  				=> 'unstake',
	           "amount"  			=> $this->input->post('numberOfunstake'),
	           "transaction_id"     => $this->input->post('unstaketransaction_id'),
	           "created_at"    		=> date('Y-m-d H:i:s a'),
	           "updated_at"    		=> date('Y-m-d H:i:s a'),
	        );

	        $updateData = $this->CommonModel->insertData($data_transaction,'transaction');

	        if($updateData)
	        {
	            echo "1";
	        }else{
	            echo "0";
	        }
    	}
	}
	
}
