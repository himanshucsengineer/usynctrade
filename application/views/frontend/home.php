
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</head>
<style>
.flag_class {
    width: 15px;
    margin-left: .5rem;
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
            <div class="carousel-item active">
                <a href="#" target="_blank"><img src="<?php echo base_url()?>assets/img/slider1.jpg" alt=""></a>
                <div class="carousel-caption d-md-block text-right">
                    <a href="#"><button class="right_bottom_button"
                            data-animation="animated zoomInUp">Button</button></a>
                </div>
            </div>

            <div class="carousel-item ">
                <a href="#" target="_blank"><img src="<?php echo base_url()?>assets/img/slider2.jpg" alt=""></a>
                <div class="carousel-caption d-md-block text-right">
                    <a href="#"><button class="right_bottom_button"
                            data-animation="animated zoomInUp">Button</button></a>
                </div>
            </div>
            <div class="carousel-item ">
                <a href="#" target="_blank"><img src="<?php echo base_url()?>assets/img/slider3.jpg" alt=""></a>
                <div class="carousel-caption d-md-block text-right">
                    <a href="#"><button class="right_bottom_button"
                            data-animation="animated zoomInUp">Button</button></a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<div class="hero_content_center">
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="content_card_left">
                    <p>this is content cenvyhgh gh hhu hguh hguhguy hgghb hbbjhb hgjj jhgjhjkh jhjkhjk kjhkjhjkh
                        kjhjkhjk kjhkj kjhkjhjk kjkkj kjkljlk kljlkj</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="export_import_card_right">
                    <h3>Start Your Export Import Trade</h3>
                    <p>"EximSure Help You At Every Step"</p>
                    <form action="<?php echo base_url()?>home/set_import" method="post">
                    <div class="row nowrap">
                        <div class="col-md-6 text-right">
                            <input type="radio" name="import" value="import" id=""> <span
                                class="input_text">Import</span>
                        </div>
                        <div class="col-md-6">
                            <input type="radio" name="import" value="export" id=""> <span
                                class="input_text righttt">Export</span>
                        </div>
                    </div>

                    <div class="text-center">
                        <button>Start Your Trade</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home_product">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
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
        <div id="before_search">
            <div class="home_product_flex" id="dataList">


            </div>
            <div class="text-center" id="load_data_message"></div>
        </div>
        <div id="after_search">
            <div class="home_product_flex" id="dataList2">


            </div>
            <div class="text-center" id="load_data_message2"></div>
        </div>




    </div>
</div>


<div class="join_deal">
    <div class="container">
        <h2>Join Deal</h2>
        <div class="table-responsive t_box">
            <table id="example" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                <thead>
                    <tr>
                        <th>Product </th>
                        <th>Date</th>
                        <th>Category</th>
                        <th>Product Image</th>
                        <th>Quantity Required</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($join_deal as $value){?>
                    <tr>
                        <td><?php echo $value['name']?> <br>
                        <?php foreach($country as $val){ if($val['Country'] == $value['destination_country']){ echo $val['Country']; echo '<img class="flag_class" src="'.$val['Flag_image_url'].'">';}}?>
                        </td>
                        <td><?php echo $value['date']?></td>
                        <td><?php echo $value['category']?></td>
                        <td><img width="100px"
                                src="<?php echo base_url()?>upload/join_deal/<?php echo $value['image']?>"></td>
                        <td><?php echo $value['quantity']?></td>
                        <td><?php echo ($value['status'] == 0) ? "<span class='text-white badge badge-warning'>Closed</span>" : "<span class='text-white badge badge-success'>Active</span>"; ?>
                        </td>
                        <td><a href="<?php echo base_url()?>join-this-deal/<?php echo $value['id']?>"><button
                                    class="btn btn-primary">Make this Offer</button></a></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>

            
        </div>




    </div>
</div>



<div class="business_trus">
    <div class="container">
        <h2>BUSINESSES TRUST ON US</h2>
         <div class="business_flex logo_slider">
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
         </div>
    </div>
</div>
<div class="business_trus">
    <div class="container">
        <h2>OUR TRADE SERVICES PARTNERS</h2>
         <div class="business_flex ">
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             <div class="img_card">
                 <img src="<?php echo base_url()?>assets/img/logo.png" alt="" srcset="">
             </div>
             
         </div>
    </div>
</div>

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

<script>
    $('.logo_slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        dots: false,
        arrows: false,  
        autoplay: true,
        autoplaySpeed: 100,
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

<script>
$("#after_search").hide();


function getserchinput() {
    $("#dataList2").empty();

    var country = document.getElementById("keywords").value;
    var limit = 6;
    var start = 0;
    var action = 'inactive';

    function lazzy_loader(limit) {

        for (var count = 0; count < limit; count++) {

            var output =
                '<div class="row justify-content-center"><div class="col-md-1"><div class="column"><div class=" animation-2"><div class="shape shape1"></div><div class="shape shape2"></div><div class="shape shape3"></div><div class="shape shape4"></div></div></div></div></div>';
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

            output =
                '<div class="row justify-content-center"><div class="col-md-1"><div class="column"><div class=" animation-2"><div class="shape shape1"></div><div class="shape shape2"></div><div class="shape shape3"></div><div class="shape shape4"></div></div></div></div></div>';
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
        if ($(window).scrollTop() + $(window).height() > $("#dataList").height() && action ==
            'inactive') {
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

