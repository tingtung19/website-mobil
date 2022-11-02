<?php 
class About_us extends CI_Controller{
 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
  }
   
  function index(){
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'content' => 'about-us', 

            );

      $this->load->view('frontend/template',$data);

  }
}