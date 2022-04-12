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
                    <label for="">Product Category</label>
                    <select name="product_type" id="">
                        <option value="">Please Select Product Category</option>
                        <option value="Agriculture">Agriculture</option>
                        <option value="Apparel & Clothing">Apparel & Clothing</option>
                        <option value="Automobiles">Automobiles</option>
                        <option value="Beauty & Personal Care">Beauty & Personal Care</option>
                        <option value="Business Services">Business Services</option>
                        <option value="Chemicals">Chemicals</option>
                        <option value="Computer Hardware & Software">Computer Hardware & Software</option>
                        <option value="Construction & Real Estate">Construction & Real Estate</option>
                        <option value="Consumer Electronics">Consumer Electronics</option>
                        <option value="Electrical & Electronics Supplies">Electrical & Electronics Supplies</option>
                        <option value="Energy Products">Energy Products</option>
                        <option value="Environment">Environment</option>
                        <option value="Excess Inventory">Excess Inventory</option>
                        <option value="Fashion Accessories">Fashion Accessories</option>
                        <option value="Food & Beverage">Food & Beverage</option>
                        <option value="Furniture">Furniture</option>
                        <option value="Gifts & Crafts">Gifts & Crafts</option>
                        <option value="Hardware & Mechanical Parts">Hardware & Mechanical Parts</option>
                        <option value="Health & Medicines">Health & Medicines</option>
                        <option value="Home & Garden">Home & Garden</option>
                        <option value="Home Appliances">Home Appliances</option>
                        <option value="Industrial Machinery">Industrial Machinery</option>
                        <option value="Jewelry & Watches">Jewelry & Watches</option>
                        <option value="Lights & Lighting">Lights & Lighting</option>
                        <option value="Luggage & Bags">Luggage & Bags</option>
                        <option value="Measurement Instruments">Measurement Instruments</option>
                        <option value="Minerals & Metallurgy">Minerals & Metallurgy</option>
                        <option value="Office & School Supplies">Office & School Supplies</option>
                        <option value="Packaging & Printing">Packaging & Printing</option>
                        <option value="Rubber & Plastics">Rubber & Plastics</option>
                        <option value="Security & Protection">Security & Protection</option>
                        <option value="Shoes & Footwear">Shoes & Footwear</option>
                        <option value="Sports & Entertainment">Sports & Entertainment</option>
                        <option value="Telecommunications">Telecommunications</option>
                        <option value="Textile & Leather Products">Textile & Leather Products</option>
                        <option value="Tools">Tools</option>
                        <option value="Toys">Toys</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Other">Other</option>
                        
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
                        <option value="Bags">Bags</option>
                        <option value="Dozens">Dozens</option>
                        <option value="Meters">Meters</option>
                        <option value="Metric Tons">Metric Tons</option>
                        <option value="Pairs">Pairs</option>
                        <option value="Packs">Packs</option>
                        <option value="Pieces">Pieces</option>
                        <option value="Sets">Sets</option>
                        <option value="Tons">Tons</option>
                        <option value="Liters">Liters</option>
                        <option value="Units">Units</option>
                        <option value="Boxes">Boxes</option>
                        <option value="Cartons">Cartons</option>
                        <option value="Sheets">Sheets</option>
                        <option value="Foot">Foot</option>
                        <option value="Foughty foot Container">Foughty foot Container</option>
                        <option value="Kilogram">Kilogram</option>
                        <option value="Rolls">Rolls</option>
                        <option value="Tonnes">Tonnes</option>
                        <option value="Twenty Foot container">Twenty Foot container</option>
                        <option value="Square foot">Square foot</option>
                        <option value="Square Meter">Square Meter</option>
                        <option value="Pound">Pound</option>
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
                        <option value="CRF">CRF</option>
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