  <main class="page-content">
    <!-- ===== Navbar ====== -->
    <nav class="navbar navbar-expand-sm navbar-dark py-2 shadow" style="background-image: url('http://localhost/rival_price/assets/img/layouts/sidebar-bg.jpg'); background-size:cover">
      <!-- ===== BUTTON SHOW ===== -->
      <a id="sidebar-button" class="navbar-brand mr-5 text-light">
        <i class="fas fa-bars"></i>
      </a>
      <!-- ===== END BUTTON SHOW ===== -->
      <!-- BUTTON CLOSE -->
      <!-- END BUTTON CLOSE -->
      <a class="navbar-brand mr-auto" href="#">Rival Price</a>
      <button id="logout" class="ml-auto btn btn-outline-light my-2 my-sm-0">Logout</button>
    </nav>
    <!-- ===== End Navbar ====== -->

    <!-- ===== BREADCRUMB ===== -->
    <nav class="breadcrumb pt-4 pb-0 mx-4" style="background:none;">
      <?php
        echo "<h3>".$page."</h3>";
        if($page == "Dashboard"){
          echo "<span class='ml-auto breadcrumb-item active'>".$page."</span>";
        }else if($page_level == 2){ ?>
          <a class="ml-auto breadcrumb-item" href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
          <span class='breadcrumb-item active'><?= $page1 ?></span> 
          <span class='breadcrumb-item active'><?= $page ?></span>
        <?php   
        }else{
        ?>
        <a class="ml-auto breadcrumb-item" href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
        <span class='breadcrumb-item active'><?= $page ?></span>
      <?php
        }
      ?>
    </nav>
    <!-- ===== END BREADCRUMB ===== -->
  </main>

<!-- ===== START SIDEBAR ===== -->
<nav id="sidebar" class="sidebar-wrapper">
    <div class="sidebar-content">

      <!-- ===== SIDEBAR HEADER ===== -->
      <div class="sidebar-header">
        <!-- ===== USER PIC ===== -->
        <div class="user-pic">
          <img class="img-responsive img-rounded" src="https://raw.githubusercontent.com/azouaoui-med/pro-sidebar-template/gh-pages/src/img/user.jpg"
            alt="User picture">
        </div>
        <!-- ===== END USER PIC ===== -->

        <!-- ===== USER INFO ===== -->
        <div class="user-info">
          <span id="name" class="user-name">
          
          </span>
          <span class="user-role" id="level"></span>
          <span class="user-status">
            <i class="fa fa-circle"></i><span>Online</span>
          </span>
        </div>
        <div id="close-sidebar" class="float-right">
          <i style="font-size:20px;" class="fas fa-times"></i>
        </div>
        <!-- ===== END USER INFO ===== -->
      </div>
      
      <!-- ===== END SIDEBAR HEADER ===== -->


      <!-- ===== SIDEBAR MENU ===== -->
      <div class="sidebar-menu">
        <ul>
          <li class="header-menu">
            <span>General</span>
          </li>
          <li class="sidebar">
            <a href="<?= base_url('admin/dashboard') ?>">
              <i class="fa fa-tachometer-alt"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <?php
          if($this->session->userdata('id_level') == 1){
          ?>
          <li class="sidebar">
            <a href="<?= base_url('admin/user') ?>">
              <i class="fa fa-users"></i>
              <span>User</span>
            </a>
          </li>
          <li class="sidebar">
            <a href="<?= base_url('admin/officer') ?>">
              <i class="fa fa-user"></i>
              <span>Officer</span>
            </a>
          </li>
          <?php
          }
          ?>
          <li class="sidebar">
            <a href="<?= base_url('admin/category') ?>">
              <i class="fa fa-list-alt"></i>
              <span>Category</span>
            </a>
          </li>
          <li class="sidebar">
            <a href="<?= base_url('admin/product') ?>">
              <i class="fa fa-archive"></i>
              <span>Product</span>
            </a>
          </li>
          <!-- <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-archive"></i>
              <span>Product</span> -->
              <!-- <span class="badge badge-pill badge-danger">3</span> -->
            <!-- </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="<?= base_url('admin/product/all') ?>">All Product
                  </a>
                </li>
                <li>
                  <a href="#">Product Opened</a>
                </li>
                <li>
                  <a href="#">Product Closed</a>
                </li>
              </ul>
            </div>
          </li> -->
          <!--<li class="sidebar-dropdown">
            <a href="#">
              <i class="far fa-gem"></i>
              <span>Components</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">General</a>
                </li>
                <li>
                  <a href="#">Panels</a>
                </li>
                <li>
                  <a href="#">Tables</a>
                </li>
                <li>
                  <a href="#">Icons</a>
                </li>
                <li>
                  <a href="#">Forms</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-chart-line"></i>
              <span>Charts</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Pie chart</a>
                </li>
                <li>
                  <a href="#">Line chart</a>
                </li>
                <li>
                  <a href="#">Bar chart</a>
                </li>
                <li>
                  <a href="#">Histogram</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="sidebar-dropdown">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>Maps</span>
            </a>
            <div class="sidebar-submenu">
              <ul>
                <li>
                  <a href="#">Google maps</a>
                </li>
                <li>
                  <a href="#">Open street map</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="header-menu">
            <span>Extra</span>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Documentation</span>
              <span class="badge badge-pill badge-primary">Beta</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-calendar"></i>
              <span>Calendar</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>Examples</span>
            </a>
          </li> -->
        </ul>
      </div>
      <!-- ===== END SIDEBAR HEADER ===== -->

    </div>
</nav>
<!-- ===== END SIDEBAR ===== -->