<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dash_nav.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/dashboard.css">
</head>
<body>
<style>
    .user_desh .right .box{
        background-color:transparent !important;
        border:0px !important;
    }
    .main_card_product{
        width:100%;
        height:auto;
        background-color:transparent !important;
    }
    .main_card_product .main_imag{
        width:100%;
        height:150px;
    }
    .main_card_product .product_inner_card{
        width:100%;
        height:auto;
        padding:1rem 1rem;
       background-color:#ffffff !important;
    }
    .main_card_product .product_inner_card .name_flex{
        width:100%;
        height:auto;
        display:flex;
    }
    .main_card_product .product_inner_card .name_flex .left{
        width:80%;
    }
    .main_card_product .product_inner_card .name_flex .left p{
        font-size:17px;
        font-weight:500;
    }
    .main_card_product .product_inner_card .name_flex .left a{
        text-decoration:none;
        color:grey;
    }
    .main_card_product .product_inner_card .name_flex .right{
        width:20%;
        padding:0px !important;
        margin:0px !important;
        background-color:#ffffff  !important;
    }
    .main_card_product .product_inner_card .name_flex .right img{
        width:25px;
       
    }
    .main_card_product .product_inner_card select{
        width:100%;
        height:auto;
        padding:.5rem 1rem;
        border:1px solid #cdcdcd;
        outline:none;
    }
</style>
<?php $this->load->view('frontend/template/dash')?>


<div class="user_desh">
    <div class="right">
        <div class="container">
            
            <div class="box">
                <div class="row">
                    <?php foreach($product_details as $value){if($value['user_email'] == $_SESSION['email']){?>
                    <div class="col-md-3">
                        <div class="main_card_product">
                        <a href="<?php echo base_url()?>product/<?php echo $value['id']?>"><img class="main_imag" src="<?php echo base_url()?>upload/product/<?php echo $value['main_image']?>" alt=""></a>
                            <div class="product_inner_card">
                                <div class="name_flex">
                                    <div class="left">
                                        <a href="<?php echo base_url()?>product/<?php echo $value['id']?>"><p><?php echo $value['name']?></p></a>
                                    </div>
                                    <div class="right">
                                        <?php foreach($country as $valll){if($valll['Country']==$value['origin_place']){echo '<img class="conty_flag" src="'.$valll['Flag_image_url'].'">';}}?>
                                    </div>
                                </div>
                                <select name="" id="">
                                    <option value="">FOB price : <?php echo $value['fob_price']?> INR</option>
                                    <option value="">CIF price : <?php echo $value['cif_price']?> INR</option>
                                    <option value="">CRF price : <?php echo $value['cfr_price']?> INR</option>
                                    <option value="">DAP price : <?php echo $value['dap_price']?> INR</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <?php }}?>
                    
                </div>
            </div>
        
        </div>
    </div>
</div>
 

    


