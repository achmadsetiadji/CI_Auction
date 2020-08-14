<?php

class model_system extends CI_Model
{
    public function insert_data()
    {
        $data = array(
            'id_user' => "",
            'nama_lengkap' => $this->input->post('names'),
            'username' => $this->input->post('usernames'),
            'password' => $this->input->post('passwords'),
            'telp' => $this->input->post('phonenumbs')
        );

        $this->db->insert('tb_masyarakat', $data);
        header("Location:" . base_url('UserDashboard/signin'));
    }

    public function get_user()
    {
        $data = $this->db->get('tb_masyarakat');
        return $data->result();
    }

    public function count_user()
    {
        $data = $this->db->get('tb_masyarakat');
        return $data->num_rows();
    }

    public function cek_signin($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
