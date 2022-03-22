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

    .new-post input[type="text"],input[type="date"],
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
        <h3>Add Deal</h3>
        <form method="post" action="<?php echo base_url()?>admin/join_deal/add/add_deal" enctype="multipart/form-data">

            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Enter Name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Category</label>
                                <input type="text" name="category" placeholder="Enter Category" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Select Destination Country</label>
                                <select name="destination_country" id="">
                                    <option value="">Select Country</option>
                                    <?php foreach($country as $value){?>
                                        <option value="<?php echo $value['Country']?>"><?php echo $value['Country']?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Date</label>
                                <input type="date" name="date" placeholder="Enter date" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Target Price</label>
                                <input type="text" name="target_price" placeholder="Enter Target Price" required>
                            </div>
                            <div class="col-md-6">
                                <label>Quantity Required</label>
                                <input type="text" name="quantity" placeholder="Enter Quantity Required" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Payment Terms</label>
                                <input type="text" name="payment_terms" placeholder="Enter payment Terms" required>
                            </div>
                            <div class="col-md-6">
                                <label>Shipping Terms</label>
                                <input type="text" name="shipping_terms" placeholder="Enter Shipping Terms" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Image</label>
                                <input type="file" name="images" id="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Product Description</label>
                                <textarea name="description" id="textareaContent" cols="30" rows="10"></textarea>
                            </div>
                            
                        </div>
                        
                        
                       
                        <button name="formSubmit">Add</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script src="<?php echo base_url(); ?>admin/assets/ckeditor/ckeditor.js"></script>

<script>
    $(document).ready(function() {
        CKEDITOR.replace('textareaContent');
    });
</script>




