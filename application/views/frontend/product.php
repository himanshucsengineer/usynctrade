<link rel="stylesheet" href="<?php echo base_url()?>assets/css/product.css">
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

<?php foreach($product_details as $value){if($value['id'] == $parts){?>
<div class="product_main_top">
       <div class="container">
           <div class="row">
                <div class="col-md-4">
                    <div class="flex logo_slider">
                        <div class="card_main">
                            <img src="assets/img/slider1.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <img src="assets/img/slider2.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <img src="assets/img/slider3.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <img src="assets/img/slider2.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <img src="assets/img/slider1.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <img src="assets/img/slider2.jpg" alt="">
                        </div>
                        <div class="card_main">
                            <img src="assets/img/slider3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    
                    <div class="row">
                        <div class="col-md-6">
                            <p class="procudt_details"><?php echo $value['name']?></p>
                            <p class="procudt_details">Size - <?php echo $value['product_size']?></p>
                            <p class="procudt_details">Time To Dispatch - <?php echo $value['dispetch_time']?></p>
                            <p class="procudt_details">MOQ - <?php echo $value['moq']?></p>
                            <p class="procudt_details">Port Of Shipment - <?php echo $value['shipment_port']?></p>
                            <p class="procudt_details">Payment Terms - <?php echo $value['payment_terms']?></p>
                            
                        </div>
                        <div class="col-md-6">
                            <p class="procudt_details">brand Name : <?php echo $value['brand_name']?></p>
                            <p class="procudt_details">Place Of Origin : <?php echo $value['origin_place']?></p>
                            <p class="procudt_details">Category : <?php echo $value['category']?></p>
                            <p class="procudt_details">Certificates : <?php echo $value['certificates']?></p>
                            <p class="procudt_details">Looking Buyer From : <?php echo $value['buyer_from']?></p>
                            <p class="procudt_details">Successfull Transaction : <?php echo $value['transaction']?></p>
                            
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <select name="" id="">
                                <option value="">FOB PRICE : <?php echo $value['fob_price']?></option>
                                <option value="">CIF PRICE : <?php echo $value['cif_price']?></option>
                                <option value="">CFR PRICE : <?php echo $value['cfr_price']?></option>
                                <option value="">DAP PRICE : <?php echo $value['dap_price']?></option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <button>Send your message to this supplier</button>
                        </div>
                    </div>
                </div>
           </div>
       </div>
   </div>
   <section class="py-5 header">
    <div class="container py-4">
      


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <i class="fa fa-user-circle-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Product Details</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <i class="fa fa-calendar-minus-o mr-2"></i>
                        <span class="font-weight-bold small text-uppercase">Company Profile</span></a>

                    
                    </div>
            </div>


            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class=" mb-4">Product Description :</h4>
                        <p class=" text-muted mb-4"><?php echo $value['product_desc']?></p>
                        <h4 class=" mb-4">Packaging Details :</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p class=" text-muted mb-2">1. Selling units : <?php echo $value['selling_units']?></p>
                                <p class=" text-muted mb-2">2. Single Gross Weight : <?php echo $value['single_gross_weight']?></p>
                            </div>
                            <div class="col-md-6">
                                <p class=" text-muted mb-2">3. Single Package Size : <?php echo $value['single_package_size']?></p>
                                <p class=" text-muted mb-2">4. Package Type : <?php echo $value['single_package_type']?></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class=" mb-4">Verfied</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <p class=" text-muted mb-2">1. Cpmpany Name : <?php echo $value['comapny_name']?></p>
                                <p class=" text-muted mb-2">3. Business Type : <?php echo $value['business_type']?></p>
                                <p class=" text-muted mb-2">5. Main Products : <?php echo $value['main_product']?></p>
                                <p class=" text-muted mb-2">7. No. Of Offices : <?php echo $value['no_of_office']?></p>
                                <p class=" text-muted mb-2">9. Total Employee : <?php echo $value['total_employee']?></p>
                                <p class=" text-muted mb-2">11. Orgenisation Membership : <?php echo $value['membership']?></p>
                            </div>
                            <div class="col-md-6">
                                <p class=" text-muted mb-2">2. Country : <?php echo $value['company_country']?></p>
                                <p class=" text-muted mb-2">4. Year Of Established : <?php echo $value['stablished_year']?></p>
                                <p class=" text-muted mb-2">6. Factory Size : <?php echo $value['factory_size']?></p>
                                <p class=" text-muted mb-2">8. Certificates : <?php echo $value['comapny_certificates']?></p>
                                <p class=" text-muted mb-2">10. Response Time : <?php echo $value['response_time']?></p>
                                <p class=" text-muted mb-2">12. Total Annual Revenue : <?php echo $value['annual_revenue']?></p>
                                <p class=" text-muted mb-2">13. Contract Services : <?php echo $value['contract_services']?></p>
                            </div>
                        </div>
                        
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</section>
<?php }}?>

<div class="product_form">
    <div class="container">
        <h3>Send your message to suplier</h3>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="Enter Quantity">
                </div>
                <div class="col-md-6">
                    <select name="" id="">
                        <option value="">Select Pieces</option>
                        <option value="">Pieces</option>
                        <option value="">Cartoon</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <select name="" id="">
                        <option value="">Select Incoterms</option>
                        <option value="FOB">FOB</option>
                        <option value="CIF">CIF</option>
                        <option value="CFR">CFR</option>
                        <option value="DAP">DAP</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <select name="" id="">
                        <option value="">Select Destination Country</option>
                     
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" placeholder="Enter Your Budget">
                </div>
                <div class="col-md-6">
                    <select name="" id="">
                        <option value="">Select Currency</option>
                        <option value="INR">Inr</option>
                        <option value="USD">USD</option>
                     
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <textarea name="" id="" cols="30" rows="5" placeholder="Your Message..."></textarea>
                </div>
            </div>
     
        </form>
    </div>
</div>

<script>
    $('.logo_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,  
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        ]
    });
</script>