<?php
class Itrade extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/joindealmodel');
        $this->load->model('admin/itrademodel');
    }

    public function index()
    {

        $data['country']=$this->joindealmodel->fetch_country();
        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/itrade',$data);
        $this->load->view('frontend/template/footer');
    }

 
    public function get_result(){
        $output = '';
        $this->load->model('admin/itrademodel');
        if(empty($this->input->post('name')) && empty($this->input->post('source')) && !empty($this->input->post('destination'))){
            $destination =  $this->input->post('destination');
            $data = $this->itrademodel->filter_basesd_destination($this->input->post('limit'), $this->input->post('start'), $destination);
        }elseif(!empty($this->input->post('source')) && empty($this->input->post('name')) && empty($this->input->post('destination'))){
            $source= $this->input->post('source');
            $data = $this->itrademodel->filter_basesd_source($this->input->post('limit'), $this->input->post('start'), $source);
        }elseif(empty($this->input->post('source')) && !empty($this->input->post('name')) && empty($this->input->post('destination'))){
            $name= $this->input->post('name');
            $data = $this->itrademodel->filter_basesd_name($this->input->post('limit'), $this->input->post('start'), $name);
        }elseif(!empty($this->input->post('name')) && !empty($this->input->post('source')) && !empty($this->input->post('destination'))){
            $destination= $this->input->post('destination');
            $name =  $this->input->post('name');
            $source =  $this->input->post('source');
            $data = $this->itrademodel->filter_basesd_on_all($this->input->post('limit'), $this->input->post('start'), $destination, $name, $source);
        }elseif(!empty($this->input->post('name')) && !empty($this->input->post('source')) && empty($this->input->post('destination'))){
            $name =  $this->input->post('name');
            $source =  $this->input->post('source');
            $data = $this->itrademodel->filter_basesd_on_name_source($this->input->post('limit'), $this->input->post('start'), $name, $source);
        }elseif(!empty($this->input->post('name')) && empty($this->input->post('source')) && !empty($this->input->post('destination'))){
            $name =  $this->input->post('name');
            $destination= $this->input->post('destination');
            $data = $this->itrademodel->filter_basesd_on_name_destination($this->input->post('limit'), $this->input->post('start'), $name, $destination);
        }
        elseif(empty($this->input->post('name')) && !empty($this->input->post('source')) && !empty($this->input->post('destination'))){
            $source =  $this->input->post('source');
            $destination= $this->input->post('destination');
            $data = $this->itrademodel->filter_basesd_on_source_destination($this->input->post('limit'), $this->input->post('start'), $source, $destination);
        }
        if($data->num_rows() > 0)
        {
            
            foreach($data->result() as $row)
            {   
                
                $output .= '<div class="tab-pane news active" id="home1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6 give_right_border">
                                        <ul class="text-left">
                                            <li><a href="'.base_url().'upload/itrade/'.$row->news_export.'" target="_blank">'.$row->news_export_name.'</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="text-left">
                                            <li><a href="'.base_url().'upload/itrade/'.$row->news_import.'" target="_blank">'.$row->news_import_name.'</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
            <div class="tab-pane duty" id="profile1" role="tabpanel">
                <div class="row">
                    <div class="col-md-6 give_right_border">
                        
                        <ul class="text-left">
                        <li><a href="'.base_url().'upload/itrade/'.$row->duty_export.'" target="_blank">'.$row->duty_export_name.'</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                       
                        <ul class="text-left">
                            <li><a href="'.base_url().'upload/itrade/'.$row->duty_import.'" target="_blank">'.$row->duty_import_name.'</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane staticss" id="messages1" role="tabpanel">
                <div class="row">
                    <div class="col-md-6 give_right_border">
                       
                        <ul class="text-left">
                            <li><a href="'.base_url().'upload/itrade/'.$row->statics_export.'" target="_blank">'.$row->statics_export_name.'</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                       
                        <ul class="text-left">
                        <li><a href="'.base_url().'upload/itrade/'.$row->statics_import.'" target="_blank">'.$row->statics_import_name.'</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane cost" id="settings1" role="tabpanel">
                <div class="row">
                    <div class="col-md-6 give_right_border">
                        
                        <ul class="text-left">
                        <li><a href="'.base_url().'upload/itrade/'.$row->cost_export.'" target="_blank">'.$row->cost_export_name.'</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                       
                        <ul class="text-left">
                        <li><a href="'.base_url().'upload/itrade/'.$row->cost_import.'" target="_blank">'.$row->cost_import_name.'</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="tab-pane today" id="settings2" role="tabpanel">
                <div class="row">
                    <div class="col-md-6 give_right_border">
                       
                        <ul class="text-left">
                        <li><a href="'.base_url().'upload/itrade/'.$row->today_export.'" target="_blank">'.$row->today_export_name.'</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        
                        <ul class="text-left">
                        <li><a href="'.base_url().'upload/itrade/'.$row->today_import.'" target="_blank">'.$row->today_import_name.'</a></li>
                        </ul>
                    </div>
                </div>
            </div>
                       ';
                     
      }
    
     }
	
     echo $output;
	}



}
