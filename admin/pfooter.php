<?php
  session_start();
  if(!isset($_SESSION['email'])){
    echo "<script>window.location='loginpage.php'</script>";
  }

 include('db_connection.php');
 if(isset($_GET['id'])){
  $delid = $_GET['id'];
  if(!($stmt=$mysqli->prepare("DELETE FROM footer WHERE id=?"))){
     echo "Prepare failed".$mysqli->errno.$mysqli->error;
     die; 
  }
  if(!$stmt->bind_param('i',$delid)){
     echo "Binding failed".$mysqli->errno.$mysqli->error;
     die;
  }
  if(!$stmt->execute()){
     echo "Execute failed".$mysqli->errno.$mysqli->error;
     die;
  }
    $stmt->close();
 }
?>
<?php
 include('includes/header.php');
 include('includes/topnavbar.php');
 include('includes/sidebar.php');
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 font-weight-bold">DASHBOARD COORYON</h1>
          </div><!--.col-->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">CurryOn</li>
            </ol>
          </div><!--.col-->
        </div><!--.row-->
      </div><!--/.container-fluid-->
    </div>
    
    <section class="content">
       <div class="container-fluid">
          <div class="row">
            <div class="col-12">
                <a href="add_footer.php"><button class="btn btn-info my-3">Add</button></a>
              <div class="card shadow">
                <div class="card-header">
                    <h3 class="card-title font-weight-bold">Footer</h3>

                  <div class="card-tools">
                    <form action="" method="post" enctype="multipart/form-data">
                   <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                     <div class="input-group-append">
                        <button name="table_btn" type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                   </div>
                   </form>
                  </div>
                </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped table-hover text-center">
                  <thead class="table-info">
                    <tr>
                    <th>ID</th>
                    <th>Brand_name</th>
                    <th>brand_title</th>
                    <th>facebook_url</th>
                    <th>google_url</th>
                    <th>insta_url</th>
                    <th>Youtube_url</th>
                    <th>brand_class</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_POST['table_btn'])){
                      $search = $_POST['table_search'];
                      $query = "SELECT *FROM footer WHERE id LIKE '%$search%' or brand_name LIKE '%$search%'  or brand_title LIKE '%$search%' or brand_img LIKE '%$search%'";
                    }else{
                      $query= "SELECT *FROM footer";
                    }
                    $res = $mysqli->query($query);
                    $i = 1;
                    if($res->num_rows>0){
                    while($row=$res->fetch_assoc()){
                    ?>
                    <tr>
                    <th><?php echo $i++; ?></th>
                    <td><?php echo $row['brand_name']; ?></td>
                    <td><?php echo $row['brand_title']; ?></td>
                    <td><?php echo $row['facebook_url']; ?></td>
                    <td><?php echo $row['google_url']; ?></td>
                    <td><?php echo $row['insta_url']; ?></td>
                    <td><?php echo $row['youtube_url']; ?></td>
                    <td><?php echo $row['brand_img']; ?></td>
                    <td><a href="edit_pfooter.php?eid=<?php echo $row['id']; ?>"><button class="btn btn-primary btn-sm">Edit</button></a></td>
                    <td><a href="pfooter.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to delete this item')" id="id"><button class="btn btn-danger btn-sm">Delete</button></a></td>
                    </tr>
                  <?php
                  }
                }
                $mysqli->close();
                  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        </div>
    </section>
  </div>
  </div>
        



<?php
include('includes/footer.php');
?>