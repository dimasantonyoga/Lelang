<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BayarDashboardControllerUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        if( $this->session->userdata('login_user') != "true" ){
            redirect(base_url());
        }
        date_default_timezone_set('Asia/Jakarta');
    }
    
    public function DataProvinsi(){
        $data = $this->db->query("SELECT * FROM tb_provinsi")->result();
        echo json_encode($data);
    }

    public function MetodePembayaran(){
        $data = $this->db->query("SELECT * FROM tb_metode_pembayaran")->result();
        echo json_encode($data);
    }

    public function DataKota(){
        $id = $this->input->post('id');
        $data = $this->db->query("SELECT * FROM tb_kota WHERE id_provinsi = ".$id)->result();
        echo json_encode($data);
    }

    public function DataBayar(){
        $id_user = $this->session->userdata("id_user");
        $id_barang = $this->input->get('id');
        $data['real'] = $this->db->query("SELECT * FROM tb_checkout WHERE id_barang = ".$id_barang." AND id_user = ".$id_user)->row();
        $data['count'] = $this->db->query("SELECT * FROM tb_checkout WHERE id_barang = ".$id_barang." AND id_user = ".$id_user)->num_rows();
        echo json_encode($data);
    }

    public function LanjutPembayaran(){
        // INSERT TABLE
        $invoice = substr(abs(crc32(uniqid())),0,4).$this->session->userdata("id_user").$this->input->post('id_barang');
        $data = array(
            'id_provinsi' => $this->input->post('id_provinsi'),
            'id_kota' => $this->input->post('id_kota'),
            'id_user' => $this->session->userdata("id_user"),
            'id_barang' => $this->input->post('id_barang'),
            'jasa_pengiriman' => $this->input->post('jasa_pengiriman'),
            'service' => $this->input->post('service'),
            'harga_tawar' => $this->input->post('harga_tawar'),
            'ongkir' => $this->input->post('ongkir'),
            'total' => $this->input->post('total'),
            'invoice' => $invoice,

        );
        $insert = $this->myModel->insert('tb_checkout',$data);

        $data = array('success' => false, 'msg' => '');
        if($insert){
            // INSERT TABLE AktifitAS
            $keterangan = array(
                'id_petugas' => 0,
                'nama_aktifitas'  => 'CREATE',
                'nama_tabel'  => 'tb_checkout',
            );
            $this->myModel->insert('tb_aktifitas',$keterangan);
            $data = array('success' => true, 'msg' => '');
        }
        echo json_encode($data);
    }

    public function getOngkir(){
        $asal = $this->input->get('asal');
        $tujuan = $this->input->get('tujuan');
        $berat = $this->input->get('berat');
        $kurir = $this->input->get('kurir');
        
        $curl = curl_init();

        
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=".$asal."&destination=".$tujuan."&weight=".$berat."&courier=".$kurir,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: 8ac08a0d12ec25999a75059f36f60101"
            ),
        ));
        

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        // if ($err) {
        // echo "cURL Error #:" . $err;
        // } else {
        // echo $response;
        // }
        $data = json_decode($response, true);
        echo json_encode($data['rajaongkir']['results']);
        // for ($i=0; $i < count($data['rajaongkir']['results']); $i++) { 

        // }
    }

    public function detail($nama,$id){
        $data['page1'] = "Dimenangkan";
        $data['page'] = "Bayar";
        $data['page_level'] = 2;
        $id = decrypt_url($id);
        $data['id'] = $id;
        $this->load->view('user/dashboard/bayar',$data);
    }

    // READ
    public function getData(){        
        $id = $this->input->get('id');        
        $data = $this->db->query("SELECT *, max(d.penawaran_harga) AS tawaran, b.foto AS foto_user FROM tb_lelang a LEFT JOIN tb_masyarakat b ON a.id_user = b.id_user LEFT JOIN tb_barang c ON c.id_barang = a.id_barang RIGHT JOIN history_lelang d ON a.id_lelang = d.id_lelang WHERE a.status='ditutup' AND a.id_barang = $id GROUP BY d.id_lelang ORDER BY a.update_at DESC")->row();
        echo json_encode($data);
    }
    
    public function Lokasi(){
        $id = $this->input->get('id');        
        $data['kota'] = $this->db->query("SELECT * FROM tb_kota where id_kota = ".$id)->row();
        $id_prov = $data['kota']->id_provinsi;
        $data['provinsi'] = $this->db->query("SELECT * FROM tb_provinsi where id_provinsi = ".$id_prov)->row();
        echo json_encode($data);
    }
}

/* End of file BayarDashboardControllerUser.php */
