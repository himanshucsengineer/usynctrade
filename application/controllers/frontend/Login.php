<?php
class Login extends CI_controller
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

        $this->load->view('frontend/login');
        $this->load->view('frontend/template/footer');
    }

    public function login()
    {
        $this->load->model('frontend/Usermodel');
        $model_data = $this->Usermodel->fetchModeldata();
        $login_success = 0;
        $user_data = array(
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        foreach ($model_data as $value) {
            if ((strtolower($value['email']) == strtolower($user_data['email'])) && ($value['password'] == md5($user_data['password']))) {

                $_SESSION["email"] = $value["email"];
                $_SESSION["name"] = $value["name"];
                $_SESSION["number"] = $value["number"];
                
                $login_success = 1;
                break;
            }
        }
        if ($login_success == 1) {
            redirect(base_url());
        } else {
            $this->session->set_flashdata('error', 'Wrong Email Or Password');
            redirect(base_url() . 'signin');
        }
    }

    public function update_pro()
    {
        $this->load->model('frontend/Usermodel');
        $this->input->post('formSubmit');
        
        
        $this->form_validation->set_rules('name', 'Name', 'required');
        
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('number', 'Mobile No', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
      
        if ($this->form_validation->run()) {
            
         
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $number = $this->input->post('number');
            $address = $this->input->post('address');

            if ($this->Usermodel->update_profile( $name, $email, $number,$address)) {
                $this->session->set_flashdata('error', 'Technical error');
                redirect(base_url() . 'user/profile');
            } else {
                $this->session->set_flashdata('success', 'Profile Updated');
                redirect(base_url() . 'user/profile');
            }

            

            
        }else{
            $this->session->set_flashdata('error', 'Please Fill all Fields');
            redirect(base_url() . 'user/profile');
        }
    }

}
