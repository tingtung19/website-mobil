<?php 
class Home extends CI_Controller{
 
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

  function detail_mobil($id){

    $id_mobil = $this->uri->segment(3);   
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_m' => $this->front_model->get_mobil_where($id_mobil)->result_array(),
              'data_tipe' => $this->front_model->lihat_where('t_tipe',array('id_mobil'=>$id_mobil))->result_array(),
              'data_gambar' => $this->front_model->lihat_where('t_gambar',array('id_mobil'=>$id_mobil))->result_array(),
              'content' => 'vehical-details', 
              'id_mobil' => $id_mobil ,

            );

      $this->load->view('frontend/template',$data);

  }

    function detail_berita($id){

    $id_berita = $this->uri->segment(3);   
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_berita' => $this->front_model->get_berita_where($id_berita)->row_array(),
              'content' => 'detail_berita', 
              'id_berita' => $id_berita ,

            );

      $this->load->view('frontend/template',$data);

  }

   function show(){
      echo "I Make The World Better Place.";
  }
 
}









