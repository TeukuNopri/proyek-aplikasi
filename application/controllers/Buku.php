<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('M_Buku');
    }

	public function index()
	{
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_buku');
        $this->load->view('layout/footers');
	}

	public function entri()
	{
        $this->load->view('layout/headers');
        $this->load->view('layout/navigation');
		$this->load->view('v_buku_entri');
        $this->load->view('layout/footers');
	}

	public function submit()
	{
		// Upload konfigurasi
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|jpeg|png|webp';
        $this->load->library('upload', $config);

        // Proses upload gambar 1
        if (!$this->upload->do_upload('data_buku_gambar_1')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('buku');
        } else {
            $gambar1 = $this->upload->data('file_name');
        }

        // Proses upload gambar 2
        if (!$this->upload->do_upload('data_buku_gambar_2')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('buku');
        } else {
            $gambar2 = $this->upload->data('file_name');
        }

        // Ambil data dari form
        $data = array(
            'data_buku_nomor'     => $this->input->post('data_buku_nomor', TRUE),
            'data_buku_judul'     => $this->input->post('data_buku_judul', TRUE),
            'data_buku_kategori'  => $this->input->post('data_buku_kategori', TRUE),
            'data_buku_pengarang' => $this->input->post('data_buku_pengarang', TRUE),
            'data_buku_penerbit'  => $this->input->post('data_buku_penerbit', TRUE),
            'data_buku_tahun'     => $this->input->post('data_buku_tahun', TRUE),
            'data_buku_stok'      => $this->input->post('data_buku_stok', TRUE),
            'data_buku_gambar_1'  => $gambar1,
            'data_buku_gambar_2'  => $gambar2,
            'data_buku_tgl_input' => date('Y-m-d H:i:s')
        );

        // Simpan ke database lewat model
        $this->M_Buku->insert($data);
        $this->session->set_flashdata('success', 'Data buku berhasil disimpan!');
        redirect('buku');
	}
}
