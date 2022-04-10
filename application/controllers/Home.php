<?php
class Home extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/joindealmodel');
        $this->load->model('admin/productmodel');
    }

    public function index()
    {

        $data['country']=$this->joindealmodel->fetch_country();
        $data['join_deal']=$this->joindealmodel->fetchinventory_api();
        $this->load->view('frontend/template/header');
      //  $this->load->view('frontend/template/navbar');

        $this->load->view('frontend/home',$data);
        $this->load->view('frontend/template/footer');
    }

    public function set_import(){
        $import = $this->input->post('import');
        if($import == "import"){
            redirect(base_url().'import');
        }else{
            redirect(base_url().'export');
        }
    }

    public function get_result(){
        $output = '';
        $this->load->model('admin/productmodel');
        $country=$this->joindealmodel->fetch_country();
        
        if(empty($this->input->post('country')) && !empty($this->input->post('product')) && empty($this->input->post('cate'))){
            $product =  $this->input->post('product');
            $data = $this->productmodel->filter_basesd_product($this->input->post('limit'), $this->input->post('start'), $product);
        }elseif(!empty($this->input->post('country')) && empty($this->input->post('product')) && empty($this->input->post('cate'))){
             $country= $this->input->post('country');
            $data = $this->productmodel->filter_basesd_country($this->input->post('limit'), $this->input->post('start'), $country);
        }elseif(empty($this->input->post('country')) && empty($this->input->post('product')) && !empty($this->input->post('cate'))){
            $cate= $this->input->post('cate');
            $data = $this->productmodel->filter_basesd_category($this->input->post('limit'), $this->input->post('start'), $cate);
        }elseif(!empty($this->input->post('country')) && empty($this->input->post('product')) && !empty($this->input->post('cate'))){
            $country= $this->input->post('country');
            $cate =  $this->input->post('cate');
            $data = $this->productmodel->filter_basesd_on_country_cate($this->input->post('limit'), $this->input->post('start'), $country, $cate);
        }elseif(!empty($this->input->post('country')) && !empty($this->input->post('product')) && empty($this->input->post('cate'))){
            $country= $this->input->post('country');
            $product =  $this->input->post('product');
            $data = $this->productmodel->filter_basesd_on_country_product($this->input->post('limit'), $this->input->post('start'), $country, $product);
        }elseif(empty($this->input->post('country')) && !empty($this->input->post('product')) && !empty($this->input->post('cate'))){
            $cate= $this->input->post('cate');
            $product =  $this->input->post('product');
            $data = $this->productmodel->filter_basesd_on_cate_product($this->input->post('limit'), $this->input->post('start'), $cate, $product);
        }elseif(!empty($this->input->post('country')) && !empty($this->input->post('product')) && !empty($this->input->post('cate'))){
            $cate= $this->input->post('cate');
            $product =  $this->input->post('product');
            $country =  $this->input->post('country');
            $data = $this->productmodel->filter_basesd_on_cate_product_country($this->input->post('limit'), $this->input->post('start'), $cate, $product,$country);
        }else{
            $data = $this->productmodel->fetch_all_data($this->input->post('limit'), $this->input->post('start'));
        }
        if($data->num_rows() > 0)
        {
            foreach($data->result() as $row)
            {   
                
                $output .= '<div class="home_product_card">
                <div class="main_card">
                    <a href="'.base_url().'product/'.$row->id.'"><img class="main_image" src="'.base_url().'upload/product/'.$row->main_image.'" alt=""></a>
                    <div class="inner_card">
                        <div class="flex_1">
                            <div class="left">
                            <a href="'.base_url().'product/'.$row->id.'"> <p>'.$row->name.'</p></a>
                            </div>
                            <div class="right">
                           
                                <img src="'.$row->country_fleg.'" alt="">
                            </div>
                        </div>
                        <select class="infoterm_select">
                            <option>Fob Price '.$row->fob_price.' INR</option>
                            <option>Cif Price '.$row->cif_price.' INR</option>
                            <option>Cfr Price '.$row->cfr_price.' INR</option>
                            <option>Dap Price '.$row->dap_price.' INR</option>
                            
                        </select>
                    </div>
                </div>
            </div>
                       ';
      }
     }
	
     echo $output;
	}

}
