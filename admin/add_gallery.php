<?php
  session_start();
  if(!isset($_SESSION['email'])){
    echo "<script>window.location='loginpage.php'</script>";
  }

  include('db_connection.php');
  if(isset($_POST['btn'])){
    $fname = $_POST['fname'];
    $price = $_POST['price'];
    $fimg = $_FILES['fimg']['name'];
    if(isset($_FILES['fimg']) &&  $_FILES['fimg']['error']==0){
    
        move_uploaded_file($_FILES['fimg']['tmp_name'],"../images/".$fimg);

        $query = "INSERT INTO gallery(food_name,price,food_img) VALUES(?,?,?)";
        if(!($stmt=$mysqli->prepare($query))){
            echo "Prepare failed".$mysqli->errno.$mysqli->error;
            die;
        }
        if(!$stmt->bind_param('sis',$fname,$price,$fimg)){
          echo "Binding failed".$mysqli->errno.$mysqli->error;
          die;
        }
        if(!$stmt->execute()){
          echo "Execute failed".$mysqli->errno.$mysqli->error;
          die;
        }
        $stmt->close();
        $mysqli->close();
        echo "<script>window.location='gallery.php'</script>";
      
    }
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
            <h1 class="m-0 font-weight-bold">Add Gallery</h1>
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
                        <input type="text" name="fname" id="fname" class="form-control" required autofocus>
                        <span id="sname" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Price</label>
                        <input type="text" name="price" id="price"  class="form-control" required>
                        <span id="sprice" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Food_img</label>
                        <input type="file" name="fimg" id="fimg" required>
                        <span id="simg" class="text-danger"></span>
                    </div>
                    <button class="btn btn-warning" name="btn" id="gbtn">submit</button>
                </form>
            </div>
        </div>
    </section>

</div>
</div>










<?php
include('includes/footer.php');
?>