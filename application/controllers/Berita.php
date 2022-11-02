<?php 
class Berita extends CI_Controller{
 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
      $this->load->library('upload'); 
  }
   
  function index(){
    $data = array(
              'data_berita' => $this->front_model->get_berita()->num_rows(),
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'content' => 'data-berita', 

            );

      $this->load->view('backend/template',$data);

  }


  function data_berita(){
    if (isset($_POST['submit'])) {
      $judul_berita=$_POST['judul_berita'];
      $data = array('judul_berita' => $judul_berita);
      $simpan= $this->front_model->simpan('t_berita', $data);
      if ($simpan) {
        
        echo "<script>alert('Proses Simpan berhasil');
              window.location.assign('".base_url()."berita/data_berita');
              </script>";
      }else{
        echo "<script>alert('Proses Simpan gagal');
              window.location.assign('".base_url()."berita/data_berita');
              </script>";
      }
    }

    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_kategori' => $this->front_model->lihat('t_kategori')->result_array(),
              'data_berita' => $this->front_model->lihat('t_berita')->result_array(),
              'content' => 'data-berita', 

            );

      $this->load->view('backend/template',$data);


  }

  function tambah_berita(){

    if (isset($_POST['submit'])) {
      $file_path = 'image/berita/';
      // echo $file_path;



      if (isset($_FILES['gambar_berita'])) {

          if (!is_dir('image/berita/')) {
              mkdir('image/berita/', 0777, TRUE);
          }

          $config = array(
            'upload_path'   => $file_path,
            'allowed_types' => 'jpg|gif|png',
            'overwrite'     => 1,                 
          );

          $this->load->library('upload', $config);
          $this->upload->initialize($config);

          $files = $_FILES;
          // $cpt = count($_FILES ['gambar_berita'] ['name']);


          // for ($i = 0; $i < $cpt; $i ++) {

              $name = time().$files ['gambar_berita'] ['name'] ;
              $_FILES ['gambar_berita'] ['name'] = $name;
              $_FILES ['gambar_berita'] ['type'] = $files ['gambar_berita'] ['type'] ;
              $_FILES ['gambar_berita'] ['tmp_name'] = $files ['gambar_berita'] ['tmp_name'] ;
              $_FILES ['gambar_berita'] ['error'] = $files ['gambar_berita'] ['error'] ;
              $_FILES ['gambar_berita'] ['size'] = $files ['gambar_berita'] ['size'];

              
              if(!($this->upload->do_upload('gambar_berita')) || $files ['gambar_berita'] ['error'] !=0)
              {
                  print_r($this->upload->display_errors());
              }
              else
              {
                  
                  $data_input = array(
                    'judul_berita' => $_POST['judul_berita'], 
                    'deskripsi_berita' => $_POST['deskripsi_berita'],
                    'tgl_upload' => date('Y-m-d'),
                    'gambar_berita' => $name,
                    'id_admin' => '1',
                  );
                  $this->db->insert('t_berita',$data_input);
                  $id_berita = $this->db->insert_id();
                  header("location:".base_url()."berita/data_berita");
              }
          // }

          
      } else {
          $this->load->view('form-tambah-berita');
      }
    }
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'content' => 'form-tambah-berita', 

            );

      $this->load->view('backend/template',$data);

  }

  function hapus_berita($id){
    $id_berita = $this->uri->segment(3); 
    $data_berita= $this->front_model->lihat_where('t_berita',array('id_berita'=> $id_berita))->result_array();
    foreach ($data_berita as $data_b) {
      $gambar=$data_b['gambar_berita'];
      unlink('image/berita/'.$gambar);

    }
    $this->front_model->hapus('t_berita',['id_berita'=>$id_berita]);


    

    redirect('/berita/data_berita', 'refresh');

  }

  


}
