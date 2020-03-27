
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
    public function getData(){
        $data = $this->myModel->query('select * from tb_barang a left join tb_lelang b on a.id_barang = b.id_barang order by a.id_barang desc ')->result();
        echo json_encode($data);
    }

    // // Cek aktifitas
    // public function checkActivity(){
    //     $data = $this->myModel->select('tb_aktifitas')->num_rows();
    //     echo json_encode($data);
    // }

    // get data where
    public function getDataWhere(){
        $id = $this->input->post('id');
        $data = $this->myModel->query("select * from tb_barang a left join tb_lelang b on a.id_barang = b.id_barang where a.id_barang = ".$id." order by a.id_barang desc ")->row();
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

    public function resizeImage($filename)
   {
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
    // public function update(){
    //     $data = array(
    //         'nama_petugas' => $this->input->post('registerName'),
    //         'username'   => $this->input->post('registerUsername'),
    //         'password'   => md5($this->input->post('registerPassword')),
    //         'id_level'   => '2',
    //         'update_at' => date('Y-m-d H:i:s'),
    //     );
    //     $id = $this->input->post('id');
    //     $this->db->where('id_petugas', $id);
    //     $up = $this->myModel->update('tb_barang',$data);

    //     // INSERT TABLE AktifitAS
    //     $keterangan = array(
    //         'id_petugas' => $this->session->userdata('id_petugas'),
    //         'nama_aktifitas'  => 'UPDATE',
    //         'nama_tabel'  => 'tb_barang',
    //     );
    //     $this->myModel->insert('tb_aktifitas',$keterangan);

    //     $dt = array('success' => false, 'msg' => '');
    //     if($up){
    //         $dt = array('success' => true, 'msg' => '');
    //     }
    //     echo json_encode($dt);
    // }

    // // CHECK USERNAME
    // public function checkUsername(){
    //     $where = array(
    //         'username' => $this->input->post('username'),
    //         'id_level' => 2,
    //     );
    //     $cek = $this->myModel->selectWhere('tb_barang',$where)->num_rows();
    //     $data = array('success' => false, 'msg' => '');
    //     if($cek > 0){
    //         $data = array('success' => true, 'msg' => '');
    //     }
    //     echo json_encode($data);
    // }
}

/* End of file ProductControllerAdmin.php */
