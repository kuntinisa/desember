<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {


	 public function index()
 {
 	
 	if (isset($_POST["bahasa"])) {
    $bahasa = $this->input->post('bahasa');
	$this->session->set_userdata('language', $bahasa);
	
	}else{  
	   $bahasa = "english";
	   $this->session->set_userdata('language', $bahasa);
	
	}
 	$this->load->language('home', $bahasa);
	$data['home'] = $this->lang->line('home');
	$data['about'] = $this->lang->line('about');
	$data['contact'] = $this->lang->line('contact');
	$data['privacy'] = $this->lang->line('privacy');
	$data['help'] = $this->lang->line('help');
	$data['testimonial'] = $this->lang->line('testimonial');	  
	$data['h1'] = $this->lang->line('h1');	  
	$data['ju'] = $this->lang->line('ju');	  
	$data['mt'] = $this->lang->line('mt');	  
	$data['a1'] = $this->lang->line('a1');	  


  $this->load->view('main/header');
  $this->load->view('main/home', $data);
  $this->load->view('main/footer');
 }

 public function login($identifier, $email)
 {
		// $myJSVar = $this->input->post('fName');
		$data_member = array (
		'identifier' => $identifier, 
		// 'nama_depan' => '$name', 
		// 'nama_belakang' => '', 
		'email' => $email
		);
	    // echo $message;
		$this->load->model('hauth_data');
		$this->session->set_userdata('member_identifier', $data_member['identifier']);
		$this->hauth_data->insert_user('member', $data_member);	
		redirect('personalize');				
 }
 public function auth()
 {redirect ("main/dashboard");
}


public function admin(){
$this->load->view('admin/header');
  $this->load->view('admin/index');
}
public function biodata(){
$this->load->view('admin/header');
  $this->load->view('admin/biodata');
}
public function template(){
$this->load->view('admin/header');
  $this->load->view('admin/template');
}
public function original(){
$this->load->view('admin/header');
  $this->load->view('admin/original');
}
public function croppie(){
$this->load->view('admin/croppie');

}
}
