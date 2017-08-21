<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Personalize extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
      $this->load->library('form_validation');
      $this->load->model('PersonalizeModel');
      $this->load->model('Model_data');
    }
	 public function index()
 {
 	//welcoming page
 	if (isset($_POST["bahasa"])) {
    $bahasa = $this->input->post('bahasa');
	$this->session->set_userdata('language', $bahasa);
	
	}else{  
	   $bahasa = "english";
	   $this->session->set_userdata('language', $bahasa);
	}
	$bahasa = $this->session->userdata('language');
 	
 	$this->load->language('home', $bahasa);
 	$data['namad'] = $this->lang->line('namad');
	$data['namab'] = $this->lang->line('namab');
  
    $this->load->view('personalize/header');
  $this->load->view('personalize/home', $data);



 }
  function inputForm()
  {
    $username = $this->input->post('search_data');
    
    $insert = array(
      'username' => $username
    );
   
    $this->Model_data->insert_data($insert);

    
    redirect('dashboard');   
    
     }

public function autocomplete()
        {
                // load model
                $this->load->model('PersonalizeModel');

                $search_data = $this->input->post('search_data');

                $result = $this->PersonalizeModel->get_autocomplete($search_data);
                 $this->form_validation->set_rules('search_data', 'Username', 'required|alpha_numeric|min_length[1]|max_length[30]');
                if ($this->form_validation->run() == FALSE){
                  //pesan salah
                     echo "<h5 style='color:red'>Username must contains only letters and numbers with max length 30 characters</h5>";
                } else {
                    
                      if (!empty($result))
                    {
                        // foreach ($result as $row):
                            echo "<h5 style='color:red'>Username sudah dipakai</h5>";
                        // endforeach;
                    }
                    else
                    {
                        echo "<h5 style='color:blue'>Username tersedia</h5>";
                    }
              }
        }

public function vanity(){
  $this->load->model("PersonalizeModel");
	
	$search=  $this->input->post('search');
  $query = $this->PersonalizeModel->vanity($search);
  echo json_encode ($query);
 }

 public function login()
 {
	$this->load->view('personalize/header');
  $this->load->view('personalize/login');
 }
 public function auth()
 {redirect ("personalize/dashboard");
}


public function admin(){
$this->load->view('admin/header');
  $this->load->view('admin/index');
}
public function biodata(){
$this->load->view('admin/header');
  $this->load->view('admin/biodata');
}
public function template(){
$this->load->view('admin/header');
  $this->load->view('admin/template');
}
public function original(){
$this->load->view('admin/header');
  $this->load->view('admin/original');
}
public function croppie(){
$this->load->view('admin/croppie');

}
}
