<?php

class home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->model('adminModel');
    }

    public function index() {
       $data['content'] = 'front_home';
       $this->load->view('front', $data);
    }

    public function loginfield() {
        $data['content'] = 'front_home';
        $data['login'] = 0;
        $this->load->view('front', $data);
    }  

    public function form_request() {
        $data['content'] = 'front_request';
        $this->load->view('front', $data); 
    }

    public function request() {
        $result = $this->adminModel->request();
            if($result == 1){
             $data['content'] = 'front_request';
             $data['requestSukses'] = 1;
             $this->load->view('front', $data); 
         } else {
            echo "gagal melakukan request";
        }
    }
}

?>