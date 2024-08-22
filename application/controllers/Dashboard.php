<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct()
    {
        parent::__construct();
               
        $this->load->model('M_data');      
	}

	public function index(){
		$data = [
			'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];
		$this->load->view('partials/header');
		$this->load->view('partials/navbar',$data);
		$this->load->view('partials/sidebar');
		$this->load->view('dashboard/dashboard');
		$this->load->view('partials/footer');
	}

	//PENGGUNA
	public function pengguna(){
		$data = [
			'pengguna'=>$this->M_data->tampil_data('tb_user')->result(),			
		];
		$this->load->view('partials/header');
		$this->load->view('partials/navbar',$data);
		$this->load->view('partials/sidebar');
		$this->load->view('Dashboard/pengguna',$data);
		$this->load->view('partials/footer');
	}

	public function tambahpengguna(){
		$data = [
			'pengguna'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()

		];

        $this->form_validation->set_rules('a','a','required|trim');
        $this->form_validation->set_rules('b','b','required|trim');
        $this->form_validation->set_rules('d', 'e', 'required|trim|min_length[6]', [
			'min_length' => 'Password Terlalu Pendek !'
		]);
       
        if($this->form_validation->run()==false){
            $this->load->view('partials/header');
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar');
            $this->load->view('dashboard/tambahpengguna',$data);
            $this->load->view('partials/footer');
        }else{
            $data=[
				'nama_user'=> htmlspecialchars($this->input->post('a')),
				'username'=> htmlspecialchars($this->input->post('c')),
				'role_id'=> htmlspecialchars($this->input->post('b')),
				'password'=> password_hash($this->input->post('d'),PASSWORD_DEFAULT),
			];

			$this->M_data->input_data('tb_user',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Dashboard/pengguna');
        }        
	}

	public function hapuspengguna($id){
		$where=array('id_user' =>$id);
		$this->M_data->hapus_data($where,'tb_user');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
		redirect('Dashboard/pengguna');
	}

	//KECAMATAN
    public function kecamatan(){
        $data = [
            'kecamatan'=>$this->M_data->tampil_data('kecamatan')->result(),	
			'pengguna'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];

            $this->load->view('partials/header');
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar');
            $this->load->view('Dashboard/kecamatan',$data);
            $this->load->view('partials/footer');    
	}

    public function tambahkecamatan(){
        $data = [
			'pengguna'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()

		];

        $this->form_validation->set_rules('a','a','required|trim');
       
        if($this->form_validation->run()==false){
            $data = [
                'kecamatan'=>$this->M_data->tampil_data('kecamatan')->result(),			
            ];
            $this->load->view('partials/header');
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar');
            $this->load->view('Dashboard/tambahkecamatan',$data);
            $this->load->view('partials/footer');
        }else{
            $data=[
				'nama_kecamatan'=> htmlspecialchars($this->input->post('a'))
			];

			$this->M_data->input_data('kecamatan',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Dashboard/kecamatan');
        }        
	}

	public function hapuskecamatan($id){
		$where=array('id_kecamatan' =>$id);
		$this->M_data->hapus_data($where,'kecamatan');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
		redirect('Dashboard/kecamatan');
	}

	//DESA
	public function desa(){
        $data = [
            'desa'=>$this->M_data->viewleftjointwotabel('desa','kecamatan','id_kecamatan'),	
			'pengguna'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];

            $this->load->view('partials/header');
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar');
            $this->load->view('Dashboard/desa',$data);
            $this->load->view('partials/footer');    
	}

	public function tambahdesa(){
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

	public function hapusdesa($id){
		$where=array('id_desa' =>$id);
		$this->M_data->hapus_data($where,'desa');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
		redirect('Dashboard/desa');
	}

	

	
}
