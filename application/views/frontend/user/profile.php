<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dash_nav.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dashboard.css">
</head>
<body>

<?php $this->load->view('frontend/template/dash')?>


<div class="user_desh">

        <div class="right">
            <div class="container">
            <?php
                            if ($this->session->flashdata('success')) {
                                echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                            } else if ($this->session->flashdata('error')) {
                                echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                            }
                        ?>
                <div class="box">
                    <div class="head">
                        <h5>Profile and setting</h5>
                    </div>
                    <div class="container">
                        <div class="pro">
                            <?php foreach($user as $value){if($value["email"]== $_SESSION["email"]){?>
                            <form action="<?php echo base_url()?>frontend/login/update_pro" id="profileupdateform"
                                method="POST" accept-charset="utf-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input class="inpu" type="text" name="name" placeholder=" Name" value="<?php echo $value["name"]?>">
                                        <input class="inpu" type="email" name="email" placeholder="Email"
                                    value="<?php echo $value["email"]?>" readonly>
                                <input class="inpu" type="number" name="number" placeholder="Mobile Number"
                                    value="<?php echo $value["number"]?>">
                                <input type="text" placeholder="address" name="address" class="inpu" value="<?php echo $value["address"]?>">
                                <input type="text" placeholder="city" name="city" class="inpu" value="<?php echo $value["city"]?>">
                                <input type="text" placeholder="state" name="state" class="inpu" value="<?php echo $value["state"]?>">
                                <select name="country" class="inpu" id="">
                                    <option value="">Please Select Country</option>
                                    <?php foreach($country as $val){?>
                                        <option value="<?php echo $val['Country']?>" <?php if($val['Country'] == $value["country"]){echo "selected";}else{"";}?>><?php echo '<img src="'.$val['Flag_image_url'].'">';?> <?php echo $val['Country']?></option>
                                    <?php }?>
                                </select>
                                
                                <input type="text" placeholder="zip code" name="zip_code" class="inpu" value="<?php echo $value["zip_code"]?>">
                                    </div>
                                    
                                    <div class="col-md-6">
                                       <input type="text" placeholder="company name" name="company_name" class="inpu" value="<?php echo $value["company_name"]?>">
                                <select name="primary_business" class="inpu" id="">
                                    <option value="">Select Primary Business</option>
                                    <option value="Manufacturer/ OEM" <?php if("Manufacturer/ OEM" == $value["primary_business"]){echo "selected";}else{"";}?>>Manufacturer/ OEM</option>
                                    <option value="Importer / buying Agent" <?php if("Importer / buying Agent" == $value["primary_business"]){echo "selected";}else{"";}?>>Importer / buying Agent</option>
                                    <option value="Exporter/ Supplier" <?php if("Exporter/ Supplier" == $value["primary_business"]){echo "selected";}else{"";}?>>Exporter/ Supplier</option>
                                    <option value="Service Provider" <?php if("Service Provider" == $value["primary_business"]){echo "selected";}else{"";}?>>Service Provider</option>
                                    <option value="Distributer/ Retailer/Reseller" <?php if("Distributer/ Retailer/Reseller" == $value["primary_business"]){echo "selected";}else{"";}?>>Distributer/ Retailer/Reseller</option>

                                </select>
                                
                                <textarea name="company_details" class="inpu" id="" cols="30" rows="3"><?php echo $value['company_details']?></textarea>
                                <input type="text" placeholder="establish year" name="establish_year" class="inpu" value="<?php echo $value["establish_year"]?>">
                                <input type="text" placeholder="gst no" name="gst_no" class="inpu" value="<?php echo $value["gst_no"]?>">
                                <input type="text" placeholder="company_certification" name="company_certification" class="inpu" value="<?php echo $value["company_certification"]?>">
                                
                                <select name="role_comapny" id="" class="inpu">
                                    <option value="">Select Role</option>
                                    <option value="supervisor" <?php if("supervisor" == $value["role_comapny"]){echo "selected";}else{"";}?>>Supervisor</option>
                                    <option value="Owner" <?php if("Owner" == $value["role_comapny"]){echo "selected";}else{"";}?>>Owner</option>
                                    <option value="Agent" <?php if("Agent" == $value["role_comapny"]){echo "selected";}else{"";}?>>Agent</option>
                                </select>
                                    </div>
                                    
                                </div>
                               
                                
                                


                               <button>Update</button>
                            </form>
                            <?php }}?>


                        </div>
                    </div>
                </div>

            </div>
        </div>
 

    


