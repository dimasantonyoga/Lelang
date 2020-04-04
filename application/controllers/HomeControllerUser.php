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
        // $data['count'] = $this->myModel->selectOrder('tb_kategori','create_at','DESC')->num_rows();
        echo json_encode($data);
    }

    public function checkActivity(){
        $data = $this->myModel->select('tb_aktifitas')->num_rows();
        echo json_encode($data);
    }

}

/* End of file Controllername.php */

?>