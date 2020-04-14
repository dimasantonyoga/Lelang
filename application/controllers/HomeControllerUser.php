<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeControllerUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        
    }

    public function index()
    {
        $this->load->view('user/index');
    }

    public function getData(){
        $data['segera_berakhir'] = $this->db->query("SELECT * FROM tb_barang a LEFT JOIN tb_lelang b ON a.id_barang = b.id_barang LEFT JOIN tb_kategori c on a.id_kategori = c.id_kategori LEFT JOIN tb_kota d on a.id_kota = d.id_kota  WHERE b.status = 'dibuka'  ORDER BY b.tgl_ditutup ASC LIMIT 6")->result();
        $data['rekomendasi'] = $this->db->query("SELECT * FROM tb_barang a LEFT JOIN tb_lelang b ON a.id_barang = b.id_barang LEFT JOIN tb_kategori c on a.id_kategori = c.id_kategori LEFT JOIN tb_kota d on a.id_kota = d.id_kota  WHERE b.status = 'dibuka'  ORDER BY RAND() LIMIT 6")->result();
        $data['populer'] = $this->db->query("SELECT * FROM tb_barang a LEFT JOIN tb_lelang b ON a.id_barang = b.id_barang LEFT JOIN tb_kategori c on a.id_kategori = c.id_kategori LEFT JOIN tb_kota d on a.id_kota = d.id_kota LEFT JOIN history_lelang e on e.id_barang = a.id_barang  WHERE b.status = 'dibuka' GROUP BY e.id_barang ORDER BY COUNT(e.id_barang) DESC LIMIT 6")->result();
        $data['terbaru'] = $this->db->query("SELECT * FROM tb_barang a LEFT JOIN tb_lelang b ON a.id_barang = b.id_barang LEFT JOIN tb_kategori c on a.id_kategori = c.id_kategori LEFT JOIN tb_kota d on a.id_kota = d.id_kota  WHERE b.status = 'dibuka'  ORDER BY a.tgl DESC LIMIT 6")->result();
        echo json_encode($data);
    }

    public function getJumlahPelelang(){
        $id = 0;
        if($this->input->post('id') > 0){
            $id = $this->input->post('id');
        }
        $data = $this->db->query("SELECT max(penawaran_harga) as penawaran, count(id_history) as total FROM history_lelang WHERE id_barang = ".$id)->row();
        $data = $data->total;
        echo json_encode($data);
    }

    public function checkActivity(){
        $data = $this->myModel->select('tb_aktifitas')->num_rows();
        echo json_encode($data);
    }

}

/* End of file Controllername.php */

?>