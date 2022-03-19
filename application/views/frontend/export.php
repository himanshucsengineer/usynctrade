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
       
        <div class="col-md-6">
            <h3>Contact Information</h3>
            <form action="<?php echo base_url()?>frontend/export/insert_data"  method="post">
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
            <div class="text-center">
                <button class="export">Submit</button>
            </div>
            </form>
        </div>
        <div class="col-md-6">
        
        </div>
    </div>
    
    
    </div>
</div>
                