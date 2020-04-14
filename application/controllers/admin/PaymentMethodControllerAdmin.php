<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PaymentMethodControllerAdmin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        if( $this->session->userdata('login_petugas') != TRUE && $this->session->userdata('id_level') != 1){
            redirect(base_url());
        }
        date_default_timezone_set('Asia/Jakarta');
        //Do your magic here
    }
    

    public function index()
    {
        $data['page'] = "Payment Method";
        $data['page_level'] = 1;
        $this->load->view('admin/paymentMethod',$data);
    }

    // READ
    public function getData(){
        $data['real'] = $this->myModel->selectOrder('tb_metode_pembayaran','id_metode','DESC')->result();
        echo json_encode($data);
    }

    // Cek aktifitas
    public function checkActivity(){
        $data = $this->myModel->select('tb_aktifitas')->num_rows();
        echo json_encode($data);
    }

    // get data where
    public function getDataWhere(){
        $where = array(
            'id_metode' => $this->input->post('id'),
        );
        $data = $this->myModel->selectWhere('tb_metode_pembayaran',$where)->row();
        echo json_encode($data);

    }

    // create
    public function create(){
        // INSERT TABLE 
        $data = array(
            'nama_bank' => $this->input->post('bank'),
            'nama_penerima' => $this->input->post('nama'),
            'rekening' => $this->input->post('rek'),

        );
        $insert = $this->myModel->insert('tb_metode_pembayaran',$data);

        $data = array('success' => false, 'msg' => '');
        if($insert){
            // INSERT TABLE AktifitAS
            $keterangan = array(
                'id_petugas' => $this->session->userdata('id_petugas'),
                'nama_aktifitas'  => 'CREATE',
                'nama_tabel'  => 'tb_metode_pembayaran',
            );
            $this->myModel->insert('tb_aktifitas',$keterangan);
            $data = array('success' => true, 'msg' => '');
        }
        echo json_encode($data);
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

/* End of file PaymentMethodControllerAdmin.php */
