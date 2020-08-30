<?php

class komik extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->model('komikModel');
        // error_reporting(0);
    }

    public function index() {
       // $this->semuaKomik('a');
        header('location: ' . base_url() . 'komik/semuaKomik/a');
    }

    public function formTambah() {
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
            $data['listKomik'] = $this->komikModel->selectKomik();
            $data['content'] = 'content_tambahKomik';
            // $data['menu'] = 'tambahKomik';
            $this->load->view('adminPanel', $data);
        } else {
           header('location: ' . base_url() . 'home/loginfield');
        }
    }

    public function tambahJudul() {
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
            $abjad = $this->input->post('judul');
            $abjad = substr($abjad,0,1);
            $result = $this->komikModel->tambahJudul();
            if($result == 1){
                $this->semuaKomik($abjad);
            } else {
                echo "gagal menambah judul";
            }
        } else {
           header('location: ' . base_url() . 'home/loginfield');
        }
    }

     public function tambahVolume() {
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
            $id_komik = $this->input->post('id_komik');
            $result = $this->komikModel->tambahVolume();
            if($result == 1){
                $this->koleksi($id_komik);
            } else {
                echo "gagal menambah judul";
            }
        } else {
           header('location: ' . base_url() . 'home/loginfield');
        }
    }

    public function tambahVolumeBanyak() {
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
            $id_komik = $this->input->post('id_komik');
            $result = $this->komikModel->tambahVolumeBanyak();
           if($result == 1){
                $this->koleksi($id_komik);
            } else {
                echo "gagal menambah judul";
            }
        } else {
           header('location: ' . base_url() . 'home/loginfield');
        }
    }

    public function semuaKomik($abjad) {
        if(isset($abjad)){
            $abjad = strtolower($abjad);
            $data['listKomik'] = $this->komikModel->semuaKomik($abjad);
            $data['listSlider'] = $this->komikModel->ratingTertinggi(5);
            $data['pagination'] = 'komik';
            $data['abjad'] = $abjad;
            $sess = $this->session->all_userdata();
            if (isset($sess['login'])) {
                $data['content'] = 'content_semuaKomik';
                $this->load->view('adminPanel', $data);
            } else {
                $data['content'] = 'front_semuaKomik';
                $this->load->view('front', $data);
            }
        } else{
            header('location: ' . base_url() . 'komik/semuaKomik/a');
        }
       
    }

    // public function semua_komik() {
    //     $abjad = $this->input->get('abjad');
    //     $q = $this->input->get('q');
    //     if($q == 'rating'){
    //         if(isset($abjad)){
    //             $abjad = strtolower($abjad);
    //             $data['listKomik'] = $this->komikModel->semuaKomik($abjad);
    //             $data['listSlider'] = $this->komikModel->ratingTertinggi(5);
    //             $data['ratingSukses'] = 1;
    //             $data['pagination'] = 'komik';
    //             $data['abjad'] = $abjad;
    //             $sess = $this->session->all_userdata();
    //             if (isset($sess['login'])) {
    //                 $data['content'] = 'content_semuaKomik';
    //                 $this->load->view('adminPanel', $data);
    //             } else {
    //                 $data['content'] = 'front_semuaKomik';
    //                 $this->load->view('front', $data);
    //             }
    //         } else{
    //             header('location: ' . base_url() . 'komik/semuaKomik/a');
    //         }
    //     }else{
    //         header('location: ' . base_url() . 'komik/semuaKomik/'.$abjad);
    //     }
           
    // }

    public function hapusJudul($id_komik) {
        if(isset($id_komik)){
            $sess = $this->session->all_userdata();
            if (isset($sess['login'])) {
                $abjad = $this->komikModel->selectFirstCharKomik($id_komik);
                echo $abjad;
                $result = $this->komikModel->hapusJudul($id_komik);
                if($result == 1){
                    $this->semuaKomik($abjad);
                } else{
                    echo 'gagal menghapus komik';
                }
            } else {
               header('location: ' . base_url() . 'home/loginfield');
            }
        } else {
            header('location: ' . base_url() . 'komik/semuaKomik/a');
        }
    }

    public function koleksi($id_komik) {
        if(isset($id_komik)){
            $sess = $this->session->all_userdata();
            $data['listKomik'] = $this->komikModel->koleksi($id_komik);
            if (isset($sess['login'])) {
                $data['content'] = 'content_koleksiKomik';
                $this->load->view('adminPanel', $data);
            } else {
                $data['content'] = 'content_koleksiKomik';
                $this->load->view('front', $data);
            }
        } else{ 
            header('location: ' . base_url() . 'komik/semuaKomik/a');
        }
       
    }

    public function hapusKoleksi($id_volume) {
        if(isset($id_volume)){
            $sess = $this->session->all_userdata();
            if (isset($sess['login'])) {
                $id_komik = $this->komikModel->selectIdKomik($id_volume);
                $result = $this->komikModel->hapusKoleksi($id_volume);
                if($result == 1){
                    header('location: ' . base_url() . 'komik/koleksi/'.$id_komik);
                } else{
                    echo 'gagal menghapus komik';
                }
            } else {
               header('location: ' . base_url() . 'home/loginfield');
            }
        }  else { 
            header('location: ' . base_url() . 'komik/semuaKomik/a');
        }
    }

    public function cari() {
        $data['listKomik'] = $this->komikModel->cari();
        $data['listSlider'] = $this->komikModel->ratingTertinggi(5);
        $data['pagination'] = 'komik';
        $data['abjad'] = 'cari';
        $sess = $this->session->all_userdata();
        if (isset($sess['login'])) {
            $data['content'] = 'content_semuaKomik';
            $this->load->view('adminPanel', $data);
        } else {
            $data['content'] = 'front_semuaKomik';
            $this->load->view('front', $data);
        }
    }

    public function rate() {
        $id_komik = $this->input->post('id_komik');
        $abjad = $this->komikModel->selectFirstCharKomik($id_komik);
        $result = $this->komikModel->rate();
        if($result == 1){
            header('location: ' . base_url() . 'komik/semuaKomik/'.$abjad);
        } else {
           echo "gagal memberi rating";
        }
    }

}

?>