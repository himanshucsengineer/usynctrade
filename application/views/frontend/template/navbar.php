

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

.dropdown-content a:hover {background-color: #ffffff; color:#011950 !important;}

.dropdown:hover .dropdown-content {display: block;}

@media only screen and (max-width: 600px) {
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
    border:1px solid #cdcdcd;
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
</style>

<?php if(!isset($_SESSION['email'])){
        $login = '<li class=" nav-item">
        <a href="'.base_url().'signin" class="nav-link " >Login / Signup</a>
    </li>';
    }else{
        $login = '<li class=" dropdown nav-item">
        <a href="" class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$_SESSION['name'].'</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="'.base_url().'user/dashboard">Dashboard</a>
            <a class="dropdown-item" href="'.base_url().'user/profile">Profile & Setting</a>
            <a class="dropdown-item" href="'.base_url().'user/your_product">Your Products</a>
            <a class="dropdown-item" href="'.base_url().'import">Post by Leads</a>
            <a class="dropdown-item" href="'.base_url().'user/trade_inqury">Trade Inqury</a>
            <a class="dropdown-item" href="'.base_url().'user/joindeal">Join Deal Inqury</a>
            <a class="dropdown-item" href="'.base_url().'frontend/logout">Logout</a>
        </div>
        </li>
    
    ';
    }
    ?>
<div class="bs-canvas-overlay bs-canvas-anim  position-fixed w-100 h-100"></div>

<!-- Off-canvas sidebar markup, left/right or both. -->
<div id="bs-canvas-left" class="bs-canvas bs-canvas-anim bs-canvas-left position-fixed bg-light h-100">
    <div class="bs-canvas-content  ">
        <button type="button" class="bs-canvas-close close clc" aria-label="Close"><span aria-hidden="true" >&times;</span></button>
      
        <a href="<?php echo base_url();?>" ><button class="but">Home</button></a>
        <!-- <a href="<?php echo base_url(); ?>about-us" ><button class="but">About us</button></a>
        <a href="<?php echo base_url(); ?>service" ><button class="but">Service</button></a>
        <a href="<?php echo base_url(); ?>blogs" ><button class="but">Blog</button></a>
        <a href="<?php echo base_url(); ?>clients" ><button class="but">Clients</button></a>
        <a href="<?php echo base_url(); ?>projects" ><button class="but">Projects</button></a>
        <a href="<?php echo base_url(); ?>career" ><button class="but">Career</button></a>
        <a href="<?php echo base_url(); ?>gallary" ><button class="but">Gallary</button></a>
        <a href="<?php echo base_url(); ?>contact-us" ><button class="but">Contact Us</button></a>
       <a href="<?php echo base_url(); ?>feedback" ><button class="but">Other</button></a>
        -->
    </div>
</div>
<div class="top_nav">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

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
                                        src="<?php echo base_url()?>assest/image/logo.png" alt="" class="custom-logo"></a>
                                <a class="navbar-brand" href="#" rel="home"></a>
                            </div>
                            
                            <div class="bs-offset-main bs-canvas-anim ">
                                <button class="side"  data-toggle="canvas" data-target="#bs-canvas-left" aria-expanded="false" aria-controls="bs-canvas-left">&#9776;</button>
                            </div>
                            <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                                <ul id="nav" class="navbar-nav ml-auto " style="float:left;">
                                    <li class=" nav-item">
                                        <a href="" class="nav-link">Category</a>
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