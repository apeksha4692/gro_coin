<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends MY_Controller {

	function __construct()
	{
		parent::__construct();
        $this->common->check_adminlogin();

	}
    //show about us
    public function user_transaction_list()
    {
        // echo 1;die;
        $data['title'] = 'User Transaction List';
        
      
		$data['userTransactionList'] = $this->CommonModel->userTransactionList();
        
// print_r($data['userTransactionList']);die;
        $this->loadAdminView('admin/user_list',$data);
    }
    
     
}