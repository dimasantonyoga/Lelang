<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PemenangControllerUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
    }

    public function index()
    {
        
        $this->load->view('user/pemenang');
        
    }

    public function getData(){
        $data = $this->db->query("SELECT *, max(d.penawaran_harga) AS tawaran, b.foto AS foto_user FROM tb_lelang a LEFT JOIN tb_masyarakat b ON a.id_user = b.id_user LEFT JOIN tb_barang c ON c.id_barang = a.id_barang RIGHT JOIN history_lelang d ON a.id_lelang = d.id_lelang WHERE a.status='ditutup' GROUP BY d.id_lelang ORDER BY a.update_at DESC")->result();
        echo json_encode($data);
    }
}

/* End of file PemenangControllerUser */


?>