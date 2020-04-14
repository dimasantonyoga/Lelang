<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthControllerUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        // $this->load->helper('form');
        // $this->load->library('form_validation');
    }

    public function index()
    {
        return $this->load->view('user/authUser');
    }

    // CHECK LOGIN
    public function loginCheck(){
        $where = array(
            'username' => $this->input->post('username'),
            'password' => substr(md5($this->input->post('password')),0,25),
        );
        $cek = $this->myModel->selectWhere('tb_masyarakat',$where)->num_rows();
        $data = array('success' => false, 'msg' => '');
        if($cek > 0){
            $hasil = $this->myModel->selectWhere('tb_masyarakat',$where)->row();
            $sessionData = array(
                'id_user'  => $hasil->id_user,
                'name_user'  => $hasil->nama_lengkap,
                'username_user'  => $hasil->username,
                'telp_user'  => $hasil->telp,
                'login_user' => "true"
            );
            $this->session->set_userdata($sessionData);
            $data = array('success' => true, 'msg' => '');
        }
        echo json_encode($data);
    }
 
    // INSERT DATA IN TABLE MASYARAKAT
    public function register(){
        $data = array(
            'nama_lengkap' => $this->input->post('registerName'),
            'username'   => $this->input->post('registerUsername'),
            'password'   => md5($this->input->post('registerPassword')),
            'telp'   => $this->input->post('registerTelephone')
        );
        $insert = $this->myModel->insert('tb_masyarakat',$data);
        // INSERT TABLE AktifitAS
        $keterangan = array(
            'id_petugas' => 0,
            'nama_aktifitas'  => 'CREATE',
            'nama_tabel'  => 'tb_masyarakat',
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);

        $data = array('success' => false, 'msg' => '');
        if($insert){
            $data = array('success' => true, 'msg' => '');
        }
        echo json_encode($data);
    }

    // CHECK USERNAME IN TABLE MASYARAKAT
    public function registerCheckUsername(){
        $where = array(
            'username' => $this->input->post('username'),
        );
        $cek = $this->myModel->selectWhere('tb_masyarakat',$where)->num_rows();
        $data = array('success' => false, 'msg' => '');
        if($cek > 0){
            $data = array('success' => true, 'msg' => '');
        }
        echo json_encode($data);
    }

    // Logout
    public function logout(){
        $this->session->sess_destroy();
        $data = "ok";
        echo $data;
    }

}

/* End of file Register.php */


?>