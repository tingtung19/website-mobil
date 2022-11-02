<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
	
	
class Contact_us extends CI_Controller{

 
  function __construct()
  {
      parent::__construct();
      $this->load->model('front_model');
	  
	  require APPPATH.'libraries/phpmailer/Exception.php';
      require APPPATH.'libraries/phpmailer/PHPMailer.php';
      require APPPATH.'libraries/phpmailer/SMTP.php';
                 
  }
   
  function index(){
	
    $data = array(
               'data_profil' => $this->front_model->lihat('t_profil')->row_array(),
              'data_mobil' => $this->front_model->get_mobil()->result_array(),
              'content' => 'contact-us', 

            );

      $this->load->view('frontend/template',$data);

  }
  
  function kirim_email(){
	  if (isset($_POST['kirim'])) {

        //require  base_url().'PHPMailer/PHPMailerAutoload.php';
        $email_pengirim = "klatenmobil@gmail.com";
        $email=$_POST['email'];
		$nama=$_POST['nama'];
		$no_hp=$_POST['no_hp'];
		$pesan=$_POST['pesan'];
		$isi="Ada Boking dari  $nama dengan nomor HP $no_hp , email : $email , dengan pesan sebagai berikut : <br> $pesan ";
        $subjek='Booking Honda Mobil Klaten';
        $email_tujuan='santi.hpk@gmail.com';

        $mail = new PHPMailer();

        $mail->IsHTML(true);    // set email format to HTML
        $mail->IsSMTP();   // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = $email_pengirim;  // alamat email kamu
        $mail->Password   = "Abcdef1%";            // password GMail
        $mail->SetFrom($email_pengirim, 'noreply');  //Siapa yg mengirim email
        $mail->Subject    = $subjek;
        $mail->Body       = $isi;
        $mail->AddAddress($email_tujuan);

        if(!$mail->Send()) {
            echo "Eror: ".$mail->ErrorInfo;
            exit;
        }else {
            echo "<div class='alert alert-success'><strong>Berhasil!</strong> Pesan telah berhasil dikirim ke admin  Mobil Honda Klaten (santi.hpk@gmail.com).</div>";
        }
    }
	  
  }
}