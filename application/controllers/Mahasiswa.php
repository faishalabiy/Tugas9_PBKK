<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_Model');

    }

	public function index()
	{
        $data['mahasiswa'] = $this->Mahasiswa_Model->getMahasiswa();
		$this->load->view('view_list_mahasiswa',$data);
	}

    public function insert()
    {
        $this->load->view('view_tambah_mahasiswa');
    }

	public function store()
	{   
        $data   = array(
            'nama'  => $this->input->post('nama'),
            'nrp'   => $this->input->post('nrp')
        );
        
        $this->Mahasiswa_Model->insertMahasiswa($data);

		$this->index();
	}

    public function updateView($id)
	{
        $data['mahasiswa'] = $this->Mahasiswa_Model->getMahasiswaSpesific($id);
        $this->load->view('view_edit_mahasiswa',$data);
	}

    public function update()
	{

        $id = $this->input->post('id');
        $data   = array(
            'nama'  => $this->input->post('nama'),
            'nrp'   => $this->input->post('nrp')
        );
        $this->Mahasiswa_Model->updateMahasiswa($data,$id);

		$this->index();
	}

    public function delete($id)
	{   
        $this->Mahasiswa_Model->deleteMahasiswa($id);

        $this->index();
	}

}
