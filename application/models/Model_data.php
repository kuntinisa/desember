<?php
Class Model_data extends CI_Model {

	public function __construct()
    {
        parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('hauth_data');
    }
	
	// function insert_personal_info($id_member, $nama_depan, $nama_belakang, $tanggal_lahir, $jenis_kelamin, $status_pernikahan, $alamat, $kode_pos, $telepon, $email, $nationality)
	// 	{			
	// 		$data=array('nama_depan' => $nama_depan, 'nama_belakang' => $nama_belakang, 'tanggal_lahir' => $tanggal_lahir, 'jenis_kelamin' => $jenis_kelamin, 'status_pernikahan' => $status_pernikahan, 'alamat' => $alamat, 'kode_pos' => $kode_pos, 'telepon' => $telepon, 'email' => $email, 'nationality' => $nationality);
	// 		$this->db->where("id_member",$id_member);
	// 		$this->db->insert("member",$data);    
	// 	}

	// 	function insert_education($id_member, $tingkat_pendidikan, $nama_pendidikan, $status_pendidikan, $completion_date, $location, $description)
	// 	{			
	// 		$number = 1; 
	// 		$query_on=$this->db->query("SELECT * FROM education WHERE id_member = '$id_member' AND status = 'on'");
	// 		$query_all=$this->db->query("SELECT * FROM education WHERE id_member = '$id_member' AND status = 'on'");
	// 	 if ($query_on->num_rows() = 0){
	// 	    }
	// 	    else{
	// 	    	$number = $query_all->num_rows() + 1; 
	// 	    } 
	// 		$data=array('number' => $number, 'tingkat_pendidikan' => $tingkat_pendidikan, 'nama_pendidikan' => $nama_pendidikan, 'status_pendidikan' => $status_pendidikan, 'completion_date' => $completion_date, 'location' => $location, 'description' => $description, 'status' => 'on');
	// 		$this->db->where("id_member",$id_member);
	// 		$this->db->insert("education",$data);    
	// 	}

	// 	function delete_education($id_member, $number){
	// 		$data=array('status' => 'off');
	// 		$this->db->where("id_member",$id_member);
	// 		$this->db->where("number",$number);
	// 		$this->db->update("education",$data);   
	// 	}

	// 	// FUNCTION UNTUK PERSONALIZE


	function insert_data($insert)
	{
		$this->db->set($insert);
		$this->db->where('id_member', $this->session->userdata('id_member'));
		return $this->db->update('member');

	}
	function insert_log($activity){
		$id_member = $this->hauth_data->get_id_member();
		$registerlog = array (
		'id_member' => $id_member, 
		'activity' => $activity, 
		'datetime' => date('Y-m-d H:i:s'), 
		//echo $then->format('Y-M-D H:i:s');
		'where' => $this->input->ip_address() 
				);
		$this->db->insert('log', $registerlog);
	}

	function input_data($data,$table){
		$this->db->set($data);
		$this->db->where('id_member', $this->session->userdata('id_member'));
		$this->db->update($table);
	}
	function input_data_education($data,$table){
		$this->db->set($data);
		$this->db->where('id_member', $this->session->userdata('id_member'));
		$this->db->where('increment', $data['increment']);
		//$this->db->insert($table);
		$this->db->update($table);
	}
	function input_data_employment($data,$table){
		$this->db->set($data);
		$this->db->where('id_member', $this->session->userdata('id_member'));
		$this->db->where('id_employment', $data['id_employment']);
		//$this->db->insert($table);
		$this->db->update($table);
	}
	function input_data_skill($data,$table){
		$this->db->set($data);
		$this->db->where('id_member', $this->session->userdata('id_member'));
		$this->db->where('id_skills', $data['id_skills']);
		//$this->db->insert($table);
		$this->db->update($table);
	}
	function input_data_language($data,$table){
		$this->db->set($data);
		$this->db->where('id_member', $this->session->userdata('id_member'));
		$this->db->where('id_languages', $data['id_languages']);
		//$this->db->insert($table);
		$this->db->update($table);
	}
	function input_data_reference($data,$table){
		$this->db->set($data);
		$this->db->where('id_member', $this->session->userdata('id_member'));
		$this->db->where('id_references', $data['id_references']);
		//$this->db->insert($table);
		$this->db->update($table);
	}
	function input_data_award($data,$table){
		$this->db->set($data);
		$this->db->where('id_member', $this->session->userdata('id_member'));
		$this->db->where('id_awards', $data['id_awards']);
		//$this->db->insert($table);
		$this->db->update($table);
	}
	function insert_data_education($data,$table){
		$this->db->set($data);
		$this->db->where('id_member', $this->session->userdata('id_member'));
		$this->db->insert($table);
		// $this->db->update($table);
	}
	function get_data(){
		$this->db->select('nama_depan, nama_belakang, tanggal_lahir, jenis_kelamin, status_pernikahan, alamat_jalan, kode_pos, telepon, status_pernikahan, nationality, email');
		$this->db->where('id_member', $this->session->userdata('id_member'));	
		return $this->db->get('member');
	}
	function get_education(){
		$this->db->select('increment, tingkat_pendidikan, nama_pendidikan, status_pendidikan, completion_date, location, description');
		$this->db->where('id_member', $this->session->userdata('id_member'));	
		$this->db->where('status', 'on');	
		return $this->db->get('education');
	}
	function get_employment(){
		$this->db->select('id_employment, job_title, company, location, start_date, presently_employed, end_date, compensasion, mata_uang, interval_waktu, description');
		$this->db->where('id_member', $this->session->userdata('id_member'));	
		$this->db->where('status', 'on');	
		return $this->db->get('employment');
	}
	function get_hobbies(){
		$this->db->select('hobbies_interest');
		$this->db->where('id_member', $this->session->userdata('id_member'));	
		return $this->db->get('member');
	}
	function get_skills(){
		$this->db->select('id_skills, skill_name, level');
		$this->db->where('id_member', $this->session->userdata('id_member'));	
		$this->db->where('status', 'on');	
		return $this->db->get('skills');
	}
	function get_languages(){
		$this->db->select('id_languages, language_name, level');
		$this->db->where('id_member', $this->session->userdata('id_member'));	
		$this->db->where('status', 'on');	
		return $this->db->get('languages');
	}
	function get_awards(){
		$this->db->select('id_awards, award_name, description, year');
		$this->db->where('id_member', $this->session->userdata('id_member'));	
		$this->db->where('status', 'on');	
		return $this->db->get('awards');
	}
	function get_references(){
		$this->db->select('id_references, reference_name, company, phone, address, relationship, email, description');
		$this->db->where('id_member', $this->session->userdata('id_member'));	
		$this->db->where('status', 'on');	
		return $this->db->get('references');
	}
	function get_username(){
		$this->db->select('username');
		$this->db->where('id_member', $this->session->userdata('id_member'));	
		return $this->db->get('member')->row()->username;
	}
	function delete($data,$table, $id_name){
		$this->db->set($data);
		$this->db->where('id_member', $this->session->userdata('id_member'));
		$this->db->where($id_name, $data[$id_name]);
		//$this->db->insert($table);
		$this->db->update($table);
	}

	// function vanity_cek($username){
	// 	 	$this->db->where('username',$username);
	// 	    $query = $this->db->get('member');
	// 	    if ($query->num_rows() > 0){
	// 	        return true;
	// 	    }
	// 	    else{
	// 	        return false;
	// 	    }
	// }
	// function get_no_template($username){
	// 		$this->db->select('no_template');
	// 	 	$this->db->where('username',$username);
	// 	    return $this->db->get('member')->result_array();
	// }
	// function get_no_template(){
	// 	 $this->db->select('no_template');
	// 	$this->db->where('id_member', $this->session->userdata('id_member'));	
	// 	return $this->db->get('member');
	// }

		// function create_new($id_member, $partname){
		// 	$query=$this->db->query("SELECT * FROM $partname WHERE id_member = '$id_member'");
		//  if ($query->num_rows() = 0){
		//         return $number;
		//     }
		//     else{
		//     	$number_education = $query->num_rows() + 1; 
		//         return $number;
		//     } 
		// }

	// function cek_email($email)
	// {
	// 	 $query=$this->db->query("SELECT * FROM user WHERE email = '$email'");
	// 	 if ($query->num_rows() > 0){
	// 	        return true;
	// 	    }
	// 	    else{
	// 	        return false;
	// 	    } 
	// }
}