<link rel="stylesheet" href="<?php echo base_url()?>assets/css/import.css">
</head>

<?php $this->load->view('frontend/template/navbar')?>

<form action="<?php echo base_url()?>frontend/import/insert_data" enctype="multipart/form-data" method="post">
<div class="import">
    <div class="container">

    <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
    <div class="row">
        <div class="col-md-8">
            <h3>Basic Product Details</h3>
            <div class="row">
                <div class="col-md-6">
                    <label for="">Product Name</label>
                    <input type="text" name="product_name" placeholder="Enter Product Name">
            
                </div>
                <div class="col-md-6">
                    <label for="">Product Type</label>
                    <select name="product_type" id="">
                        <option value="">Please Select Product type</option>
                        <option value="cloths">Cloths</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="">Quantity</label>
                    <input type="number" name="quantity" placeholder="Enter Quantity">
                </div>
                <div class="col-md-6">
                    <label for="">Picecs Range</label>
                    <select name="pieces" id="">
                        <option value="">Please Select Pieces</option>
                        <option value="1000-2000">1000-2000</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="">Budget</label>
                    <select name="budget" id="">
                        <option value="">Please Select Budget</option>
                        <option value="0-10000">0-10000</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="">Currency</label>
                    <select name="currency" id="">
                        <option value="">Please Select currency</option>
                        <option value="INR">INR</option>
                        <option value="USD">USD</option>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="">Source Country</label>
                    <select name="source_country" id="">
                        <option value="">Please Select Source Country</option>
                        <?php foreach($country as $value){?>
                            <option value="<?php echo $value['name']?>"><?php echo $value['name']?></option>
                        <?php }?>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="">Destination Country</label>
                    <select name="destination_country" id="">
                        <option value="">Please Select Destination Country</option>
                        <?php foreach($country as $value){?>
                            <option value="<?php echo $value['name']?>"><?php echo $value['name']?></option>
                        <?php }?>
                    </select>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <label for="">Sample Image</label>
                    <input type="file" name="images" required>
                </div>
                <div class="col-md-6">
                    <label for="">Info terms</label>
                    <select name="infoterms" id="">
                        <option value="">Select Infoterms</option>
                        <option value="FOB">FOB</option>
                        <option value="CIF">CIF</option>
                        <option value="DAP">DAP</option>
                        <option value="DOP">DOP</option>
                    </select>
                </div>
            </div>
            
            
            
            <label for="">Product Details</label>
            <textarea name="product_details" id="" cols="30" rows="5"></textarea>
        </div>
        <div class="col-md-4">
            <h3>Contact Information</h3>
            <label for="">Name</label>
            <input type="text" name="name" placeholder="Enter Name">
            <label for="">Email</label>
            <input type="email" name="email" placeholder="Enter Email">
            <label for="">Number</label>
            <input type="number" name="number" placeholder="Enter Number">
            <label for="">Company Name</label>
            <input type="text" name="company_name" placeholder="Enter Comapny Name">
            <label for="">Country</label>
            <select name="country" id="">
                <option value="">Select Country</option>
                <?php foreach($country as $value){?>
                    <option value="<?php echo $value['name']?>"><?php echo $value['name']?></option>
                <?php }?>
            </select>
            <label for="">Address</label>
            <textarea name="address" id="" cols="30" rows="5"></textarea>
        </div>
    </div>
    <div class="text-center">
        <button>Submit</button>
    </div>
    
    </div>
</div>
                </form>