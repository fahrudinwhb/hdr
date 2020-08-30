<?php

class novelModel extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function tambahJudul() {
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $gambar = $_FILES['gambar']['name'];
        $dot = explode(".", $gambar);
        $ct = count($dot) - 1;
       if ($dot[$ct] == "jpg" || $dot[$ct] == "JPG" || $dot[$ct] == "png" || $dot[$ct] == "PNG" || $dot[$ct] == "jpeg" || $dot[$ct] == "JPEG" || $dot[$ct] == "gif" || $dot[$ct] == "GIF") {
            $image_name = md5($gambar . date('Y-m-d H:i:s')) . '.' . $dot[$ct];
            move_uploaded_file($_FILES["gambar"]["tmp_name"], "assets/img/" . $image_name);

            $data = array(
                'judul' => $judul,
                'gambar' => $image_name,
                'deskripsi' => $deskripsi
            );
            $query = $this->db->insert('judul_novel', $data);

            return $query;
        } else {
            return false;
        }
    }

    public function semuaNovel($abjad) {
        if($abjad=='else'){
            $query = $this->db->query("SELECT * FROM judul_novel WHERE judul LIKE '1%' OR judul LIKE '2%' OR judul LIKE '3%' OR judul LIKE '4%' OR judul LIKE '5%' OR judul LIKE '6%' OR judul LIKE '7%' OR judul LIKE '8%' OR judul LIKE '9%' OR judul LIKE '0%'");
        } else{
            $query = $this->db->query("SELECT * FROM judul_novel WHERE judul LIKE '$abjad%'");   
        }
        return $query->result_array();
    }

    public function hapusJudul($id_novel) {
        $this->db->delete('rating_novel', array('id_novel' => $id_novel));
        $query = $this->db->delete('judul_novel', array('id_novel' => $id_novel));
        return $query;
    }

    public function cari() {
        $q = $this->input->get('q');
        $query = $this->db->select("*")->from('judul_novel')->like('judul', $q)->or_like('deskripsi', $q)->get();
        return $query->result_array();
    }

     public function selectFirstCharNovel($id_novel) {
        $query = $this->db->get_where('judul_novel', array('id_novel' => $id_novel));
        $q = $query->result_array();
        $result = $q[0]['judul'];
        $char = substr($result,0,1);
        return $char;
    }


    public function rate() {
        $id_novel = $this->input->post('id_novel');
        $rate = $this->input->post('rate');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');

        $data = array(
            'rate' => $rate,
            'nama' => $nama,
            'email' => $email,
            'id_novel' => $id_novel
        );

        $cek = $this->db->get_where('rating_novel', array('email' => $email, 'id_novel' => $id_novel));
        $cek = $cek->result_array();

        if($cek != null){
            $this->db->where('id_rate_novel', $cek[0]['id_rate_novel']);
            $query = $this->db->update('rating_novel', $data);
        } else{
            $query = $this->db->insert('rating_novel', $data);
        }

        $avgrate = $this->db->select_avg('rate')->from('rating_novel')->where('id_novel', $id_novel)->get();
        $avgrate = $avgrate->result_array();

        $this->db->where('id_novel', $id_novel)->update('judul_novel',array('rating' => $avgrate[0]['rate']));

        return $query;
    }

    public function ratingTertinggi($jumlah) {
        $query = $this->db->select("*")->from('judul_novel')->order_by('rating', 'DESC')->limit($jumlah)->get();
        return $query->result_array();
    }

    public function ratingTerendah($jumlah) {
        $query = $this->db
        ->select("*")
        ->from('judul_novel')
        ->where('rating >=', '1')
        ->order_by('rating', 'ASC')
        ->limit($jumlah)
        ->get();
        return $query->result_array();
    }

    public function semuaRequest() {
        $query = $this->db->where('jenis', 'novel')->get('request');
        return $query->result_array();
    }

}

