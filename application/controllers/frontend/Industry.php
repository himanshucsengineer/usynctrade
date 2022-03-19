<?php
class Industry extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/sezmodel');
    }

    public function index()
    {

        $data['state']=$this->sezmodel->fetch_state();
        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/industry',$data);
        $this->load->view('frontend/template/footer');
    }


    public function get_result(){
        $output = '';
        $this->load->model('admin/sezmodel');
        
        if(!empty($this->input->post('state'))){
	       $state =  $this->input->post('state');
	       $data = $this->sezmodel->filter_basesd_state($this->input->post('limit'), $this->input->post('start'), $state);
	    }else{
	       $data = $this->sezmodel->fetch_all_data($this->input->post('limit'), $this->input->post('start'));
	    }
        
        if($data->num_rows() > 0)
        {
            foreach($data->result() as $row)
            {   
                $output .= '<div class="custome_body_flex">
                <div class="custom_body_card">
                  <p>'.$row->name.'</p>
                </div>
                <div class="custom_body_card">
                  <p>'.$row->sector.'</p>
                </div>
                <div class="custom_body_card">
                  <p>'.$row->type.'</p>
                </div>
                <div class="custom_body_card">
                  <p>'.$row->address.'</p>
                </div>
                <div class="custom_body_card">
                  <a href="'.$row->link.'" target="_blank">Click Here</a>
                </div>
              </div>
                       ';
      }
     }
	
     echo $output;
	}
}
