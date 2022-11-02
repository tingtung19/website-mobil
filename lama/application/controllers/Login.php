<?php 
class Login extends CI_Controller{
 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
  }
   
  function index(){
  	if(isset($_POST['login']))
	{
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		
		$sql = $this->front_model->lihat_where('t_admin',array('username' => $username , 'password'=> $password ))->num_rows();
		if($sql>0){
			// $_SESSION['username']=$results['username'];
			$currentpage=base_url('Dashboard');
			echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
		} else{
			$currentpage=base_url('home');
				echo "<script>alert('Email atau Password Salah!');</script>";
				echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
			}
	}
    

  }
  
public function logout()
    {
        //$this->session->sess_destroy();
        redirect(base_url('home'));
    }


}
?>