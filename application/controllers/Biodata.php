<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
      $this->load->model('Model_data');
    }
	 
public function index(){
	$bahasa = $this->session->userdata('language');
 	$this->load->language('home', $bahasa);
 	if($this->session->userdata('id_customer')){
     // do something when exist
 		$data['dashboard'] = $this->lang->line('dashboard');
	$data['settings'] = $this->lang->line('settings');
	$data['myprofile'] = $this->lang->line('myprofile');
	$data['simpan'] = $this->lang->line('simpan');
	$data['hapus'] = $this->lang->line('hapus');
	$data['batal'] = $this->lang->line('batal');
	
	
	$data['idpribadi'] = $this->lang->line('idpribadi');
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
	$data['photo'] = $this->Model_data->get_data()->result();
	
	//$this->load->view('user/new');
  	 $this->load->view('user/header', $data);

  	 $this->load->view('user/biodata', $data);

	}else{
	    // do something when doesn't exist
	    $this->load->view('errors/cli/error_general');
	}
	
}

//untuk saving form data diri
public function personal_info(){
		$namadepan = $this->input->post('namadepan');
		$namabelakang = $this->input->post('namabelakang');
		$tanggallahir = $this->input->post('tanggallahir');
		$jeniskelamin = $this->input->post('jeniskelamin');
		$statuspernikahan = $this->input->post('statuspernikahan');
		$alamat = $this->input->post('alamat');
		$kodepos = $this->input->post('kodepos');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$kewarganegaraan = $this->input->post('kewarganegaraan');
		
		$data = array(
			'nama_depan' => $namadepan,
			'nama_belakang' => $namabelakang,
			'tanggal_lahir' => $tanggallahir,
			'jenis_kelamin' => $jeniskelamin,
			'status_pernikahan' => $statuspernikahan,
			'alamat_jalan' => $alamat,
			'kode_pos' => $kodepos,
			'telepon' => $telepon,
			'email' => $email,
			'nationality' => $kewarganegaraan
			);
		$this->Model_data->input_data($data,'customer');
		$this->Model_data->insert_log('change biodata');
		redirect('biodata');
	}
	public function education(){
		if(!empty($_POST['nama_pendidikanS'])) 
{
  //Do my PHP code
		$number = $this->input->post('number');
		$id_customer = $this->session->userdata('id_customer');
		$tingkat_pendidikan = $this->input->post('namadepan');
		$nama_pendidikan = $this->input->post('namabelakang');
		$status_pendidikan = $this->input->post('tanggallahir');
		$completion_date = $this->input->post('jeniskelamin');
		$location = $this->input->post('statuspernikahan');
		$description = $this->input->post('alamat');
		$status = 'on';
		
		$data = array(
			'number' => $number,
			'id_customer' => $id_customer,
			'tingkat_pendidikan' => $tingkat_pendidikan,
			'nama_pendidikan' => $nama_pendidikan,
			'status_pendidikan' => $status_pendidikan,
			'completion_date_pendidikan' => $completion_date,
			'location_pendidikan' => $location,
			'description_pendidikan' => $description,
			'status' => $status
			);
		$this->Model_data->input_data_education($data,'education');
	
		$this->Model_data->insert_log('change education');}
		else
		redirect('biodata');
	}

	function ajaxpro(){
		$data = $_POST['image'];
		echo $data;
		// list($type, $data) = explode(';', $data);
		// list(, $data)      = explode(',', $data);
		// $data = base64_decode($data);
		$imageName = time().'.jpg';
		file_put_contents( $_SERVER['DOCUMENT_ROOT'] .'/desember/assets/upload/'.$imageName, $data);
		// $this->Model_data->input_data(array('photo'=>$imageName),'customer');
		// redirect('biodata',refresh);

		$this->ajaxpro2($data);
	}

	function ajaxpro2($data){
		$config['upload_path'] = './assets/upload/';
		$config['allowed_types'] = 'gif|jpg|png';

		$this->load->library('upload', $config);

		// Alternately you can set preferences by calling the ``initialize()`` method. Useful if you auto-load the class:
		$this->upload->initialize($config);
		// redirect('biodata',refresh);

		$this->upload->do_upload($data);
	}
}
// education
// employment
// hobbies_interest
// skills
// languages
// awards
// references


