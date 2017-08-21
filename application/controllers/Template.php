<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {
public function __construct()
    {
        parent::__construct();
    }
	 public function test()
 {

 	$data['name'] = $this->uri->segment('1');
 	$this->load->view('template/test', $data);
 }
}