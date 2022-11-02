<?php 
class Kabar_honda extends CI_Controller{
 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
  }
   
  function index(){
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_berita' => $this->front_model->get_berita()->result_array(),
			  
              'content' => 'list_berita', 

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

}