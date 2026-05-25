<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
  class Mahasiswa extends CI_Controller 
{ 
    public function __construct() 
    { 
        parent::__construct(); 
        $this->load->model('Mahasiswa_model'); 
        $this->load->library(array('form_validation', 'session')); 
        $this->load->helper(array('url', 'form')); 
    }   
    public function index() 
    { 
        $data['title'] = 'Data Mahasiswa'; 
        $data['mahasiswa'] = $this->Mahasiswa_model->get_all();   
        $this->load->view('layouts/header', $data); 
        $this->load->view('mahasiswa/index', $data); 
        $this->load->view('layouts/footer'); 
    }       public function tambah() 
    { 
        $data['title'] = 'Tambah Data Mahasiswa';   
        $this->load->view('layouts/header', $data); 
        $this->load->view('mahasiswa/tambah', $data); 
        $this->load->view('layouts/footer'); 
    }       public function simpan() 
    { 
        $this->_rules_tambah(); 
  
        if ($this->form_validation->run() == FALSE) { 
            $this->tambah();             return; 
        } 
  
        $data = array( 
            'nim'           => $this->input->post('nim', TRUE), 
            'nama'          => $this->input->post('nama', TRUE), 
            'prodi'         => $this->input->post('prodi', TRUE), 

            'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE), 
            'semester'      => $this->input->post('semester', TRUE), 
            'alamat'        => $this->input->post('alamat', TRUE), 
            'no_hp'         => $this->input->post('no_hp', TRUE)         ); 
  
        $this->Mahasiswa_model->insert($data); 
        $this->session->set_flashdata('success', 'Data mahasiswa berhasil ditambahkan.');         redirect('mahasiswa'); 
    }   
    public function edit($id) 
    { 
        $data['title'] = 'Edit Data Mahasiswa'; 
        $data['mhs'] = $this->Mahasiswa_model->get_by_id($id); 
          if (!$data['mhs']) {             show_404(); 
        } 
  
        $this->load->view('layouts/header', $data); 
        $this->load->view('mahasiswa/edit', $data); 
        $this->load->view('layouts/footer'); 
    }   
    public function update($id) 
    { 
        $mhs = $this->Mahasiswa_model->get_by_id($id); 
          if (!$mhs) {             show_404(); 
        } 
  
        $this->_rules_edit(); 
  
        if ($this->form_validation->run() == FALSE) { 
            $this->edit($id);             return; 
        } 
  
        $data = array( 
            'nim'           => $this->input->post('nim', TRUE), 
            'nama'          => $this->input->post('nama', TRUE), 
            'prodi'         => $this->input->post('prodi', TRUE), 
            'jenis_kelamin' => $this->input->post('jenis_kelamin', TRUE), 
            'semester'      => $this->input->post('semester', TRUE), 
            'alamat'        => $this->input->post('alamat', TRUE), 
            'no_hp'         => $this->input->post('no_hp', TRUE)         ); 
  
        $this->Mahasiswa_model->update($id, $data); 
        $this->session->set_flashdata('success', 'Data mahasiswa berhasil diperbarui.');         redirect('mahasiswa'); 
    }   
    public function hapus($id) 
    { 
        $mhs = $this->Mahasiswa_model->get_by_id($id); 
          if (!$mhs) {             show_404(); 
        } 
  
        $this->Mahasiswa_model->delete($id); 
        $this->session->set_flashdata('success', 'Data mahasiswa berhasil dihapus.');         redirect('mahasiswa'); 
    }   
    private function _rules_tambah() 
    { 
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim|is_unique[mahasiswa.nim]', array( 
            'required'  => '%s wajib diisi.', 
            'is_unique' => '%s sudah terdaftar.' 
        )); 
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required|trim'); 
        $this->form_validation->set_rules('prodi', 'Program Studi', 'required|trim'); 
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required'); 
        $this->form_validation->set_rules('semester', 'Semester', 
'required|integer|greater_than[0]|less_than_equal_to[14]'); 
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim'); 
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');     }   
    private function _rules_edit() 
    { 
        $this->form_validation->set_rules('nim', 'NIM', 'required|trim|callback_cek_nim_edit'); 
        $this->form_validation->set_rules('nama', 'Nama Mahasiswa', 'required|trim'); 
        $this->form_validation->set_rules('prodi', 'Program Studi', 'required|trim'); 
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required'); 
        $this->form_validation->set_rules('semester', 'Semester', 
'required|integer|greater_than[0]|less_than_equal_to[14]'); 
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim'); 
        $this->form_validation->set_rules('no_hp', 'No HP', 'required|trim');     }   
    public function cek_nim_edit($nim) 
    { 
        $id = $this->input->post('id', TRUE); 
        $cek = $this->Mahasiswa_model->cek_nim_edit($nim, $id); 
  
        if ($cek) { 
            $this->form_validation->set_message('cek_nim_edit', 'NIM sudah digunakan oleh mahasiswa lain.');             return FALSE; 
        } 
  
        return TRUE; 
    } 
} 
