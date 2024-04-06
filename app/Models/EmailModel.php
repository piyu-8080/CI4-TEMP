<?php

namespace App\Models;
use CodeIgniter\Model;
class EmailModel extends Model
{
      public function form_submit_email_contact_user($insert_array)
   {
       	$email_user= $insert_array['email'];
		$date=$insert_array['date'];
		$time=$insert_array['time'];
       	
       	$to = $email_user;
        $email_subject = 'CodingBit - Contact';
        $message = "Hi, \nThank you for submitting your contact. We will get back to you soon!";
        $message_body = $message; 
        $email = \Config\Services::email();
        $email->setFrom($email_user);
		$email->setTo($to);
		$email->setBcc(bcc);
		//$email->setCc(cc);
		$email->setSubject($email_subject);
		$email->setMessage($message_body); 

		 $email->send();
		

		
	  
	  return true;
       
       
       
   }
   	public function form_submit_email_contact_admin($insert_array)
    {
	   //echo "*"; die;
	   $name=$insert_array['name'];
	   $email_user=$insert_array['email'];
	   $mobile_no=$insert_array['mobile_no'];
	   $message=$insert_array['message'];
		
		$date=$insert_array['date'];
		$time=$insert_array['time'];
    
		$to = to;
		$email_subject = 'CodingBit - New Contact Form';
	
       $message_body = " Email: ".$email_user."\n Name: ".$name. "\n Mobile Number: ".$mobile_no. "\n Message: ".$message. "\n Date: ".$date. "\n Time: ".$time ;
         
		//print_r($message_body);die;
		$email = \Config\Services::email();
		//print_r($email);die;
		$email->setFrom($email_user);
		$email->setTo($to);
		$email->setBcc(bcc);

		$email->setSubject($email_subject);
		$email->setMessage($message_body);

		$email->send();

		
	  
	  return true;
	}
   
   
   
}