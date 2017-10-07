<?php
Class Model_data_by_username extends CI_Model {

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

	function get_data($username){
		$this->db->select('nama_depan, nama_belakang, tanggal_lahir, jenis_kelamin, status_pernikahan, alamat_jalan, kode_pos, telepon, status_pernikahan, nationality, email');
		$this->db->where('username', $username);	
		return $this->db->get('member');
	}
	function get_education($username){
		$this->db->select('tingkat_pendidikan, nama_pendidikan, status_pendidikan, completion_date, location, description');
		$this->db->from('education');
		$this->db->join('member', 'member.id_member = education.id_member');
		$this->db->where('member.username', $username);	
		$this->db->where('status', 'on');	
		return $this->db->get();
	}
	function get_employment($username){
		$this->db->select('job_title, company, location, start_date, presently_employed, end_date, compensasion, mata_uang, interval_waktu, description');
		$this->db->from('employment');
		$this->db->join('member', 'member.id_member = employment.id_member');
		$this->db->where('member.username', $username);	
		$this->db->where('status', 'on');	
		return $this->db->get();
	}
	function get_hobbies($username){
		$this->db->select('hobbies_interest');
		$this->db->where('username', $username);	
		return $this->db->get('member');
	}
	function get_skills($username){
		$this->db->select('skill_name, level');
		$this->db->from('skills');
		$this->db->join('member', 'member.id_member = skills.id_member');
		$this->db->where('member.username', $username);	
		$this->db->where('status', 'on');	
		return $this->db->get();
	}
	function get_languages($username){
		$this->db->select('language_name, level');
		$this->db->from('languages');
		$this->db->join('member', 'member.id_member = languages.id_member');
		$this->db->where('member.username', $username);	
		$this->db->where('status', 'on');	
		return $this->db->get();
	}
	function get_awards($username){
		$this->db->select('award_name, description, year');
		$this->db->from('awards');
		$this->db->join('member', 'member.id_member = awards.id_member');
		$this->db->where('member.username', $username);	
		$this->db->where('status', 'on');	
		return $this->db->get();
	}
	function get_references($username){
		$this->db->select('reference_name, company, phone, address, relationship, references.email, description');
		$this->db->from('references');
		$this->db->join('member', 'member.id_member = references.id_member');
		$this->db->where('member.username', $username);	
		$this->db->where('status', 'on');	
		return $this->db->get();
	}

	function vanity_cek($username){
		 	$this->db->where('username',$username);
		    $query = $this->db->get('member');
		    if ($query->num_rows() > 0){
		        return true;
		    }
		    else{
		        return false;
		    }
	}
	function get_no_template($username){
			$this->db->select('no_template');
		 	$this->db->where('username',$username);
		    $result = $this->db->get('member')->row();
		    return $result->no_template;
	}
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