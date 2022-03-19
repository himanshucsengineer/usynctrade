<link rel="stylesheet" href="<?php echo base_url()?>assets/css/industry.css">
</head>

<?php $this->load->view('frontend/template/navbar')?>

<div class="sez_top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>Sez's Industries</h3>
                </div>
                <div class="col-md-6">
                    <p>Home / Sez's Industries</p>
                </div>
            </div>
        </div>
   </div>


   <div class="all_list">
       <div class="container">

        <div class="filter_section">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            <select name="" id="keywords">
                                <option value="">Plaese Select State</option>
                                <?php foreach($state as $value){if($value['country_id']==101){?>
                                  <option value="<?php echo $value['name']?>"><?php echo $value['name']?></option>
                                <?php }}?>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <button onclick="getserchinput()">Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

          <div class="custom_table">
            <div class="custome_head_flex">
              <div class="custome_head_card">
                  <h5>Comapany Name</h5>
              </div>
              <div class="custome_head_card">
                <h5>Sector</h5>
              </div>
              <div class="custome_head_card">
                <h5>Company Type</h5>
              </div>
              <div class="custome_head_card">
                <h5>Address</h5>
              </div>
              <div class="custome_head_card">
                <h5>Website Link</h5>
              </div>
            </div>
            <div  id="before_search">
					      <div id="dataList" >
					      
                </div>
				        <div class="text-center" id="load_data_message"></div>
              </div>
				      <div  id="after_search">
					      <div id="dataList2">
					      
                </div>
				        <div class="text-center" id="load_data_message2"></div>
              </div>
            
          </div>

          
       </div>
   </div>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
    

   <script>
           $("#after_search").hide();
          
      
           function getserchinput(){
               $("#dataList2").empty();
           
               var state = document.getElementById("keywords").value;
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
   
               function load_data2(limit, start, state) {
                   
                   $.ajax({
                       url: "<?php echo base_url(); ?>frontend/industry/get_result",
                       method: "POST",
                       data: {
                           limit: limit,
                           start: start,
                           state: state,
                           
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
                   load_data2(limit, start, state);
               }
       
               $(window).scroll(function() {
                   if ($(window).scrollTop() + $(window).height() > $("#dataList2").height() && action == 'inactive') {
                       lazzy_loader(limit);
                       action = 'active';
                       start = start + limit;
                       setTimeout(function() {
                           load_data2(limit, start, state);
                       }, 500);
                   }
               });
               $("#before_search").hide();
               $("#after_search").show();
           }
           $(document).ready(function() {
           var state = document.getElementById("keywords").value;
        
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
   
           function load_data(limit, start, state) {
               $.ajax({
                   url: "<?php echo base_url(); ?>frontend/industry/get_result",
                   method: "POST",
                   data: {
                       limit: limit,
                       start: start,
                       state: state,
                    
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