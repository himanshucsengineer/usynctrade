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
        <div class="col-md-12">
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
                    <input type="text" placeholder="Enter Your Budget" name="budget">
                    
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
       
           
         
            <input type="hidden" name="name" placeholder="Enter Name" value="<?php echo $_SESSION['name']?>">
          
            <input type="hidden" name="email" placeholder="Enter Email" value="<?php echo $_SESSION['email']?>">
         
            <input type="hidden" name="number" placeholder="Enter Number" value="<?php echo $_SESSION['number']?>">
        
            <input type="hidden" name="company_name" placeholder="Enter Comapny Name" value="<?php echo $_SESSION['company_name']?>">
            
            
            <input type="hidden" name="country" id="" value="<?php echo $_SESSION['country']?>">
       
            <input type="hidden" name="address" id="" value="<?php echo $_SESSION['address']?>">
           
        
    </div>
    <div class="text-center">
        <?php if(isset($_SESSION['email'])){?>
        <button class="sub_but">Submit</button>
        <?php }else{?>
            <a class="sub_but" type="button" href="<?php echo base_url()?>signin">Submit</a>
        <?php }?>
    </div>
    
    </div>
</div>
                </form>