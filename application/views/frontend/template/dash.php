<?php if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON') {
  $url = "https://";
} else {
  $url = "http://";
}
$url .= $_SERVER['HTTP_HOST'];
$url .= $_SERVER['REQUEST_URI'];


$parts = basename($url);




?>
<style>
.custom-logo{
    height:55px;
}
.slider_logo{
    height:85px;
}
@media only screen and (max-width: 600px){
    .user_desh .right{
        width:100%;
        padding:2rem 0rem;
    }
}
</style>
<header class="header-area bg-white main_head">
    <div class="navbar-area ">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="logo">
                            <a class="custom-logo-link " rel="home" href="<?php echo base_url()?>"><img width="90"
                                    src="<?php echo base_url()?>assets/img/logo.png" alt="Digifever"
                                    class="custom-logo"></a>
                            <a class="navbar-brand" href="#" rel="home">
                            </a>
                        </div>
                        <div class="wal_nav_list_right">
                            <button class="menu_but" onclick="openNav()">&#9776;</button>
                        </div>
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" id="close" class="closebtn" onclick="closeNav()">&times;</a>
                            <center><img class="slider_logo" src="<?php echo base_url()?>assets/img/logo.png">
                            </center>
                            <a href="<?php echo base_url()?>user/dashboard"><button class="<?php echo ($parts == 'dashboard') ? "active" : "" ?>"><span
                                        style="font-size:20px; margin-right:1.5rem;"><i class="fas fa-desktop"></i></span>My Dashboard</button></a>

                            <a href="<?php echo base_url()?>user/profile"><button class="<?php echo ($parts == 'profile') ? "active" : "" ?>"><span style="font-size:20px; margin-right:1.5rem;"><i
                                            class="fa fa-user"></i></span>Profile & Setting</button></a>
                            <a href="<?php echo base_url()?>user/your_product"><button class="<?php echo ($parts == 'your_product') ? "active" : "" ?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fas fa-tasks"></i></span>Your Product</button></a>
                            <a href="<?php echo base_url()?>import"><button class="<?php echo ($parts == 'post_by_leads') ? "active" : "" ?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fas fa-cart-arrow-down"></i></span>Post By Leads</button></a>
                            <a href="<?php echo base_url()?>user/trade_inqury"><button class="<?php echo ($parts == 'trade_inqury') ? "active" : "" ?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fas fa-bell"></i></span>Trade Inqury</button></a>
                            <a href="<?php echo base_url()?>user/joindeal"><button class="<?php echo ($parts == 'joindeal') ? "active" : "" ?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fas fa-bell"></i></span>Join Deal Inqury</button></a>
                            <a href="<?php echo base_url()?>user/importdata"><button class="<?php echo ($parts == 'importdata') ? "active" : "" ?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fas fa-bell"></i></span>Import Inqury data</button></a>
                            <a href="<?php echo base_url()?>user/exportdata"><button class="<?php echo ($parts == 'exportdata') ? "active" : "" ?>"><span style="font-size:20px; margin-right:1.5rem;"><i class="fas fa-bell"></i></span>Export Inqury data</button></a>
                            <a href="<?php echo base_url()?>frontend/logout"><button><span style="font-size:20px; margin-right:1.5rem;"><i class="fas fa-sign-out-alt"></i></span>Logout</button></a>
                        </div>

                        <div id="navbarSupportedContent" class="collapse navbar-collapse sub-menu-bar">
                            <ul id="nav" class="navbar-nav ml-auto " style="float:left;">




                                <li class=" nav-item user_box">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img class="avtar" src="<?php echo base_url()?>assets/img/user.png">
                                        </div>
                                        <div class="col-md-10">
                                            <a title="career" href="" class="nav-link">
                                                <?php echo $_SESSION["name"]?></a>
                                        </div>
                                    </div>


                                </li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- navbar area -->
</header>
<script>
if (window.innerWidth > 600) {
    document.getElementById("close").style.display = "none";
    document.getElementById("mySidenav").style.width = "22%";
    document.getElementById("mySidenav").style.transition = "0s";
}

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>