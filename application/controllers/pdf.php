<?php defined('BASEPATH') OR exit('No direct script access allowed');

class PDF extends CI_Controller {
function _remap($param) {
        $this->index($param);
    }

	 public function index($param)
 {
 	$data['username'] = $param;
  $this->load->view('template/download_pdf', $data);
	
 }
}


