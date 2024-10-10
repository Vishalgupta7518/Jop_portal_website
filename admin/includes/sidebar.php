
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="assets/dist/img/vishal.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">CurryOn</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/vishal.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Vishal Gupta</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php
          if(isset($_SESSION['email'])){
          ?>
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Banner</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="about_us.php" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>About us</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="gallery.php" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Gallery</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pfooter.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Footer</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="log_out.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>Logout</p>
            </a>
          </li>
          <?php
          }
          ?>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  