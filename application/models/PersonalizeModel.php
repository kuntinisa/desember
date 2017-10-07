<?php
class PersonalizeModel extends CI_Model {

 function EmployeeModel(){
  parent::Model(); 
 }
 public function get_autocomplete($search_data)
        {
                $this->db->select('username');
                $this->db->where('username', $search_data);

                return $this->db->get('member', 10)->result();
        }

 function vanity($search){
  $this->db->select("id_member");
  $whereCondition = array('username' =>$search);
  $this->db->where($whereCondition);
  $this->db->from('member');
  $query = $this->db->get();
  return $query->result();
 }

 function filename_exists($username)
 {

     $this->db->select('*'); 
     $this->db->from('users');
     $this->db->where('username', $username);
     $query = $this->db->get();
     if ($query->num_rows() == 0) {
         return true;
     } else {
         return false;
     }
 }
 
}