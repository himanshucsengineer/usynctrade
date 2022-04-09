<link rel="stylesheet" href="<?php echo base_url()?>assets/css/import.css">
</head>

<?php $this->load->view('frontend/template/navbar')?>


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
            
            <form action="<?php echo base_url()?>frontend/export/insert_data"  method="post">
            <div class="row">
                <div class="col-md-6">
                    <label for="">Product Name</label>
                    <input type="text" name="product_name" placeholder="Enter Product Name">
                    <label for="">Quantity</label>
                    <input type="text" name="quantity" placeholder="Enter Quantity">
                    
                </div>
                <div class="col-md-6">
                    <label for="">Category</label>
                    <select name="category" id="">
                        <option value="">Select Category</option>
                        <option value="Fruits">Fruits</option>
                        <option value="Vegetables">Vegetables</option>
                        <option value="Textile">Textile</option>
                    </select>
                    <label for="">Units</label>
                    <select name="units" id="">
                        <option value="">Select Units</option>
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
            <label for="">Origin Country</label>
            <select name="origin_country" id="">
                        <option value="">Select Country</option>
                        <?php foreach($country as $value){?>
                            <option value="<?php echo $value['name']?>"><?php echo $value['name']?></option>
                        <?php }?>
                    </select>
            <label for="">Product Description</label>
                <textarea name="product_desc" id="" cols="30" rows="10" placeholder="Product Description"></textarea>
            
            
            <input type="hidden" name="name" placeholder="Enter Name" value="<?php echo $_SESSION['name']?>">
          
          <input type="hidden" name="email" placeholder="Enter Email" value="<?php echo $_SESSION['email']?>">
       
          <input type="hidden" name="number" placeholder="Enter Number" value="<?php echo $_SESSION['number']?>">
      
          <input type="hidden" name="company_name" placeholder="Enter Comapny Name" value="<?php echo $_SESSION['company_name']?>">
          
          
          <input type="hidden" name="country" id="" value="<?php echo $_SESSION['country']?>">
     
          <input type="hidden" name="address" id="" value="<?php echo $_SESSION['address']?>">
         
            
            <div class="text-center">
            <?php if(isset($_SESSION['email'])){?>
        <button class="sub_but">Submit</button>
        <?php }else{?>
            <a class="sub_but" type="button" href="<?php echo base_url()?>signin">Submit</a>
        <?php }?>
            </div>
            </form>
        </div>
        <div class="col-md-6">
        
        </div>
    </div>
    
    
    </div>
</div>
                