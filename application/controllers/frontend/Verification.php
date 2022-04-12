<?php
class Verification extends CI_controller
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

        $this->load->view('frontend/verification');
        $this->load->view('frontend/template/footer');
    }

    public function verify()
    {
        
        $this->load->model('frontend/Usermodel');
        $model_data = $this->Usermodel->fetchModeldata();
        $email = $_SESSION['verify_email'];
        
        foreach($model_data as $value){
            if($email == $value['email']){
                $final_email = $value['email'];
                $otp = $value['otp'];
            }
        }
         if($otp == $this->input->post('otp')){
             if ($this->Usermodel->update_profile_status($final_email )) {
                 $this->session->set_flashdata('error', 'Error In submission');
                redirect(base_url() . 'verification');
                
            } else {
                $this->session->set_flashdata('success', 'Account Verified Successfully');
                redirect(base_url() . 'signin');
            }
         }else{
            $this->session->set_flashdata('error', 'Enter Valid Otp');
            redirect(base_url() . 'verification');
         }
        
    }
}
