<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Master_Model;
use App\Models\EmailModel;
use App\Models\ContactModel;

class Contact extends BaseController
{
	function __construct()
	{
		$this->db = \Config\Database::connect();
//		$this->Master_Model = new Master_Model();
	}
	
	/*------------------------------ Contact form ----- by madhuri------ date 19/03/2024 ----------------------------------------*/  
	
	public function contact_details()
    {
        //print_r($_POST); die;
        $response = array();
        $name = $_POST['name'];
		$email = $_POST['email'];
		$mobile_no = $_POST['mobile_no'];
		$message = $_POST['message'];
        $date = date("Y-m-d");
		$time = date("H:i:s");
		
		$insert_array = array(
		'name'=>$name,
		'email'=>$email,
		'mobile_no'=>$mobile_no,
		'message'=>$message,
		'date'=>$date,
		'time'=>$time
		
		);
		
		$db = \Config\Database::connect();
		$builder = $db->table('contact');  
		$insert_result = $builder->insert($insert_array);
		
		
		if($insert_result == true)
		{
			$email = new EmailModel();
			$email->form_submit_email_contact_user($insert_array);
			$email->form_submit_email_contact_admin($insert_array);
    			
    			$response['status'] = 1;
    		
    			
		}
		else
		{
			$response['status'] = 0;
		}
		
		echo json_encode($response); exit;
    }

}
		
		
		
		
		
		
		
		
		
		