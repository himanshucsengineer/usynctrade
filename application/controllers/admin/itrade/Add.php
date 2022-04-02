<?php
class Add extends CI_controller
{

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('vendorAuth')) {
      redirect('login');
    }
    $this->load->model('admin/joindealmodel');
    $this->load->model('admin/itrademodel');
  }

  public function index()
  { 

    
    $data['country']=$this->joindealmodel->fetch_country();
    $this->load->view('admin/template/header');
    $this->load->view('admin/template/sidebar');
    $this->load->view('admin/template/topbar');
    $this->load->view('admin/itrade/add',$data);
    $this->load->view('admin/template/footer');
  }


  public function add_deal()
  {
      $this->load->model('admin/itrademodel');
      $this->input->post('formSubmit');
      $this->form_validation->set_rules('name', 'Name', 'required');
      $this->form_validation->set_rules('source_country', 'sector', 'required');
      $this->form_validation->set_rules('destination_country', 'type', 'required');
      
      
      if ($this->form_validation->run()) {

        if (!empty($_FILES['news_export']['name'])) {

          $File_name ='';

          $config['upload_path'] = APPPATH . '../upload/itrade';
          $config['file_name'] = $File_name;
          $config['overwrite'] = TRUE;
          $config["allowed_types"] = 'doc|docx|pdf';
          $config["max_size"] = '';

          $this->load->library('upload', $config);

          if (!$this->upload->do_upload('news_export')) {

              $this->data['error'] = $this->upload->display_errors();
              $this->session->set_flashdata('error', $this->upload->display_errors());

              redirect(base_url().'admin/itrade/add');
          } else {
              $dataimage_return = $this->upload->data();
              $news_export = $dataimage_return['file_name'];
          }
      }



      if (!empty($_FILES['news_import']['name'])) {

        $File_name ='';

        $config['upload_path'] = APPPATH . '../upload/itrade';
        $config['file_name'] = $File_name;
        $config['overwrite'] = TRUE;
        $config["allowed_types"] = 'doc|docx|pdf';
        $config["max_size"] = '';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('news_import')) {

            $this->data['error'] = $this->upload->display_errors();
            $this->session->set_flashdata('error', $this->upload->display_errors());

            redirect(base_url().'admin/itrade/add');
        } else {
            $dataimage_return = $this->upload->data();
            $news_import = $dataimage_return['file_name'];
        }
    }



    if (!empty($_FILES['duty_export']['name'])) {

      $File_name ='';

      $config['upload_path'] = APPPATH . '../upload/itrade';
      $config['file_name'] = $File_name;
      $config['overwrite'] = TRUE;
      $config["allowed_types"] = 'doc|docx|pdf';
      $config["max_size"] = '';

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('duty_export')) {

          $this->data['error'] = $this->upload->display_errors();
          $this->session->set_flashdata('error', $this->upload->display_errors());

          redirect(base_url().'admin/itrade/add');
      } else {
          $dataimage_return = $this->upload->data();
          $duty_export = $dataimage_return['file_name'];
      }
  }

  if (!empty($_FILES['duty_import']['name'])) {

    $File_name ='';

    $config['upload_path'] = APPPATH . '../upload/itrade';
    $config['file_name'] = $File_name;
    $config['overwrite'] = TRUE;
    $config["allowed_types"] = 'doc|docx|pdf';
    $config["max_size"] = '';

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('duty_import')) {

        $this->data['error'] = $this->upload->display_errors();
        $this->session->set_flashdata('error', $this->upload->display_errors());

        redirect(base_url().'admin/itrade/add');
    } else {
        $dataimage_return = $this->upload->data();
        $duty_import = $dataimage_return['file_name'];
    }
}


if (!empty($_FILES['statics_export']['name'])) {

  $File_name ='';

  $config['upload_path'] = APPPATH . '../upload/itrade';
  $config['file_name'] = $File_name;
  $config['overwrite'] = TRUE;
  $config["allowed_types"] = 'doc|docx|pdf';
  $config["max_size"] = '';

  $this->load->library('upload', $config);

  if (!$this->upload->do_upload('statics_export')) {

      $this->data['error'] = $this->upload->display_errors();
      $this->session->set_flashdata('error', $this->upload->display_errors());

      redirect(base_url().'admin/itrade/add');
  } else {
      $dataimage_return = $this->upload->data();
      $statics_export = $dataimage_return['file_name'];
  }
}

if (!empty($_FILES['statics_import']['name'])) {

  $File_name ='';

  $config['upload_path'] = APPPATH . '../upload/itrade';
  $config['file_name'] = $File_name;
  $config['overwrite'] = TRUE;
  $config["allowed_types"] = 'doc|docx|pdf';
  $config["max_size"] = '';

  $this->load->library('upload', $config);

  if (!$this->upload->do_upload('statics_import')) {

      $this->data['error'] = $this->upload->display_errors();
      $this->session->set_flashdata('error', $this->upload->display_errors());

      redirect(base_url().'admin/itrade/add');
  } else {
      $dataimage_return = $this->upload->data();
      $statics_import = $dataimage_return['file_name'];
  }
}

if (!empty($_FILES['cost_export']['name'])) {

  $File_name ='';

  $config['upload_path'] = APPPATH . '../upload/itrade';
  $config['file_name'] = $File_name;
  $config['overwrite'] = TRUE;
  $config["allowed_types"] = 'doc|docx|pdf';
  $config["max_size"] = '';

  $this->load->library('upload', $config);

  if (!$this->upload->do_upload('cost_export')) {

      $this->data['error'] = $this->upload->display_errors();
      $this->session->set_flashdata('error', $this->upload->display_errors());

      redirect(base_url().'admin/itrade/add');
  } else {
      $dataimage_return = $this->upload->data();
      $cost_export = $dataimage_return['file_name'];
  }
}

if (!empty($_FILES['cost_import']['name'])) {

  $File_name ='';

  $config['upload_path'] = APPPATH . '../upload/itrade';
  $config['file_name'] = $File_name;
  $config['overwrite'] = TRUE;
  $config["allowed_types"] = 'doc|docx|pdf';
  $config["max_size"] = '';

  $this->load->library('upload', $config);

  if (!$this->upload->do_upload('cost_import')) {

      $this->data['error'] = $this->upload->display_errors();
      $this->session->set_flashdata('error', $this->upload->display_errors());

      redirect(base_url().'admin/itrade/add');
  } else {
      $dataimage_return = $this->upload->data();
      $cost_import = $dataimage_return['file_name'];
  }
}

if (!empty($_FILES['today_export']['name'])) {

  $File_name ='';

  $config['upload_path'] = APPPATH . '../upload/itrade';
  $config['file_name'] = $File_name;
  $config['overwrite'] = TRUE;
  $config["allowed_types"] = 'doc|docx|pdf';
  $config["max_size"] = '';

  $this->load->library('upload', $config);

  if (!$this->upload->do_upload('today_export')) {

      $this->data['error'] = $this->upload->display_errors();
      $this->session->set_flashdata('error', $this->upload->display_errors());

      redirect(base_url().'admin/itrade/add');
  } else {
      $dataimage_return = $this->upload->data();
      $today_export = $dataimage_return['file_name'];
  }
}

if (!empty($_FILES['today_import']['name'])) {

  $File_name ='';

  $config['upload_path'] = APPPATH . '../upload/itrade';
  $config['file_name'] = $File_name;
  $config['overwrite'] = TRUE;
  $config["allowed_types"] = 'doc|docx|pdf';
  $config["max_size"] = '';

  $this->load->library('upload', $config);

  if (!$this->upload->do_upload('today_import')) {

      $this->data['error'] = $this->upload->display_errors();
      $this->session->set_flashdata('error', $this->upload->display_errors());

      redirect(base_url().'admin/itrade/add');
  } else {
      $dataimage_return = $this->upload->data();
      $today_import = $dataimage_return['file_name'];
  }
}




      
              $data = array(
                  'name' =>$this->input->post('name'),
                  'source_country' =>$this->input->post('source_country'),
                  'destination_country' => $this->input->post('destination_country'),
                  'news_export' =>$news_export,
                  'news_import' =>$news_import,
                  'duty_export' =>$duty_export,
                  'duty_import' =>$duty_import,
                  'statics_export' =>$statics_export,
                  'statics_import' =>$statics_import,
                  'cost_export' => $cost_export,
                  'cost_import' => $cost_import,
                  'today_export' => $today_export,
                  'today_import' => $today_import,
              );
              if ($this->itrademodel->insert_data($data)) {

                  $this->session->set_flashdata('success', 'added Successfully');
                  redirect(base_url() . 'admin/itrade/add');
              } else {
  
                  $this->session->set_flashdata('error', 'Error In Submission');
                  redirect(base_url() . 'admin/itrade/add');
              }
          
      } else {
          $this->session->set_flashdata('error', 'Please Fill All The Fields');
          redirect(base_url() . 'admin/itrade/add');
      }
  }


 


 
}
