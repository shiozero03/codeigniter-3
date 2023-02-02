<?php
	class Mahasiswa extends CI_Controller{
		public function index(){
			$getData = $this->model_mahasiswa->getData()->result();
			$data = [
				'data_mahasiswa' => $getData
			];
			$this->load->view('tampil_mahasiswa', $data);
		}
		public function tambah(){
			$this->load->view('form_mahasiswa');
		}
		public function store(){
			$nim = $this->input->post('nim');
			$where = array(
				'nim' => $nim
			);
			
			$findData = $this->model_mahasiswa->getDataById($where);
			if($findData->num_rows() > 0){
				echo "
					<script>
						alert('NIM Sudah Terdaftar');
						document.location.href = 'tambah'
					</script>
				";
			} else{
				$insertData = $this->model_mahasiswa->insertData();
				echo "
					<script>
						alert('Data Berhasil Ditambahkan');
						document.location.href = 'tambah'
					</script>
				";
			}
		}

		public function delete(){
			$nim = $this->input->get('nim');

			$where = array(
				'nim' => $nim
			);
        	$this->model_mahasiswa->deleteData($where);
			echo "
				<script>
					alert('Data Berhasil Dihapus');
					document.location.href = '../mahasiswa'
				</script>
			";
    	}
	}

?>