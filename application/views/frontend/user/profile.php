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
                                    <div class="col-md-12">
                                        <input class="inpu" type="text" name="name" placeholder=" Name" value="<?php echo $value["name"]?>">
                                    </div>
                                    
                                </div>
                               
                                <input class="inpu" type="email" name="email" placeholder="Email"
                                    value="<?php echo $value["email"]?>" readonly>
                                <input class="inpu" type="number" name="number" placeholder="Mobile Number"
                                    value="<?php echo $value["number"]?>">
                                <textarea name="address" id="" class="inpu" cols="30" rows="5" placeholder="your address"><?php echo $value["address"]?></textarea>

                               <button>Update</button>
                            </form>
                            <?php }}?>


                        </div>
                    </div>
                </div>

            </div>
        </div>
 

    


