<?php
  session_start();
  if(!isset($_SESSION['email'])){
    echo "<script>window.location='loginpage.php'</script>";
  }

  include('db_connection.php');
if(isset($_POST['btn'])){
    $bname = $_POST['bname'];
    $btitle = $_POST['btitle'];
    $bhead = $_POST['bhead'];
    $bmsg = $_POST['bmsg'];
    $bfile = $_POST['bfile'];
    
      $query = "INSERT INTO banner(brand_name,brand_title,brand_head,brand_msg,img_name) VALUES(?,?,?,?,?)";
      if(!($stmt = $mysqli->prepare($query))){
        echo "Prepare failed".$mysqli->errno.$mysqli->error;
        die;
      }
      if(!$stmt->bind_param('sssss',$bname,$btitle,$bhead,$bmsg,$bfile)){
        echo "Binding failed".$mysqli->errno.$mysqli->error;
        die;
      }

      if(!$stmt->execute()){
        echo "Execute failed".$mysqli->errno.$mysqli->error;
        die;
      }
      $stmt->close();
      $mysqli->close();
      echo "<script>window.location='index.php'</script>";
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
            <h1 class="m-0 font-weight-bold">Add Banner</h1>
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
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Brand_name</label>
                        <input type="text" name="bname" id="bname" class="form-control" required autofocus>
                        <span id="bsname" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Brand_title</label>
                        <input type="text" name="btitle" id="btitle"  class="form-control" required>
                        <span id="bstitle" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Brand_head</label>
                        <input type="text" name="bhead" id="bhead" class="form-control" required>
                        <span id="bshead" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Brand_msg</label>
                        <input type="text" name="bmsg" id="bmsg" class="form-control" required>
                        <span id="bsmsg" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Brand_class</label>
                        <input type="text" name="bfile" class="form-control" id="bfile" required>
                        <span id="bsclass" class="text-danger"></span>
                    </div>
                    <button class="btn btn-warning" name="btn" id="bbtn">submit</button>
                </form>
            </div>
        </div>
    </section>

</div>
</div>










<?php
include('includes/footer.php');
?>