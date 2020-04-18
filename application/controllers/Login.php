<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
				$data = array('title'      => 'Halaman Login Administrator'


			);
		$this->load->view('admin/login/list', $data, FALSE);

	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */