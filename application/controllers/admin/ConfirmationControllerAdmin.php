<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfirmationControllerAdmin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        if( $this->session->userdata('login_petugas') != TRUE){
            redirect(base_url());
        }
        date_default_timezone_set('Asia/Jakarta');
        //Do your magic here
    }
    

    public function index()
    {
        
        if($this->input->get('prdk') != ''){
            $id_p = encrypt_url($this->input->get('prdk'));
            $id_u = encrypt_url($this->input->get('id'));
            redirect(base_url('admin/payment/detail/'.$this->input->get('nm').'/'.$id_p.'/'.$id_u));
        }else{        
        $data['page'] = "Payment";
        $data['page_level'] = 1;
        $this->load->view('admin/paymentConfirmation',$data);
        }

    }

    public function getDetail(){
        $id = $this->input->post('id');
        $data = $this->db->query("SELECT * FROM tb_konfirmasi_user a LEFT JOIN tb_metode_pembayaran b oN b.id_metode = a.id_bank WHERE id_pembayaran = ".$id)->row();
        echo json_encode($data);
        
    }

    // READ
    public function getData(){
        $data = $this->db->query("SELECT *, max(d.penawaran_harga) AS tawaran, b.foto AS foto_user,b.id_user AS id_user, c.id_barang AS id_barang FROM tb_lelang a LEFT JOIN tb_masyarakat b ON a.id_user = b.id_user LEFT JOIN tb_barang c ON c.id_barang = a.id_barang RIGHT JOIN history_lelang d ON a.id_lelang = d.id_lelang LEFT JOIN tb_checkout e ON a.id_barang = e.id_barang WHERE a.status='ditutup' GROUP BY d.id_lelang ORDER BY e.konfirmasi_user DESC")->result();
        echo json_encode($data);
    }

    public function konfirmasi(){
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        $data = array(
            'konfirmasi_petugas' => $status,
        );
        $this->db->where('id_checkout', $id);
        $this->myModel->update('tb_checkout',$data);

        // INSERT TABLE AktifitAS
        $keterangan = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nama_aktifitas'  => 'UPDATE',
            'nama_tabel'  => 'tb_checkout'
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);

        $dt = array('success' => false, 'msg' => '');
        echo json_encode($dt);
    }

    // delete
    public function delete(){
        $id = $this->input->post('id');
        $this->db->where('id_metode', $id);
        $this->db->delete('tb_metode_pembayaran');
        // INSERT TABLE AktifitAS
        $keterangan = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nama_aktifitas'  => 'DELETE',
            'nama_tabel'  => 'tb_metode_pembayaran'
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);
        echo json_encode($id);
    }

    // update
    public function update(){
        $data = array(
            'nama_bank' => $this->input->post('bank'),
            'nama_penerima' => $this->input->post('nama'),
            'rekening' => $this->input->post('rek'),
        );
        $id = $this->input->post('id');
        $this->db->where('id_metode', $id);
        $up = $this->myModel->update('tb_metode_pembayaran',$data);

        // INSERT TABLE AktifitAS
        $keterangan = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nama_aktifitas'  => 'UPDATE',
            'nama_tabel'  => 'tb_metode_pembayaran'
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);

        $dt = array('success' => false, 'msg' => '');
        if($up){
            $dt = array('success' => true, 'msg' => '');
        }
        echo json_encode($dt);
    }
}

/* End of file ConfirmationControllerAdmin.php */
