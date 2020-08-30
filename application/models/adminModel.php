<?php

class adminModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($username, $password) {
        $data = array(
            'username' => $username,
            'password' => $password,
        );
        $enc_password = md5($data['password']);
        $username = $data['username'];
        $query = $this->db->get_where('user', array('username' => $username, 'password' => $enc_password));
        $log = $query->result_array();
        if (count($log) > 0) {
            $datalog = array(
                'login' => 1,
                'username' => $log[0]['username']
            );
            $this->session->set_userdata($datalog);
            return $datalog;
        } else {
            return $log;
        }
    }

    public function request() {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $jenis = $this->input->post('jenis');
        $judul = $this->input->post('judul');

        $data = array(
            'nama' => $nama,
            'email' => $email,
            'jenis' => $jenis,
            'judul' => $judul
            );
        $query = $this->db->insert('request', $data);
        return $query;
    }

    public function hapusRequest($id_request) {
        $query = $this->db->delete('request', array('id_request' => $id_request));
        return $query;
    }

}
