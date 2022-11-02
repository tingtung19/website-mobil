<?php 
class Spk extends CI_Controller{
 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
  }
   
  function index(){
    redirect (base_url('spk/form_spk'));

  }

  function form_spk(){
    if (isset($_POST['submit'])) {
     
      $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_kriteria' => $this->front_model->lihat('t_kriteria')->result_array(),
              'harga' => $_POST['harga'],
              'dp' => $_POST['dp'],
              'bunga' => $_POST['bunga'], 
              'bulan' => $_POST['bulan'],
              'content' => 'hasil_simulasi', 

            );
    }else{
      $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_kriteria' => $this->front_model->lihat('t_kriteria')->result_array(),
              'harga' => 0,
              'dp' => 0,
              'bunga' => 0, 
              'bulan' => 0,
              'content' => 'form_spk', 

            );
    }

      $this->load->view('frontend/template',$data);

  }



    function data_kriteria(){
    if (isset($_POST['submit'])) {
      $id_kriteria=$_POST['id_kriteria'];
      $nama_kriteria=$_POST['nama_kriteria'];
      $data = array('id_kriteria' => $id_kriteria, 'nama_kriteria' => $nama_kriteria);
      $simpan= $this->front_model->simpan('t_kriteria', $data);
      if ($simpan) {
        
        echo "<script>alert('Proses Simpan berhasil');
              window.location.assign('".base_url()."spk/data_kriteria');
              </script>";
      }else{
        echo "<script>alert('Proses Simpan gagal');
              window.location.assign('".base_url()."spk/data_kriteria');
              </script>";
      }
    }
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_kriteria' => $this->front_model->lihat('t_kriteria')->result_array(),
              'msg' => $msg,
              'content' => 'data-kriteria', 

            );

      $this->load->view('backend/template',$data);

  }

    function hapus_kriteria($id){
    $id_kriteria = $this->uri->segment(3);  
    if (isset($id_kriteria)) {
      $data = array('id_kriteria' => $id_kriteria);
      $hapus= $this->front_model->hapus('t_kriteria', $data);
      if ($hapus) {
        
        echo "<script>alert('Proses Hapus berhasil');
              window.location.assign('".base_url()."spk/data_kriteria');
              </script>";
      }else{
        echo "<script>alert('Proses Hapus gagal');
              window.location.assign('".base_url()."spk/data_kriteria');
              </script>";
      }
    }
  }



    function data_detail_kriteria(){
    if (isset($_POST['submit'])) {
      $id_kriteria=$_POST['id_kriteria'];
      $nama_detail_kriteria=$_POST['nama_detail_kriteria'];
      $nilai=$_POST['nilai'];
      $data = array('id_kriteria' => $id_kriteria, 'nama_detail_kriteria' => $nama_detail_kriteria, 'nilai' => $nilai,);
      $simpan= $this->front_model->simpan('t_detail_kriteria', $data);
      if ($simpan) {
        
        echo "<script>alert('Proses Simpan berhasil');
              window.location.assign('".base_url()."spk/data_detail_kriteria');
              </script>";
      }else{
        echo "<script>alert('Proses Simpan gagal');
              window.location.assign('".base_url()."spk/data_detail_kriteria');
              </script>";
      }
    }
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_kriteria' => $this->front_model->lihat('t_kriteria')->result_array(),
               'data_detail_kriteria' => $this->front_model->lihat('t_detail_kriteria')->result_array(),
              'msg' => $msg,
              'content' => 'data-detail-kriteria', 

            );

      $this->load->view('backend/template',$data);

  }


  function bobot_alternatif(){
      if (isset($_POST['submit'])) {
        $id_kriteria=$_POST['id_kriteria'];
        $nama_detail_kriteria=$_POST['nama_detail_kriteria'];
        $nilai=$_POST['nilai'];
        $data = array('id_kriteria' => $id_kriteria, 'nama_detail_kriteria' => $nama_detail_kriteria, 'nilai' => $nilai,);
        $simpan= $this->front_model->simpan('t_detail_kriteria', $data);
        if ($simpan) {
          
          echo "<script>alert('Proses Simpan berhasil');
                window.location.assign('".base_url()."spk/data_detail_kriteria');
                </script>";
        }else{
          echo "<script>alert('Proses Simpan gagal');
                window.location.assign('".base_url()."spk/data_detail_kriteria');
                </script>";
        }
      }
      $data = array(
                'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
                'data_mobil' => $this->front_model->lihat('t_mobil')->result_array(),
                'data_kriteria' => $this->front_model->lihat('t_kriteria')->result_array(),
                'data_detail_kriteria' => $this->front_model->lihat('t_detail_kriteria')->result_array(),
                'data_bobot' => $this->db->query("select * from t_bobot a, t_mobil b, t_kriteria c, t_detail_kriteria d where a.id_mobil=b.id_mobil and a.id_kriteria=c.id_kriteria and a.id_detail_kriteria=d.id_detail_kriteria")->result_array(),
                'msg' => $msg,
                'content' => 'data-bobot', 

              );

        $this->load->view('backend/template',$data);
  }


  
 
}









