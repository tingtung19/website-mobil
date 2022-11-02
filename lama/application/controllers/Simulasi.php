<?php 
class Simulasi extends CI_Controller{
 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
  }
   
  function index(){
    $data = array(
              'data_mobil' => $this->front_model->get_mobil()->result_array(),
              'data_berita' => $this->front_model->get_berita_home()->result_array(),
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'content' => 'home', 

            );

      $this->load->view('frontend/template',$data);

  }

  function proses_simulasi(){
    if (isset($_POST['submit'])) {
     
      $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'harga' => $_POST['harga'],
              'dp' => $_POST['dp'],
              'bunga' => $_POST['bunga'], 
              'bulan' => $_POST['bulan'],
              'content' => 'hasil_simulasi', 

            );
    }else{
      $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'harga' => 0,
              'dp' => 0,
              'bunga' => 0, 
              'bulan' => 0,
              'content' => 'hasil_simulasi', 

            );
    }

      $this->load->view('frontend/template',$data);

  }



  
 
}









