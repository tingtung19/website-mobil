<?php 
class Admin extends CI_Controller{
 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
      $this->load->library('upload'); 
  }
   
  function index(){
    $data = array(
              'data_mobil' => $this->front_model->get_mobil()->num_rows(),
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'content' => 'data-mobil', 

            );

      $this->load->view('backend/template',$data);

  }

  function profil(){

    if (isset($_POST['submit'])) {
      if (isset($_FILES['file_profil'])) {
        $file_path = 'image/profil/';
        $file_lama = $_POST['file_lama'];
        $config = array(
              'upload_path'   => $file_path,
              'allowed_types' => 'jpg|gif|png',
              'overwrite'     => 0,                 
            );
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $files = $_FILES;
        $name=$_FILES ['file_profil'] ['name'];
        if(!($this->upload->do_upload('file_profil')) || $files ['file_profil'] ['error'] !=0)
        {
          print_r($this->upload->display_errors());
          $data_update = array(
                        'nama_profil' => $_POST['nama_profil'], 
                        'deskripsi_profil' => $_POST['deskripsi_profil'], 
                        'alamat_profil' => $_POST['alamat_profil'], 
                        'nohp_profil' => $_POST['nohp_profil'], 
                        'email_profil' => $_POST['email_profil'], 
                      );
          $id_profil=$_POST['id_profil'];
          $this->front_model->ubah('t_profil', $data_update, ['id_profil'=> $id_profil]);
        }else{

          unlink('image/profil/'.$file_lama);
          $data_update = array(
                        'nama_profil' => $_POST['nama_profil'], 
                        'deskripsi_profil' => $_POST['deskripsi_profil'], 
                        'alamat_profil' => $_POST['alamat_profil'], 
                        'nohp_profil' => $_POST['nohp_profil'], 
                        'email_profil' => $_POST['email_profil'], 
                        'file_profil' => $name, 
                      );
          $id_profil=$_POST['id_profil'];
          $this->front_model->ubah('t_profil', $data_update, ['id_profil'=> $id_profil]);
        }
      }else{
        $data_update = array(
                        'nama_profil' => $_POST['nama_profil'], 
                        'deskripsi_profil' => $_POST['deskripsi_profil'], 
                        'alamat_profil' => $_POST['alamat_profil'], 
                        'nohp_profil' => $_POST['nohp_profil'], 
                      );
          $id_profil=$_POST['id_profil'];
          $this->front_model->ubah('t_profil', $data_update, ['id_profil'=> $id_profil]);
      }
    }

    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'content' => 'profil', 

            );

      $this->load->view('backend/template',$data);
  }


}