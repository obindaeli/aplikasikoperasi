<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login(){
		$username= $this->input->post('a');
        $password= $this->input->post('b');

        $user= $this->db->get_where('tb_user',['username' => $username])->row_array(); 

        if($user){
            if(password_verify($password,$user['password'])){
                $data =[
                    'id_user' => $user['id_user'],
                    'nama_user' => $user['nama_user'],
                    'username' => $user['username'],
                    'role_id' => $user['role_id']
                ];
                $this->session->set_userdata($data);
                if($user['role_id']==1){
                    redirect('Dashboard');
                }
                else if($user['role_id']==2){
                    redirect('Main/Dashboard');
                }
                else {
                    redirect('Main');
                }
				$this->session->set_flashdata('flash', 'success-BERHASIL MASUK');
                redirect('Main/Dashboard');
            }
            else{
                $this->session->set_flashdata('flash', 'error-KONFIRMASI-PASSWORD SALAH');
               redirect('Main');
            }
		}
		else {
			$this->session->set_flashdata('flash', 'error-KONFIRMASI-USERNAME TIDAK TERDAFTAR');
			redirect('Main');
		}
	}

	public function logout()
    {
        $this->session->unset_userdata('nip');
        $this->session->unset_userdata('id_level');
        //$this->session->unset_userdata('password');
        $this->session->set_flashdata('flash', 'success-KONFIRMASI-ANDA SUDAH KELUAR DARI APLIKASI');
		redirect('Main');
    }

	

}
