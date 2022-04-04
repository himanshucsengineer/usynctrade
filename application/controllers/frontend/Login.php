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

                $_SESSION["address"] = $value["address"];
                $_SESSION["city"] = $value["city"];
                $_SESSION["state"] = $value["state"];
                $_SESSION["country"] = $value["country"];
                $_SESSION["company_name"] = $value["company_name"];
                
                
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

        $this->form_validation->set_rules('city', 'city', 'required');
        $this->form_validation->set_rules('state', 'state', 'required');
        $this->form_validation->set_rules('country', 'country', 'required');
        $this->form_validation->set_rules('zip_code', 'zip_code', 'required');
        $this->form_validation->set_rules('company_name', 'company_name', 'required');
        $this->form_validation->set_rules('primary_business', 'primary_business', 'required');
        $this->form_validation->set_rules('company_details', 'company_details', 'required');
        $this->form_validation->set_rules('establish_year', 'establish_year', 'required');
        $this->form_validation->set_rules('gst_no', 'gst_no', 'required');
        $this->form_validation->set_rules('company_certification', 'company_certification', 'required');
        $this->form_validation->set_rules('role_comapny', 'role_comapny', 'required');

      
        if ($this->form_validation->run()) {
            
         
            $name = $this->input->post('name');
            $email = $this->input->post('email');
            $number = $this->input->post('number');
            $address = $this->input->post('address');

            $city = $this->input->post('city');
            $state = $this->input->post('state');
            $country = $this->input->post('country');
            $zip_code = $this->input->post('zip_code');
            $company_name = $this->input->post('company_name');
            $primary_business = $this->input->post('primary_business');
            $company_details = $this->input->post('company_details');
            $establish_year = $this->input->post('establish_year');
            $gst_no = $this->input->post('gst_no');
            $company_certification = $this->input->post('company_certification');
            $role_comapny = $this->input->post('role_comapny');
           

            if ($this->Usermodel->update_profile( $name,$email,$number,$address,$city,$state,$country,$zip_code,$company_name,$primary_business,$company_details,$establish_year,$gst_no,$company_certification,$role_comapny)) {
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
