<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function index()
	{
		$data = array('title'      => 'Halaman Profil',
						'isi'      => 'profil/list'


			);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file profil.php */
/* Location: ./application/controllers/profil.php */