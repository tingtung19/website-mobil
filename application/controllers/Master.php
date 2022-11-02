<?php 
class Master extends CI_Controller{
 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
  }
   
  function index(){
    $data = array(
              'data_mobil' => $this->front_model->get_mobil()->num_rows(),
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'content' => 'dashboard', 

            );

      $this->load->view('backend/template',$data);

  }

  function spek(){
    if (isset($_POST['submit'])) {
      $nama_spek=$_POST['nama_spek'];
      $data = array('nama_spek' => $nama_spek);
      $simpan= $this->front_model->simpan('t_spek', $data);
      if ($simpan) {
        
        echo "<script>alert('Proses Simpan berhasil');
              window.location.assign('".base_url()."master/spek');
              </script>";
      }else{
        echo "<script>alert('Proses Simpan gagal');
              window.location.assign('".base_url()."master/spek');
              </script>";
      }
    }

    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_spek' => $this->front_model->lihat('t_spek')->result_array(),
              'content' => 'spek', 

            );

      $this->load->view('backend/template',$data);


  }

   function edit_spek($id){
    if (isset($_POST['submit'])) {
      $nama_spek=$_POST['nama_spek'];
      $id_spek=$_POST['id_spek'];
      $data = array('nama_spek' => $nama_spek);
      $data_where = array('id_spek' => $id_spek);
      $simpan= $this->front_model->ubah('t_spek', $data, $data_where  );
     if ($simpan) {
        
        echo "<script>alert('Proses Ubah berhasil');
              window.location.assign('".base_url()."master/spek');
              </script>";
      }else{
        echo "<script>alert('Proses Ubah gagal');
              window.location.assign('".base_url()."master/spek');
              </script>";
      }
    }

    $id_spek = $this->uri->segment(3); 
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_kategori' => $this->front_model->lihat_where('t_spek',array('id_spek'=>$id_spek))->row_array(),
              
              'content' => 'form-spek', 

            );

      $this->load->view('backend/template',$data);


  }

  function hapus_spek($id){
    $id_spek = $this->uri->segment(3);  
    if (isset($id_spek)) {
      $data = array('id_spek' => $id_spek);
      $hapus= $this->front_model->hapus('t_spek', $data);
      if ($hapus) {
        
        echo "<script>alert('Proses Hapus berhasil');
              window.location.assign('".base_url()."master/spek');
              </script>";
      }else{
        echo "<script>alert('Proses Hapus gagal');
              window.location.assign('".base_url()."master/spek');
              </script>";
      }
    }

    

  }

  function kategori(){
    if (isset($_POST['submit'])) {
      $nama_kategori=$_POST['nama_kategori'];
      $data = array('nama_kategori' => $nama_kategori);
      $simpan= $this->front_model->simpan('t_kategori', $data);
      if ($simpan) {
        
        echo "<script>alert('Proses Simpan berhasil');
              window.location.assign('".base_url()."master/kategori');
              </script>";
      }else{
        echo "<script>alert('Proses Simpan gagal');
              window.location.assign('".base_url()."master/kategori');
              </script>";
      }
    }
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_kategori' => $this->front_model->lihat('t_kategori')->result_array(),
              'msg' => $msg,
              'content' => 'kategori', 

            );

      $this->load->view('backend/template',$data);

  }

  function edit_kategori($id){
    if (isset($_POST['submit'])) {
      $nama_kategori=$_POST['nama_kategori'];
      $id_kategori=$_POST['id_kategori'];
      $data = array('nama_kategori' => $nama_kategori);
      $data_where = array('id_kategori' => $id_kategori);
      $simpan= $this->front_model->ubah('t_kategori', $data, $data_where  );
     if ($simpan) {
        
        echo "<script>alert('Proses Ubah berhasil');
              window.location.assign('".base_url()."master/kategori');
              </script>";
      }else{
        echo "<script>alert('Proses Ubah gagal');
              window.location.assign('".base_url()."master/kategori');
              </script>";
      }
    }

    $id_kategori = $this->uri->segment(3); 
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_kategori' => $this->front_model->lihat_where('t_kategori',array('id_kategori'=>$id_kategori))->row_array(),
              
              'content' => 'form-kategori', 

            );

      $this->load->view('backend/template',$data);


  }

  function hapus_kategori($id){
    $id_kategori = $this->uri->segment(3);  
    if (isset($id_kategori)) {
      $data = array('id_kategori' => $id_kategori);
      $hapus= $this->front_model->hapus('t_kategori', $data);
      if ($hapus) {
        
        echo "<script>alert('Proses Hapus berhasil');
              window.location.assign('".base_url()."master/kategori');
              </script>";
      }else{
        echo "<script>alert('Proses Hapus gagal');
              window.location.assign('".base_url()."master/kategori');
              </script>";
      }
    }

    

  }

  


 
}









