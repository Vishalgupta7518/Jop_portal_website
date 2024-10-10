<?php
  session_start();
  if(!isset($_SESSION['email'])){
    echo "<script>window.location='loginpage.php'</script>";
  }

include('db_connection.php');
if(isset($_POST['btn'])){
  $bname = $_POST['bname'];
  $btitle = $_POST['btitle'];
  $furl = $_POST['furl'];
  $gurl = $_POST['gurl'];
  $iurl = $_POST['iurl'];
  $yurl = $_POST['yurl'];
  $bimg = $_POST['bimg'];

      $query = "INSERT INTO footer(brand_name,brand_title,facebook_url,google_url,insta_url,youtube_url,brand_img) VALUES(?,?,?,?,?,?,?)";
      if(!($stmt=$mysqli->prepare($query))){
          echo "Prepare failed".$mysqli->errno.$mysqli->error;
          die;
      }
      if(!$stmt->bind_param('sssssss',$bname,$btitle,$furl,$gurl,$iurl,$yurl,$bimg)){
        echo "Binding failed".$mysqli->errno.$mysqli->error;
        die;
      }
      if(!$stmt->execute()){
        echo "Execute failed".$mysqli->errno.$mysqli->error;
        die;
      }
      $stmt->close();
      $mysqli->close();
      echo "<script>window.location='pfooter.php'</script>";
    
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
            <h1 class="m-0 font-weight-bold">Add Footer</h1>
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
                        <label for="">Brand_name</label>
                        <input type="text" name="bname" id="bname" class="form-control" required autofocus>
                        <span id="sname" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Brand_title</label>
                        <input type="text" name="btitle" id="btitle"  class="form-control" required>
                        <span id="stitle" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">facebook_url</label>
                        <input type="text" name="furl" id="furl" class="form-control" required>
                        <span id="sfurl" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Google_url</label>
                        <input type="text" name="gurl" id="gurl" class="form-control" required>
                        <span id="sgurl" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Instagram_url</label>
                        <input type="text" name="iurl" id="iurl" class="form-control" required>
                        <span id="siurl" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Youtube_url</label>
                        <input type="text" name="yurl" id="yurl" class="form-control" required>
                        <span id="syurl" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">brand_class</label>
                        <input type="text" name="bimg" id="bimg" class="form-control" required>
                        <span id="sbimg" class="text-danger"></span>
                    </div>
                    <button class="btn btn-warning mb-2" name="btn" id="fbtn">submit</button>
                </form>
            </div>
        </div>
    </section>

</div>
</div>










<?php
include('includes/footer.php');
?>