<?php

class novel extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->model('novelModel');
    }

    public function index() {
       $this->semuaNovel('a');
    }

    public function formTambah() {
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
            $data['content'] = 'content_tambahNovel';
            // $data['menu'] = 'tambahnovel';
            $this->load->view('adminPanel', $data);
        } else {
           header('location: ' . base_url() . 'home/loginfield');
        }
    }

    public function tambahJudul() {
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
            $result = $this->novelModel->tambahJudul();
             if($result == 1){
                $this->semuaNovel('a');
            } else {
                echo "gagal menambah judul";
            }
        } else {
           header('location: ' . base_url() . 'home/loginfield');
        }
    }

    public function semuaNovel($abjad) {
        if(isset($abjad)){
            $abjad = strtolower($abjad);
            $data['listNovel'] = $this->novelModel->semuaNovel($abjad);
            $data['listSlider'] = $this->novelModel->ratingTertinggi(5);
            $data['pagination'] = 'novel';
            $data['abjad'] = $abjad;
            $sess = $this->session->all_userdata();
            if (isset($sess['login'])) {
                $data['content'] = 'content_semuaNovel';
                $this->load->view('adminPanel', $data);
            } else {
                $data['content'] = 'front_semuaNovel';
                $this->load->view('front', $data);
            }
        } else{
            header('location: ' . base_url() . 'novel/semuaNovel/a');
        }
       
    }

    public function hapusJudul($id_novel) {
        if(isset($id_novel)){
            $sess = $this->session->all_userdata();
            if (isset($sess['login'])) {
                $result = $this->novelModel->hapusJudul($id_novel);
                if($result == 1){
                    $this->semuaNovel('a');
                } else{
                    echo 'gagal menghapus novel';
                }
            } else {
               header('location: ' . base_url() . 'home/loginfield');
            }
        }  else{ 
            header('location: ' . base_url() . 'novel/semuaNovel/a');
        }
    }

    public function cari() {
        $data['listNovel'] = $this->novelModel->cari();
        $data['listSlider'] = $this->novelModel->ratingTertinggi(5);
        $data['pagination'] = 'novel';
        $data['abjad'] = 'cari';
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
            $data['content'] = 'content_semuaNovel';
            $this->load->view('adminPanel', $data);
        } else {
            $data['content'] = 'front_semuaNovel';
            $this->load->view('front', $data);
        }
    }


    public function rate() {
        $id_novel = $this->input->post('id_novel');
        $abjad = $this->novelModel->selectFirstCharNovel($id_novel);
        $result = $this->novelModel->rate();
        if($result == 1){
            header('location: ' . base_url() . 'novel/semuaNovel/'.$abjad);
        } else {
           echo "gagal memberi rating";
        }
    }
}

?>