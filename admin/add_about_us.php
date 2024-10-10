<?php
  session_start();
  if(!isset($_SESSION['email'])){
    echo "<script>window.location='loginpage.php'</script>";
  }
  
  include('db_connection.php');
  if(isset($_POST['btn'])){
    $about = $_POST['about'];
    $a_msg = $_POST['a_msg'];
    $bfile = $_FILES['bfile']['name'];

    if(isset($_FILES['bfile']) && $_FILES['bfile']['error']==0){
      
    
        move_uploaded_file($_FILES['bfile']['tmp_name'],"../images/".$bfile);

        $query = "INSERT INTO about_us(about_heading,about_msg,about_img) VALUES (?,?,?)";
        if(!($stmt=$mysqli->prepare($query))){
          echo "Prepare failed".$mysqli->errno.$mysqli->error;
          die;
        }
        if(!$stmt->bind_param('sss',$about,$a_msg,$bfile)){
          echo "Binding failed".$mysqli->errno.$mysqli->error;
          die;
        }
        if(!$stmt->execute()){
          echo "Execute failed".$mysqli->errno.$mysqli->error;
          die;
        }
        $stmt->close();
        $mysqli->close();
        echo "<script>window.location='about_us.php'</script>";

        


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
            <h1 class="m-0 font-weight-bold">Add About us</h1>
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
                        <label for="">About_heading</label>
                        <input type="text" name="about" id="about" class="form-control" required autofocus>
                        <span id="sabout" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">About_msg</label>
                        <input type="text" name="a_msg" id="a_msg"  class="form-control" required>
                        <span id="smsg" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">About_img</label>
                        <input type="file" name="bfile" id="bfile" required>
                        <span id="sfile" class="text-danger"></span>
                    </div>
                    <button class="btn btn-warning" name="btn" id="a_btn">submit</button>
                </form>
            </div>
        </div>
    </section>

</div>
</div>










<?php
include('includes/footer.php');
?>