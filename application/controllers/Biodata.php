<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
      $this->load->model('Model_data');
    }
	 
public function index(){
	
 	if($this->session->userdata('id_member')){
 		$bahasa = $this->session->userdata('language');
 	$this->load->language('home', $bahasa);
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
	$data['award_name'] = $this->lang->line('award_name');
	$data['reference_name'] = $this->lang->line('reference_name');
	$data['relationship'] = $this->lang->line('relationship');
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
	    redirect();
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
		$this->Model_data->input_data($data,'member');
		$this->Model_data->insert_log('change biodata');
		redirect('biodata');
	}
	public function education(){
		if(!empty($_POST['nama_pendidikan'])) {
		$id_member = $this->session->userdata('id_member');
		$tingkat_pendidikan = $this->input->post('tingkat_pendidikan');
		$nama_pendidikan = $this->input->post('nama_pendidikan');
		$status_pendidikan = $this->input->post('status_pendidikan');
		$completion_date = $this->input->post('completion_date');
		$location = $this->input->post('location_pendidikan');
		$description = $this->input->post('description_pendidikan');
		$status = 'on';
		$data = array(
			'id_member' => $id_member,
			'tingkat_pendidikan' => $tingkat_pendidikan,
			'nama_pendidikan' => $nama_pendidikan,
			'status_pendidikan' => $status_pendidikan,
			'completion_date' => $completion_date,
			'location' => $location,
			'description' => $description,
			'status' => $status
			);
		$this->Model_data->insert_data_education($data,'education');
		$this->Model_data->insert_log('new education');
	redirect('biodata');
}
		
		else
		redirect('biodata');
	}

	public function edit_employment(){
		if(!empty($_POST['job_title'])) 
{
  //Do my PHP code
		$id_employment = $this->input->post('id_employment');
		$id_member = $this->session->userdata('id_member');
		$job_title = $this->input->post('job_title');
		$company = $this->input->post('company');
		$location = $this->input->post('location');
		$start_date = $this->input->post('start_date');
		$presently_employed = $this->input->post('presently_employed');
		$end_date = $this->input->post('end_date');
		$compensasion = $this->input->post('compensasion');
		$mata_uang = $this->input->post('mata_uang');
		$interval_waktu = $this->input->post('interval_waktu');
		$description = $this->input->post('description');
		$status = 'on';
		
		$data = array(
			'id_employment' => $id_employment,
			'id_member' => $id_member,
			'job_title' => $job_title,
			'company' => $company,
			'location' => $location,
			'start_date' => $start_date,
			'presently_employed' => $presently_employed,
			'end_date' => $end_date,
			'compensasion' => $compensasion,
			'mata_uang' => $mata_uang,
			'interval_waktu' => $interval_waktu,
			'description' => $description,
			'status' => $status
			);
		$this->Model_data->input_data_employment($data,'employment');
	
		$this->Model_data->insert_log('change employment');
	redirect('biodata');
} else
redirect('biodata');
}
public function employment(){
		if(!empty($_POST['job_title'])) 
{
  //Do my PHP code
		$id_member = $this->session->userdata('id_member');
		$job_title = $this->input->post('job_title');
		$company = $this->input->post('company');
		$location = $this->input->post('location');
		$start_date = $this->input->post('start_date');
		$presently_employed = $this->input->post('presently_employed');
		$end_date = $this->input->post('end_date');
		$compensasion = $this->input->post('compensasion');
		$mata_uang = $this->input->post('mata_uang');
		$interval_waktu = $this->input->post('interval_waktu');
		$description = $this->input->post('description');
		$status = 'on';
		
		$data = array(
			'id_member' => $id_member,
			'job_title' => $job_title,
			'company' => $company,
			'location' => $location,
			'start_date' => $start_date,
			'presently_employed' => $presently_employed,
			'end_date' => $end_date,
			'compensasion' => $compensasion,
			'mata_uang' => $mata_uang,
			'interval_waktu' => $interval_waktu,
			'description' => $description,
			'status' => $status
			);
		$this->Model_data->insert_data_education($data,'employment');
	
		$this->Model_data->insert_log('new employment');
	redirect('biodata');
		}
		
		else
		redirect('biodata');
	}
	public function edit_skill(){
		if(!empty($_POST['skill_name'])) 
{
  //Do my PHP code
		$id_skills = $this->input->post('id_skills');
		$id_member = $this->session->userdata('id_member');
		$skill_name = $this->input->post('skill_name');
		$level = $this->input->post('level');
		// $description = $this->input->post('description');
		$status = 'on';
		
		$data = array(
			'id_skills' => $id_skills,
			'id_member' => $id_member,
			'skill_name' => $skill_name,
			'level' => $level,
			// 'description' => $description,
			'status' => $status
			);
		$this->Model_data->input_data_skill($data,'skills');
	
		$this->Model_data->insert_log('change skill');
	redirect('biodata');
} else
redirect('biodata');
}
	public function skill(){
		if(!empty($_POST['skill_name'])) 
{
  //Do my PHP code
		$id_member = $this->session->userdata('id_member');
		$skill_name = $this->input->post('skill_name');
		$level = $this->input->post('level');
		// $description = $this->input->post('description');
		$status = 'on';
		
		$data = array(
			'id_member' => $id_member,
			'skill_name' => $skill_name,
			'level' => $level,
			// 'description' => $description,
			'status' => $status
			);
		$this->Model_data->insert_data_education($data,'skills');
	
		$this->Model_data->insert_log('new skill');
	redirect('biodata');
}
		
		else
		redirect('biodata');
	}
	public function edit_award(){
		if(!empty($_POST['award_name'])) 
{
  //Do my PHP code
		$id_awards = $this->input->post('id_awards');
		$id_member = $this->session->userdata('id_member');
		$award_name = $this->input->post('award_name');
		$description = $this->input->post('description');
		$year = $this->input->post('year');
		$status = 'on';
		
		$data = array(
			'id_awards' => $id_awards,
			'id_member' => $id_member,
			'award_name' => $award_name,
			'description' => $description,
			'year' => $year,
			'status' => $status
			);
		$this->Model_data->input_data_award($data,'awards');
	
		$this->Model_data->insert_log('change award');
	redirect('biodata');
} else
redirect('biodata');
}
	public function award(){
		if(!empty($_POST['award_name'])) 
{
  //Do my PHP code
		$id_member = $this->session->userdata('id_member');
		$award_name = $this->input->post('award_name');
		$description = $this->input->post('description');
		$year = $this->input->post('year');
		$status = 'on';
		
		$data = array(
			'id_member' => $id_member,
			'award_name' => $award_name,
			'description' => $description,
			'year' => $year,
			'status' => $status
			);
		$this->Model_data->insert_data_education($data,'awards');
	
		$this->Model_data->insert_log('new award');
	redirect('biodata');
}
		
		else
		redirect('biodata');
	}
	public function edit_language(){
		if(!empty($_POST['language_name'])) 
{
  //Do my PHP code
		$id_languages = $this->input->post('id_languages');
		$id_member = $this->session->userdata('id_member');
		$language_name = $this->input->post('language_name');
		$level = $this->input->post('level');
		// $description = $this->input->post('description');
		$status = 'on';
		
		$data = array(
			'id_languages' => $id_languages,
			'id_member' => $id_member,
			'language_name' => $language_name,
			'level' => $level,
			// 'description' => $description,
			'status' => $status
			);
		$this->Model_data->input_data_language($data,'languages');
	
		$this->Model_data->insert_log('change language');
	redirect('biodata');
} else
redirect('biodata');
}
	public function language(){
		if(!empty($_POST['language_name'])) 
{
  //Do my PHP code
		$id_member = $this->session->userdata('id_member');
		$language_name = $this->input->post('language_name');
		$level = $this->input->post('level');
		// $description = $this->input->post('description');
		$status = 'on';
		
		$data = array(
			'id_member' => $id_member,
			'language_name' => $language_name,
			'level' => $level,
			// 'description' => $description,
			'status' => $status
			);
		$this->Model_data->insert_data_education($data,'languages');
	
		$this->Model_data->insert_log('new language');
	redirect('biodata');
}
		
		else
		redirect('biodata');
	}
	public function edit_reference(){
		if(!empty($_POST['reference_name'])) 
{
  //Do my PHP code
		$id_reference = $this->input->post('id_references');
		$id_member = $this->session->userdata('id_member');
		$reference_name = $this->input->post('reference_name');
		$company = $this->input->post('company');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$relationship = $this->input->post('relationship');
		$email = $this->input->post('email');
		$description = $this->input->post('description');
		$status = 'on';
		
		$data = array(
			'id_references' => $id_reference,
			'id_member' => $id_member,
			'reference_name' => $reference_name,
			'company' => $company,
			'phone' => $phone,
			'address' => $address,
			'relationship' => $relationship,
			'email' => $email,
			'description' => $description,
			'status' => $status
			);
		$this->Model_data->input_data_reference($data,'references');
	
		$this->Model_data->insert_log('change reference');
	redirect('biodata');
} else
redirect('biodata');
}
	public function reference(){
		if(!empty($_POST['reference_name'])) 
{
  //Do my PHP code
		$id_member = $this->session->userdata('id_member');
		$reference_name = $this->input->post('reference_name');
		$company = $this->input->post('company');
		$phone = $this->input->post('phone');
		$address = $this->input->post('address');
		$relationship = $this->input->post('relationship');
		$email = $this->input->post('email');
		$description = $this->input->post('description');
		$status = 'on';
		
		$data = array(
			'id_member' => $id_member,
			'reference_name' => $reference_name,
			'company' => $company,
			'phone' => $phone,
			'address' => $address,
			'relationship' => $relationship,
			'email' => $email,
			'description' => $description,
			'status' => $status
			);
		$this->Model_data->insert_data_education($data,'references');
	
		$this->Model_data->insert_log('new reference');
	redirect('biodata');
}
		
		else
		redirect('biodata');
	}
	public function edit_education(){
		if(!empty($_POST['nama_pendidikan'])) 
{
  //Do my PHP code
		$increment = $this->input->post('increment');
		$id_member = $this->session->userdata('id_member');
		$tingkat_pendidikan = $this->input->post('tingkat_pendidikan');
		$nama_pendidikan = $this->input->post('nama_pendidikan');
		$status_pendidikan = $this->input->post('statuspendidikan');
		$completion_date = $this->input->post('completion_date');
		$location = $this->input->post('location_pendidikan');
		$description = $this->input->post('description_pendidikan');
		$status = 'on';
		
		$data = array(
			'increment' => $increment,
			'id_member' => $id_member,
			'tingkat_pendidikan' => $tingkat_pendidikan,
			'nama_pendidikan' => $nama_pendidikan,
			'status_pendidikan' => $status_pendidikan,
			'completion_date' => $completion_date,
			'location' => $location,
			'description' => $description,
			'status' => $status
			);
		$this->Model_data->input_data_education($data,'education');
	
		$this->Model_data->insert_log('change education');
	redirect('biodata');
}
		
		else
		redirect('biodata');
	}
public function delete($table, $id){
	$id_name = '';
	if ($table == "education"){
		$id_name = 'increment';
	} else if ($table == "employment"){
		$id_name = 'id_employment';
	} else if ($table == 'skills'){
		$id_name = 'id_skills';
	} else if ($table == 'languages'){
		$id_name = 'id_languages';
	} else if ($table == 'awards'){
		$id_name = 'id_awards';
	} else if ($table == 'references'){
		$id_name = 'id_references';
	} 
	
	$id_member = $this->session->userdata('id_member');
	$data = array(
			$id_name => $id,
			'id_member' => $id_member,
			'status' => 'off'
			);

	$this->Model_data->delete($data, $table, $id_name);

		redirect('biodata');
	}

	function ajaxpro(){
		$data = $_POST['image'];
		echo $data;
		// list($type, $data) = explode(';', $data);
		// list(, $data)      = explode(',', $data);
		// $data = base64_decode($data);
		$imageName = time().'.jpg';
		file_put_contents( $_SERVER['DOCUMENT_ROOT'] .'/eprofile.info/assets/upload/'.$imageName, $data);
		// $this->Model_data->input_data(array('photo'=>$imageName),'member');
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


