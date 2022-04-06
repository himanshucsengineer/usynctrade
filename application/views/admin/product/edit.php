<link href="<?php echo base_url(); ?>admin/assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url(); ?>admin/assets/css/core.css" rel="stylesheet" type="text/css" />

<script src="<?php echo base_url(); ?>admin/assets/js/jquery.dataTables.min.js"></script>


<style>
    .new-post {
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;

    }

    .new-post .box {
        width: 100%;
        height: auto;
        background-color: white;
        box-shadow: 0 3px 3px -2px rgb(0 0 0 / 40%);
        border: 1px solid #cdcdcd;
        padding-top: 2rem;
        padding-bottom: 2rem;
        padding-left: 1rem;
        padding-right: 1rem;
        margin-bottom: 2rem;
    }

    .new-post input[type="text"],
    input[type="file"],
    select,
    textarea,input[type="date"],select,.uinpuuu {
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        margin-bottom: 1rem;
    }

    .new-post button {
        width: 10rem;
        height: auto;
        padding-top: .6rem;
        padding-bottom: .6rem;
        color: white;
        background-color: rgb(239, 69, 84);
        outline: none;
        border: none;
        transition: .5s;
    }

    .new-post button:hover {
        opacity: .7;

    }

    .new-post p {
        margin-top: -.5rem;
        color: #666;
        font-size: 12px;
        font-weight: 300;
        font-style: italic;
    }
</style>

<div class="new-post">
    <div class="container">
        <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
        <h3>Update Sez Industry Details</h3>
        <form method="post" action="<?php echo base_url()?>admin/product/edit/update_product" enctype="multipart/form-data">
        <?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON'){
                    $url = "https://";
                }else{
                    $url = "http://";
                }
                $url.= $_SERVER['HTTP_HOST'];
                $url.= $_SERVER['REQUEST_URI'];
                
                
                
            $parts = basename($url);
            
            $rerfe = explode("=",$parts);
                
                ?>
                <?php foreach( $fetch_content as $value){ if($value['id']==$rerfe[1]){?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                    <div class="row">
                            <div class="col-md-6">
                                <label>Product main_image</label>
                                <input type="file" name="images" id="" >
                            </div>
                            <div class="col-md-6">
                                <label for="">Select User</label>
                                <input list="browsers" class="uinpuuu" name="user_email" id="browser" value="<?php echo $value['user_email']?>" placeholder="Please Select User Email">
                                <datalist id="browsers">
                                    <?php foreach($fetch_users as $val){?>
                                        <option value="<?php echo $val['email']?>" >
                                    <?php }?>
                                </datalist>
                            </div>
                    
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Product Name</label>
                                <input type="text" name="name" value="<?php echo $value['name']?>" placeholder="Enter Product Name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Product Size</label>
                                <input type="text" name="product_size" value="<?php echo $value['product_size']?>" placeholder="Product Sizer" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Time To Dispetch</label>
                                <input type="text" name="dispetch_time" value="<?php echo $value['dispetch_time']?>" placeholder="Enter Time To Dispetch" required>
                            </div>
                            <div class="col-md-6">
                                <label>MOQ</label>
                                <input type="text" name="moq" value="<?php echo $value['moq']?>" placeholder="Enter MOQ" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Port Of Shipment(Address)</label>
                                        <input type="text" name="shipment_port" value="<?php echo $value['shipment_port']?>" placeholder="Enter Port Of Shipment" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Port Of Shipment (Country)</label>
                                        
                                        <select name="shipment_country" id="">
                                            <option value="">Select Country</option>
                                            <?php foreach($country as $val){?>
                                                <option value="<?php echo $val['Country']?>" <?php if($value['shipment_country']==$val['Country']) echo 'selected="selected"'; ?>><?php echo $val['Country']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Payment Terms</label>
                                <input type="text" name="payment_terms" value="<?php echo $value['payment_terms']?>" placeholder="Enter Payment Terms" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Incoterms (FOB)</label>
                                <input type="text" name="fob_price" value="<?php echo $value['fob_price']?>" placeholder="Enter Fob Price" required>
                            </div>
                            <div class="col-md-6">
                                <label>Incoterms (CIF)</label>
                                <input type="text" name="cif_price" value="<?php echo $value['cif_price']?>" placeholder="Enter CIF price" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Incoterms (Cfr)</label>
                                <input type="text" name="cfr_price" value="<?php echo $value['cfr_price']?>" placeholder="Enter Cfr Price" required>
                            </div>
                            <div class="col-md-6">
                                <label>Incoterms (DAP)</label>
                                <input type="text" name="dap_price" value="<?php echo $value['dap_price']?>" placeholder="Enter DAP price" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Brand Name</label>
                                <input type="text" name="brand_name" value="<?php echo $value['brand_name']?>" placeholder="Enter Brand Name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Place of origin</label>
                                <select name="origin_place" id="">
                                    <option value="">Select Country</option>
                                    <?php foreach($country as $val){?>
                                        <option value="<?php echo $val['Country']?>" <?php if($value['origin_place']==$val['Country']) echo 'selected="selected"'; ?>><?php echo $val['Country']?></option>
                                    <?php }?>
                                </select>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Category</label>
                                <select name="category" id="" required>
                                    <option value="">Select Category</option>
                                    <?php foreach($fetch_category as $cate){?>
                                        <option value="<?php echo $cate['cate_name']?>" <?php if($value['category']==$cate['cate_name']) echo 'selected="selected"'; ?>><?php echo $cate['cate_name']?></option>
                                    <?php }?>
                                </select>
                                
                            </div>
                            <div class="col-md-6">
                                <label>Certificates</label>
                                <input type="text" name="certificates" value="<?php echo $value['certificates']?>" placeholder="Certificates" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                 
                                <div class="row">
                                    <div class="col-md-3">
                                        <label>Buyer From 1</label>
                                        <select name="buyer_from" id="">
                                            <option value="">Select Country</option>
                                            <?php foreach($country as $val){?>
                                                <option value="<?php echo $val['Country']?>" <?php if($value['buyer_from']==$val['Country']) echo 'selected="selected"'; ?>><?php echo $val['Country']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Buyer From 2</label>
                                        <select name="buyer_from2" id="">
                                            <option value="">Select Country</option>
                                            <?php foreach($country as $val){?>
                                                <option value="<?php echo $val['Country']?>" <?php if($value['buyer_from2']==$val['Country']) echo 'selected="selected"'; ?>><?php echo $val['Country']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Buyer From 3</label>
                                        <select name="buyer_from3" id="">
                                            <option value="">Select Country</option>
                                            <?php foreach($country as $val){?>
                                                <option value="<?php echo $val['Country']?>" <?php if($value['buyer_from3']==$val['Country']) echo 'selected="selected"'; ?>><?php echo $val['Country']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label>Buyer From 4</label>
                                        <select name="buyer_from4" id="">
                                            <option value="">Select Country</option>
                                            <?php foreach($country as $val){?>
                                                <option value="<?php echo $val['Country']?>" <?php if($value['buyer_from4']==$val['Country']) echo 'selected="selected"'; ?>><?php echo $val['Country']?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="col-md-6">
                                <label>Successfull Transation</label>
                                <input type="text" name="transaction" value="<?php echo $value['transaction']?>" placeholder="Enter Transaction" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Selling Units</label>
                                <input type="text" name="selling_units" value="<?php echo $value['selling_units']?>" placeholder="Enter Selling units" required>
                            </div>
                            <div class="col-md-6">
                                <label>Single Gross Weight</label>
                                <input type="text" name="single_gross_weight" value="<?php echo $value['single_gross_weight']?>" placeholder="Enter single gross weight" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Single Package Size</label>
                                <input type="text" name="single_package_size" value="<?php echo $value['single_package_size']?>" placeholder="Enter Byuer From" required>
                            </div>
                            <div class="col-md-6">
                                <label>Package Type</label>
                                <input type="text" name="single_package_type" value="<?php echo $value['single_package_type']?>" placeholder="Enter Package Type" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>Product Description</label>
                                <textarea name="product_desc" id="" cols="30" rows="5" required><?php echo $value['product_desc']?></textarea>
                            </div>
                            
                        </div>
                       
                        <h1>Company Profile</h1>
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <label for="">Company Images</label>
                                <input type="file" name="comapny_images" id="" required>
                            </div>
                        </div> -->
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Company Name</label>
                                <input type="text" name="comapny_name" value="<?php echo $value['comapny_name']?>" placeholder="Enter Comapny Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Select Country</label>
                                <select name="company_country" id="">
                                    <option value="">Select Country</option>
                                    <?php foreach($country as $val){?>
                                        <option value="<?php echo $val['Country']?>" <?php if($value['company_country']==$val['Country']) echo 'selected="selected"'; ?>><?php echo $val['Country']?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Business Type</label>
                                <input type="text" placeholder="Enter Business Type" value="<?php echo $value['business_type']?>" name="business_type" required>
                            </div>
                            <div class="col-md-6">
                            <label for="">Year Of Stablised</label>
                                <input type="text" placeholder="Enter Stablished  year" value="<?php echo $value['stablished_year']?>" name="stablished_year" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Main Product</label>
                                <input type="text" placeholder="Enter Main Product" value="<?php echo $value['main_product']?>" name="main_product" required>
                            </div>
                            <div class="col-md-6">
                            <label for="">Factory Size</label>
                                <input type="text" placeholder="Enter Factory Size" value="<?php echo $value['factory_size']?>" name="factory_size" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">No. Of Offices</label>
                                <input type="text" placeholder="Enter No. Of Offices" value="<?php echo $value['no_of_office']?>" name="no_of_office" required>
                            </div>
                            <div class="col-md-6">
                            <label for="">Certificates</label>
                                <input type="text" placeholder="Enter Certificates" value="<?php echo $value['comapny_certificates']?>" name="comapny_certificates" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Total Emplyees</label>
                                <input type="text" placeholder="Enter Total Employee" value="<?php echo $value['total_employee']?>" name="total_employee" required>
                            </div>
                            <div class="col-md-6">
                            <label for="">Response Time</label>
                                <input type="text" placeholder="Enter Response Time" value="<?php echo $value['response_time']?>" name="response_time" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Orgenization Membership</label>
                                <input type="text" placeholder="Enter orgenization Membership" value="<?php echo $value['membership']?>" name="membership" required>
                            </div>
                            <div class="col-md-6">
                            <label for="">Annual Revenue</label>
                                <input type="text" placeholder="Enter Annual Revenue" value="<?php echo $value['annual_revenue']?>" name="annual_revenue" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Contract Services</label>
                                <input type="text" placeholder="Enter Contract Services" value="<?php echo $value['contract_services']?>" name="contract_services" required>
                            </div>
                            
                        </div>


                        <input type="hidden" name="id" placeholder="Enter Course Name" value="<?php echo $value['id']?>" required>

                        <button name="formSubmit">Update</button>
                    </div>
                </div>
                <?php }}?>
        </form>
    </div>
</div>






