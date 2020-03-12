<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class AuthControllerAdmin extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->model('myModel');
            if( $this->session->userdata('login_petugas') == TRUE ){
                redirect(base_url('admin/dashboard'));
            }
            date_default_timezone_set('Asia/Jakarta');
        }
        

        public function index()
        {
            $this->load->view('admin/authAdmin');
        }

        public function loginCheck(){
            $where = array(
                'username' => $this->input->post('username'),
                'password' => substr(md5($this->input->post('password')),0,25),
            );
            $cek = $this->myModel->selectWhere('tb_petugas',$where)->num_rows();
            $data = array('success' => false, 'msg' => '');
            if($cek > 0){
                $hasil = $this->myModel->selectWhere('tb_petugas',$where)->row();
                $sessionData = array(
                    'id_petugas'  => $hasil->id_petugas,
                    'nama_petugas'  => $hasil->nama_petugas,
                    'username_petugas'  => $hasil->username,
                    'id_level'  => $hasil->id_level,
                    'login_petugas' => TRUE
                );
                $this->session->set_userdata($sessionData);
                $data = array('success' => true, 'msg' => '');
            }
            echo json_encode($data);
        }
    
    }
    
    /* End of file AuthControllerAdmin.php */
    
?>