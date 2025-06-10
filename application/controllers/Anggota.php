<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {
	public function index()
	{
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_petugas');
        $this->load->view('layout/footers');
	}

	public function entri()
	{
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_petugas_entri');
        $this->load->view('layout/footers');
	}
}
