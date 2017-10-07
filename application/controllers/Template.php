<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->model('model_data_by_username');
    }
	 public function test()
 {

 	$username = $this->uri->segment('1');
 	if ( $this->model_data_by_username->vanity_cek($username)){
 	$number_template = $this->model_data_by_username->get_no_template($username);
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
	$data['startdate'] = $this->lang->line('startdate');
	$data['employed'] = $this->lang->line('employed');
	$data['enddate'] = $this->lang->line('enddate');
	$data['compensasion'] = $this->lang->line('compensasion');
	$data['mata_uang'] = $this->lang->line('mata_uang');
	$data['interval'] = $this->lang->line('interval');
	$data['skill_name'] = $this->lang->line('skill_name');
	$data['level'] = $this->lang->line('level');
	$data['beginner'] = $this->lang->line('beginner');
	$data['intermediate'] = $this->lang->line('intermediate');
	$data['advanced'] = $this->lang->line('advanced');
	$data['expert'] = $this->lang->line('expert');
	$data['language_name'] = $this->lang->line('language_name');
	$data['conversational'] = $this->lang->line('conversational');
	$data['fluent'] = $this->lang->line('fluent');
	$data['native'] = $this->lang->line('native');
	$data['year'] = $this->lang->line('year');
	$data['personal'] = $this->model_data_by_username->get_data($username)->result();
	$data['education'] = $this->model_data_by_username->get_education($username)->result();
	$data['employment'] = $this->model_data_by_username->get_employment($username)->result();
	$data['hobbies_interest'] = $this->model_data_by_username->get_hobbies($username)->result();
	$data['skills'] = $this->model_data_by_username->get_skills($username)->result();
	$data['languages'] = $this->model_data_by_username->get_languages($username)->result();
	$data['awards'] = $this->model_data_by_username->get_awards($username)->result();
	$data['references'] = $this->model_data_by_username->get_references($username)->result();
	$data['username'] = $username;
	$bahasa = $this->session->userdata('bahasa');
 	$this->load->language('home', $bahasa);
	$data['dashboard'] = $this->lang->line('dashboard');
	$data[''] = $this->lang->line('settings');
	$data['myprofile'] = $this->lang->line('myprofile');
	$this->load->view('template/'.$number_template, $data);
 	}
 	else {
 		$this->load->view('template/no_name');

 	}
 }
}