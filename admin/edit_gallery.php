<?php
  session_start();
  if(!isset($_SESSION['email'])){
    echo "<script>window.location='loginpage.php'</script>";
  }

include('db_connection.php');
if(isset($_GET['eid'])){
    $eid = $_GET['eid'];
    $res = $mysqli->query("SELECT *FROM gallery WHERE id=$eid");
        if($res->num_rows>0){
            $row = $res->fetch_assoc();
        }
}
if(isset($_POST['btn'])){
  $fname= $_POST['fname'];
  $price= $_POST['price'];
  $file= $_FILES['file']['name'];
  $query = "UPDATE gallery SET food_name=?,price=?,food_img=? WHERE id=$eid";
  if(!($stmt=$mysqli->prepare($query))){
    echo "Prepare failed".$mysqli->errno.$mysqli->error;
    die;
  }
  if(!$stmt->bind_param('sis',$fname,$price,$file)){
    echo "Binding failed".$mysqli->errno.$mysqli->error;
    die;
  }
  if(!$stmt->execute()){
    echo "Execution failed".$mysqli->errno.$mysqli->error;
    die;
  }
  $stmt->close();
  move_uploaded_file($_FILES['file']['tmp_name'],"../images/".$file);
  echo "<script>window.location='gallery.php'</script>";
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
            <h1 class="m-0 font-weight-bold">Edit gallery</h1>
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

    <section>
        <div class="container">
            <div class="">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Food_name</label>
                        <input type="text" value="<?php echo $row['food_name']; ?>" id="fname" name="fname" class="form-control" required autofocus>
                        <span id="sname" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" value="<?php echo $row['price']; ?>" id="price" name="price" class="form-control" required >
                        <span id="sprice" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Food_image</label>
                        <img src="../images/<?php echo $row['food_img']; ?>" id="fimg" class="img-thumbnail" width="40px" height="30px">
                    </div>
                    <div class="form-group">
                        <label for="">Upload_image</label>
                        <input type="file" id="file" name="file" required >
                        <span id="sfile" class="text-danger"></span>
                    </div>
                    <button name="btn" id="agbtn" class="btn btn-warning">Edit</button>
                </form>

            </div>
        </div>
    </section>
    
    
  </div>
</div>
        



<?php
include('includes/footer.php');
?>