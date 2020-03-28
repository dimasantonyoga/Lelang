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

    // public function RajaOngkir(){
    //     $curl = curl_init();

    //     curl_setopt_array($curl, array(
    //     CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
    //     CURLOPT_RETURNTRANSFER => true,
    //     CURLOPT_ENCODING => "",
    //     CURLOPT_MAXREDIRS => 10,
    //     CURLOPT_TIMEOUT => 30,
    //     CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //     CURLOPT_CUSTOMREQUEST => "GET",
    //     CURLOPT_HTTPHEADER => array(
    //         "key: 8ac08a0d12ec25999a75059f36f60101"
    //     ),
    //     ));

    //     $response = curl_exec($curl);
    //     $err = curl_error($curl);

    //     curl_close($curl);

    //     $data = json_decode($response, true);
    //     for ($i=0; $i < count($data['rajaongkir']['results']); $i++) { 
    //     // for ($i=1; $i <= count($data['rajaongkir']['results']); $i++) {
    //         $id = $data['rajaongkir']['results'][$i]['city_id'];
    //         $idProv = $data['rajaongkir']['results'][$i]['province_id'];
    //         $nama = $data['rajaongkir']['results'][$i]['city_name'];
    //         $type = $data['rajaongkir']['results'][$i]['type'];
    //         $pos = $data['rajaongkir']['results'][$i]['postal_code'];

    //         // echo $id." - ".$nama."<br>";
    //         $da = array(
    //             'id_kota' => $id,
    //             'id_provinsi' => $idProv,
    //             'type' => $type,
    //             'nama_kota'  => $nama,
    //             'kode_pos' => $pos
    //         );
    //         $this->myModel->insert('tb_kota',$da);
    //     }
    //     // if ($err) {
    //     //     echo "cURL Error #:" . $err;
    //     //   } else {
    //     //     echo $response;
    //     //   }

    // }



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
        $ChartDraf = $this->myModel->selectWhere('tb_lelang','status = "draf"')->num_rows();
        $ChartComing = $this->myModel->selectWhere('tb_lelang','status = "coming_soon"')->num_rows();
        $ChartOpen = $this->myModel->selectWhere('tb_lelang','status = "dibuka"')->num_rows();
        $ChartClosed = $this->myModel->selectWhere('tb_lelang','status = "ditutup"')->num_rows();
        $data = array('user' => $user, 'officer' => $officer, 'product' => $product, 'name' => $dataAdmin->nama_petugas, 'username' => $dataAdmin->username, 'level' => $dataAdmin->level, 'activity' => $activity, 'ChartOpen' => $ChartOpen,'ChartComing' => $ChartComing, 'ChartDraf' => $ChartDraf, 'ChartClosed' => $ChartClosed );
        echo json_encode($data);
    }

    // Cek aktifitas
    public function checkActivity(){
        $data = $this->myModel->select('tb_aktifitas')->num_rows();
        echo json_encode($data);
    }

    public function logout(){
        $this->session->sess_destroy();
        $data = "ok";
        echo $data;
    }
    
}

/* End of file DashboardControllerAdmin.php */
?>
