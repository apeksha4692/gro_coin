<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

	function __construct()
	{
		parent::__construct();
        $this->common->check_adminlogin();

	}

    public function user_list()
    {
        // echo 1;die;
        $data['title'] = 'User List';
        
      
		$data['userList'] = $this->CommonModel->selectResultDataByConditionAndFieldName(array('users.account_id !=' =>  ""),'users','users.id');

        $this->loadAdminView('admin/user_list',$data);
    }


    public function user_token_list()
    {
        // echo 1;die;
        $data['title'] = 'User List';
        
      
        $data['userList'] = $this->CommonModel->selectResultDataByConditionAndFieldName(array('users.grol_token !=' =>  ""),'users','users.id');

        $this->loadAdminView('admin/user_list',$data);
    }
    
    
    public function transaction_list()
    {
        // echo 1;die;
        $data['title'] = 'Transaction List';
        
      
        $data['transactionList'] = $this->CommonModel->userTransactionList();

        $this->loadAdminView('admin/transaction_list',$data);
    }
     
}