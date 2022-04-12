

<style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
    
  display: none;
  position: absolute;
  background-color: #011950;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  padding:0px !important;
  margin:0px !important;
}

.dropdown-content a {
  color: #ffffff !important;
  
 padding:0px !important;
 margin:0px !important;
  text-decoration: none;
  display: block;
  padding:.7rem !important;
}
.dropdown:hover > .dropdown-menu {
  display: block;
}

.dropdown > .dropdown-toggle:active {
  /*Without this, clicking will make it sticky*/
  pointer-events: none;
}
.dropdown-content a:hover {background-color: #ffffff; color:#011950 !important;}

.dropdown:hover .dropdown-content {display: block;}
.serahc_cicon{
    display:none;
}
.search_bar_class{
    display:none;
}
@media only screen and (max-width: 600px) {
    .serahc_cicon{
    display:block;
    margin-right: -2rem;
    color:#ff6a00;
    cursor:pointer;
}
.search_bar_class{
    display:block;
    width:100%;
    height:auto;
    position:absolute;
    z-index:2;
    padding:.5rem;
    background-color:white;
    border:1px solid #cdcdcd;
    
}
.search_bar_class .serach_flex_nav{
    width:100% !important;
    margin:0px !important;
}
    .header_top .flex_top_first .left_first{
        width:100%;
    }
    .header_top .flex_top_first .right_first{
        display:none;
    }
    .header_top .flex_top_first .left_first .top_secont_flex .left_second{
        width:65%;
    }
    .header_top .flex_top_first .left_first .top_secont_flex .right_second{
        width:35%;
        font-size:15px;
    }
    .navbar{
        padding:.5rem 0rem ;
    }
}







    @media only screen and (max-width: 600px) {
        .top_nav{
            display:none;
        }
        .side{
    display:block !important;
}
    }
.side{
    display:none;
}
.bs-canvas-overlay {
    opacity: 0;
    z-index: -1;
    background-color:rgba(0,0,0,.5);
 }
 
 .bs-canvas-overlay.show {
    opacity: 0.85;
    z-index: 150;
 }
 
 .bs-canvas {
    top: 0;
    width: 0;
    z-index: 160;
    overflow-x: hidden;
    overflow-y: auto;
 }
 
 .bs-canvas-left {
    left: 0;
 }
 
 .bs-canvas-right {
    right: 0;
 }
 
 .bs-canvas-anim {
    transition: all .2s ease-out;
    -webkit-transition: all .2s ease-out;
    -moz-transition: all .2s ease-out;
    -ms-transition: all .2s ease-out;
 }
.but{
    width:100%;
    height:auto;
    padding-top:.8rem;
    padding-bottom:.8rem;
    border-bottom:1px solid #e6e6e6;
    border-top:none;
    border-right:none;
    background-color:#fff;
    border-left:none;
    color:#030303 !important;
    text-align:left !important;
    padding-left:1.5rem;
    font-size:18px;
    outline:none !important;
    transition:.5s;
    
}
.buu{
    width:100%;
    height:auto;
    padding-top:.7rem;
    padding-bottom:.7rem;
    border-bottom:1px solid #e6e6e6;
    border-top:none;
    border-right:none;
    background-color:#fff;
    border-left:none;
    color:rgb( 239, 69, 84 ) !important;
    text-align:left !important;
    padding-left:1.5rem;
    font-size:18px;
    outline:none !important;
    transition:.5s;
    
}
.but:hover{
    background-color:#f2f2f2;
    
    
}
.buu:hover{
    background-color:#f2f2f2;
    color:#012169 !important;
    
}

.butt{
    width:100%;
    height:auto;
    padding-top:.7rem;
    padding-bottom:.7rem;
    border-bottom:1px solid #e9e9e9;
    border-top:none;
    border-right:none;
    background-color:#f9f9f9;
    border-left:none;
    color:#030303 !important;
    text-align:left !important;
    padding-left:1.5rem;
    font-size:18px;
    outline:none !important;
    transition:.5s;
    
}

.butt:hover{
    background-color:#f2f2f2;
    
    
}
.side{
    border:1px solid #e9e9e9 !important;
    background-color:white !important;
    color:#011950 !important;
    font-size:1.1rem;
}

.clc{
    font-size:3rem !important;
    color:#000;
    font-weight:100 !important;
    margin-right:15px;
}
.serach_flex_nav{
    width:550px;
    height:auto;
    display:flex;
    margin-right:5rem;
    margin-left:2rem;
}
.serach_flex_nav .left{
    width:75%
}
.serach_flex_nav .left input[type="text"]{
    width:100%;
    height:auto;
    padding:.5rem 1rem;
    border:1px solid #ff6a00;
    border-radius:25px 0px 0px 25px;
    outline:none
}
.serach_flex_nav .right{
    width:25%;
}
.serach_flex_nav .right button{
    width:100%;
    height:auto;
    padding:.5rem;
    border:none;
    outline:none;
    background:#ff6a00;
    color:white;
    border-radius:0px 25px 25px 0px;
    font-size:18px;
    margin-top:-.01rem;
}

.ucinssss{
    margin-right:.5rem !important;
    color:#00a9ea !important;
    font-size:20px !important;
}
.dfdfd{
    transition:.5s !important;
}
.dfdfd:hover{
    color:#ff6a00 !important;
}
.nav-link:hover{
    color:#ff6a00 !important;
}
.login_button_nav{
    padding:.5rem 1rem;
    outline:none;
    background-color:#ff6a00;
    color:#fff;
    border:1px solid #ff6a00;
    border-radius:5px;
    transition:.5s;
}
.login_button_nav:hover{
    background-color:#fff;
    color:#ff6a00;
    border:1px solid #ff6a00;
    border-radius:25px;
}
</style>

<?php if(!isset($_SESSION['email'])){
        $login = '<li class=" nav-item">
        <a href="'.base_url().'signin" class=" " ><button class="login_button_nav"><i class="fas fa-users"></i> Login/Signup</button></a>
    </li>';
    }else{
        $login = '<li class=" dropdown nav-item">
       <button data-toggle="dropdown"  id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle login_button_nav"><i class="fas fa-users"></i> '.$_SESSION['name'].'</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item dfdfd" href="'.base_url().'user/dashboard"><span class="ucinssss"><i class="fas fa-desktop"></i></span> Dashboard</a>
            <a class="dropdown-item dfdfd" href="'.base_url().'user/profile"><span class="ucinssss"><i class="fa fa-user"></i></span> Profile & Setting</a>
            <a class="dropdown-item dfdfd" href="'.base_url().'user/your_product"><span class="ucinssss"><i class="fas fa-tasks"></i></span> Your Products</a>
            <a class="dropdown-item dfdfd" href="'.base_url().'import"><span class="ucinssss"><i class="fas fa-cart-arrow-down"></i></span> Post by Leads</a>
            <a class="dropdown-item dfdfd" href="'.base_url().'user/trade_inqury"><span class="ucinssss"><i class="fas fa-bell"></i></span> Trade Inqury</a>
            <a class="dropdown-item dfdfd" href="'.base_url().'user/joindeal"><span class="ucinssss"><i class="fas fa-bell"></i></span> Join Deal Inqury</a>
            <a class="dropdown-item dfdfd" href="'.base_url().'user/importdata"><span class="ucinssss"><i class="fas fa-bell"></i></span> Import Inqury Data</a>
            <a class="dropdown-item dfdfd" href="'.base_url().'user/exportdata"><span class="ucinssss"><i class="fas fa-bell"></i></span> Export Inqury Data</a>
            <a class="dropdown-item dfdfd" href="'.base_url().'frontend/logout"><span class="ucinssss"><i class="fas fa-sign-out-alt"></i></span> Logout</a>
        </div>
        </li>
    
    ';
    }
    ?>

<?php if($_SESSION['email']){
    $siderbar_login = '
    <a href="'.base_url().'user/dashboard" ><button class="but"> Dashboard</button></a>
    <a href="'.base_url().'user/profile" ><button class="but"> Profile & Setting</button></a>
    <a href="'.base_url().'user/your_product" ><button class="but"> Your Products</button></a>
    <a href="'.base_url().'import" ><button class="but"> Post by Leads</button></a>
    <a href="'.base_url().'user/trade_inqury" ><button class="but"> Trade Inqury</button></a>
    <a href="'.base_url().'user/joindeal" ><button class="but"> Join Deal Inqury</button></a>
    <a href="'.base_url().'user/importdata" ><button class="but"> Import Inqury Data</button></a>
    <a href="'.base_url().'user/exportdata" ><button class="but">Export Inqury Data</button></a>
    <a href="'.base_url().'frontend/logout" ><button class="but">Logout</button></a>
    
    
    ';
}else{
    $siderbar_login = '<a href="'.base_url().'signin" ><button class="but">Login/Signup</button></a>';
}


?>
<div class="bs-canvas-overlay bs-canvas-anim  position-fixed w-100 h-100"></div>

<!-- Off-canvas sidebar markup, left/right or both. -->
<div id="bs-canvas-left" class="bs-canvas bs-canvas-anim bs-canvas-left position-fixed bg-light h-100">
    <div class="bs-canvas-content  ">
        <button type="button" class="bs-canvas-close close clc" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
      
        <a href="<?php echo base_url();?>" ><button class="but">Home</button></a>
        <?php echo $siderbar_login?>
       
                                    <?php
							            $category=Utility::getcategory();
							        ?>   
                                        <div  class="dropdown" style="width:100%;" ><button class="but " id="dropdownMenuButto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButto">
                                            <?php foreach($category as $cate){?>
                                            <form action="<?php echo base_url()?>frontend/search/fetch_category" method="post">
                                            <input type="hidden" value="<?php echo $cate['cate_name']?>" name="cate">    
                                
                                                <input type="submit" class="dropdown-item" value="<?php echo $cate['cate_name']?>">
                                            </form>
                                            <?php }?>
                                        </div>
                                    </div>
                                      
        <a href="<?php echo base_url(); ?>contact-us" ><button class="but">Contact Us</button></a>
        <a href="<?php echo base_url(); ?>i-trade" ><button class="but">Trade Update</button></a>
        <a href="<?php echo base_url(); ?>sez_industry" ><button class="but">SEZ industry</button></a>
        
       
        <!-- <a href="<?php echo base_url(); ?>about-us" ><button class="but">About us</button></a>
        <a href="<?php echo base_url(); ?>service" ><button class="but">Service</button></a>
        <a href="<?php echo base_url(); ?>blogs" ><button class="but">Blog</button></a>
        <a href="<?php echo base_url(); ?>clients" ><button class="but">Clients</button></a>
        <a href="<?php echo base_url(); ?>projects" ><button class="but">Projects</button></a>
        <a href="<?php echo base_url(); ?>career" ><button class="but">Career</button></a>
        <a href="<?php echo base_url(); ?>gallary" ><button class="but">Gallary</button></a>
        
       <a href="<?php echo base_url(); ?>feedback" ><button class="but">Other</button></a>
        -->
    </div>
</div>
<div class="top_nav">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p style="color:white; font-size:18px;">+91 9950368363 | Customercare@eximsure.com</p>
            </div>
            <div class="col-md-6">
                <div class="text-right">
                    <a href="<?php echo base_url()?>i-trade"><button>Trade Update</button></a>
                    <a href="<?php echo base_url()?>sez_industry"><button>SEZ's Industries</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
    <header class="header-area bg-white main_header">
        <div class="navbar-area ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar cucuc navbar-expand-lg">
                            <div class="logo">
                                <a class="custom-logo-link " rel="home" href="<?php echo base_url()?>"><img width="150" height="60"
                                        src="<?php echo base_url()?>assets/img/logo.png" alt="" class="custom-logo"></a>
                                <a class="navbar-brand" href="#" rel="home"></a>
                            </div>
                            <div class="text-right serahc_cicon">
                                <span id="serach_bu"><i class="fas fa-search"></i></span> <span id="close_bu"><i class="fas fa-times"></i></span>
                            </div>
                            <div class="bs-offset-main bs-canvas-anim ">
                                <button class="side"  data-toggle="canvas" data-target="#bs-canvas-left" aria-expanded="false" aria-controls="bs-canvas-left">&#9776;</button>
                            </div>
                            
                            <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                                <ul id="nav" class="navbar-nav ml-auto " style="float:left;">
                                    <li class="dropdown nav-item">
                                    <?php
							            $category=Utility::getcategory();
							        ?>   
                                        <a href="" class="nav-link dropdown-toggle" id="dropdownMenuButto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButto">
                                            <?php foreach($category as $cate){?>
                                            <form action="<?php echo base_url()?>frontend/search/fetch_category" method="post">
                                            <input type="hidden" value="<?php echo $cate['cate_name']?>" name="cate">    
                                
                                                <input type="submit" class="dropdown-item" value="<?php echo $cate['cate_name']?>">
                                            </form>
                                            <?php }?>
                                        </div>
                                    
                                    </li>
                                  
                                    <li class=" nav-item">
                                    <form action="<?php echo base_url()?>frontend/search/fetch_product" method="post">
                                        <div class="serach_flex_nav">
                                            <div class="left">
                                                <input type="text" id="products" name="product" placeholder="Search Your Product" value="<?php echo $_SESSION['product']?>">
                                            </div>
                                            <div class="right">
                                                <button class="search">Search</button>
                                            </div>
                                        </div>
                                    </form>
                                    </li>
                                    <?php echo $login?>
                                </ul>
                            </div>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navbar area -->
    </header>
    <!--Header End-->

<div id="search_box" class="search_bar_class">
    <form action="<?php echo base_url()?>frontend/search/fetch_product" method="post">
                                        <div class="serach_flex_nav">
                                            <div class="left">
                                                <input type="text" id="products" name="product" placeholder="Search Your Product" value="<?php echo $_SESSION['product']?>">
                                            </div>
                                            <div class="right">
                                                <button class="search">Search</button>
                                            </div>
                                        </div>
                                    </form>
</div>



<script>
$(document).ready(function($) {
    $('#search_box').hide();
    $('#close_bu').hide();
    $('#serach_bu').on('click',function(){
        $('#search_box').show();
        $('#close_bu').show();
         $('#serach_bu').hide();
    });
    $('#close_bu').on('click',function(){
        $('#search_box').hide();
        $('#close_bu').hide();
         $('#serach_bu').show();
    });
    
});


</script>
    
    <script>
jQuery(document).ready(function($) {
   var bsDefaults = {
         offset: false,
         overlay: true,
         width: '280px'
      },
      bsMain = $('.bs-offset-main'),
      bsOverlay = $('.bs-canvas-overlay');

   $('[data-toggle="canvas"][aria-expanded="false"]').on('click', function() {
      var canvas = $(this).data('target'),
         opts = $.extend({}, bsDefaults, $(canvas).data()),
         prop = $(canvas).hasClass('bs-canvas-right') ? 'margin-right' : 'margin-left';

      if (opts.width === '100%')
         opts.offset = false;
      
      $(canvas).css('width', opts.width);
      if (opts.offset && bsMain.length)
         bsMain.css(prop, opts.width);

      $(canvas + ' .bs-canvas-close').attr('aria-expanded', "true");
      $('[data-toggle="canvas"][data-target="' + canvas + '"]').attr('aria-expanded', "true");
      if (opts.overlay && bsOverlay.length)
         bsOverlay.addClass('show');
      return false;
   });

   $('.bs-canvas-close, .bs-canvas-overlay').on('click', function() {
      var canvas, aria;
      if ($(this).hasClass('bs-canvas-close')) {
         canvas = $(this).closest('.bs-canvas');
         aria = $(this).add($('[data-toggle="canvas"][data-target="#' + canvas.attr('id') + '"]'));
         if (bsMain.length)
            bsMain.css(($(canvas).hasClass('bs-canvas-right') ? 'margin-right' : 'margin-left'), '');
      } else {
         canvas = $('.bs-canvas');
         aria = $('.bs-canvas-close, [data-toggle="canvas"]');
         if (bsMain.length)
            bsMain.css({
               'margin-left': '',
               'margin-right': ''
            });
      }
      canvas.css('width', '');
      aria.attr('aria-expanded', "false");
      if (bsOverlay.length)
         bsOverlay.removeClass('show');
      return false;
   });
});  

</script>