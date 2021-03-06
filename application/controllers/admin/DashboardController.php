<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends MY_Controller {

	function __construct()
	{
		parent::__construct();
        $this->common->check_adminlogin();   
	}
    public function index()
	{
        $data['title'] = 'Dashboard';

        $data['users'] = $this->CommonModel->select_single_row("Select count(*) as total from users");

        $data['users'] = $this->CommonModel->select_single_row("Select count(*) as total from users");
        
        $data['transaction'] = $this->CommonModel->select_single_row("Select count(*) as total from transaction");

        $data['grol_token'] = $this->CommonModel->select_single_row("Select SUM(grol_token) as total from users");

        // $data['grol_token'] = $this->CommonModel->totalColumnSumWithCondition('users',array('users.grol_token !=' =>  ""),'grol_token');
        
        // $data['recuriter'] = $this->CommonModel->select_single_row("Select count(*) as total from users where user_type = 2 and deleted_at IS NULL");
        // $data['jobpost'] = $this->CommonModel->select_single_row("Select count(*) as total from jobpost");
        
        // // $data['resume'] = $this->CommonModel->select_single_row("Select count(*) as total from resume");
        // $data['resume'] = $this->CommonModel->select_single_row("Select count(*) as total from user_job_list");

        
        // print_r($data['grol_token']);die;

        $this->loadAdminView('admin/dashboard',$data); 
	}

    
}
