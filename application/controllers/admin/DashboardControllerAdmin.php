<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardControllerAdmin extends CI_Controller {

    
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
    

    public function index(){
        $data['page'] = "Dashboard";
        $this->load->view('admin/dashboardAdmin',$data);
    }

    public function getData(){
        $user = $this->myModel->select('tb_masyarakat')->num_rows();
        $officer = $this->myModel->selectWhere('tb_petugas','id_level = 2')->num_rows();
        $product = $this->myModel->select('tb_barang')->num_rows();
        $countActivity = $this->myModel->select('tb_aktifitas')->num_rows();
        if($countActivity > 4){
            $limitActivity = ($countActivity-4); 
        }else{
            $limitActivity =0;
        }
        if($this->session->userdata('id_level') == 1){
            $activity = $this->db->query("SELECT `nama_petugas`,`nama_tabel`,`nama_aktifitas`,tb_aktifitas.create_at FROM `tb_aktifitas` LEFT JOIN tb_petugas ON tb_petugas.id_petugas = tb_aktifitas.id_petugas where tb_aktifitas.id_petugas !=0 order by create_at desc limit 4")->result();
        }else{
            $activity = $this->db->query("SELECT `nama_petugas`,`nama_tabel`,`nama_aktifitas`,tb_aktifitas.create_at FROM `tb_aktifitas` LEFT JOIN tb_petugas ON tb_petugas.id_petugas = tb_aktifitas.id_petugas where tb_aktifitas.id_petugas !=0 and tb_aktifitas.id_petugas != 1 order by create_at desc limit 4")->result();
        }
        $dataAdmin = $this->myModel->joinWhere('tb_petugas','tb_level','tb_petugas.id_level = tb_level.id_level','left','id_petugas = '.$this->session->userdata('id_petugas'))->row();
        $ChartDraf = $this->myModel->selectWhere('tb_barang','status = "draf"')->num_rows();
        $ChartOpen = $this->myModel->selectWhere('tb_barang','status = "dibuka"')->num_rows();
        $ChartClosed = $this->myModel->selectWhere('tb_barang','status = "ditutup"')->num_rows();
        $data = array('user' => $user, 'officer' => $officer, 'product' => $product, 'name' => $dataAdmin->nama_petugas, 'username' => $dataAdmin->username, 'level' => $dataAdmin->level, 'activity' => $activity, 'ChartOpen' => $ChartOpen, 'ChartDraf' => $ChartDraf, 'ChartClosed' => $ChartClosed );
        echo json_encode($data);
    }
    
}

/* End of file DashboardControllerAdmin.php */
?>
