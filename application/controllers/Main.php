<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

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
 	//$this->load->language('home', $bahasa);

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

 public function login()
 {
	$this->load->view('main/header');
  $this->load->view('main/login');
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
