<link rel="stylesheet" href="<?php echo base_url()?>assets/css/home.css">
</head>
<style>
    .flag_class{
        width:15px;
        margin-left:.5rem;
    }
</style>
<?php $this->load->view('frontend/template/navbar')?>


    <div class="home_product">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="home_select_country_flex">
                        <div class="left">
                            <h2>Our Products</h2>
                        </div>
                        <div class="right">
                            <div class="inner_inner_flex">
                                <div class="inner_left">
                                    <select name="" id="keywords">
                                        <option value="">Select Country</option>
                                        <?php foreach($country as $val){ ?>
                                            <option value="<?php echo $val['Country'] ?>"><?php echo $val['Country'] ?></option>
                                        <?php }?>
                                    </select>
                                </div>
                                <div class="inner_right">
                                    <button onclick="getserchinput()">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div  id="before_search">
                <div class="home_product_flex" id="dataList">
                
				
                </div>
                <div class="text-center" id="load_data_message"></div>
            </div>   
            <div id="after_search">
                <div class="home_product_flex" id="dataList2">
					
				    
                </div>
                <div class="text-center" id="load_data_message2"></div>
            </div >
            
        </div>
    </div>


  

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
    

   <script>
           $("#after_search").hide();
          
      
           function getserchinput(){
               $("#dataList2").empty();
               
               var country = document.getElementById("keywords").value;
               var product = document.getElementById("products").value;
               
                var limit = 6;
               var start = 0;
               var action = 'inactive';
   
               function lazzy_loader(limit) {
       
                   for (var count = 0; count < limit; count++) {
       
                       var output = '<div class="row justify-content-center"><div class="col-md-1"><div class="column"><div class=" animation-2"><div class="shape shape1"></div><div class="shape shape2"></div><div class="shape shape3"></div><div class="shape shape4"></div></div></div></div></div>';
                   }
                   document.getElementById('load_data_message2').innerHTML = output;
               }
   
               lazzy_loader(limit);
   
               function load_data2(limit, start, country,product) {
                   
                   $.ajax({
                       url: "<?php echo base_url(); ?>home/get_result",
                       method: "POST",
                       data: {
                           limit: limit,
                           start: start,
                           country: country,
                           product:product,
                       },
                       cache: false,
                       success: function(data) {
                           if (data == '') {
                               $('#load_data_message2').html("No Result Found");
                               
                               action = 'active';
                           } else {
                               $('#dataList2').append(data);
                               $('#load_data_message2').html("No More Result Found");
                               action = 'inactive';
                           }
                       }
                   })
               }
   
               if (action == 'inactive') {
                   action = 'active';
                   load_data2(limit, start, country,product);
               }
       
               $(window).scroll(function() {
                   if ($(window).scrollTop() + $(window).height() > $("#dataList2").height() && action == 'inactive') {
                       lazzy_loader(limit);
                       action = 'active';
                       start = start + limit;
                       setTimeout(function() {
                           load_data2(limit, start, country,product);
                       }, 500);
                   }
               });
               $("#before_search").hide();
               $("#after_search").show();
           }
           $(document).ready(function() {
           var country = document.getElementById("keywords").value;
           var product = document.getElementById("products").value;
        
           var limit = 6;
           var start = 0;
           var action = 'inactive';
   
           function lazzy_loader(limit) {
   
               for (var count = 0; count < limit; count++) {
   
                   output = '<div class="row justify-content-center"><div class="col-md-1"><div class="column"><div class=" animation-2"><div class="shape shape1"></div><div class="shape shape2"></div><div class="shape shape3"></div><div class="shape shape4"></div></div></div></div></div>';
               }
               $('#load_data_message').html(output);
           }
   
           lazzy_loader(limit);
   
           function load_data(limit, start, country,product) {
               $.ajax({
                   url: "<?php echo base_url(); ?>home/get_result",
                   method: "POST",
                   data: {
                       limit: limit,
                       start: start,
                       country: country,
                       product:product,
                   },
                   cache: false,
                   success: function(data) {
                       
                       if (data == '') {
                           $('#load_data_message').html('No Result Found');
                           action = 'active';
                       } else {
                           $('#dataList').append(data);
                           $('#load_data_message').html("No More Result Found");
                           action = 'inactive';
                       }
                   }
               })
           }
   
           if (action == 'inactive') {
               action = 'active';
               load_data(limit, start,country,product);
           }
          
           $(window).scroll(function() {
               if ($(window).scrollTop() + $(window).height() > $("#dataList").height() && action == 'inactive') {
                   lazzy_loader(limit);
                   action = 'active';
                   start = start + limit;
                   setTimeout(function() {
                       load_data(limit, start,country,product);
                   }, 500);
               }
           });
   
           });
   </script>