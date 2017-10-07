<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
public function __construct()
    {
        parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('Model_data');
    }
	 public function index()
 {
 	if($this->session->userdata('member_identifier')){
		$bahasa = $this->session->userdata('language');
		$this->load->language('home', $bahasa);
		$data['dashboard'] = $this->lang->line('dashboard');
		$data[''] = $this->lang->line('settings');
		$data['myprofile'] = $this->lang->line('myprofile');
		$data['d1'] = $this->lang->line('d1');
		$this->load->view('user/header');
		$this->load->view('user/index');
	}else{
	    redirect();
	}
 	
 }

public function template(){
	if($this->session->userdata('member_identifier')){
	$bahasa = $this->session->userdata('bahasa');
 	$data['username'] = $this->Model_data->get_username();
 	$this->load->language('home', $bahasa);
	$data['dashboard'] = $this->lang->line('dashboard');
	$data[''] = $this->lang->line('settings');
	$data['myprofile'] = $this->lang->line('myprofile');
	$this->load->view('user/header');
  	$this->load->view('user/template', $data);
  }
  else {
  	redirect();
  }
}
public function view_template($number_template){
	if($this->session->userdata('member_identifier')){
	$bahasa = $this->session->userdata('language');
 	$this->load->language('home', $bahasa);
	$data['foto'] = $this->lang->line('foto');
	$data['namad'] = $this->lang->line('namad');
	$data['namab'] = $this->lang->line('namab');
	$data['alamat'] = $this->lang->line('alamat');
	$data['kodpos'] = $this->lang->line('kodpos');
	$data['telepon'] = $this->lang->line('telepon');
	$data['email'] = $this->lang->line('email');
	$data['jenkel'] = $this->lang->line('jenkel');
	$data['lk'] = $this->lang->line('lk');
	$data['prp'] = $this->lang->line('prp');
	$data['statpernik'] = $this->lang->line('statpernik');
	$data['single'] = $this->lang->line('single');
	$data['menikah'] = $this->lang->line('menikah');
	$data['cerai'] = $this->lang->line('cerai');
	$data['tanglah'] = $this->lang->line('tanglah');
	$data['kewarg'] = $this->lang->line('kewarg');
	$data['riwpend'] = $this->lang->line('riwpend');
	$data['tingpend'] = $this->lang->line('tingpend');
	$data['namskol'] = $this->lang->line('namskol');
	$data['lulus'] = $this->lang->line('lulus');
	$data['ditunda'] = $this->lang->line('ditunda');
	$data['ditransfer'] = $this->lang->line('ditransfer');
	$data['tanglul'] = $this->lang->line('tanglul');
	$data['lokasi'] = $this->lang->line('lokasi');
	$data['deskripsi'] = $this->lang->line('deskripsi');
	$data['riwpek'] = $this->lang->line('riwpek');
	$data['nampek'] = $this->lang->line('nampek');
	$data['namper'] = $this->lang->line('namper');
	$data['tahun'] = $this->lang->line('tahun');
	$data['personal'] = $this->Model_data->get_data()->result();
	$data['education'] = $this->Model_data->get_education()->result();
	$data['employment'] = $this->Model_data->get_employment()->result();
	$data['hobbies_interest'] = $this->Model_data->get_hobbies()->result();
	$data['skills'] = $this->Model_data->get_skills()->result();
	$data['languages'] = $this->Model_data->get_languages()->result();
	$data['awards'] = $this->Model_data->get_awards()->result();
	$data['references'] = $this->Model_data->get_references()->result();
	$bahasa = $this->session->userdata('bahasa');
 	$this->load->language('home', $bahasa);
	$data['dashboard'] = $this->lang->line('dashboard');
	$data[''] = $this->lang->line('settings');
	$data['myprofile'] = $this->lang->line('myprofile');
$this->load->view('preview/'.$number_template, $data);
} else {	redirect();}}

public function choose($number_template){
	if($this->session->userdata('member_identifier')){
	$insert = array(
      'no_template' => $number_template
    );
	$this->Model_data->insert_data($insert);
	$username = $this->Model_data->get_username();
	redirect($username);
	}
	else {
	redirect();

}
}

public function original(){
$this->load->view('user/header');
  $this->load->view('user/original');
}
public function croppie(){
$this->load->view('user/croppie');

}
public function settings(){
	$bahasa = $this->session->userdata('language');
 	
 	$this->load->language('home', $bahasa);
	$data['dashboard'] = $this->lang->line('dashboard');
	$data['settings'] = $this->lang->line('settings');
	$data['myprofile'] = $this->lang->line('myprofile');
	$data['simpan'] = $this->lang->line('simpan');
	$data['hapus'] = $this->lang->line('hapus');
	$data['batal'] = $this->lang->line('batal');
	
	
	
$this->load->view('user/header');
  $this->load->view('user/settings', $data);

}
public function tools(){
$this->load->view('user/header');
  $this->load->view('user/tools');

}

public function helpdesk(){
$this->load->view('user/header');
  $this->load->view('user/help');

}
public function wiseguide(){
$this->load->view('user/header');
  $this->load->view('user/help');

}
public function feedback(){
$this->load->view('user/header');
  $this->load->view('user/help');

}
}
