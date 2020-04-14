<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailPaymentControllerAdmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        if( $this->session->userdata('login_user') != "true" ){
            redirect(base_url());
        }
        date_default_timezone_set('Asia/Jakarta');
    }
    
    public function DataProvinsi(){
        $data = $this->db->query("SELECT * FROM tb_provinsi")->result();
        echo json_encode($data);
    }

    public function MetodePembayaran(){
        $data = $this->db->query("SELECT * FROM tb_metode_pembayaran")->result();
        echo json_encode($data);
    }

    public function DataKota(){
        $id = $this->input->post('id');
        $data = $this->db->query("SELECT * FROM tb_kota WHERE id_provinsi = ".$id)->result();
        echo json_encode($data);
    }

    public function DataBayar(){
        $id_user = $this->input->get('id_user');
        $id_barang = $this->input->get('id');
        $data['real'] = $this->db->query("SELECT * FROM tb_checkout WHERE id_barang = ".$id_barang." AND id_user = ".$id_user)->row();
        $data['count'] = $this->db->query("SELECT * FROM tb_checkout WHERE id_barang = ".$id_barang." AND id_user = ".$id_user)->num_rows();
        echo json_encode($data);
    }


    public function detail($nama,$id,$id_user){
        $data['page1'] = "Payment";
        $data['page'] = "Detail";
        $data['page_level'] = 2;
        $id = decrypt_url($id);
        $id_user = decrypt_url($id_user);
        $data['id'] = $id;
        $data['id_user'] = $id_user;
        $this->load->view('admin/detailPayment',$data);
    }

    // READ
    public function getData(){        
        $id = $this->input->get('id');        
        $data = $this->db->query("SELECT *, max(d.penawaran_harga) AS tawaran, b.foto AS foto_user FROM tb_lelang a LEFT JOIN tb_masyarakat b ON a.id_user = b.id_user LEFT JOIN tb_barang c ON c.id_barang = a.id_barang RIGHT JOIN history_lelang d ON a.id_lelang = d.id_lelang WHERE a.status='ditutup' AND a.id_barang = $id GROUP BY d.id_lelang ORDER BY a.update_at DESC")->row();
        echo json_encode($data);
    }
    
    public function Lokasi(){
        $id = $this->input->get('id');        
        $data['kota'] = $this->db->query("SELECT * FROM tb_kota where id_kota = ".$id)->row();
        $id_prov = $data['kota']->id_provinsi;
        $data['provinsi'] = $this->db->query("SELECT * FROM tb_provinsi where id_provinsi = ".$id_prov)->row();
        echo json_encode($data);
    }
}

/* End of file DetailPaymentControllerAdmin.php */
