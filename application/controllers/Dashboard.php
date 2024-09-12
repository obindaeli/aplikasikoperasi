<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	function __construct()
    {
        parent::__construct();
               
        $this->load->model('M_data');      
	}

	public function index(){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
		$data = [
			'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];
		$this->load->view('partials/header',$data);
		$this->load->view('partials/navbar',$data);
		$this->load->view('partials/sidebar');
		$this->load->view('dashboard/dashboard',$data);
		$this->load->view('partials/footer');}
	}

	//PENGGUNA
	public function pengguna(){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
		$data = [
			'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array(),
			'pengguna'=>$this->M_data->tampil_data('tb_user')->result()	
		];
		$this->load->view('partials/header',$data);
		$this->load->view('partials/navbar',$data);
		$this->load->view('partials/sidebar',$data);
		$this->load->view('Dashboard/pengguna',$data);
		$this->load->view('partials/footer');}
	}

	public function tambahpengguna(){
		if(!$this->session->userdata('username')){
             redirect('Main');
		}else{
		$data = [
			'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()

		];

        $this->form_validation->set_rules('a','a','required|trim');
        $this->form_validation->set_rules('b','b','required|trim');
        $this->form_validation->set_rules('d', 'e', 'required|trim|min_length[6]', [
			'min_length' => 'Password Terlalu Pendek !'
		]);
       
        if($this->form_validation->run()==false){
            $this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
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
        }}      
	}

	public function hapuspengguna($id){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
		$where=array('id_user' =>$id);
		$this->M_data->hapus_data($where,'tb_user');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
		redirect('Dashboard/pengguna');}
	}

	//KECAMATAN
    public function kecamatan(){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        $data = [
            'kecamatan'=>$this->M_data->tampil_data('kecamatan')->result(),	
			'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];

			$this->load->view('partials/header',$data);
			$this->load->view('partials/navbar',$data);
			$this->load->view('partials/sidebar',$data);
            $this->load->view('Dashboard/kecamatan',$data);
            $this->load->view('partials/footer'); }   
	}

    public function tambahkecamatan(){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        
			
        $this->form_validation->set_rules('a','a','required|trim');
        if($this->form_validation->run()==false){
            $data = [
                'kecamatan'=>$this->M_data->tampil_data('kecamatan')->result(),	
				'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()		
            ];
            $this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
            $this->load->view('Dashboard/tambahkecamatan',$data);
            $this->load->view('partials/footer',$data);
        }else{
            $data=[
				'nama_kecamatan'=> htmlspecialchars($this->input->post('a'))
			];

			$this->M_data->input_data('kecamatan',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Dashboard/kecamatan');
        }  
	}      
	}

	public function hapuskecamatan($id){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
		$where=array('id_kecamatan' =>$id);
		$this->M_data->hapus_data($where,'kecamatan');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
		redirect('Dashboard/kecamatan');}
	}

	//DESA
	public function desa(){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        $data = [
            'desa'=>$this->M_data->viewleftjointwotabel('desa','kecamatan','id_kecamatan'),	
			'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];
		$this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
		$this->load->view('Dashboard/desa',$data);
		$this->load->view('partials/footer'); }   
	}

	public function tambahdesa(){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        
        $this->form_validation->set_rules('b','b','required|trim');
        if($this->form_validation->run()==false){
            $data = [
                'kecamatan'=>$this->M_data->tampil_data('kecamatan')->result(),	
				'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		
            ];
			$this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
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
			} }      
	}

	public function hapusdesa($id){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
		$where=array('id_desa' =>$id);
		$this->M_data->hapus_data($where,'desa');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
		redirect('Dashboard/desa');}
	}

	 //JENIS KOPERASI
	 public function jeniskoperasi(){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        $data = [
           
			'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array(),
            'jeniskoperasi'=>$this->M_data->tampil_data('jenis_koperasi')->result()			
		];
		$this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
		$this->load->view('dashboard/jeniskoperasi',$data);
		$this->load->view('partials/footer');}    
	}

    public function tambahjeniskoperasi(){
		if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        $data = [
			'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];
        $this->form_validation->set_rules('a','a','required|trim');
       
        if($this->form_validation->run()==false){
            $data = [
				'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
            ];
            $this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
            $this->load->view('dashboard/tambahjeniskoperasi',$data);
            $this->load->view('partials/footer');
        }else{
            $data=[
				'jenis_koperasi'=> htmlspecialchars($this->input->post('a'))
			];
			$this->M_data->input_data('jenis_koperasi',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Dashboard/jeniskoperasi');
        }}        
	}

	
}
