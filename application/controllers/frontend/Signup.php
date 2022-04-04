<?php
class Signup extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Usermodel');
        $this->load->model('admin/joindealmodel');
    }

    public function index()
    {

        $data['country']=$this->joindealmodel->fetch_country();
        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/signup',$data);
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

            if($this->input->post('password') == $this->input->post('confirm_password')){
                $data = array(
                    'name' =>$this->input->post('name'),
                    'email' =>$this->input->post('email'),
                    'number' =>$this->input->post('number'),
                    'password' => md5($this->input->post('password')),

                    'address' =>$this->input->post('address'),
                    'city' =>$this->input->post('city'),
                    'state' =>$this->input->post('state'),
                    'country' =>$this->input->post('country'),
                    'zip_code' =>$this->input->post('zip_code'),
                    'company_name' =>$this->input->post('company_name'),
                    'primary_business' =>$this->input->post('primary_business'),
                    'company_details' =>$this->input->post('company_details'),
                    'establish_year' =>$this->input->post('establish_year'),
                    'gst_no' =>$this->input->post('gst_no'),
                    'company_certification' =>$this->input->post('company_certification'),
                    'role_comapny' =>$this->input->post('role_comapny'),
                    
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
