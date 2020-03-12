
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

    // READ
    public function getData(){
        $data = $this->myModel->selectOrder('tb_barang','create_at','ASC')->result();
        echo json_encode($data);
    }

    // // Cek aktifitas
    // public function checkActivity(){
    //     $data = $this->myModel->select('tb_aktifitas')->num_rows();
    //     echo json_encode($data);
    // }

    // // get data where
    // public function getDataWhere(){
    //     $where = array(
    //         'id_petugas' => $this->input->post('id'),
    //     );
    //     $data = $this->myModel->selectWhere('tb_petugas',$where)->row();
    //     echo json_encode($data);

    // }

    // // create
    public function create(){
        $config['upload_path']="./assets/img/produk"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
 
            $image= $data['upload_data']['file_name']; //set file name ke variable image

            // INSERT TABLE
            $data = array(
                'nama_barang' => $this->input->post('name'),
                'foto' => $image,
                'tgl_mulai'   => $this->input->post('tgl_mulai'),
                'tgl_berakhir' => $this->input->post('tgl_berakhir'),
                'harga_awal'   => $this->input->post('harga_awal'),
                'deskripsi_barang'   => $this->input->post('deskripsi'),
                'status'   => 'draf',
                'create_at'   => date('Y-m-d H:i:s'),
                'update_at' => '0000-00-00 00:00:00',
            );
            $insert = $this->myModel->insert('tb_barang',$data);
            $data = array('success' => false, 'msg' => '');
            if($insert){
                // INSERT TABLE AktifitAS
                $keterangan = array(
                    'id_petugas' => $this->session->userdata('id_petugas'),
                    'nama_aktifitas'  => 'CREATE',
                    'nama_tabel'  => 'tb_barang',
                    'create_at'  => date('Y-m-d H:i:s'),
                );
                $this->myModel->insert('tb_aktifitas',$keterangan);
                $data = array('success' => true, 'msg' => '');
            }
            
        }
        echo json_encode($data);
    }

    // // delete
    // public function delete(){
    //     $id = $this->input->post('id');
    //     $this->db->where('id_petugas', $id);
    //     $this->db->delete('tb_petugas');
    //     // INSERT TABLE AktifitAS
    //     $keterangan = array(
    //         'id_petugas' => $this->session->userdata('id_petugas'),
    //         'nama_aktifitas'  => 'DELETE',
    //         'nama_tabel'  => 'tb_petugas',
    //         'create_at'  => date('Y-m-d H:i:s'),
    //     );
    //     $this->myModel->insert('tb_aktifitas',$keterangan);
    //     echo json_encode($id);
    // }

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
    //     $up = $this->myModel->update('tb_petugas',$data);

    //     // INSERT TABLE AktifitAS
    //     $keterangan = array(
    //         'id_petugas' => $this->session->userdata('id_petugas'),
    //         'nama_aktifitas'  => 'UPDATE',
    //         'nama_tabel'  => 'tb_petugas',
    //         'create_at'  => date('Y-m-d H:i:s'),
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
    //     $cek = $this->myModel->selectWhere('tb_petugas',$where)->num_rows();
    //     $data = array('success' => false, 'msg' => '');
    //     if($cek > 0){
    //         $data = array('success' => true, 'msg' => '');
    //     }
    //     echo json_encode($data);
    // }
}

/* End of file ProductControllerAdmin.php */
