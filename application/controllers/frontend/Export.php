<?php
class Export extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Exportmodel');
    }

    public function index()
    {
        $data['country'] = $this->Exportmodel->fetchModeldata();

        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/export',$data);
        $this->load->view('frontend/template/footer');
    }

    public function insert_data()
    {
        $this->load->model('frontend/Exportmodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('number', 'number', 'required');
        $this->form_validation->set_rules('company_name', 'company_name', 'required');
        $this->form_validation->set_rules('country', 'country', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        

        $this->form_validation->set_rules('product_name', 'Name', 'required');
        $this->form_validation->set_rules('quantity', 'Email', 'required');
        $this->form_validation->set_rules('category', 'number', 'required');
        $this->form_validation->set_rules('units', 'company_name', 'required');
        $this->form_validation->set_rules('origin_country', 'country', 'required');
        $this->form_validation->set_rules('product_desc', 'address', 'required');
        
        if ($this->form_validation->run()) {
        
                $data = array(
                    'name' =>$this->input->post('name'),
                    'email' =>$this->input->post('email'),
                    'number' => $this->input->post('number'),
                    'company_name' =>$this->input->post('company_name'),
                    'country' =>$this->input->post('country'),
                    'address' =>$this->input->post('address'),
                   
                    'product_name' =>$this->input->post('product_name'),
                    'quantity' =>$this->input->post('quantity'),
                    'category' => $this->input->post('category'),
                    'units' =>$this->input->post('units'),
                    'origin_country' =>$this->input->post('origin_country'),
                    'product_desc' =>$this->input->post('product_desc'),
                    
                );
                if ($this->Exportmodel->insert_data($data)) {

                    $this->session->set_flashdata('success', 'Data Successfully Submited');
                    redirect(base_url() . 'export');
                } else {
    
                    $this->session->set_flashdata('error', 'Error In Submission');
                    redirect(base_url() . 'export');
                }
            
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . 'export');
        }
    }
}
