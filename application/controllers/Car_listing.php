<?php 
class Car_listing extends CI_Controller{
 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
  }
   
  function index(){
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_mobil' => $this->front_model->get_mobil()->result_array(),
			  'data_mobil_left' => $this->front_model->get_mobil()->result_array(),
              'data_kategori' => $this->front_model->lihat('t_kategori')->result_array(),
              'content' => 'car-listing', 

            );

      $this->load->view('frontend/template',$data);

  }
  
    function cari(){
		$id_kategori=$_POST['id_kategori'];
		$cari =$_POST['cari'];
		if($cari==''){
			$q="select * from t_mobil a
		LEFT JOIN t_kategori b on a.id_kategori=b.id_kategori
		LEFT JOIN t_gambar c on a.id_mobil=c.id_mobil 
		LEFT JOIN t_tipe d on d.id_mobil=a.id_mobil
		where a.id_kategori='$id_kategori'
		GROUP BY a.nama_mobil";
		}else{
			$q="select * from t_mobil a
		LEFT JOIN t_kategori b on a.id_kategori=b.id_kategori
		LEFT JOIN t_gambar c on a.id_mobil=c.id_mobil 
		LEFT JOIN t_tipe d on d.id_mobil=a.id_mobil
		where a.id_kategori='$id_kategori' and nama_mobil like ('%$cari%')
		GROUP BY a.nama_mobil ";
		}
		
    $data = array(
              'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_mobil_left' => $this->front_model->get_mobil()->result_array(),
			  'data_mobil' => $this->db->query($q)->result_array(),
              'data_kategori' => $this->front_model->lihat('t_kategori')->result_array(),
              'content' => 'car-listing', 

            );

      $this->load->view('frontend/template',$data);

  }
}