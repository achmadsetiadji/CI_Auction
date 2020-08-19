<?php
class AdminDashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_system');
    }

    public function index()
    {
        $data['title'] = 'Admin Home';
        $this->load->view('admin/adminhome', $data);
    }

    public function adduser()
    {
        $data['title'] = 'Add User';
        $this->load->view('admin/addusers', $data);
    }

    public function addofficer()
    {
        $data['title'] = 'Add User';
        $this->load->view('admin/addofficer', $data);
    }

    public function additem()
    {
        $data['title'] = 'Add User';
        $this->load->view('admin/additem', $data);
    }

    public function insert_user()
    {
        $this->model_system->insert_datauser();
    }

    public function userstable()
    {
        $data['title'] = 'Users Table';
        $data['user'] = $this->model_system->get_user();
        $data['c_user'] = $this->model_system->count_user();
        $this->load->view('admin/userstable', $data);
    }

    public function officerstable()
    {
        $data['title'] = 'Officers Table';
        $data['user'] = $this->model_system->get_officer();
        $data['c_user'] = $this->model_system->count_officer();
        $this->load->view('admin/officertable', $data);
    }

    public function adminstable()
    {
        $data['title'] = 'Admins Table';
        $data['user'] = $this->model_system->get_officer();
        $data['c_user'] = $this->model_system->count_officer();
        $this->load->view('admin/officertable', $data);
    }

    public function itemstable()
    {
        $data['title'] = 'Items Table';
        $data['user'] = $this->model_system->get_item();
        $data['c_user'] = $this->model_system->count_item();
        $this->load->view('admin/itemtable', $data);
    }
}