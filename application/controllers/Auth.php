<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
	public function index(){
		$this->load->view('login');
	}
    public function login(){
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        $this->db->from('user');
        $this->db->where('username',$username);
        $cek = $this->db->get()->row();
        if($cek==NULL){
            $this->session->set_Flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Username Tidak Ada.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('auth');
        } else if($password==$cek->password) {
            $data = array(
                'id_user' => $cek->id_user,
                'nama' => $cek->nama,
                'username' => $cek->username,
                'level' => $cek->level,
            );
            $this->session->set_userdata($data);
            redirect('admin/home');
        } else {
        $this->session->set_Flashdata('alert','
        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>Password Salah.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
        ');
        redirect('auth');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('home');
    }
}
