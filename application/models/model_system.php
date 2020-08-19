<?php

class model_system extends CI_Model
{
    //user
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

    //admin
    public function insert_datauser()
    {
        $data = array(
            'id_user' => "",
            'nama_lengkap' => $this->input->post('names'),
            'username' => $this->input->post('usernames'),
            'password' => $this->input->post('passwords'),
            'telp' => $this->input->post('phonenumbs')
        );

        $this->db->insert('tb_masyarakat', $data);
        header("Location:" . base_url('AdminDashboard/userstable'));
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

    public function get_officer()
    {
        $data = $this->db->get('tb_petugas');
        return $data->result();
    }

    public function count_officer()
    {
        $data = $this->db->get('tb_petugas');
        return $data->num_rows();
    }

    // public function get_admin()
    // {
    //     $data = $this->db->get_where('tb_petugas', 'id_level=1');
    //     return $data->result();
    // }

    // public function count_admin()
    // {
    //     $data = $this->db->get_where('tb_petugas', 'id_level=1');
    //     return $data->num_rows();
    // }

    public function get_item()
    {
        $data = $this->db->get('tb_barang');
        return $data->result();
    }

    public function count_item()
    {
        $data = $this->db->get('tb_barang');
        return $data->num_rows();
    }

    public function cek_signin($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
