<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

	public function index()
	{
		$data = array('title'      => 'Halaman Galeri',
					  'isi'      => 'galeri/list'


			);

		$this->load->view('layout/wrapper', $data, FALSE);
	}

}

/* End of file galeri.php */
/* Location: ./application/controllers/galeri.php */