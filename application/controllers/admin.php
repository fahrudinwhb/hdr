<?php

class admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->model('komikModel');
        $this->load->model('novelModel');
        $this->load->model('adminModel');
    }


    public function index() {
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
            $data['content'] = 'content_dashboard';
            $this->load->view('adminPanel', $data);
        } else {
            header('location: ' . base_url() . 'home/loginfield');
        }
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $result = $this->adminModel->login($username, $password);
        if ($result == null) {
            header('location: ' . base_url() . 'home/loginfield');
        } else {
             header('location: ' . base_url() . 'admin');
        }
    }

    public function logout() {
        $this->session->unset_userdata('login');
        $this->session->unset_userdata('username');
        header('location: ' . base_url());
    }

    public function ratingBuku() {
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
            $data['listKomikTinggi'] = $this->komikModel->ratingTertinggi(10);
            $data['listKomikRendah'] = $this->komikModel->ratingTerendah(10);
            $data['listNovelTinggi'] = $this->novelModel->ratingTertinggi(10);
            $data['listNovelRendah'] = $this->novelModel->ratingTerendah(10);
            $data['content'] = 'content_ratingBuku';
            $this->load->view('adminPanel', $data);
        } else {
           header('location: ' . base_url() . 'home/loginfield');
        }
    }

    public function semuaRequest() {
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
           $data['listKomik'] = $this->komikModel->semuaRequest();
           $data['listNovel'] = $this->novelModel->semuaRequest();
           $data['content'] = 'content_request';
           $this->load->view('adminPanel', $data);
        } else {
          header('location: ' . base_url() . 'home/loginfield');
        }
    }

    public function hapusRequest($id_request) {
        if(isset($id_request)){
            $sess = $this->session->all_userdata();
            if (isset($sess['login'])) {
                $result = $this->adminModel->hapusRequest($id_request);
                if($result == 1){
                    header('location: ' . base_url() . 'admin/semuaRequest');
                } else{
                    echo 'gagal menghapus request';
                }
            } else {
               header('location: ' . base_url() . 'home/loginfield');
            }
        } else { 
            header('location: ' . base_url() . 'admin/semuaRequest');
        }
    }

}

?>