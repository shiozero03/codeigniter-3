<?php
	defined('BASEPATH') or exit('No direct script access allowed');

	class Model_mahasiswa extends CI_Model{

		private $table = 'nim_17191312';

		public function getDataById($where){
			$getByNIM = $this->db->where($where)->get($this->table);
			return $getByNIM;
		}
		public function getData(){
			$getData = $this->db->from($this->table)->order_by('nim', 'DESC')->get();
			return $getData;
		}
		public function insertData(){
			
			$nim = $this->input->post('nim');
			$nama = $this->input->post('nama');
			$kelas = $this->input->post('kelas');
			$prodi = $this->input->post('prodi');
			$email = $this->input->post('email');

			$data = array(
				'nim' => $nim,
				'nama' => $nama,
				'kelas' => $kelas,
				'prodi' => $prodi,
				'email' => $email
			);

			$this->db->insert($this->table, $data);
			return;
		}
		public function deleteData($where){
        	return $this->db->where($where)->delete($this->table);
    	}
	}

?>