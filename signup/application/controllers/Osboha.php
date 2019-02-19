<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Osboha extends CI_Controller {
	
	public function index(){
	   
				if($this->input->post('submit') != NULL ){
				$this->load->model('Mymodel');
				$postData = $this->input->post();
				$username = $postData['username'];
				$email= $postData['email'];
				$password = password_hash($postData["password"], PASSWORD_DEFAULT);
				$this->Mymodel->signup($username,$email,$password);
				$data['response'] = " تم التسجيل انتظر موافقة الادارة";
				$webpage = $this->load->view('signup',$data);
				}
				else{
				$webpage = $this->load->view('signup');
				}
			$webpage;
			}
 
 }


?>