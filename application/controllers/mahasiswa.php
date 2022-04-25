<?php
class mahasiswa extends CI_Controller
{
    public function __construct(){
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('forminput');
    }
    public function proses()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'kelas' => $this->input->post('kelas'),
            'tglahir' => $this->input->post('tglahir'),
            'tmlahir' => $this->input->post('tmlahir'),
            'alamat' => $this->input->post('alamat'),
            'jeniskel' => $this->input->post('jeniskel'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('formoutput', $data);
    }
}