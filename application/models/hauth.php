<?php
Class hauth_data extends CI_Model {
	
	function insert_user($table_name, $data)
		{			
			// $data2=array('identifier' => $user_profile->identifier, 
			// 	'profile_url' => $user_profile->profileURL, 
			// 	'photo_url' => $user_profile->photoURL, 
			// 	'nama_depan' => $user_profile->firstName, 
			// 	'nama_belakang' => $user_profile->lastName, 
			// 	'email' => $user_profile->email);
			$this->db->insert($table_name,$data); 
		}
}