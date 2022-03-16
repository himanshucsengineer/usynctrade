<?php
class Signup extends CI_controller
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

        $this->load->view('frontend/signup');
        $this->load->view('frontend/template/footer');
    }


    public function create_user()
    {
        $this->load->model('frontend/Usermodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
        $this->form_validation->set_rules('number', 'number', 'required');
        $this->form_validation->set_rules('password', 'Subject', 'required');
        $this->form_validation->set_rules('confirm_password', 'Message', 'required');
        if ($this->form_validation->run()) {

            if($this->input->post('password') == $this->input->post('confirm_password')){
                $data = array(
                    'name' =>$this->input->post('name'),
                    'email' =>$this->input->post('email'),
                    'number' =>$this->input->post('number'),
                    'password' => md5($this->input->post('password')),
                );
                if ($this->Usermodel->insert_data($data)) {

                    $this->session->set_flashdata('success', 'Your Account is succussfully Created! Please login to go to dashboard.');
                    redirect(base_url() . 'signin');
                } else {
    
                    $this->session->set_flashdata('error', 'Error In Submission');
                    redirect(base_url() . 'signup');
                }
            }else{
                $this->session->set_flashdata('error', 'Password Not Matched');
                redirect(base_url() . 'signup');
            }
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . 'signup');
        }
    }
}
