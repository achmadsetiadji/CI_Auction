<?php
    class AdminDashboard extends CI_Controller
    {

    public function home()
    {
        $data['title'] = 'Home';
        $this->load->view('admin/adminhome');
    }

    }
