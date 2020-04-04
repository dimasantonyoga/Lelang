<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AccountSettingControllerAdmin extends CI_Controller {

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
        $data['page'] = "Account Setting";
        $data['page_level'] = 1;
        $data['data'] = $this->myModel->joinWhere('tb_petugas','tb_level','tb_petugas.id_level = tb_level.id_level','left','id_petugas = '.$this->session->userdata('id_petugas'))->row();
        $this->load->view('admin/accountSettingAdmin',$data);
    }
    // Update Profile
    public function updateProfile(){
        $data = array(
            'username'      => $this->input->post('username'),
            'nama_petugas'      => $this->input->post('nama_petugas'),
        );
        $this->db->where('id_petugas', $this->session->userdata("id_petugas"));
        $this->myModel->update('tb_petugas',$data);
        $keterangan = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nama_aktifitas'  => 'UPDATE',
            'nama_tabel'  => 'tb_petugas'
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);
        echo json_encode($data);
    }

    // Update Password
    public function passwordUpdate(){
        $data = array(
            'password'      => substr(md5($this->input->post('password')),0,25),
        );
        $this->db->where('id_petugas', $this->session->userdata("id_petugas"));
        $this->myModel->update('tb_petugas',$data);
        $keterangan = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
            'nama_aktifitas'  => 'UPDATE',
            'nama_tabel'  => 'tb_petugas'
        );
        $this->myModel->insert('tb_aktifitas',$keterangan);
        echo json_encode("ok");
    }


    // read
    public function getData(){
        $where = array(
            'id_petugas' => $this->session->userdata('id_petugas'),
        );
        $data = $this->myModel->joinWhere('tb_petugas','tb_level','tb_petugas.id_level = tb_level.id_level','left','id_petugas = '.$this->session->userdata('id_petugas'))->row();
        echo json_encode($data);
    }

    // username cek
    public function usernameCek(){
        $username = $this->input->post('username');
        $data = $this->db->query("select username from tb_petugas where id_petugas != ".$this->session->userdata('id_petugas')." and username ='".$username."'")->num_rows();
        echo json_encode($data);
    }

    // password cek
    public function passwordCek(){
        $data = $this->db->query("select password from tb_petugas where id_petugas = ".$this->session->userdata('id_petugas')." and password ='".substr(md5($this->input->post('password')),0,25)."'")->num_rows();
        echo json_encode($data);
    }

    // update foto
    public function updateFoto(){
        if($this->input->post('cekImage') == "ada"){
            $config['upload_path']="./assets/img/profile"; //path folder file upload
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
                $this->db->where('id_petugas', $this->session->userdata("id_petugas"));
                $row = $this->db->get('tb_petugas')->row();
                if($row->foto != "default.jpg"){
                    unlink("./assets/img/profile/".$row->foto);
                }
                $data = array(
                    'foto' => $uploadedImage['file_name'],
                );
                $this->db->where('id_petugas', $this->session->userdata("id_petugas"));
                $update = $this->myModel->update('tb_petugas',$data);
                $keterangan = array(
                    'id_petugas' => $this->session->userdata('id_petugas'),
                    'nama_aktifitas'  => 'UPDATE',
                    'nama_tabel'  => 'tb_petugas'
                );
                $this->myModel->insert('tb_aktifitas',$keterangan);
                $data = array('success' => true, 'msg' => '');
            }
        }else{
            $data = "Oke";
        }
        echo json_encode($data);
    }

    public function resizeImage($filename){
        $path = './assets/img/profile/' . $filename;
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

/* End of file AccountSettingControllerAdmin.php */
