<?php 
class Dashboard extends CI_Controller{
 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
  }
   
  function index(){
    $data = array(
              'data_mobil' => $this->front_model->get_mobil()->num_rows(),
              'data_berita' => $this->front_model->get_berita()->num_rows(),
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'content' => 'dashboard', 

            );

      $this->load->view('backend/template',$data);

  }

  


 
}









