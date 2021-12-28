<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('dashboard_common/header');
		$this->load->view('buy');
		$this->load->view('dashboard_common/footer');
	}

	public function buy_token()
	{
		// print_r($_POST);

		$loginAddressDetail = $this->CommonModel->selectRowDataByCondition(array('account_id' =>  $this->input->post('loginAddress')),'users');

		if(!empty($loginAddressDetail)){
			$data = array(
				"grol_token"  			=> $this->input->post('get_total_grol'),
				"created_at"    		=> date('Y-m-d H:i:s a'),
				"updated_at"    		=> date('Y-m-d H:i:s a'),
            );
                
        	$user_data = $this->CommonModel->updateRowByCondition(array('id' => $loginAddressDetail->id),'users',$data);  

        	$user_id = $loginAddressDetail->id;
		}else{

			$data = array(
	           "account_id"     	=> $this->input->post('loginAddress'),
	           "grol_token"  		=> $this->input->post('get_total_grol'),
	           "start_time"  		=> 0,
	           "finish_time"  		=> 0,
	           "reward"  			=> 0,
	           "stake"  			=> 0,
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
	           "type"  				=> 'buy_token',
	           "amount"  			=> $this->input->post('grol_token'),
	           "transaction_id"     => $this->input->post('transaction_id'),
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

	public function dashboard()
	{
		$this->load->view('dashboard_common/header');
		$this->load->view('dashboard');
		$this->load->view('dashboard_common/footer');
	    
	}
}
