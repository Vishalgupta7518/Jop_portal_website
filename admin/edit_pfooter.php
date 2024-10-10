<?php
  session_start();
  if(!isset($_SESSION['email'])){
    echo "<script>window.location='loginpage.php'</script>";
  }

include('db_connection.php');
if(isset($_GET['eid'])){
    $eid = $_GET['eid'];
    $res = $mysqli->query("SELECT *FROM footer WHERE id=$eid");
        if($res->num_rows>0){
            $row = $res->fetch_assoc();
        }
}
if(isset($_POST['btn'])){
  $bname= $_POST['bname'];
  $btitle= $_POST['btitle'];
  $furl= $_POST['furl'];
  $gurl= $_POST['gurl'];
  $iurl= $_POST['iurl'];
  $yurl= $_POST['yurl'];
  $bclass= $_POST['file'];
  $query = "UPDATE footer SET brand_name=?,brand_title=?,facebook_url=?,google_url=?,insta_url=?,youtube_url=?,brand_img=? WHERE id=$eid";
  if(!($stmt=$mysqli->prepare($query))){
    echo "Prepare failed".$mysqli->errno.$mysqli->error;
    die;
  }
  if(!$stmt->bind_param('sssssss',$bname,$btitle,$furl,$gurl,$iurl,$yurl,$bclass)){
    echo "Binding failed".$mysqli->errno.$mysqli->error;
    die;
  }
  if(!$stmt->execute()){
    echo "Execution failed".$mysqli->errno.$mysqli->error;
    die;
  }
  $stmt->close();
  
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
            <h1 class="m-0 font-weight-bold">Edit footer</h1>
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
                        <input type="text" value="<?php echo $row['brand_name']; ?>" id="bname" name="bname" class="form-control" required autofocus>
                        <span id="sname" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Brand_title</label>
                        <input type="text" value="<?php echo $row['brand_title']; ?>" id="btitle" name="btitle" class="form-control" required >
                        <span id="stitle" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Facebook_url</label>
                        <input type="text" value="<?php echo $row['facebook_url']; ?>" id="furl" name="furl" class="form-control" required >
                        <span id="sfurl" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Google_url</label>
                        <input type="text" value="<?php echo $row['google_url'];?>" id="gurl" name="gurl" class="form-control" required >
                        <span id="sgurl" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Insta_url</label>
                        <input type="text" value="<?php echo $row['insta_url'];?>" id="iurl" name="iurl" class="form-control" required >
                        <span id="siurl" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Youtube_url</label>
                        <input type="text" value="<?php echo $row['youtube_url'];?>" id="yurl" name="yurl" class="form-control" required >
                        <span id="syurl" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Brand_class</label>
                        <input type="text" value="<?php echo $row['brand_img'];?>" id="bclass"  name="file" class="form-control" required >
                        <span id="sbclass" class="text-danger"></span>
                    </div>
                    <button id="efbtn" name="btn" class="btn btn-warning mb-2">Edit</button>
                </form>

            </div>
        </div>
    </section>
    
    
  </div>
</div>
        



<?php
include('includes/footer.php');
?>