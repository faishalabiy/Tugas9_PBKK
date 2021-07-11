<?php 

/**
* Hasil Model untuk keperluan pengumuman
*/
class Mahasiswa_Model extends CI_Model
{
	private $db;

    public function __construct()
    {
        parent::__construct();
        $this->db = $this->load->database('default', true);
    }
    
    public function getMahasiswa()
    {
        $this->db->from('mahasiswa');
        $query = $this->db->get();
        return $query->result();
    }

    public function getMahasiswaSpesific($id)
    {
        $this->db->from('mahasiswa');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();
    }
    
    public function insertMahasiswa($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }

    public function updateMahasiswa($data,$id)
    {
        $this->db->where('id', $id);
        return $this->db->update('mahasiswa', $data);
    }

    public function deleteMahasiswa($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('mahasiswa');
    }
}