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
    input[type="file"],input[type="number"],input[type="email"],
    select,
    textarea {
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
        <h3>Add Product</h3>
        <form method="post" action="<?php echo base_url()?>admin/product/add/add_product" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Product main_image</label>
                                <input type="file" name="images" id="" required>
                            </div>
                    
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Product Name</label>
                                <input type="text" name="name" placeholder="Enter Product Name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Product Size</label>
                                <input type="text" name="product_size" placeholder="Product Sizer" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Time To Dispetch</label>
                                <input type="text" name="dispetch_time" placeholder="Enter Time To Dispetch" required>
                            </div>
                            <div class="col-md-6">
                                <label>MOQ</label>
                                <input type="text" name="moq" placeholder="Enter MOQ" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Port Of Shipment</label>
                                <input type="text" name="shipment_port" placeholder="Enter Port Of Shipment" required>
                            </div>
                            <div class="col-md-6">
                                <label>Payment Terms</label>
                                <input type="text" name="payment_terms" placeholder="Enter Payment Terms" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Incoterms (FOB)</label>
                                <input type="text" name="fob_price" placeholder="Enter Fob Price" required>
                            </div>
                            <div class="col-md-6">
                                <label>Incoterms (CIF)</label>
                                <input type="text" name="cif_price" placeholder="Enter CIF price" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Incoterms (Cfr)</label>
                                <input type="text" name="cfr_price" placeholder="Enter Cfr Price" required>
                            </div>
                            <div class="col-md-6">
                                <label>Incoterms (DAP)</label>
                                <input type="text" name="dap_price" placeholder="Enter DAP price" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Brand Name</label>
                                <input type="text" name="brand_name" placeholder="Enter Brand Name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Place of origin</label>
                                <select name="origin_place" id="">
                                    <option value="">Select Country</option>
                                    <?php foreach($country as $value){?>
                                        <option value="<?php echo $value['Country']?>"><?php echo $value['Country']?></option>
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
                                        <option value="<?php echo $cate['cate_name']?>"><?php echo $cate['cate_name']?></option>
                                    <?php }?>
                                </select>
                                
                            </div>
                            <div class="col-md-6">
                                <label>Certificates</label>
                                <input type="text" name="certificates" placeholder="Certificates" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Looking Buyer From</label>
                                <input type="text" name="buyer_from" placeholder="Enter Byuer From" required>
                            </div>
                            <div class="col-md-6">
                                <label>Successfull Transation</label>
                                <input type="text" name="transaction" placeholder="Enter Transaction" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Selling Units</label>
                                <input type="text" name="selling_units" placeholder="Enter Selling units" required>
                            </div>
                            <div class="col-md-6">
                                <label>Single Gross Weight</label>
                                <input type="text" name="single_gross_weight" placeholder="Enter single gross weight" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Single Package Size</label>
                                <input type="text" name="single_package_size" placeholder="Enter Byuer From" required>
                            </div>
                            <div class="col-md-6">
                                <label>Package Type</label>
                                <input type="text" name="single_package_type" placeholder="Enter Package Type" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <label>Product Description</label>
                                <textarea name="product_desc" id="" cols="30" rows="5" required></textarea>
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
                                <input type="text" name="comapny_name" placeholder="Enter Comapny Name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Select Country</label>
                                <select name="company_country" id="">
                                    <option value="">Select Country</option>
                                    <?php foreach($country as $value){?>
                                        <option value="<?php echo $value['Country']?>"><?php echo $value['Country']?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Business Type</label>
                                <input type="text" placeholder="Enter Business Type" name="business_type" required>
                            </div>
                            <div class="col-md-6">
                            <label for="">Year Of Stablised</label>
                                <input type="text" placeholder="Enter Stablished  year" name="stablished_year" required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Main Product</label>
                                <input type="text" placeholder="Enter Main Product" name="main_product" required>
                            </div>
                            <div class="col-md-6">
                            <label for="">Factory Size</label>
                                <input type="text" placeholder="Enter Factory Size" name="factory_size" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">No. Of Offices</label>
                                <input type="text" placeholder="Enter No. Of Offices" name="no_of_office" required>
                            </div>
                            <div class="col-md-6">
                            <label for="">Certificates</label>
                                <input type="text" placeholder="Enter Certificates" name="comapny_certificates" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Total Emplyees</label>
                                <input type="text" placeholder="Enter Total Employee" name="total_employee" required>
                            </div>
                            <div class="col-md-6">
                            <label for="">Response Time</label>
                                <input type="text" placeholder="Enter Response Time" name="response_time" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Orgenization Membership</label>
                                <input type="text" placeholder="Enter orgenization Membership" name="membership" required>
                            </div>
                            <div class="col-md-6">
                            <label for="">Annual Revenue</label>
                                <input type="text" placeholder="Enter Annual Revenue" name="annual_revenue" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Contract Services</label>
                                <input type="text" placeholder="Enter Contract Services" name="contract_services" required>
                            </div>
                            
                        </div>
                        <button name="formSubmit">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>






