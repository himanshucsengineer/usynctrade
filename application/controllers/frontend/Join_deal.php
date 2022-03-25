<?php
class Join_deal extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/joindealmodel');
        
    }
 
    public function index()
    {

        $data['country']=$this->joindealmodel->fetch_country();
        $data['join_deal']=$this->joindealmodel->fetchinventory_api();
        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/join_deal',$data);
        $this->load->view('frontend/template/footer');
    }


    public function insert_data()
    {
        $this->load->model('admin/joindealmodel');
        $this->input->post('formSubmit');
        $this->form_validation->set_rules('product_id', 'Name', 'required');
        $this->form_validation->set_rules('cutomer_email', 'Email', 'required');
        $this->form_validation->set_rules('offer_details', 'number', 'required');
        $this->form_validation->set_rules('product_origin', 'Subject', 'required');
        $this->form_validation->set_rules('offer_price', 'Message', 'required');
        $this->form_validation->set_rules('company_name', 'Message', 'required');
        if ($this->form_validation->run()) {

            $data = array(
                'product_id' => $this->input->post('product_id'),
                'cutomer_email' => $this->input->post('cutomer_email'),
                'offer_details' => $this->input->post('offer_details'),
                'product_origin' => $this->input->post('product_origin'),
                'offer_price' => $this->input->post('offer_price'),
                'company_name' => $this->input->post('company_name'),
            );

           
            if ($this->joindealmodel->join_deal_query($data)) {

                $this->session->set_flashdata('success', 'Query Successfully Submited');
                redirect(base_url() . 'join-this-deal/' . $this->input->post('product_id'));
            } else {

                $this->session->set_flashdata('error', 'Error In Submission');
                redirect(base_url() . 'join-this-deal/' . $this->input->post('product_id'));
            }
        } else {

            $this->session->set_flashdata('error', 'Please Fill All The Fields');
            redirect(base_url() . 'join-this-deal/' . $this->input->post('product_id'));
        }
    }


}
