<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserControllerAdmin extends CI_Controller {

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
        $data['page'] = "User";
        $data['page_level'] = 1;
        $this->load->view('admin/userAdmin',$data);
    }

    // READ
    public function getData(){
        $data['real'] = $this->myModel->selectOrder('tb_masyarakat','create_at','DESC')->result();
        $data['count'] = $this->myModel->selectOrder('tb_masyarakat','create_at','DESC')->num_rows();
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
            'id_user' => $this->input->post('id'),
        );
        $data = $this->myModel->selectWhere('tb_masyarakat',$where)->row();
        echo json_encode($data);

    }

    // create
    public function create(){
        // INSERT TABLE
        $data = array(
            'nama_lengkap' => $this->input->post('registerName'),
            'username'   => $this->input->post('registerUsername'),
            'password'   => md5($this->input->post('registerPassword')),
            'telp'   => $this->input->post('registerTelephone'),
            'create_at'   => date('Y-m-d H:i:s'),
            'update_at' => '0000-00-00 00:00:00',
        );
        $insert = $this->myModel->insert('tb_masyarakat',$data);

        $data = array('success' => false, 'msg' => '');
        if($insert){
            // INSERT TABLE AktifitAS
            $keterangan = array(
                'id_petugas' => $this->session->userdata('id_petugas'),
                'nama_aktifitas'  => 'CREATE',
                'nama_tabel'  => 'tb_masyarakat',
                'create_at'  => date('Y-m-d H:i:s'),
            );
            $this->myModel->insert('tb_aktifitas',$keterangan);
            $data = array('success' => true, 'msg' => '');
        }
        echo json_encode($data);
    }

    // delete
    public function delete(){
        $id = $this->input->post('id');
        $this->db->where('id_user', $id);
        $this->db->delete('tb_masyarakat');
        // INSERT TABLE AktifitAS
        $keterangan = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nama_aktifitas'  => 'DELETE',
            'nama_tabel'  => 'tb_masyarakat',
            'create_at'  => date('Y-m-d H:i:s'),
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);
        echo json_encode($id);
    }

    // update
    public function update(){
        $data = array(
            'nama_lengkap' => $this->input->post('registerName'),
            'username'   => $this->input->post('registerUsername'),
            'password'   => md5($this->input->post('registerPassword')),
            'telp'   => $this->input->post('registerTelephone'),
            'update_at' => date('Y-m-d H:i:s'),
        );
        $id = $this->input->post('id');
        $this->db->where('id_user', $id);
        $up = $this->myModel->update('tb_masyarakat',$data);

        // INSERT TABLE AktifitAS
        $keterangan = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nama_aktifitas'  => 'UPDATE',
            'nama_tabel'  => 'tb_masyarakat',
            'create_at'  => date('Y-m-d H:i:s'),
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);

        $dt = array('success' => false, 'msg' => '');
        if($up){
            $dt = array('success' => true, 'msg' => '');
        }
        echo json_encode($dt);
    }
}

/* End of file UserControllerAdmin.php */
