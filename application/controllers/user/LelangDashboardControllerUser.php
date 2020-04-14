<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LelangDashboardControllerUser extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        if( $this->session->userdata('login_user') != "true" ){
            redirect(base_url());
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('pagination');        
        //Do your magic here
    }
    

    public function index()
    {
        
    }

    public function diikuti(){
        $data['page1'] = "Diikuti";
        $data['page'] = "Diikuti";
        $data['page_level'] = 1;
        $this->load->view('user/dashboard/diikuti',$data);
    }

    public function dimenangkan(){
        if($this->input->get('prdk') != "" ){
            $id = $this->input->get('prdk');
            $nm = $this->input->get('nm');
            $id = encrypt_url($id);
            redirect(base_url('dashboard/dimenangkan/bayar/').$nm."/".$id);
        }else{
            $data['page1'] = "Dimenangkan";
            $data['page'] = "Dimenangkan";
            $data['page_level'] = 1;
            $this->load->view('user/dashboard/dimenangkan',$data);
        }
    }

    public function dimiliki(){
        $data['page1'] = "Dimiliki";
        $data['page'] = "Dimiliki";
        $data['page_level'] = 1;
        $this->load->view('user/dashboard/dimiliki',$data);
    }

    public function getDataForm(){
        $data['category'] = $this->myModel->query('select * from tb_kategori')->result();
        $data['provinsi'] = $this->myModel->query('select * from tb_provinsi')->result();
        echo json_encode($data);
    }

    // READ
    public function getDataDiikuti($rowno=0){        
        $rowperpage = $this->input->get('fil_halaman');
        
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }

        // ======================

        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        $this->db->join("history_lelang e", "a.id_barang = e.id_barang", "RIGHT JOIN");
        $this->db->where('e.id_user',$this->session->userdata('id_user'));

        if($this->input->get('fil_status')=="cs"){
            $this->db->where('b.status','coming_soon');
        }else if($this->input->get('fil_status')=="o"){
            $this->db->where('b.status','dibuka');
        }else if($this->input->get('fil_status')=="cd"){
            $this->db->where('b.status','ditutup');
        }else if($this->input->get('fil_status')=="d"){
            $this->db->where('b.status','draf');
        }

        if ($this->input->get('fil_kategori') != "all") {
            $fill_kategori_val = $this->input->get('fil_kategori');
            $this->db->where('a.id_kategori',$fill_kategori_val);

        }

        if ($this->input->get('fil_search') != "-----------") {
            $fill_search = $this->input->get('fil_search');
            $this->db->like('a.nama_barang', $fill_search , 'both');
        }

        if ($this->input->get('fil_time') == "asc") {
            $this->db->order_by('a.id_barang', 'ASC');             
        }else{
            $this->db->order_by('a.id_barang', 'DESC');             
        }
        $this->db->group_by('a.id_barang');             
        $this->db->limit($rowperpage, $rowno);
        $users_record = $this->db->get()->result();

        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        $this->db->join("history_lelang e", "a.id_barang = e.id_barang", "RIGHT JOIN");
        $this->db->where('e.id_user',$this->session->userdata('id_user'));

        if($this->input->get('fil_status')=="cs"){
            $this->db->where('b.status','coming_soon');
        }else if($this->input->get('fil_status')=="o"){
            $this->db->where('b.status','dibuka');
        }else if($this->input->get('fil_status')=="cd"){
            $this->db->where('b.status','ditutup');
        }else if($this->input->get('fil_status')=="d"){
            $this->db->where('b.status','draf');
        }

        if ($this->input->get('fil_kategori') != "all") {
            $fill_kategori_val = $this->input->get('fil_kategori');
            $this->db->where('a.id_kategori',$fill_kategori_val);
        }

        if ($this->input->get('fil_search') != "-----------") {
            $fill_search = $this->input->get('fil_search');
            $this->db->like('a.nama_barang', $fill_search , 'both');
        }

        if ($this->input->get('fil_time') == "asc") {
            $this->db->order_by('a.id_barang', 'ASC');             
        }else{
            $this->db->order_by('a.id_barang', 'DESC');             
        }
        $this->db->group_by('a.id_barang');             
        $this->db->limit($rowperpage, $rowno);
        $countInPage = $this->db->get()->num_rows();

        
        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        $this->db->join("history_lelang e", "a.id_barang = e.id_barang", "RIGHT JOIN");
        $this->db->where('e.id_user',$this->session->userdata('id_user'));

        if($this->input->get('fil_status')=="cs"){
            $this->db->where('b.status','coming_soon');
        }else if($this->input->get('fil_status')=="o"){
            $this->db->where('b.status','dibuka');
        }else if($this->input->get('fil_status')=="cd"){
            $this->db->where('b.status','ditutup');
        }else if($this->input->get('fil_status')=="d"){
            $this->db->where('b.status','draf');
        }

        if ($this->input->get('fil_kategori') != "all") {
            $fill_kategori_val = $this->input->get('fil_kategori');
            $this->db->where('a.id_kategori',$fill_kategori_val);

        }

        if ($this->input->get('fil_search') != "-----------") {
            $fill_search = $this->input->get('fil_search');
            $this->db->like('a.nama_barang', $fill_search , 'both');
        }

        if ($this->input->get('fil_time') == "asc") {
            $this->db->order_by('a.id_barang', 'ASC');             
        }else{
            $this->db->order_by('a.id_barang', 'DESC');             
        }
        $this->db->group_by('a.id_barang');             
        $allcount = $this->db->get()->num_rows();



        // ======================


        $config['base_url'] = base_url().'user/LelangDashboardControllerUser/getDataDiikuti';
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
        $data['allCount'] = $allcount;
        $data['countInPage'] = $countInPage;
    
        echo json_encode($data);
        // $data = $this->myModel->query('select * from tb_barang a left join tb_lelang b on a.id_barang = b.id_barang left join tb_kategori c on c.id_kategori = a.id_kategori left join tb_kota d on d.id_kota = a.id_kota  order by a.id_barang desc ')->result();
        // echo json_encode($data);
    } 
    
    public function getDataDimenangkan($rowno=0){        
        $rowperpage = $this->input->get('fil_halaman');
        
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }

        // ======================

        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        $this->db->join("history_lelang e", "a.id_barang = e.id_barang", "RIGHT JOIN");
        $this->db->join("tb_checkout f", "a.id_barang = f.id_barang", "RIGHT JOIN");
        $this->db->where('e.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.status',"ditutup");
        $this->db->where('f.konfirmasi_petugas',0);

        if($this->input->get('fil_status')=="cs"){
            $this->db->where('b.status','coming_soon');
        }else if($this->input->get('fil_status')=="o"){
            $this->db->where('b.status','dibuka');
        }else if($this->input->get('fil_status')=="cd"){
            $this->db->where('b.status','ditutup');
        }else if($this->input->get('fil_status')=="d"){
            $this->db->where('b.status','draf');
        }

        if ($this->input->get('fil_kategori') != "all") {
            $fill_kategori_val = $this->input->get('fil_kategori');
            $this->db->where('a.id_kategori',$fill_kategori_val);

        }

        if ($this->input->get('fil_search') != "-----------") {
            $fill_search = $this->input->get('fil_search');
            $this->db->like('a.nama_barang', $fill_search , 'both');
        }

        if ($this->input->get('fil_time') == "asc") {
            $this->db->order_by('a.id_barang', 'ASC');             
        }else{
            $this->db->order_by('a.id_barang', 'DESC');             
        }
        $this->db->group_by('a.id_barang');             
        $this->db->limit($rowperpage, $rowno);
        $users_record = $this->db->get()->result();

        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        $this->db->join("history_lelang e", "a.id_barang = e.id_barang", "RIGHT JOIN");
        $this->db->join("tb_checkout f", "a.id_barang = f.id_barang", "RIGHT JOIN");
        $this->db->where('e.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.status',"ditutup");
        $this->db->where('f.konfirmasi_petugas',0);

        if($this->input->get('fil_status')=="cs"){
            $this->db->where('b.status','coming_soon');
        }else if($this->input->get('fil_status')=="o"){
            $this->db->where('b.status','dibuka');
        }else if($this->input->get('fil_status')=="cd"){
            $this->db->where('b.status','ditutup');
        }else if($this->input->get('fil_status')=="d"){
            $this->db->where('b.status','draf');
        }

        if ($this->input->get('fil_kategori') != "all") {
            $fill_kategori_val = $this->input->get('fil_kategori');
            $this->db->where('a.id_kategori',$fill_kategori_val);
        }

        if ($this->input->get('fil_search') != "-----------") {
            $fill_search = $this->input->get('fil_search');
            $this->db->like('a.nama_barang', $fill_search , 'both');
        }

        if ($this->input->get('fil_time') == "asc") {
            $this->db->order_by('a.id_barang', 'ASC');             
        }else{
            $this->db->order_by('a.id_barang', 'DESC');             
        }
        $this->db->group_by('a.id_barang');             
        $this->db->limit($rowperpage, $rowno);
        $countInPage = $this->db->get()->num_rows();

        
        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        $this->db->join("history_lelang e", "a.id_barang = e.id_barang", "RIGHT JOIN");
        $this->db->join("tb_checkout f", "a.id_barang = f.id_barang", "RIGHT JOIN");
        $this->db->where('e.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.status',"ditutup");
        $this->db->where('f.konfirmasi_petugas',0);

        if($this->input->get('fil_status')=="cs"){
            $this->db->where('b.status','coming_soon');
        }else if($this->input->get('fil_status')=="o"){
            $this->db->where('b.status','dibuka');
        }else if($this->input->get('fil_status')=="cd"){
            $this->db->where('b.status','ditutup');
        }else if($this->input->get('fil_status')=="d"){
            $this->db->where('b.status','draf');
        }

        if ($this->input->get('fil_kategori') != "all") {
            $fill_kategori_val = $this->input->get('fil_kategori');
            $this->db->where('a.id_kategori',$fill_kategori_val);

        }

        if ($this->input->get('fil_search') != "-----------") {
            $fill_search = $this->input->get('fil_search');
            $this->db->like('a.nama_barang', $fill_search , 'both');
        }

        if ($this->input->get('fil_time') == "asc") {
            $this->db->order_by('a.id_barang', 'ASC');             
        }else{
            $this->db->order_by('a.id_barang', 'DESC');             
        }
        $this->db->group_by('a.id_barang');             
        $allcount = $this->db->get()->num_rows();



        // ======================


        $config['base_url'] = base_url().'user/LelangDashboardControllerUser/getDataDimenangkan';
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
        $data['allCount'] = $allcount;
        $data['countInPage'] = $countInPage;
    
        echo json_encode($data);
        // $data = $this->myModel->query('select * from tb_barang a left join tb_lelang b on a.id_barang = b.id_barang left join tb_kategori c on c.id_kategori = a.id_kategori left join tb_kota d on d.id_kota = a.id_kota  order by a.id_barang desc ')->result();
        // echo json_encode($data);
    }
    
    public function getDataDimiliki($rowno=0){        
        $rowperpage = $this->input->get('fil_halaman');
        
        if($rowno != 0){
            $rowno = ($rowno-1) * $rowperpage;
        }

        // ======================

        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        $this->db->join("history_lelang e", "a.id_barang = e.id_barang", "RIGHT JOIN");
        $this->db->join("tb_checkout f", "a.id_barang = f.id_barang", "RIGHT JOIN");
        $this->db->where('e.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.status',"ditutup");
        $this->db->where('f.konfirmasi_petugas',1);


        if($this->input->get('fil_status')=="cs"){
            $this->db->where('b.status','coming_soon');
        }else if($this->input->get('fil_status')=="o"){
            $this->db->where('b.status','dibuka');
        }else if($this->input->get('fil_status')=="cd"){
            $this->db->where('b.status','ditutup');
        }else if($this->input->get('fil_status')=="d"){
            $this->db->where('b.status','draf');
        }

        if ($this->input->get('fil_kategori') != "all") {
            $fill_kategori_val = $this->input->get('fil_kategori');
            $this->db->where('a.id_kategori',$fill_kategori_val);

        }

        if ($this->input->get('fil_search') != "-----------") {
            $fill_search = $this->input->get('fil_search');
            $this->db->like('a.nama_barang', $fill_search , 'both');
        }

        if ($this->input->get('fil_time') == "asc") {
            $this->db->order_by('a.id_barang', 'ASC');             
        }else{
            $this->db->order_by('a.id_barang', 'DESC');             
        }
        $this->db->group_by('a.id_barang');             
        $this->db->limit($rowperpage, $rowno);
        $users_record = $this->db->get()->result();

        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        $this->db->join("history_lelang e", "a.id_barang = e.id_barang", "RIGHT JOIN");
        $this->db->join("tb_checkout f", "a.id_barang = f.id_barang", "RIGHT JOIN");
        $this->db->where('e.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.status',"ditutup");
        $this->db->where('f.konfirmasi_petugas',1);


        if($this->input->get('fil_status')=="cs"){
            $this->db->where('b.status','coming_soon');
        }else if($this->input->get('fil_status')=="o"){
            $this->db->where('b.status','dibuka');
        }else if($this->input->get('fil_status')=="cd"){
            $this->db->where('b.status','ditutup');
        }else if($this->input->get('fil_status')=="d"){
            $this->db->where('b.status','draf');
        }

        if ($this->input->get('fil_kategori') != "all") {
            $fill_kategori_val = $this->input->get('fil_kategori');
            $this->db->where('a.id_kategori',$fill_kategori_val);
        }

        if ($this->input->get('fil_search') != "-----------") {
            $fill_search = $this->input->get('fil_search');
            $this->db->like('a.nama_barang', $fill_search , 'both');
        }

        if ($this->input->get('fil_time') == "asc") {
            $this->db->order_by('a.id_barang', 'ASC');             
        }else{
            $this->db->order_by('a.id_barang', 'DESC');             
        }
        $this->db->group_by('a.id_barang');             
        $this->db->limit($rowperpage, $rowno);
        $countInPage = $this->db->get()->num_rows();

        
        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");
        $this->db->join("history_lelang e", "a.id_barang = e.id_barang", "RIGHT JOIN");
        $this->db->join("tb_checkout f", "a.id_barang = f.id_barang", "RIGHT JOIN");
        $this->db->where('e.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.id_user',$this->session->userdata('id_user'));
        $this->db->where('b.status',"ditutup");
        $this->db->where('f.konfirmasi_petugas',1);


        if($this->input->get('fil_status')=="cs"){
            $this->db->where('b.status','coming_soon');
        }else if($this->input->get('fil_status')=="o"){
            $this->db->where('b.status','dibuka');
        }else if($this->input->get('fil_status')=="cd"){
            $this->db->where('b.status','ditutup');
        }else if($this->input->get('fil_status')=="d"){
            $this->db->where('b.status','draf');
        }

        if ($this->input->get('fil_kategori') != "all") {
            $fill_kategori_val = $this->input->get('fil_kategori');
            $this->db->where('a.id_kategori',$fill_kategori_val);

        }

        if ($this->input->get('fil_search') != "-----------") {
            $fill_search = $this->input->get('fil_search');
            $this->db->like('a.nama_barang', $fill_search , 'both');
        }

        if ($this->input->get('fil_time') == "asc") {
            $this->db->order_by('a.id_barang', 'ASC');             
        }else{
            $this->db->order_by('a.id_barang', 'DESC');             
        }
        $this->db->group_by('a.id_barang');             
        $allcount = $this->db->get()->num_rows();



        // ======================


        $config['base_url'] = base_url().'user/LelangDashboardControllerUser/getDataDimiliki';
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
        $data['allCount'] = $allcount;
        $data['countInPage'] = $countInPage;
    
        echo json_encode($data);
        // $data = $this->myModel->query('select * from tb_barang a left join tb_lelang b on a.id_barang = b.id_barang left join tb_kategori c on c.id_kategori = a.id_kategori left join tb_kota d on d.id_kota = a.id_kota  order by a.id_barang desc ')->result();
        // echo json_encode($data);
    }
    

    public function getJumlahPelelang(){
        $id = $this->input->post('id');
        $data = $this->db->query("SELECT max(penawaran_harga) as penawaran, count(id_history) as total FROM history_lelang WHERE id_barang = ".$id)->row();
        echo json_encode($data);
    }
}

/* End of file LelangDashboardControllerUser.php */
