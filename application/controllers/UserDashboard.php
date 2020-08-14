<?php

class UserDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_system');
    }


    public function index()
    {
        if ($this->session->userdata('status') != 'signin') {
            redirect('UserDashboard/home');
        } else if ($this->session->userdata('status') == 'signin')
            if ($this->session->userdata('role') == 'administrator') {
                redirect('AdminDashboard/adminhome');
            } else if ($this->session->userdata('role') == 'petugas') {
                redirect('AdminDashboard/petugashome');
            } else if ($this->session->userdata('role') == 'user') {
                redirect('UserDashboard/carlist' . $this->session->userdata('usernama'));
            }
    }

    public function home()
    {
        $data['title'] = "Home";
        $this->load->view('user/index', $data);
    }

    public function signin()
    {
        if ($this->session->userdata('status') == 'signin') {
            redirect('UserDashboard/carlist' . $this->session->userdata('usernama'));
        }
        $data['title'] = "Sign in";
        $this->load->view('user/signin', $data);
    }

    public function register()
    {
        $data['title'] = "Register";
        $data['user'] = $this->model_system->get_user();
        $data['c_user'] = $this->model_system->count_user();
        $this->load->view('user/register', $data);
    }

    public function carlist()
    {
        $data['title'] = "Car List";
        $this->load->view('user/carlist', $data);
    }

    public function motorlist()
    {
        $data['title'] = "Motorcycle List";
        $this->load->view('user/motorlist', $data);
    }

    public function insert_user()
    {
        $this->model_system->insert_data();
    }

    public function signin_action()
    {
        $usernamess = $this->input->post('usernamess');
        $passwordss = $this->input->post('passwordss');
        $where = array(
            'username' => $usernamess,
            'password' => $passwordss
        );

        $cek = $this->model_system->cek_signin("tb_masyarakat", $where)->num_rows();

        if ($cek > 0) {
            $data_session = array(
                'usernama' => $usernamess,
                'status' => 'signin'
            );

            $this->session->set_userdata($data_session);
            if ($this->session->userdata('status') == 'signin') {
                header("location:" . base_url() . 'UserDashboard/carlist');
            } else {
                echo 'Login Gagal';
            }
        } else {
            echo 'Username dan Password Salah !';
        }
    }

    public function signout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
