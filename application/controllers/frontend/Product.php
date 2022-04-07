<?php
class Product extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/productmodel');
        $this->load->model('admin/joindealmodel');
    }

    public function index()
    {
        $data['fetch_company_image']=$this->productmodel->fetch_company_image();
        $data['fetch_product_image']=$this->productmodel->fetch_product_image();
        $data['country']=$this->joindealmodel->fetch_country();
        $data['product_details']=$this->productmodel->fetch_profuctssss();
        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/product',$data);
        $this->load->view('frontend/template/footer');
    }


    public function trade_inquery()
    {
        $this->load->model('admin/productmodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('user_name', 'Name', 'required');
        $this->form_validation->set_rules('user_email', 'Email', 'required');
        $this->form_validation->set_rules('user_number', 'number', 'required');
        $this->form_validation->set_rules('quantity', 'Subject', 'required');
        $this->form_validation->set_rules('pieces', 'Message', 'required');

        $this->form_validation->set_rules('incoterms', 'address', 'required');
        $this->form_validation->set_rules('destination_country', 'city', 'required');
        $this->form_validation->set_rules('budget', 'state', 'required');
        $this->form_validation->set_rules('currency', 'country', 'required');
        $this->form_validation->set_rules('message', 'zip_code', 'required');
        $this->form_validation->set_rules('product_id', 'zip_code', 'required');
        
        if ($this->form_validation->run()) {

            
                $data = array(
                    'user_name' =>$this->input->post('user_name'),
                    'user_email' =>$this->input->post('user_email'),
                    'user_number' =>$this->input->post('user_number'),
                    'quantity' => $this->input->post('quantity'),

                    'pieces' =>$this->input->post('pieces'),
                    'incoterms' =>$this->input->post('incoterms'),
                    'destination_country' =>$this->input->post('destination_country'),
                    'budget' =>$this->input->post('budget'),
                    'currency' =>$this->input->post('currency'),
                    'message' =>$this->input->post('message'),
                    'product_id' =>$this->input->post('product_id'),
                    
                );
                if ($this->productmodel->insert_trade_inquery($data)) {

                    $this->session->set_flashdata('success', 'Your Query has been successfully Submited');
                    redirect(base_url().'product/'.$this->input->post('product_id'));
                } else {
    
                    $this->session->set_flashdata('error', 'Error In Submission');
                    redirect(base_url() . 'product/'.$this->input->post('product_id'));
                }
        } else {
            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . 'product/'.$this->input->post('product_id'));
        }
    }


}
