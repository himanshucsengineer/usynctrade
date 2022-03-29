<style>
  .active {
    background-color: #0073aa;
    color: white;
  }

  .active a:hover {
    background-color: #0073aa !important;
    color: white !important;
  }

  a:hover {
    color: #0073aa !important;
  }

  li a {
    color: white !important;
    transition: .5s;
  }

  .fas {
    color: white !important;
  }

  li {
    transition: .5s;
  }

  li:hover {
    background-color: black !important;

  }

  .side {
    background-color: #23282d !important;

  }
</style>

<?php if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'ON') {
  $url = "https://";
} else {
  $url = "http://";
}
$url .= $_SERVER['HTTP_HOST'];
$url .= $_SERVER['REQUEST_URI'];


$parts = basename($url);




?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    <div id="col-navigation" class="side">
      <!-- Sidebar -->
      <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->


        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item <?php echo ($parts == 'welcome') ? "active" : "" ?>">
          <a class="nav-link  " href="<?php echo base_url(); ?>welcome">
            <i class="fas fa-fw fa-tachometer-alt" style="color:white; font-size:1.5rem;"></i>
            <span>Dashboard</span></a>
          <span class="sr-only">
            (current)
          </span>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">



        <!-- Divider -->
        <!--    <hr class="sidebar-divider">

    <! -- Heading -->
        <div class="sidebar-heading">
          Home Page
        </div>

        <!-- Nav Item - Charts -->




        <!-- Nav Item - Tables -->



        <!--li class="nav-item <?php echo ($parts == 'contactdata') ? "active" : "" ?>">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/contactdata"><i class="fas fa-fw fa-table"></i><span>Contact Data</span></a>
        </li-->



     
        <li class="nav-item ">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Sez Industry</span>
          </a>
          <div id="menu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/sez/add" style="font-size:1.3rem; ">Add Sez Industry</a>
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/sez/view" style="font-size:1.3rem; ">View ALL Sez Industry</a>

              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>

        <li class="nav-item ">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#course" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Products</span>
          </a>
          <div id="course" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/product/add" style="font-size:1.3rem; ">Add Product</a>
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/product/view" style="font-size:1.3rem; ">View All Products</a>
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/product/category" style="font-size:1.3rem; ">View/ADD Category</a>

              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>

        <li class="nav-item ">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesss" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Join Deal</span>
          </a>
          <div id="collapsePagesss" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/join_deal/add" style="font-size:1.3rem; ">Add Deal</a>
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/join_deal/view" style="font-size:1.3rem; ">All Deal</a>

              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>


      
        <hr class="sidebar-divider d-none d-md-block">
        <div class="sidebar-heading">
          User Data
        </div>
        <li class="nav-item <?php echo ($parts == 'userdata') ? "active" : "" ?>">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/userdata"><i class="fas fa-fw fa-table"></i><span>Users Data</span></a>
        </li>
        <li class="nav-item <?php echo ($parts == 'contactdata') ? "active" : "" ?>">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/contactdata"><i class="fas fa-fw fa-table"></i><span>Contact Data</span></a>
        </li>
        <li class="nav-item <?php echo ($parts == 'importdata') ? "active" : "" ?>">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/importdata"><i class="fas fa-fw fa-table"></i><span>Import Data</span></a>
        </li>
        <li class="nav-item <?php echo ($parts == 'exportdata') ? "active" : "" ?>">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/exportdata"><i class="fas fa-fw fa-table"></i><span>Export Data</span></a>
        </li>
        <li class="nav-item <?php echo ($parts == 'joindealdata') ? "active" : "" ?>">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/joindealdata"><i class="fas fa-fw fa-table"></i><span>Join Deal Data</span></a>
        </li>
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->


      </ul>
    </div>

    <!-- End of Sidebar -->