<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailControllerUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
    }

    public function index()
    {
        if($this->input->get('prdk') != ''){
            $id = encrypt_url($this->input->get('prdk'));
            redirect(base_url()."produk/detail/".$this->input->get('nm')."/".$id);
        }
        
    }

    public function Detail($nama,$id){
        $data['id'] = decrypt_url($id);
        $this->load->view('user/detailProdukUser',$data);
    }

    public function getData(){
        $id = $this->input->post('id'); 
        $data['cek'] = $this->db->query("SELECT tb_masyarakat.nama_lengkap, tb_masyarakat.foto,max(penawaran_harga) as penawaran, count(id_history) as total FROM tb_lelang LEFT JOIN tb_masyarakat on tb_lelang.id_user = tb_masyarakat.id_user LEFT JOIN history_lelang on history_lelang.id_lelang = tb_lelang.id_lelang WHERE tb_lelang.id_barang = ".$id." ORDER BY penawaran_harga DESC")->row();
        $data['lelang'] = $this->db->query("SELECT * FROM tb_barang a LEFT JOIN tb_lelang b ON a.id_barang = b.id_barang LEFT JOIN tb_kategori c on a.id_kategori = c.id_kategori LEFT JOIN tb_kota d on a.id_kota = d.id_kota  WHERE a.id_barang = ".$id)->row();
        echo json_encode($data);
    }

    public function getDataPelelang(){
        $id = $this->input->get('id');
        $data = $this->db->query("SELECT * FROM history_lelang a LEFT JOIN tb_masyarakat b ON a.id_user = b.id_user WHERE a.id_barang = ".$id." order by penawaran_harga desc ")->result();
        echo json_encode($data);
    }

    public function Lelang(){
        $tawaran = $this->input->post('tawaran');
        $id = $this->input->post('id');
        // Update TABLE lelang
        $lelang = array(
            'id_user' => $this->session->userdata('id_user'),
        );
        $this->db->where("id_barang",$id);
        $this->myModel->update('tb_lelang',$lelang);
        
        // INSERT TABLE History
        $cekLelang = $this->myModel->selectWhere('tb_lelang','id_barang = '.$id)->row();
        $IdLelang = $cekLelang->id_lelang;
        $history = array(
            'id_lelang' => $IdLelang,
            'id_barang' => $id,
            'id_user' => $this->session->userdata('id_user'),
            'penawaran_harga' => $tawaran,
        );
        $this->myModel->insert('history_lelang',$history);


        // INSERT TABLE AktifitAS
        $keterangan = array(
            'id_petugas' => 0,
            'nama_aktifitas'  => 'CREATE',
            'nama_tabel'  => 'history_lelang',
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);
        $data = array('success' => true, 'msg' => '');
        echo json_encode($IdLelang);
    }
}

/* End of file DetailControllerUser */


?>