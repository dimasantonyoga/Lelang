<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RecapitulationControllerAdmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        if( $this->session->userdata('login_petugas') != TRUE ){
            redirect(base_url());
        }
        date_default_timezone_set('Asia/Jakarta');
        //Do your magic here
    }
    

    public function index()
    {
        $data['page'] = "Recapitulation";
        $data['page_level'] = 1;
        $this->load->view('admin/rekapAdmin',$data);
    }

    public function getDataCheckout($id_barang){

    }

    public function filter(){
        $start = $this->input->get('start');        
        $end = $this->input->get('end');        
        $status = $this->input->get('status');        
        $min = $this->input->get('min');        
        $max = $this->input->get('max');        
        $this->db->select('*');
        $this->db->from("tb_lelang a");
        $this->db->join("tb_barang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_checkout c", "a.id_barang = c.id_barang", "LEFT JOIN");
        $this->db->join("tb_masyarakat d", "a.id_user = d.id_user", "LEFT JOIN");
        $this->db->where('a.status',"ditutup");
        $this->db->where('a.tgl_dibuka > ',$start);
        $this->db->where('a.tgl_ditutup < ',$end);
        if($status == "d"){
            $this->db->where('c.konfirmasi_petugas',1);
        }else if($status == "bd"){
            $this->db->where('c.konfirmasi_petugas',0);
        }

        if($min != ''){
            $this->db->where('b.harga_awal > ',$min);
        }
        if($max != ''){
            $this->db->where('b.harga_awal < ',$max);
        }
        
        $this->db->group_by('a.id_barang');
        $data = $this->db->get()->result();
        echo json_encode($data);
    }

    // READ
    public function getKategori(){
        $data = $this->db->query("SELECT * FROM tb_kategori")->result();
        echo json_encode($data);
    }

    public function getData(){
        $data['real'] = $this->myModel->selectOrder('tb_kategori','create_at','DESC')->result();
        $data['count'] = $this->myModel->selectOrder('tb_kategori','create_at','DESC')->num_rows();
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
            'id_kategori' => $this->input->post('id'),
        );
        $data = $this->myModel->selectWhere('tb_kategori',$where)->row();
        echo json_encode($data);

    }

    // create
    public function create(){
        // INSERT TABLE
        $data = array(
            'nama_kategori' => $this->input->post('name'),
            'ongkir' => $this->input->post('ongkir'),

        );
        $insert = $this->myModel->insert('tb_kategori',$data);

        $data = array('success' => false, 'msg' => '');
        if($insert){
            // INSERT TABLE AktifitAS
            $keterangan = array(
                'id_petugas' => $this->session->userdata('id_petugas'),
                'nama_aktifitas'  => 'CREATE',
                'nama_tabel'  => 'tb_kategori',
            );
            $this->myModel->insert('tb_aktifitas',$keterangan);
            $data = array('success' => true, 'msg' => '');
        }
        echo json_encode($data);
    }

    // delete
    public function delete(){
        $id = $this->input->post('id');
        $this->db->where('id_kategori', $id);
        $this->db->delete('tb_kategori');
        // INSERT TABLE AktifitAS
        $keterangan = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nama_aktifitas'  => 'DELETE',
            'nama_tabel'  => 'tb_kategori'
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);
        echo json_encode($id);
    }

    // update
    public function update(){
        $data = array(
            'nama_kategori' => $this->input->post('nama'),
            'ongkir'   => $this->input->post('ongkir'),
        );
        $id = $this->input->post('id');
        $this->db->where('id_kategori', $id);
        $up = $this->myModel->update('tb_kategori',$data);

        // INSERT TABLE AktifitAS
        $keterangan = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nama_aktifitas'  => 'UPDATE',
            'nama_tabel'  => 'tb_kategori'
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);

        $dt = array('success' => false, 'msg' => '');
        if($up){
            $dt = array('success' => true, 'msg' => '');
        }
        echo json_encode($dt);
    }
}

/* End of file RecapitulationControllerAdmin.php */
