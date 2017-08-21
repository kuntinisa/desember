<?php
Class hauth_data extends CI_Model {
	
	function insert_user($table_name, $data)
		{			

			if (empty($this->hauth_data->get_id_customer())){
				//insert
				$this->db->insert($table_name,$data);
				
				//retrieve id_customer
				$id_customer = $this->hauth_data->get_id_customer();
				$this->session->set_userdata('id_customer', $id_customer);
				
				//log for register
				$registerlog = array (
				'id_customer' => $id_customer, 
				'activity' => 'register', 
				'datetime' => date('Y-m-d H:i:s'), 
				//echo $then->format('Y-M-D H:i:s');
				'where' => $this->input->ip_address() 
						);
				$this->db->insert('log', $registerlog);

				//go to dashboard

				redirect('personalize');
				// redirect('dashboard', $id_customer);
    
			}
			else {
				//retrieve id_customer
				$id_customer = $this->hauth_data->get_id_customer();
				$this->session->set_userdata('id_customer', $id_customer);
				//log for login
				$registerlog = array (
				'id_customer' => $id_customer, 
				'activity' => 'login', 
				'datetime' => date('Y-m-d H:i:s'), 
				//echo $then->format('Y-M-D H:i:s');
				'where' => $this->input->ip_address() 
						);
				$this->db->insert('log', $registerlog);
				// redirect('personalize');
				redirect('dashboard', $id_customer);
			}
			

		}

		public function hasregister($identifier){
			$this->db->select('id_customer');
	        $this->db->from('customer');
	        $this->db->where('identifier', $this->session->userdata('customer_identifier'));
	        $query = $this->db->get();
	        $result = $query->result();
			if($result>=1){
			        return TRUE;
			    }
			  else{
			      return FALSE;         
   			}
		}

		function get_id_customer() {
        $this->db->select('id_customer');
        $this->db->from('customer');
        $this->db->where('identifier', $this->session->userdata('customer_identifier'));
        $query = $this->db->get();
        $result = $query->row();
        foreach ($result as $row) {
        	$results = $row->id_customer;
        }
        return $result->id_customer;
        //$this->load->view('edit_content/edit_content', $result);
    }
}