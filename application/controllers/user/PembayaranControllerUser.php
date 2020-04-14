<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembayaranControllerUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
    }

    public function index()
    {   
        $this->load->view('user/pembayaran');   
    }

    public function getBank(){
        $data = $this->db->query("SELECT * FROM tb_metode_pembayaran")->result();
        echo json_encode($data);
    }

    public function create(){
        $invoice = $this->input->post('invoice');
        $id_user = $this->input->post('id_user');
        $id_pembayaran = $this->input->post('id_pembayaran');
        $id_barang = $this->input->post('id_barang');
        $id_bank = $this->input->post('id_bank');
        $pengirim = $this->input->post('pengirim');
        $transfer = $this->input->post('transfer');
        $tgl_pembayaran = $this->input->post('tgl_pembayaran');

        $dataUp = array(
            'konfirmasi_user' => 1,
        );
        $this->db->where('invoice', $invoice);
        $this->myModel->update('tb_checkout',$dataUp);

        // insert
        $dataIn = array(
            'invoice' => $invoice,
            'id_user' => $id_user,
            'id_pembayaran' => $id_pembayaran,
            'id_barang' => $id_barang,
            'id_bank' => $id_bank,
            'pengirim' => $pengirim,
            'transfer' => $transfer,
            'tgl_pembayaran' => $tgl_pembayaran,
        );
        $cekInv = $this->db->query("SELECT * FROM tb_konfirmasi_user WHERE invoice = ".$invoice)->num_rows();
        if($cekInv > 0){
            $this->db->where('invoice', $invoice);
            $this->myModel->update('tb_konfirmasi_user',$dataIn);
        }else{
            $this->myModel->insert('tb_konfirmasi_user',$dataIn);
        }

        $keterangan = array(
            'id_petugas' => 0,
            'nama_aktifitas'  => 'UPDATE',
            'nama_tabel'  => 'tb_konfirmasi_user'
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);
        // insert
        $dt = array('success' => false, 'msg' => '');
        echo json_encode($dt);
    }

    public function cekInvoice(){
        $inv = $this->input->get('invoice');        
        $data['all'] = $this->db->query("SELECT * FROM tb_checkout WHERE invoice = ".$inv)->row();
        $data['count'] = $this->db->query("SELECT * FROM tb_checkout WHERE invoice = ".$inv)->num_rows();
        echo json_encode($data);
    }

}

/* End of file PembayaranControllerUser */


?>