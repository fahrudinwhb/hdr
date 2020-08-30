    <?php

class komikModel extends CI_Model {

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
                'deskripsi' => $deskripsi,
                'rating' => 0
            );
            $query = $this->db->insert('judul_komik', $data);

            return $query;
        } else {
            return false;
        }
    }

    public function tambahVolume() {
        $id_komik = $this->input->post('id_komik');
        $volume = $this->input->post('volume');
        $data = array(
            'id_komik' => $id_komik,
            'volume' => $volume
            );
        $query = $this->db->insert('volume_komik', $data);
        return $query;
    }

    public function tambahVolumeBanyak() {
        $id_komik = $this->input->post('id_komik');
        $mulai = $this->input->post('mulai');
        $sampai = $this->input->post('sampai');

        for($i=$mulai; $i<=$sampai; $i++){
            $data = array(
            'id_komik' => $id_komik,
            'volume' => $i
            );
        $query = $this->db->insert('volume_komik', $data);    
        }

        
        return $query;
    }

    public function selectKomik() {
        $query = $this->db->get('judul_komik');
        return $query->result_array();
    }

    public function semuaKomik($abjad) {
        if($abjad=='else'){
            $query = $this->db->query("SELECT * FROM judul_komik WHERE judul LIKE '1%' OR judul LIKE '2%' OR judul LIKE '3%' OR judul LIKE '4%' OR judul LIKE '5%' OR judul LIKE '6%' OR judul LIKE '7%' OR judul LIKE '8%' OR judul LIKE '9%' OR judul LIKE '0%'");
        } else{
            $query = $this->db->query("SELECT * FROM judul_komik WHERE judul LIKE '$abjad%'");   
        }
        return $query->result_array();
    }

    public function hapusJudul($id_komik) {
        $this->db->delete('volume_komik', array('id_komik' => $id_komik));
        $this->db->delete('rating_komik', array('id_komik' => $id_komik));
        $query = $this->db->delete('judul_komik', array('id_komik' => $id_komik));
        return $query;
    }

    public function koleksi($id_komik) {
        $query = $this->db
        ->select("*")
        ->from('judul_komik')
        ->join('volume_komik', 'judul_komik.id_komik = volume_komik.id_komik', 'left')
        ->where('volume_komik.id_komik', $id_komik)
        ->get();
        return $query->result_array();
    }

    public function hapusKoleksi($id_volume) {
        $query = $this->db->delete('volume_komik', array('id_volume' => $id_volume));
        return $query;
    }

    public function selectIdKomik($id_volume) {
        $query = $this->db->get_where('volume_komik', array('id_volume' => $id_volume));
        $q = $query->result_array();
        $result = $q[0]['id_komik'];
        return $result;
    }

    public function selectFirstCharKomik($id_komik) {
        $query = $this->db->get_where('judul_komik', array('id_komik' => $id_komik));
        $q = $query->result_array();
        $result = $q[0]['judul'];
        $char = substr($result,0,1);
        return $char;
    }

     public function cari() {
        $q = $this->input->get('q');
        $query = $this->db->select("*")->like('judul', $q)->or_like('deskripsi', $q)->get('judul_komik');
        return $query->result_array();
    }

    public function rate() {
        $id_komik = $this->input->post('id_komik');
        $rate = $this->input->post('rate');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');

        $data = array(
            'rate' => $rate,
            'nama' => $nama,
            'email' => $email,
            'id_komik' => $id_komik
        );

        $cek = $this->db->get_where('rating_komik', array('email' => $email, 'id_komik' => $id_komik));
        $cek = $cek->result_array();

        if($cek != null){
            $this->db->where('id_rate_komik', $cek[0]['id_rate_komik']);
            $query = $this->db->update('rating_komik', $data);
        } else{
            $query = $this->db->insert('rating_komik', $data);
        }

        $avgrate = $this->db->select_avg('rate')->where('id_komik', $id_komik)->get('rating_komik');
        $avgrate = $avgrate->result_array();

        $this->db->where('id_komik', $id_komik);
        $this->db->update('judul_komik',array('rating' => $avgrate[0]['rate']));

        return $query;
    }

    public function ratingTertinggi($jumlah) {
        $query = $this->db->select("*")->from('judul_komik')->order_by('rating', 'DESC')->limit($jumlah)->get();
        return $query->result_array();
    }

    public function ratingTerendah($jumlah) {
        $query = $this->db
        ->select("*")
        ->from('judul_komik')
        ->where('rating >=', '1')
        ->order_by('rating', 'ASC')
        ->limit($jumlah)
        ->get();
        return $query->result_array();
    }

    public function semuaRequest() {
        $query = $this->db->where('jenis', 'komik')->get('request');
        return $query->result_array();
    }

}
