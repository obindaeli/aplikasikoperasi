<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends CI_Controller {


	function __construct()
    {
        parent::__construct();
               
        $this->load->model('M_data');      
	}


	//KOPERASI
	public function koperasi(){
        $data = [
            'koperasi'=>$this->M_data->viewleftjointwotabel('koperasi','jenis_koperasi','id_jenis_koperasi'),	
			'pengguna'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];

            $this->load->view('partials/header');
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar');
            $this->load->view('koperasi/koperasi',$data);
            $this->load->view('partials/footer');    
	}

	public function tambahkoperasi(){
        $data = [
			'pengguna'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()

		];

        $this->form_validation->set_rules('b','b','required|trim');
       
        if($this->form_validation->run()==false){
            $data = [
                'kecamatan'=>$this->M_data->tampil_data('kecamatan')->result(),			
            ];
            $this->load->view('partials/header');
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar');
            $this->load->view('Dashboard/tambahdesa',$data);
            $this->load->view('partials/footer');
        }else{
            $data=[
				'id_kecamatan'=> htmlspecialchars($this->input->post('a')),
				'nama_desa'=> htmlspecialchars($this->input->post('b'))
			];

			$this->M_data->input_data('desa',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Dashboard/desa');
        }        
	}

	public function hapuskoperasi($id){
		$where=array('id_desa' =>$id);
		$this->M_data->hapus_data($where,'desa');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
		redirect('Dashboard/desa');
	}

	public function rat(){
        $data = [
            'rat'=>$this->M_data->viewleftjointwotabel('tb_rat','koperasi','id_koperasi'),	
			'pengguna'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];

            $this->load->view('partials/header');
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar');
            $this->load->view('koperasi/laporanrat',$data);
            $this->load->view('partials/footer');    
	}

	
}
