<?php
class Import extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/Importmodel');
    }

    public function index()
    {
        $data['country'] = $this->Importmodel->fetchModeldata();

        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/import',$data);
        $this->load->view('frontend/template/footer');
    }

    public function insert_data()
    {
        $this->load->model('frontend/Importmodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('product_name', 'product name', 'required');
        $this->form_validation->set_rules('product_type', 'product type', 'required');
        $this->form_validation->set_rules('quantity', 'quantity', 'required');
        $this->form_validation->set_rules('pieces', 'pieces', 'required');
        $this->form_validation->set_rules('budget', 'budget', 'required');
        $this->form_validation->set_rules('currency', 'currency', 'required');
        $this->form_validation->set_rules('source_country', 'source_country', 'required');
        $this->form_validation->set_rules('destination_country', 'destination_country', 'required');
        $this->form_validation->set_rules('infoterms', 'infoterms', 'required');
        $this->form_validation->set_rules('product_details', 'product_details', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('number', 'number', 'required');
        $this->form_validation->set_rules('company_name', 'company_name', 'required');
        $this->form_validation->set_rules('country', 'country', 'required');
        $this->form_validation->set_rules('address', 'address', 'required');
        
        
        if ($this->form_validation->run()) {
            if (!empty($_FILES['images']['name'])) {

                $File_name ='';
    
                $config['upload_path'] = APPPATH . '../upload/import';
                $config['file_name'] = $File_name;
                $config['overwrite'] = TRUE;
                $config["allowed_types"] = 'jpg|jpeg|png';
                $config["max_size"] = '';
    
                $this->load->library('upload', $config);
    
                if (!$this->upload->do_upload('images')) {
    
                    $this->data['error'] = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $this->upload->display_errors());
    
                    redirect(base_url().'import');
                } else {
                    $dataimage_return = $this->upload->data();
                    $imageurl = $dataimage_return['file_name'];
                }
            }
        
                $data = array(
                    'product_name' =>$this->input->post('product_name'),
                    'product_type' =>$this->input->post('product_type'),
                    'quantity' =>$this->input->post('quantity'),
                    'pieces' => $this->input->post('pieces'),
                    'budget' =>$this->input->post('budget'),
                    'currency' =>$this->input->post('currency'),
                    'source_country' =>$this->input->post('source_country'),
                    'destination_country' => $this->input->post('destination_country'),
                    'infoterms' =>$this->input->post('infoterms'),
                    'product_details' =>$this->input->post('product_details'),
                    'name' =>$this->input->post('name'),
                    'email' =>$this->input->post('email'),
                    'number' => $this->input->post('number'),
                    'company_name' =>$this->input->post('company_name'),
                    'country' =>$this->input->post('country'),
                    'address' =>$this->input->post('address'),
                    'image' => $imageurl,
                    
                );
                if ($this->Importmodel->insert_data($data)) {

                    $this->session->set_flashdata('success', 'Data Successfully Submited');
                    redirect(base_url() . 'import');
                } else {
    
                    $this->session->set_flashdata('error', 'Error In Submission');
                    redirect(base_url() . 'import');
                }
            
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . 'import');
        }
    }
}
