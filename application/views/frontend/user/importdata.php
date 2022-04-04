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
            
            
            <h4 class="your_page_head" >Your Import Inqury</h4>
            <hr class="hori">
            <div class="box">
                <div class="container">
                    
                    <div class="table-responsive t_box">
                        <table id="campaign" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Product Name</th>
                                    <th>Product Type</th>
                                    <th>Quantity</th>
                                    <th>Pieces</th>
                                    <th>Budget</th>
                                    <th>Currency</th>
                                    <th>Source Country</th>
                                    <th>Destination Country</th>
                                    <th>Incoterm</th>
                                    <th>Product Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($fetch_data as $value){if($value['email']==$_SESSION['email']){?>
                                <tr>
                                    <td><?php echo $value['product_name']?></td>
                                    <td><?php echo $value['product_type']?></td>
                                    <td><?php echo $value['quantity']?></td>
                                    <td><?php echo $value['pieces']?></td>
                                    <td><?php echo $value['budget']?></td>
                                    <td><?php echo $value['currency']?></td>
                                    <td><?php echo $value['source_country']?></td>

                                    <td><?php echo $value['destination_country']?></td>
                                    <td><?php echo $value['infoterms']?></td>
                                    <td><?php echo $value['product_details']?></td>
       
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