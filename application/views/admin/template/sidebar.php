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



        <li class="nav-item <?php echo ($parts == 'adduser') ? "active" : "" ?>">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/adduser"><i class="fas fa-fw fa-table"></i><span>Add User</span></a>
        </li>



     
        <li class="nav-item ">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menu" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Menu</span>
          </a>
          <div id="menu" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/menu" style="font-size:1.3rem; ">Upload Menu</a>
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/chaap" style="font-size:1.3rem; ">Chaap Data</a>
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/burger" style="font-size:1.3rem; ">Burger Data</a>
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/salon" style="font-size:1.3rem; ">Salon Data</a>
              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>

        <li class="nav-item ">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#course" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Course</span>
          </a>
          <div id="course" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/allpost" style="font-size:1.3rem; ">All Courses</a>
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/newpost" style="font-size:1.3rem; ">Add New Course</a>
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/editblog" style="font-size:1.3rem; ">Edit Course</a>

              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>

        <li class="nav-item ">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePagesss" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Add Plans</span>
          </a>
          <div id="collapsePagesss" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="py-2 collapse-inner rounded">
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/course" style="font-size:1.3rem; ">Course Moduls</a>
              <a class="collapse-item " href="<?php echo base_url(); ?>admin/plans" style="font-size:1.3rem; ">Plans</a>

              <div class="collapse-divider"></div>
            </div>
          </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
        <div class="sidebar-heading">
          User Data
        </div>
        <li class="nav-item <?php echo ($parts == 'user') ? "active" : "" ?>">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/user"><i class="fas fa-fw fa-table"></i><span>Users Data</span></a>
        </li>
        <li class="nav-item <?php echo ($parts == 'contactdata') ? "active" : "" ?>">
          <a class="nav-link " href="<?php echo base_url(); ?>admin/contactdata"><i class="fas fa-fw fa-table"></i><span>Contact Data</span></a>
        </li>

        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->


      </ul>
    </div>

    <!-- End of Sidebar -->