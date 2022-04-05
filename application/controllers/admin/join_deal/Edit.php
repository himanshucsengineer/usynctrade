<?php
class Edit extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
   $this->load->model('admin/joindealmodel');
  }

  public function index()
  {

    $data['country']=$this->joindealmodel->fetch_country();
    $data['fetch_content']=$this->joindealmodel->fetchinventory_api();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/join_deal/edit',$data);
    $this->load->view('admin/template/footer');
  }

  public function update()
  {
    $this->load->model('admin/joindealmodel');
    $this->input->post('formSubmit');

    $name = $this->input->post('name');
    $category = $this->input->post('category');
    $destination_country = $this->input->post('destination_country');
    $date = $this->input->post('date');
    $id = $this->input->post('id');
    $target_price = $this->input->post('target_price');
    $quantity = $this->input->post('quantity');

    $payment_terms = $this->input->post('payment_terms');
    $shipping_terms = $this->input->post('shipping_terms');
  
    $description = $this->input->post('description');
    
    if (!empty($_FILES['images']['name'])) {

      $File_name ='';

      $config['upload_path'] = APPPATH . '../upload/join_deal';
      $config['file_name'] = $File_name;
      $config['overwrite'] = TRUE;
      $config["allowed_types"] = 'png|jpg|jpeg';
      $config["max_size"] = '6144';

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('images')) {

          $this->data['error'] = $this->upload->display_errors();
          $this->session->set_flashdata('error', $this->upload->display_errors());

          redirect(base_url().'admin/join_deal/view');
      } else {
          $dataimage_return = $this->upload->data();
          $imageurl = $dataimage_return['file_name'];
      }
  }else {
    $data = $this->joindealmodel->fetchinventory_api();

    foreach ($data as $value) {
        if ($value['id'] == $this->input->post('id')) {
            $imageurl = $value['image'];
        }
    }
}

    
    if ($this->joindealmodel->update_joindeal($name, $category,$destination_country,$date,$id,$target_price,$quantity,$payment_terms,$shipping_terms,$imageurl,$description)) {
      $this->session->set_flashdata('success', 'Technical error');
      redirect(base_url() . 'admin/join_deal/view');
    } else {
      $this->session->set_flashdata('success', 'Updated Successfully');
      redirect(base_url() . 'admin/join_deal/view');
    }
      
  }



 


 
}
