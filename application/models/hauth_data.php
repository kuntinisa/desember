<?php
Class hauth_data extends CI_Model {
	
	function insert_user($table_name, $data)
		{			

			if (empty($this->hauth_data->get_id_member())){
				//insert
				$this->db->insert($table_name,$data);
				
				//retrieve id_member
				$id_member = $this->hauth_data->get_id_member();
				$this->session->set_userdata('id_member', $id_member);
				
				//log for register
				$registerlog = array (
				'id_member' => $id_member, 
				'activity' => 'register', 
				'datetime' => date('Y-m-d H:i:s'), 
				//echo $then->format('Y-M-D H:i:s');
				'where' => $this->input->ip_address() 
						);
				$this->db->insert('log', $registerlog);

				//go to dashboard

				redirect('personalize');
				// redirect('dashboard', $id_member);
    
			}
			else {
				//retrieve id_member
				$id_member = $this->hauth_data->get_id_member();
				$this->session->set_userdata('id_member', $id_member);
				//log for login
				$registerlog = array (
				'id_member' => $id_member, 
				'activity' => 'login', 
				'datetime' => date('Y-m-d H:i:s'), 
				//echo $then->format('Y-M-D H:i:s');
				'where' => $this->input->ip_address() 
						);
				$this->db->insert('log', $registerlog);
				// redirect('personalize');
				redirect('dashboard', $id_member);
			}
			

		}

		

		public function hasregister($identifier){
			$this->db->select('id_member');
	        $this->db->from('member');
	        $this->db->where('identifier', $this->session->userdata('member_identifier'));
	        $query = $this->db->get();
	        $result = $query->result();
			if($result>=1){
			        return TRUE;
			    }
			  else{
			      return FALSE;         
   			}
		}

		function get_id_member() {
        $this->db->select('id_member');
        $this->db->from('member');
        $this->db->where('identifier', $this->session->userdata('member_identifier'));
        $query = $this->db->get();
        $result = $query->row();
        foreach ($result as $row) {
        	// $results = $row->id_member;
        }
        return $result->id_member;
        //$this->load->view('edit_content/edit_content', $result);
    }
}