<?php
Class Model_data extends CI_Model {

	public function __construct()
    {
        parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('hauth_data');
    }
	
	// function insert_personal_info($id_customer, $nama_depan, $nama_belakang, $tanggal_lahir, $jenis_kelamin, $status_pernikahan, $alamat, $kode_pos, $telepon, $email, $nationality)
	// 	{			
	// 		$data=array('nama_depan' => $nama_depan, 'nama_belakang' => $nama_belakang, 'tanggal_lahir' => $tanggal_lahir, 'jenis_kelamin' => $jenis_kelamin, 'status_pernikahan' => $status_pernikahan, 'alamat' => $alamat, 'kode_pos' => $kode_pos, 'telepon' => $telepon, 'email' => $email, 'nationality' => $nationality);
	// 		$this->db->where("id_customer",$id_customer);
	// 		$this->db->insert("customer",$data);    
	// 	}

	// 	function insert_education($id_customer, $tingkat_pendidikan, $nama_pendidikan, $status_pendidikan, $completion_date, $location, $description)
	// 	{			
	// 		$number = 1; 
	// 		$query_on=$this->db->query("SELECT * FROM education WHERE id_customer = '$id_customer' AND status = 'on'");
	// 		$query_all=$this->db->query("SELECT * FROM education WHERE id_customer = '$id_customer' AND status = 'on'");
	// 	 if ($query_on->num_rows() = 0){
	// 	    }
	// 	    else{
	// 	    	$number = $query_all->num_rows() + 1; 
	// 	    } 
	// 		$data=array('number' => $number, 'tingkat_pendidikan' => $tingkat_pendidikan, 'nama_pendidikan' => $nama_pendidikan, 'status_pendidikan' => $status_pendidikan, 'completion_date' => $completion_date, 'location' => $location, 'description' => $description, 'status' => 'on');
	// 		$this->db->where("id_customer",$id_customer);
	// 		$this->db->insert("education",$data);    
	// 	}

	// 	function delete_education($id_customer, $number){
	// 		$data=array('status' => 'off');
	// 		$this->db->where("id_customer",$id_customer);
	// 		$this->db->where("number",$number);
	// 		$this->db->update("education",$data);   
	// 	}

	// 	// FUNCTION UNTUK PERSONALIZE


	function insert_data($insert)
	{
		$this->db->set($insert);
		$this->db->where('id_customer', $this->session->userdata('id_customer'));
		return $this->db->update('customer');

	}
	function insert_log($activity){
		$id_customer = $this->hauth_data->get_id_customer();
		$registerlog = array (
		'id_customer' => $id_customer, 
		'activity' => $activity, 
		'datetime' => date('Y-m-d H:i:s'), 
		//echo $then->format('Y-M-D H:i:s');
		'where' => $this->input->ip_address() 
				);
		$this->db->insert('log', $registerlog);
	}

	function input_data($data,$table){
		$this->db->set($data);
		$this->db->where('id_customer', $this->session->userdata('id_customer'));
		$this->db->update($table);
	}
	function input_data_education($data,$table){
		$this->db->set($data);
		$this->db->where("(id_customer = $this->session->userdata('id_customer') AND  number = '1')", null, false);
		//$this->db->insert($table);
		$this->db->update($table);
	}
	function get_data(){
		$this->db->select('nama_depan, nama_belakang, tanggal_lahir, jenis_kelamin, status_pernikahan, alamat_jalan, kode_pos, telepon, status_pernikahan, nationality, email');
		$this->db->where('id_customer', $this->session->userdata('id_customer'));	
		return $this->db->get('customer');
	}
	function get_education(){
		$this->db->select('number, tingkat_pendidikan, nama_pendidikan, status_pendidikan, completion_date, location, description');
		$this->db->where('id_customer', $this->session->userdata('id_customer'));	
		$this->db->where('status', 'on');	
		return $this->db->get('education');
	}
	function get_employment(){
		$this->db->select('job_title, company, location, start_date, presently_employed, end_date, compensasion, mata_uang, interval_waktu, description');
		$this->db->where('id_customer', $this->session->userdata('id_customer'));	
		$this->db->where('status', 'on');	
		return $this->db->get('employment');
	}
	function get_hobbies(){
		$this->db->select('hobbies_interest');
		$this->db->where('id_customer', $this->session->userdata('id_customer'));	
		return $this->db->get('customer');
	}
	function get_skills(){
		$this->db->select('skill_name, level');
		$this->db->where('id_customer', $this->session->userdata('id_customer'));	
		$this->db->where('status', 'on');	
		return $this->db->get('skills');
	}
	function get_languages(){
		$this->db->select('language_name, level');
		$this->db->where('id_customer', $this->session->userdata('id_customer'));	
		$this->db->where('status', 'on');	
		return $this->db->get('languages');
	}
	function get_awards(){
		$this->db->select('award_name, description, year');
		$this->db->where('id_customer', $this->session->userdata('id_customer'));	
		$this->db->where('status', 'on');	
		return $this->db->get('awards');
	}
	function get_references(){
		$this->db->select('reference_name, company, phone, address, relationship, email, description');
		$this->db->where('id_customer', $this->session->userdata('id_customer'));	
		$this->db->where('status', 'on');	
		return $this->db->get('references_cust');
	}

		// function create_new($id_customer, $partname){
		// 	$query=$this->db->query("SELECT * FROM $partname WHERE id_customer = '$id_customer'");
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