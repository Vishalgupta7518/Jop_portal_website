<?php
  session_start();
  if(!isset($_SESSION['email'])){
    echo "<script>window.location='loginpage.php'</script>";
  }

include('db_connection.php');
if(isset($_GET['eid'])){
    $eid = $_GET['eid'];
    $res = $mysqli->query("SELECT *FROM banner WHERE id=$eid");
    if($res->num_rows>0){
        $row = $res->fetch_assoc();
    }
}
if(isset($_POST['btn'])){
  $bname= $_POST['bname'];
  $btitle= $_POST['btitle'];
  $bhead= $_POST['bhead'];
  $bmsg= $_POST['bmsg'];
  $bfile= $_POST['file'];
  $query = "UPDATE banner SET brand_name=?,brand_title=?,brand_head=?,brand_msg=?,img_name=? WHERE id=$eid";
  if(!($stmt=$mysqli->prepare($query))){
    echo "Prepare failed".$mysqli->errno.$mysqli->error;
    die;
  }
  if(!$stmt->bind_param('sssss',$bname,$btitle,$bhead,$bmsg,$bfile)){
    echo "Binding failed".$mysqli->errno.$mysqli->error;
    die;
  }
  if(!$stmt->execute()){
    echo "Execution failed".$mysqli->errno.$mysqli->error;
    die;
  }
  $stmt->close();
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
            <h1 class="m-0 font-weight-bold">Edit banner</h1>
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
                        <label for="">Brand_head</label>
                        <input type="text" value="<?php echo $row['brand_head']; ?>" id="bhead" name="bhead" class="form-control" required >
                        <span id="shead" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Brand_msg</label>
                        <input type="text" value="<?php echo $row['brand_msg'];?>" id="bmsg" name="bmsg" class="form-control" required >
                        <span id="smsg" class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Brand_class</label>
                        <input type="text" value="<?php echo $row['img_name'];?>" id="bclass" name="file" class="form-control" name="file" required >
                        <span id="sclass" class="text-danger"></span>
                    </div>
                    <button id="ebtn" name="btn" class="btn btn-warning">Edit</button>
                </form>

            </div>
        </div>
    </section>
    
    
  </div>
</div>
        



<?php
include('includes/footer.php');
?>