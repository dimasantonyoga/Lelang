<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductControllerAdmin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('myModel');
        if( $this->session->userdata('login_petugas') != TRUE ){
            redirect(base_url());
        }
        date_default_timezone_set('Asia/Jakarta');
        $this->load->library('pagination');        
        //Do your magic here
    }
    

    public function index()
    {
        $data['page1'] = "Product";
        $data['page'] = "Product";
        $data['page_level'] = 1;

        $this->load->view('admin/productAdmin',$data);
    }

    public function getDataForm(){
        $data['category'] = $this->myModel->query('select * from tb_kategori')->result();
        $data['provinsi'] = $this->myModel->query('select * from tb_provinsi')->result();
        echo json_encode($data);
    }
    public function getDataFormCity(){
        $id_prov = $this->input->post('id');
        $data = $this->myModel->query("select * from tb_kota where id_provinsi =".$id_prov)->result();
        echo json_encode($data);
    }
    public function getDataFormWeight(){
        $id = $this->input->post('id');
        $data = $this->myModel->query("select * from tb_kategori where id_kategori =".$id)->row();
        echo json_encode($data);
    }

    // READ
    public function getData($rowno=0){        
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
        $this->db->limit($rowperpage, $rowno);
        $users_record = $this->db->get()->result();

        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");

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
        $this->db->limit($rowperpage, $rowno);
        $countInPage = $this->db->get()->num_rows();

        
        $this->db->select('*');
        $this->db->from("tb_barang a");
        $this->db->join("tb_lelang b", "a.id_barang = b.id_barang", "LEFT JOIN");
        $this->db->join("tb_kategori c", "a.id_kategori = c.id_kategori", "LEFT JOIN");
        $this->db->join("tb_kota d", "a.id_kota = d.id_kota", "LEFT JOIN");

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
        $allcount = $this->db->get()->num_rows();



        // ======================


        $config['base_url'] = base_url().'admin/ProductControllerAdmin/getData';
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

    // // Cek aktifitas
    // public function checkActivity(){
    //     $data = $this->myModel->select('tb_aktifitas')->num_rows();
    //     echo json_encode($data);
    // }

    // get data where
    public function getDataWhere(){
        $id = $this->input->post('id');
        $data = $this->myModel->query("select * from tb_barang a left join tb_lelang b on a.id_barang = b.id_barang left join tb_kategori c on c.id_kategori = a.id_kategori left join tb_kota d on d.id_kota = a.id_kota where a.id_barang = ".$id." order by a.id_barang desc ")->row();
        echo json_encode($data);
    }
    public function getDataWhereEdit(){
        $id = $this->input->post('id');
        $data['category'] = $this->myModel->query('select * from tb_kategori')->result();
        $data['detail'] = $this->myModel->query("select * from tb_barang a left join tb_lelang b on a.id_barang = b.id_barang left join tb_kategori c on c.id_kategori = a.id_kategori left join tb_kota d on d.id_kota = a.id_kota where a.id_barang = ".$id." order by a.id_barang desc ")->row();
        echo json_encode($data);
    }
    public function getDataWhereEdit2(){
        $id = $this->input->post('id');
        $data['citySelect'] = $this->myModel->query('select * from tb_kota where id_kota = '.$id)->row();
        $data['provinsi'] = $this->myModel->query('select * from tb_provinsi')->result();
        $data['city'] = $this->myModel->query('select * from tb_kota where id_provinsi = '.$id)->result();
        echo json_encode($data);
    }

    // update where
    public function updateWhere(){
        $id = $this->input->post('id');
        $status = $this->input->post('status');
        if($status == "coming_soon"){
            $data = array(
                'tgl_dibuka' => date("Y-m-d H:i:s"),
            );
        }else if($status == "dibuka"){
            $data = array(
                'tgl_ditutup' => date("Y-m-d H:i:s"),
            );
        }else if($status == "draf"){
            $data = array(
                'tgl_dibuka' => "0000-00-00 00:00:00",
                'tgl_ditutup' => "0000-00-00 00:00:00",
            );
        }
        $this->db->where('id_barang', $id);
        $this->myModel->update('tb_lelang',$data);
        echo json_encode($data);
    }

    // // create
    public function create(){
        $config['upload_path']="./assets/img/produk"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
 
            $image= $data['upload_data']['file_name']; //set file name ke variable image

            // Resize image
            $uploadedImage = $this->upload->data();
            $this->resizeImage($uploadedImage['file_name']);

            // INSERT TABLE
            $lastId = $this->myModel->selectOrder('tb_barang','tgl','DESC')->row();
            if($lastId == ''){
                $creatId = 1;    
            }else{
                $creatId = $lastId->id_barang+1;
            }
            if($this->input->post('weight') == "-"){
                $weight = "";
            }else{
                $weight = $this->input->post('weight');
            }
            
            if($this->session->userdata('id_level') == 1){
                $data = array(
                    'id_barang' => $creatId,
                    'id_kategori' => $this->input->post('category'),
                    'id_kota' => $this->input->post('kota'),
                    'alamat' => $this->input->post('alamat'),
                    'weight' => $weight,
                    'nama_barang' => $this->input->post('name'),
                    'foto' => $image,
                    'harga_awal'   => $this->input->post('harga_awal'),
                    'deskripsi_barang'   => $this->input->post('deskripsi'),
                );
                $insert = $this->myModel->insert('tb_barang',$data);
                $data2 = array(
                    'id_barang' => $creatId,
                    'tgl_dibuka' => "0000-00-00 00:00:00",
                    'tgl_ditutup' => "0000-00-00 00:00:00",
                    'id_petugas' => $this->session->userdata('id_petugas'),
                );
                $insert = $this->myModel->insert('tb_lelang',$data2);
            }else if($this->session->userdata('id_level') == 2){
                $data = array(
                    'id_barang' => $creatId,
                    'id_kategori' => $this->input->post('category'),
                    'id_kota' => $this->input->post('kota'),
                    'alamat' => $this->input->post('alamat'),
                    'weight' => $weight,
                    'nama_barang' => $this->input->post('name'),
                    'foto' => $image,
                    'harga_awal'   => $this->input->post('harga_awal'),
                    'deskripsi_barang'   => $this->input->post('deskripsi'),
                );
                $insert = $this->myModel->insert('tb_barang',$data);
                $data2 = array(
                    'id_barang' => $creatId,
                    'tgl_dibuka' => $this->input->post('tgl_mulai'),
                    'tgl_ditutup' => $this->input->post('tgl_berakhir'),
                    'id_petugas' => $this->session->userdata('id_petugas'),
                );
                $insert = $this->myModel->insert('tb_lelang',$data2);
            }
            $data = array('success' => false, 'msg' => '');
            if($insert){
                // INSERT TABLE AktifitAS
                $keterangan = array(
                    'id_petugas' => $this->session->userdata('id_petugas'),
                    'nama_aktifitas'  => 'CREATE',
                    'nama_tabel'  => 'tb_barang'
                );
                $this->myModel->insert('tb_aktifitas',$keterangan);
                $data = array('success' => true, 'msg' => '');
            }
            
        }
        echo json_encode($data);
    }

    public function getJumlahPelelang(){
        $id = $this->input->post('id');
        $data = $this->db->query("SELECT max(penawaran_harga) as penawaran, count(id_history) as total FROM history_lelang WHERE id_barang = ".$id)->row();
        echo json_encode($data);
    }

    // // delete
    public function delete(){
        $id = $this->input->post('id');
        // Delete Image
        $this->db->where('id_barang', $id);
        $row = $this->db->get('tb_barang')->row();
        unlink("./assets/img/produk/".$row->foto);

        // Delete Data Lelang
        $this->db->where('id_barang', $id);
        $this->db->delete('tb_lelang');       

        // Delete Data Barang
        $this->db->where('id_barang', $id);
        $this->db->delete('tb_barang');        

        // INSERT TABLE AktifitAS
        $keterangan = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nama_aktifitas'  => 'DELETE',
            'nama_tabel'  => 'tb_barang'
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);
        echo json_encode($id);
    }

    // // update
    public function update(){
        if($this->input->post('cek_gambar') == "tidak"){
            // INSERT TABLE
            if($this->input->post('weight') == "-"){
                $weight = 0;
            }else{
                $weight = $this->input->post('weight');
            }
            if($this->session->userdata('id_level') == 1){
                $dataku = array(
                    'id_kategori' => $this->input->post('category'),
                    'id_kota' => $this->input->post('kota'),
                    'alamat' => $this->input->post('alamat'),
                    'weight' => $weight,
                    'nama_barang' => $this->input->post('name'),
                    'harga_awal'   => $this->input->post('harga_awal'),
                    'deskripsi_barang'   => $this->input->post('deskripsi'),
                );
                $data2 = array(
                    'id_petugas' => $this->session->userdata('id_petugas'),
                );
                $id = $this->input->post('id');
                $this->db->where('id_barang', $id);
                $updateBarang = $this->myModel->update('tb_barang',$dataku);
                $this->db->where('id_barang', $id);
                $updateLelang = $this->myModel->update('tb_lelang',$data2);
            }else if($this->session->userdata('id_level') == 2){
                $dataku = array(
                    'id_kategori' => $this->input->post('category'),
                    'id_kota' => $this->input->post('kota'),
                    'alamat' => $this->input->post('alamat'),
                    'weight' => $weight,
                    'nama_barang' => $this->input->post('name'),
                    'harga_awal'   => $this->input->post('harga_awal'),
                    'deskripsi_barang'   => $this->input->post('deskripsi'),
                );
                $data2 = array(
                    'tgl_dibuka' => $this->input->post('tgl_mulai'),
                    'tgl_ditutup' => $this->input->post('tgl_berakhir'),
                    'id_petugas' => $this->session->userdata('id_petugas'),
                );
                $id = $this->input->post('id');
                $this->db->where('id_barang', $id);
                $updateBarang = $this->myModel->update('tb_barang',$dataku);
                $this->db->where('id_barang', $id);
                $updateLelang = $this->myModel->update('tb_lelang',$data2);
            }
            // // INSERT TABLE AktifitAS
            $keterangan = array(
                'id_petugas' => $this->session->userdata('id_petugas'),
                'nama_aktifitas'  => "UPDATE",
                'nama_tabel'  => 'tb_barang'
            );
            $insertAktifitas = $this->myModel->insert('tb_aktifitas',$keterangan);
            $data = array('success' => true, 'msg' => '');
        }else{
            $id = $this->input->post('id');
            // Delete Image
            $this->db->where('id_barang', $id);
            $row = $this->db->get('tb_barang')->row();
            unlink("./assets/img/produk/".$row->foto);


            $config['upload_path']="./assets/img/produk"; //path folder file upload
            $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
            $config['encrypt_name'] = TRUE; //enkripsi file name upload
            
            $this->load->library('upload',$config); //call library upload 
            if($this->upload->do_upload("file")){ //upload file
                $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
    
                $image= $data['upload_data']['file_name']; //set file name ke variable image

                // Resize image
                $uploadedImage = $this->upload->data();
                $this->resizeImage($uploadedImage['file_name']);

                if($this->input->post('weight') == "-"){
                    $weight = "";
                }else{
                    $weight = $this->input->post('weight');
                }
                
                if($this->session->userdata('id_level') == 1){
                    $dataku = array(
                        'id_kategori' => $this->input->post('category'),
                        'id_kota' => $this->input->post('kota'),
                        'alamat' => $this->input->post('alamat'),
                        'weight' => $weight,
                        'nama_barang' => $this->input->post('name'),
                        'foto' => $image,
                        'harga_awal'   => $this->input->post('harga_awal'),
                        'deskripsi_barang'   => $this->input->post('deskripsi'),
                    );
                    $data2 = array(
                        'id_petugas' => $this->session->userdata('id_petugas'),
                    );
                    $id = $this->input->post('id');
                    $this->db->where('id_barang', $id);
                    $UpdateBarang = $this->myModel->update('tb_barang',$dataku);
                    $this->db->where('id_barang', $id);
                    $UpdateLelang = $this->myModel->update('tb_lelang',$data2);
                }else if($this->session->userdata('id_level') == 2){
                    $dataku = array(
                        'id_kategori' => $this->input->post('category'),
                        'id_kota' => $this->input->post('kota'),
                        'alamat' => $this->input->post('alamat'),
                        'weight' => $weight,
                        'nama_barang' => $this->input->post('name'),
                        'foto' => $image,
                        'harga_awal'   => $this->input->post('harga_awal'),
                        'deskripsi_barang'   => $this->input->post('deskripsi'),
                    );
                    $data2 = array(
                        'tgl_dibuka' => $this->input->post('tgl_mulai'),
                        'tgl_ditutup' => $this->input->post('tgl_berakhir'),
                        'id_petugas' => $this->session->userdata('id_petugas'),
                    );
                    $id = $this->input->post('id');
                    $this->db->where('id_barang', $id);
                    $UpdateBarang = $this->myModel->update('tb_barang',$dataku);
                    $this->db->where('id_barang', $id);
                    $UpdateLelang = $this->myModel->update('tb_lelang',$data2);
                }
                // INSERT TABLE AktifitAS
                $keterangan = array(
                    'id_petugas' => $this->session->userdata('id_petugas'),
                    'nama_aktifitas'  => 'UPDATE',
                    'nama_tabel'  => 'tb_barang'
                );
                $InsertAktifitas = $this->myModel->insert('tb_aktifitas',$keterangan);
                $data = array('success' => true, 'msg' => '');
            }
        }
        echo json_encode($data);

    }

    public function resizeImage($filename){
      $path = './assets/img/produk/' . $filename;
      $config_manip = array(
          'image_library' => 'gd2',
          'source_image' => $path,
          'new_image' => $path,
          'maintain_ratio' => FALSE,
          'create_thumb' => FALSE,
          'width' => 330,
          'height' => 330
      );


      $this->load->library('image_lib', $config_manip);
      if (!$this->image_lib->resize()) {
          echo $this->image_lib->display_errors();
      }
      $this->image_lib->clear();
    }
}

/* End of file ProductControllerAdmin.php */
