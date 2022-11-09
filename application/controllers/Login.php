<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('User_model');
	}

//Menampilkan login
    public function index()
    {
    	//$this->cekLogin();

        $data['title'] = 'Login';
        $this->load->view('backend/auth/login', $data);
    }

    //cek login
    private function cekLogin(){
    	if (!$this->session->userdata('login_admin')) {
    		redirect(site_url('backend/auth/login'));
    	}
    }

    public function login(){
    	if ($this->session->userdata('login_admin'))
    		redirect(site_url('backend/dashboard'));
    	if ($this->input->post('login')) {
    		$username = $this->input->post('username');
    		$password = $this->input->post('password');

    		if ($this->User_model->prosesLogin($username,$password)->num_rows() > 0) {
    			$login = $this->user_model->getLogin($username);
    			
    			$data_session = array(
    				'login_admin' => true,
    				'username'	  => $login->username,
    				'nama'        => $login->nama
    			);

    			$this->sesson->set_userdata($data_session);
    			redirect(site_url('login'));
    		}
    		else {
    			$message = '<div class="alert alert-danger">Username atau password salah</div>';
    			$this->session->set_flashdata('msg',$message);
    		}
    	}
    	else {
    		$data['message'] = $this->session->flashdata('msg');
    		$this->load->view('backend/auth/login',$data);
    	}
    }

    public function logout(){
    	$this->session->session_destroy();
    	redirect(site_url('backend/auth'));
    }
}
