<?php
class Forgot extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
      $this->load->model('frontend/Usermodel');
    }

    public function index()
    {


        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/forgot');
        $this->load->view('frontend/template/footer');
    }

    public function forgot_pass()
    {
        
        $this->load->model('frontend/Usermodel');
        $model_data = $this->Usermodel->fetchModeldata();
        $email = $this->input->post('email');
        
        foreach($model_data as $value){
            if($email == $value['email']){
                $final_email = $value['email'];
                $pass = $value['password'];
            }
        }
        
        
        $from = "verify@eximsure.com";
        $to = $final_email;
        $subject = "Verify Email";
        $message = "Your Password Is: $pass ";
        $headers = "From:" . $from;
        if(mail($to,$subject,$message, $headers)) {
            $this->session->set_flashdata('success', 'We sent Your Password On your email');
            redirect(base_url() . 'forget_password');
        } else {
            $this->session->set_flashdata('error', 'Please Enter Valid Email');
            redirect(base_url() . 'forget_password');
        }
    }
}
