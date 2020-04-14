<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeDashboardControllerUser extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        if( $this->session->userdata('login_user') != "true" ){
            redirect(base_url());
        }
        date_default_timezone_set('Asia/Jakarta');
        //Do your magic here
    }
    

    public function index(){
        $data['page'] = "Dashboard";
        $this->load->view('user/dashboard/dashboardUser',$data);
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
        $id_user = $this->session->userdata('id_user');
        $diikuti = $this->db->query("SELECT * FROM history_lelang WHERE id_user = $id_user GROUP BY id_barang,id_user ")->num_rows();
        $menang = $this->db->query("SELECT * FROM tb_lelang LEFT JOIN tb_checkout ON tb_checkout.id_barang = tb_lelang.id_barang WHERE tb_lelang.id_user = $id_user AND status = 'ditutup' AND konfirmasi_petugas = 0 GROUP BY tb_lelang.id_barang,tb_lelang.id_user ")->num_rows();
        $dimiliki = $this->db->query("SELECT * FROM tb_lelang LEFT JOIN tb_checkout ON tb_checkout.id_barang = tb_lelang.id_barang WHERE tb_lelang.id_user = $id_user AND status = 'ditutup' AND konfirmasi_petugas = 1 GROUP BY tb_lelang.id_barang,tb_lelang.id_user ")->num_rows();
        // $dimiliki = $this->myModel->select('tb_barang')->num_rows();
        $countActivity = $this->myModel->select('tb_aktifitas')->num_rows();
        if($countActivity > 4){
            $limitActivity = ($countActivity-4); 
        }else{ 
            $limitActivity =0;
        }
        $dataUser = $this->db->query("SELECT nama_lengkap,username,foto FROM tb_masyarakat WHERE id_user = ".$id_user)->row();
        $data = array('diikuti' => $diikuti, 'menang' => $menang, 'dimiliki' => $dimiliki, 'name' => $dataUser->nama_lengkap, 'username' => $dataUser->username, 'foto' => $dataUser->foto );
        // $data = array('diikuti' => $diikuti, 'menang' => $menang, 'dimiliki' => $dimiliki, 'name' => $dataUser->nama_lengkap, 'username' => $dataUser->username, 'foto' => $dataUser->foto );
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

/* End of file HomeDashboardControllerUser.php */
?>
