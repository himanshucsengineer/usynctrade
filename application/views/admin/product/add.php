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
                                <label>Chances Of Negotiation</label>
                                <input type="text" name="negotiation" placeholder="Enter Chances Of Negotiation" required>
                            </div>
                            <div class="col-md-6">
                                <label>Respons Time</label>
                                <input type="text" name="response_time" placeholder="Enter Respons Time" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Certificate</label>
                                <input type="text" name="certificate" placeholder="Enter Certificate" required>
                            </div>
                            <div class="col-md-6">
                                <label>Selling Units</label>
                                <input type="text" name="selling_units" placeholder="Selling Units" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Brand Name</label>
                                <input type="text" name="brand_name" placeholder="Enter Brand Name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Product Size</label>
                                <input type="text" name="product_size" placeholder="Product Sizer" required>
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
                                <label>Product Name</label>
                                <input type="text" name="name" placeholder="Enter Product Name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Product Size</label>
                                <input type="text" name="product_size" placeholder="Product Sizer" required>
                            </div>
                        </div>
                        
                        
                       
                        <button name="formSubmit">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>






