<link rel="stylesheet" href="<?php echo base_url()?>assets/css/itrade.css">
</head>

<?php $this->load->view('frontend/template/navbar')?>



<div class="itrade_top_section">
    <div class="container">
        <div class="flex_top">
            <div class="main_card">
                <input type="text" id="name" placeholder="Search Product e.g. Onion">
            </div>
            <div class="main_card">
                <select name="" id="source">
                    <option value="">Select Source Country</option>
                    <?php foreach($country as $value){?>
                        <option value="<?php echo $value['Country']?>"><?php echo $value['Country']?></option>
                    <?php }?>
                </select>
            </div>
            <div class="main_card">
                <select name="" id="destination">
                    <option value="">Select Destination Country</option>
                    <?php foreach($country as $value){?>
                        <option value="<?php echo $value['Country']?>"><?php echo $value['Country']?></option>
                    <?php }?>
                </select>
            </div>
            <div class="main_card">
                <button onclick="getserchinput()">Search To World Market</button>
            </div>
        </div>
    </div>
</div>


<div class="itrade_main_content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist"
                    data-background-color="orange">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#home1" role="tab">News-Notice</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#profile1" role="tab">Duties & Certificates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#messages1" role="tab">Statics-Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings1" role="tab">Cost Calculation</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#settings2" role="tab">Today's Trends</a>
                    </li>
                </ul>
            </div>
            <div class="card-body">
                <!-- Tab panes -->
                <div class="tab-content text-center" id="dataList2">

                    
                </div>
                <div class="text-center" id="load_data_message2"></div>
            </div>
        </div>
    </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
   
    

   <script>
          
          
      
           function getserchinput(){
               $("#dataList2").empty();
               
               var name = document.getElementById("name").value;
               var source = document.getElementById("source").value;
               var destination = document.getElementById("destination").value;
                var limit = 15;
               var start = 0;
               var action = 'inactive';
   
               function lazzy_loader(limit) {
       
                   for (var count = 0; count < limit; count++) {
       
                       var output = '<div class="row justify-content-center"><div class="col-md-1"><div class="column"><div class=" animation-2"><div class="shape shape1"></div><div class="shape shape2"></div><div class="shape shape3"></div><div class="shape shape4"></div></div></div></div></div>';
                   }
                   document.getElementById('load_data_message2').innerHTML = output;
               }
   
               lazzy_loader(limit);
   
               function load_data2(limit, start, name,source,destination) {
                   
                   $.ajax({
                       url: "<?php echo base_url(); ?>frontend/itrade/get_result",
                       method: "POST",
                       data: {
                           limit: limit,
                           start: start,
                           name: name,
                           source:source,
                           destination:destination,
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
                   load_data2(limit, start, name,source,destination);
               }
       
               $(window).scroll(function() {
                   if ($(window).scrollTop() + $(window).height() > $("#dataList2").height() && action == 'inactive') {
                       lazzy_loader(limit);
                       action = 'active';
                       start = start + limit;
                       setTimeout(function() {
                           load_data2(limit, start, name,source,destination);
                       }, 500);
                   }
               });
              
           }
          
   </script>