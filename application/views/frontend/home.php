<link rel="stylesheet" href="<?php echo base_url()?>assets/css/home.css">
</head>
<style>
    .flag_class{
        width:15px;
        margin-left:.5rem;
    }
</style>
<?php $this->load->view('frontend/template/navbar')?>
<div class="hero_section">
        <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" >
                    <img src="assets/img/slider1.jpg" alt="">
                </div>
                <div class="carousel-item " >
                    <img src="assets/img/slider2.jpg" alt="">
                </div>
                <div class="carousel-item " >
                    <img src="assets/img/slider3.jpg" alt="">
                </div>
            </div>
            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> -->
        </div>
    </div>

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


    <div class="join_deal">
        <div class="container">
            <table id="example" class="table table-striped table-bordered " >
                <thead>
                    <tr>
                        <th>Product </th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Product Image</th>
                        <th>Quantity Required</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($join_deal as $value){?>
                    <tr>
                        <td><?php echo $value['name']?> <br> <?php foreach($country as $val){ if($val['Country'] == $value['destination_country']){ echo $val['Country']; echo '<img class="flag_class" src="'.$val['Flag_image_url'].'">';}}?></td>
                        <td><?php echo $value['date']?></td>
                        <td><?php echo $value['category']?></td>
                        <td><img width="100px" src="<?php echo base_url()?>upload/join_deal/<?php echo $value['image']?>"></td>
                        <td><?php echo $value['quantity']?></td>
                        <td><?php echo ($value['status'] == 0) ? "<span class='text-white badge badge-warning'>Closed</span>" : "<span class='text-white badge badge-success'>Active</span>"; ?></td>
                        <td><a href="<?php echo base_url()?>join-this-deal/<?php echo $value['id']?>"><button class="btn btn-primary">Make this Deal</button></a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
    </div>
    
    <script>
$(document).ready(function() {
    var table = $('#example').DataTable( {
        fixedHeader: true
    } );
} );
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
    

   <script>
           $("#after_search").hide();
          
      
           function getserchinput(){
               $("#dataList2").empty();
           
               var country = document.getElementById("keywords").value;
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
   
               function load_data2(limit, start, country) {
                   
                   $.ajax({
                       url: "<?php echo base_url(); ?>home/get_result",
                       method: "POST",
                       data: {
                           limit: limit,
                           start: start,
                           country: country,
                           
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
                   load_data2(limit, start, country);
               }
       
               $(window).scroll(function() {
                   if ($(window).scrollTop() + $(window).height() > $("#dataList2").height() && action == 'inactive') {
                       lazzy_loader(limit);
                       action = 'active';
                       start = start + limit;
                       setTimeout(function() {
                           load_data2(limit, start, country);
                       }, 500);
                   }
               });
               $("#before_search").hide();
               $("#after_search").show();
           }
           $(document).ready(function() {
           var country = document.getElementById("keywords").value;
        
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
   
           function load_data(limit, start, country) {
               $.ajax({
                   url: "<?php echo base_url(); ?>home/get_result",
                   method: "POST",
                   data: {
                       limit: limit,
                       start: start,
                       country: country,
                    
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
               load_data(limit, start);
           }
          
           $(window).scroll(function() {
               if ($(window).scrollTop() + $(window).height() > $("#dataList").height() && action == 'inactive') {
                   lazzy_loader(limit);
                   action = 'active';
                   start = start + limit;
                   setTimeout(function() {
                       load_data(limit, start);
                   }, 500);
               }
           });
   
           });
   </script>