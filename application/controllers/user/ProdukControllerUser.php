<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProdukControllerUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        $this->load->library('pagination');        
    }

    public function index()
    {
        $this->load->view('user/produk');
    }

    public function getKategori(){
        $data = $this->db->get("tb_kategori")->result();
        echo json_encode($data);
    }

    public function getData($rowno=0){
        $nama = $this->input->get('nama');
        $min = $this->input->get('min');
        $max = $this->input->get('max');
        $nav = $this->input->get('nav');
        $kt = $this->input->get('kt');

        $rowperpage = 3;
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }
    
        // $allcount = $this->db->count_all('tb_barang');
        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        if($kt != "all"){
            $this->db->where("a.id_kategori",$kt);
        }

        if($nav == 'berlangsung'){
            $this->db->where("b.status","dibuka");
        }elseif ($nav == 'akanDatang') {
            $this->db->where("b.status","coming_soon");
        }elseif ($nav == 'berakhir') {
            $this->db->where("b.status","ditutup");
        }

        if($min >= 0 ){
            $this->db->where('a.harga_awal >=', $min); 
        }
        if($max > 0 ){
            $this->db->where('a.harga_awal <=', $max); 
        }
        if($nama != '----------'){
            $this->db->like('a.nama_barang', $nama, 'both');
        }
        $this->db->order_by("b.id_barang","DESC");
        $this->db->limit($rowperpage, $rowno);
        $users_record = $this->db->get()->result();




        $this->db->select('count(a.id_barang) as banyak');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        if($kt != "all"){
            $this->db->where("a.id_kategori",$kt);
        }
        if($nav == 'berlangsung'){
            $this->db->where("b.status","dibuka");
        }elseif ($nav == 'akanDatang') {
            $this->db->where("b.status","coming_soon");
        }elseif ($nav == 'berakhir') {
            $this->db->where("b.status","ditutup");
        }

        if($min >= 0 ){
            $this->db->where('a.harga_awal >=', $min); 
        }
        if($max > 0 ){
            $this->db->where('a.harga_awal <=', $max); 
        }
        if($nama != '----------'){
            $this->db->like('a.nama_barang', $nama, 'both');
        }
        $cekData = $this->db->get()->row();
        $allcount = $cekData->banyak;

    
        $config['base_url'] = base_url().'user/ProdukControllerUser/getData';
        $config['use_page_numbers'] = TRUE;
        $config['total_rows'] = $allcount;
        $config['per_page'] = $rowperpage;
    
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tag_close']  = '</span></li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tag_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tag_close']  = '</span></li>';
    
        $this->pagination->initialize($config);
    
        $data['pagination'] = $this->pagination->create_links();
        $data['result'] = $users_record;
        $data['row'] = $rowno;
    
        echo json_encode($data);
    }

}

/* End of file ProdukControllerUser.php */

?>