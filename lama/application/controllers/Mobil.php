<?php 
class Mobil extends CI_Controller{
 
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


  function data_mobil(){
    if (isset($_POST['submit'])) {
      $nama_mobil=$_POST['nama_mobil'];
      $data = array('nama_mobil' => $nama_mobil);
      $simpan= $this->front_model->simpan('t_mobil', $data);
      if ($simpan) {
        
        echo "<script>alert('Proses Simpan berhasil');
              window.location.assign('".base_url()."master/mobil');
              </script>";
      }else{
        echo "<script>alert('Proses Simpan gagal');
              window.location.assign('".base_url()."master/mobil');
              </script>";
      }
    }

    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_kategori' => $this->front_model->lihat('t_kategori')->result_array(),
              'data_mobil' => $this->front_model->lihat('t_mobil')->result_array(),
              'content' => 'data-mobil', 

            );

      $this->load->view('backend/template',$data);


  }

  function tambah_mobil(){

    if (isset($_POST['submit'])) {
      $file_path = 'image/mobil/';
      // echo $file_path;

      $data_input = array(
        'nama_mobil' => $_POST['nama_mobil'], 
        'id_kategori' => $_POST['id_kategori'],
        'deskripsi' => $_POST['deskripsi']
      );
      $this->db->insert('t_mobil',$data_input);
      $id_mobil = $this->db->insert_id();


      if (isset($_FILES['multipleUpload'])) {

          if (!is_dir('image/mobil/')) {
              mkdir('image/mobil/', 0777, TRUE);
          }

          $config = array(
            'upload_path'   => $file_path,
            'allowed_types' => 'jpg|gif|png',
            'overwrite'     => 1,                 
          );

          $this->load->library('upload', $config);
          $this->upload->initialize($config);

          $files = $_FILES;
          $cpt = count($_FILES ['multipleUpload'] ['name']);


          for ($i = 0; $i < $cpt; $i ++) {

              $name = time().$files ['multipleUpload'] ['name'] [$i];
              $_FILES ['multipleUpload'] ['name'] = $name;
              $_FILES ['multipleUpload'] ['type'] = $files ['multipleUpload'] ['type'] [$i];
              $_FILES ['multipleUpload'] ['tmp_name'] = $files ['multipleUpload'] ['tmp_name'] [$i];
              $_FILES ['multipleUpload'] ['error'] = $files ['multipleUpload'] ['error'] [$i];
              $_FILES ['multipleUpload'] ['size'] = $files ['multipleUpload'] ['size'] [$i];

              
              if(!($this->upload->do_upload('multipleUpload')) || $files ['multipleUpload'] ['error'] [$i] !=0)
              {
                  print_r($this->upload->display_errors());
              }
              else
              {
                  $data = array('
                    id_mobil' => $id_mobil, 
                    'gambar' => $name,
                  );
                  $this->front_model->simpan('t_gambar',$data);
              }
          }

          
      } else {
          $this->load->view('form-tambah-mobil');
      }
    }
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_kategori' => $this->front_model->lihat('t_kategori')->result_array(),
              'content' => 'form-tambah-mobil', 

            );

      $this->load->view('backend/template',$data);

  }

  function hapus_mobil($id){
    $id_mobil = $this->uri->segment(3); 
    $data_mobil = $this->front_model->lihat_where('t_gambar',array('id_mobil'=> $id_mobil))->result_array();
    foreach ($data_mobil as $data_m) {
      $gambar=$data_m['gambar'];
      unlink('image/mobil/'.$gambar);

    }
    $this->front_model->hapus('t_gambar',['id_mobil'=>$id_mobil]);


    $data_tipe = $this->front_model->lihat_where('t_tipe',array('id_mobil'=> $id_mobil))->result_array();
    foreach ($data_tipe as $data_t) {
      $id_tipe=$data_t['id_tipe'];
      $this->front_model->hapus('t_detail_tipe',['id_tipe'=>$id_tipe]);

    }
    $this->front_model->hapus('t_tipe',['id_mobil'=>$id_mobil]);
    $this->front_model->hapus('t_mobil',['id_mobil'=>$id_mobil]);

    redirect('/mobil/data_mobil', 'refresh');

  }

  function tipe_mobil(){
    if (isset($_POST['cek'])) {
      $id_mobil=$_POST['id_mobil'];
      $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_mobil' => $this->front_model->lihat('t_mobil')->result_array(),
              'data_tipe' => $this->front_model->queryku("select * from t_mobil a, t_tipe b where a.id_mobil=b.id_mobil and a.id_mobil='$id_mobil'")->result_array(),
              'jumlah_tipe' => $this->front_model->queryku("select * from t_mobil a, t_tipe b where a.id_mobil=b.id_mobil and a.id_mobil='$id_mobil'")->num_rows(),

              'id_mobil' => $id_mobil,
              'content' => 'tipe-mobil', 

            );
      # code...
    }else{
      $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_mobil' => $this->front_model->lihat('t_mobil')->result_array(),
              'jumlah_tipe' => '0',
              'content' => 'tipe-mobil', 

            );

      
    }

    $this->load->view('backend/template',$data);
  }

  function tambah_tipe($id){

    if (isset($_POST['submit'])) {
      

      $data_input = array(
        'id_mobil' => $_POST['id_mobil'], 
        'nama_tipe' => $_POST['nama_tipe'],
        'harga' => $_POST['harga']
      );
      $this->db->insert('t_tipe',$data_input);
      $id_tipe = $this->db->insert_id();

      $id_spek= $_POST['id_spek'];
      $keterangan_spek= $_POST['keterangan_spek'];

      $pjg=count($id_spek);

      for ($i=0; $i < $pjg ; $i++) { 
        $data_spek = array(
          'id_tipe' => $id_tipe, 
          'id_spek' => $id_spek[$i],
          'keterangan_spek' => $keterangan_spek[$i],
        );
        $this->db->insert('t_detail_tipe',$data_spek);
      }



    }

    $id_mobil = $this->uri->segment(3); 
    $data_mobil = $this->front_model->lihat_where('t_mobil', array('id_mobil'=>$id_mobil))->row_array();
    $nama_mobil = $data_mobil['nama_mobil'];

     $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_spek' => $this->front_model->lihat('t_spek')->result_array(),
              'id_mobil' => $id_mobil,
              'nama_mobil' => $nama_mobil,
              'content' => 'form-tambah-tipe', 

            );

      

    $this->load->view('backend/template',$data);
  }

  function hapus_tipe($id){
    $id_tipe = $this->uri->segment(3);     
    $this->front_model->hapus('t_detail_tipe',['id_tipe'=>$id_tipe]);    
    $this->front_model->hapus('t_tipe',['id_tipe'=>$id_tipe]);

    redirect('/mobil/tipe_mobil', 'refresh');

  }


}
