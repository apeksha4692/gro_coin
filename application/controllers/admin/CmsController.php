<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CmsController extends MY_Controller {

	function __construct()
	{
		parent::__construct();
        $this->common->check_adminlogin();
        
	}

    public function about_us()
    {
        $aboutData['title'] = 'About Us';
        $condition = array(
            "id" => 1
        );

        $aboutData['data'] = $this->CommonModel->selectRowDataByCondition($condition,'cms'); 
        
        $this->loadAdminView('admin/cms/page',$aboutData); 
    }

    public function privacy_policy()
    {
        $privacyData['title'] = 'Privacy Policy';

        $condition = array(
            "id" => 2
        );

        $privacyData['data'] = $this->CommonModel->selectRowDataByCondition($condition,'cms'); 
        
        $this->loadAdminView('admin/cms/page',$privacyData); 
    }

    public function terms_condition()
    {
        $termData['title'] = 'Terms and Condition';
        $condition = array(
            "id" => 3
        );

        $termData['data'] = $this->CommonModel->selectRowDataByCondition($condition,'cms'); 
         $this->loadAdminView('admin/cms/page',$termData); 

    }

    public function update_cms()
    {
        $title = $this->input->post('title');
         $id = $this->input->post('id');

        $data = array(
            "description" => $this->input->post('description')
        );

        $condition = array(
            "id" => $id
        );
        $updateData = $this->CommonModel->updateRowByCondition($condition,'cms',$data); 

        if ($updateData) 
        {
            
            // print_r($title);die;
            if($id == 3)
            {
                $this->session->set_flashdata('success','Terms and Condition updated successfully');
                redirect('admin/cms/terms_condition');
            }else if($id == 1){
                 $this->session->set_flashdata('success','About Us updated successfully');
                redirect('admin/cms/about_us');
            }else if($id == 2){
                 $this->session->set_flashdata('success','Privacy Policy updated successfully');
                redirect('admin/cms/privacy_policy');    
            }
        }else{
            if($id == 3)
            {
                $this->session->set_flashdata('error','Terms and Condition not updated successfully');
                redirect('admin/cms/terms_condition');
            }else if($id == 1){
                 $this->session->set_flashdata('error','About Us not updated successfully');
                redirect('admin/cms/about_us');
            }else if($id == 2){
                 $this->session->set_flashdata('error','Privacy Policy not updated successfully');
                redirect('admin/cms/privacy_policy');    
            }
        }
        
    }
    
    public function contact_information()
    {
        $data['title'] = "Contact Information";

        $where = array(
            'id'    =>  1
        );

        $data['contactData'] = $this->CommonModel->getsingle('contact_information',$where);

        $this->loadAdminView('admin/cms/contactus',$data); 
    }

    public function update_contact()
    {

        $where = array(
            'id'    =>  1
        );

        $data = array(
            // "email_id"          => $this->input->post('email_id'),
            // "address"           => $this->input->post('address'),
            // "mobile_number"     => $this->input->post('mobile_number'),
            // "whatsapp_number"   => $this->input->post('whatsapp_number'),
            "facebook"          => $this->input->post('facebook'),
            "twitter"           => $this->input->post('twitter'),
            "instagram"         => $this->input->post('instagram'),
            "telegram"         => $this->input->post('telegram'),
            "discord"         => $this->input->post('discord'),
            // "linkedin"          => $this->input->post('linkedin'),
        );

        $updateData = $this->CommonModel->updateRowByCondition(array('id' => 1),'contact_information',$data); 

        if($updateData){
             $this->session->set_flashdata('success','Information Updated Successfully');
                redirect('admin/cms/contact_information'); 
        }else{
             $this->session->set_flashdata('error','Information not Updated Successfully');
                redirect('admin/cms/contact_information'); 
        }
    }


    public function contactus_list()
    {
        $data              = array();
        $data['title']     = "Contact Us list";
        // $data['arrayData'] = $this->CommonModel->_get_multi_data('banner');

        $data['allContactUsList'] = $this->CommonModel->selectResultData('contact_us','contact_us.id');

        $this->loadAdminView('admin/cms/contactus_list',$data); 
    }

    
}
