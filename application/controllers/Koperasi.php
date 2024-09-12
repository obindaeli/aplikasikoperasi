<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koperasi extends CI_Controller {


	function __construct(){
        parent::__construct();
               
        $this->load->model('M_data');      
	}

   

	//KOPERASI
	public function koperasi(){
        if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        $data = [
            'koperasi'=>$this->M_data->viewleftjointwotabel('koperasi','jenis_koperasi','id_jenis_koperasi'),	
			'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];

            $this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
            $this->load->view('koperasi/koperasi',$data);
            $this->load->view('partials/footer'); 
    }   
	}

	public function tambahkoperasi(){
        if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        $this->form_validation->set_rules('b','b','required|trim');
        
        if($this->form_validation->run()==false){
            $data = [
                'kecamatan'=>$this->M_data->tampil_data('kecamatan')->result(),			
                'jenis'=>$this->M_data->tampil_data('jenis_koperasi')->result(),			
                'desa'=>$this->M_data->tampil_data('desa')->result(),		
                'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
            ];
            $this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
            $this->load->view('Koperasi/tambahkoperasi',$data);
            $this->load->view('partials/footer');
        }else{
            $data=[
				'nama_koperasi'=> htmlspecialchars($this->input->post('a')),
				'id_jenis_koperasi'=> htmlspecialchars($this->input->post('b')),
				'ketua'=> htmlspecialchars($this->input->post('c')),
				'sekretaris'=> htmlspecialchars($this->input->post('d')),
				'bendahara'=> htmlspecialchars($this->input->post('e')),
				'pengawas'=> htmlspecialchars($this->input->post('f')),
				'jumlah_anggota'=> htmlspecialchars($this->input->post('g')),
				'alamat'=> htmlspecialchars($this->input->post('h')),
				'id_kecamatan'=> htmlspecialchars($this->input->post('i')),
				'id_desa'=> htmlspecialchars($this->input->post('j'))
			];

			$this->M_data->input_data('koperasi',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Koperasi/koperasi');
        } }       
	}

	public function hapuskoperasi($id){
        if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
		$where=array('id_desa' =>$id);
		$this->M_data->hapus_data($where,'desa');
		$this->session->set_flashdata('flash', 'success-DATA BERHASIL DIHAPUS');
		redirect('Dashboard/desa');}
	}

    public function detailkoperasi($id){
        if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        $id=$id;
            $data = [	
                'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array(),
                'rat'=>$this->M_data->getrat($id)	
            ];
            $detail=$this->M_data->detail_data($id);
            $data['detail']=$detail;
            //var_dump($data);
            $this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
            $this->load->view('koperasi/detailkoperasi',$data);
            $this->load->view('partials/footer');  }  
	}

    //RAT
	public function rat(){
        if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        $data = [
            'rat'=>$this->M_data->viewleftjointwotabel('tb_rat','koperasi','id_koperasi'),	
			'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array()
		];

            $this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
            $this->load->view('koperasi/laporanrat',$data);
            $this->load->view('partials/footer');}    
	}
    
    public function tambahrat(){
        if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
        $this->form_validation->set_rules('b','b','required|trim');
        
        if($this->form_validation->run()==false){
            $data = [
                'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array(),
                'koperasi'=>$this->M_data->tampil_data('koperasi')->result() ];
            $this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
            $this->load->view('Koperasi/tambahrat',$data);
            $this->load->view('partials/footer');
        }else{
            $data=[
				'id_koperasi'=> htmlspecialchars($this->input->post('a')),
				'tahun_rat'=> htmlspecialchars($this->input->post('b')),
				'modal_koperasi'=> htmlspecialchars($this->input->post('c')),
				'volume_usaha'=> htmlspecialchars($this->input->post('d')),
				'sisa_hasil'=> htmlspecialchars($this->input->post('e')),
				'aset'=> htmlspecialchars($this->input->post('f'))
			];

			$this->M_data->input_data('tb_rat',$data);
			$this->session->set_flashdata('flash', 'success-DATA BERHASIL DITAMBAHKAN');
			redirect('Koperasi/rat');
        }  }     
	}
	
    public function report($id){
        if(!$this->session->userdata('username')){
            redirect('Main');
		}else{
            $id=$id;
            $data = [	
                'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array(),
                	
            ];
            $detail=$this->M_data->detail_data($id);
            $data['detail']=$detail;
            //var_dump($data);
            $this->load->view('partials/header',$data);
            $this->load->view('partials/navbar',$data);
            $this->load->view('partials/sidebar',$data);
            $this->load->view('koperasi/report',$data);
            $this->load->view('partials/footer');
            }    
	}

    public function grafik()
    {
       
        $data = [	
            'user'=> $this->db->get_where('tb_user',['username'=> $this->session->userdata('username')])->row_array(),
            'chart_data' => $this->get_chart_data()    
        ];
        // var_dump($data);
        $this->load->view('partials/header',$data);
        $this->load->view('partials/navbar',$data);
        $this->load->view('partials/sidebar',$data);
        $this->load->view('koperasi/grafik',$data);
        $this->load->view('partials/footer',);
    }

    private function get_chart_data()
    {
        $labels = [];
        $values = [];
        $koperasi=$this->M_data->getgrafik() ;
        foreach ($koperasi as $row) {
            $labels[] = $row['kecamatan'];
            $values[] = (int)$row['banyak'];
        }

        return [
            'labels' => $labels,
            'values' => $values
        ];
    }
}
