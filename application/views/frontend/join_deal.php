<link rel="stylesheet" href="<?php echo base_url()?>assets/css/join_deal.css">
</head>
<style>
    .flag_class{
        width:20px;
        margin-left:.5rem;
    }
    .join_deal_image{
        width:100%;
    }
</style>
<?php $this->load->view('frontend/template/navbar')?>
<?php 
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON'){
        $url = "https://";
    }else{
        $url = "http://";
    }
    $url.= $_SERVER['HTTP_HOST'];
    $url.= $_SERVER['REQUEST_URI'];
    $parts = basename($url);
    
?>
<?php if(!isset($_SESSION['email'])){
    $submit_button = '<a href="'.base_url().'signin" class="joib">Send message</a>';
}else{
    $submit_button ="<button>Send message</button>";
}
    
    ?>
            
        
            
<?php foreach($join_deal as $value){ if($value['id'] == $parts){?>
<div class="join_deal_main">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="top_flex">
                        <div class="left">
                            <h3>Buyer: <?php echo $value['name']?></h3>
                            <p>In <?php echo $value['category']?></p>
                        </div>
                        <div class="right">
                            <?php echo ($value['status'] == 0) ? "<span class='text-white badge badge-warning'>Closed</span>" : "<span class='text-white badge badge-success'>Active</span>"; ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="top_text"><i class="fa fa-globe"></i> Destination: <?php foreach($country as $val){ if($val['Country'] == $value['destination_country']){ echo $val['Country']; echo '<img class="flag_class" src="'.$val['Flag_image_url'].'">';}}?></p>
                            <p class="top_text"><i class="fas fa-dollar-sign"></i> Target Price: <?php echo $value['target_price']?></p>
                            <p class="top_text"><i class="fas fa-file-invoice"></i> Payment Terms: <?php echo $value['payment_terms']?></p>
                            
                        </div>
                        <div class="col-md-6">
                            <p class="top_text"><i class="fas fa-calendar-alt"></i> Date: <?php echo $value['date']?></p>
                            <p class="top_text"><i class="fas fa-cart-arrow-down"></i> Quantity Required: <?php echo $value['quantity']?></p>
                            <p class="top_text"><i class="fas fa-train"></i> Shipping Terms: <?php echo $value['shipping_terms']?></p>
                        </div>
                    </div>
                    <h4>Product Desicription:</h4>
                    <p><?php echo $value['description']?></p>
                </div>
                <div class="col-md-4">
                    <img class="join_deal_image" src="<?php echo base_url()?>upload/join_deal/<?php echo $value['image']?>" alt="">
                </div>
            </div>
        </div>
    </div>
<?php }}?>

<div class="main_form_foot">
    <div class="container">
    <?php
        if ($this->session->flashdata('success')) {
            echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
        } else if ($this->session->flashdata('error')) {
            echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
        }
        ?>
    <h3>Quote Now</h3>
    <div class="right_form">
       
    <form action="<?php echo base_url()?>frontend/join_deal/insert_data" method="post">
    <input type="hidden" name="product_id" value="<?php echo $parts?>">    
    <input type="hidden" name="cutomer_email" value="<?php echo $_SESSION['email']?>"> 
    <label for="">Offer Details</label>
        <textarea name="offer_details" id="" cols="30" rows="5"></textarea>
        <label for="">Product Origin</label>
        <input type="text" name="product_origin" placeholder="Please Enter Product Origin">
        <label for="">Offer Price</label>
        <input type="text" name="offer_price" placeholder="enter offered Price">
        <label for="">Comapny Name</label>
        <input type="text" name="company_name" placeholder="Enter Company Name">
        <?php echo $submit_button?>
        
    </form>
</div>
    </div>
</div>

