  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href=".././index.php" class="nav-link">Home</a>
      </li>
      <?php
        if(isset($_SESSION['email'])){
      ?>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Banner</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="about_us.php" class="nav-link">About us</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="gallery.php" class="nav-link">Gallery</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="pfooter.php" class="nav-link">Footer</a>
      </li>
      <?php
        }
      ?>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->