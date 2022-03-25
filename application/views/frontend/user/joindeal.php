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
            
            
            <h4 class="your_page_head" >Join Deal Inqury</h4>
            <hr class="hori">
            <div class="box">
                <div class="container">
                    
                    <div class="table-responsive t_box">
                        <table id="campaign" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Company Name</th>
                                    <th>Offer Price</th>
                                    <th>Product Origin</th>
                                    <th>Offer Details</th>
                                    <th>View Product</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($fetch_data as $value){if($value['cutomer_email']==$_SESSION['email']){?>
                                <tr>
                                    <td><?php echo $value['company_name']?></td>
                                    <td><?php echo $value['offer_price']?></td>
                                    <td><?php echo $value['product_origin']?></td>
                                    <td><?php echo $value['offer_details']?></td>
                                    <td><a href="<?php echo base_url()?>join-this-deal/<?php echo $value['product_id']?>">View Product</a></td>
                                </tr>
                                <?php }}?>
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div> 
            
        </div>    
    </div>
</div>    



<script>
    $(document).ready(function() {
    $('#campaign').DataTable();
} );

</script>