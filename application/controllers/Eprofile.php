<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Eprofile extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
      $this->load->model('Model_data');
    }
	 
public function index(){
if($this->session->userdata('customer_identifier')){
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
	 $this->load->view('user/header2', $data);
	$this->load->view('user/biodata2', $data);
} else {	redirect();}}

}