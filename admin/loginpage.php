<?php
    session_start();
    if(isset($_SESSION['email'])){
        echo "<script>window.location='index.php'</script>";
    }
    include('db_connection.php');
    if(isset($_POST['btn'])){
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
      $res = $mysqli->query("SELECT * FROM admin WHERE email='$email'");
      if($res->num_rows>0){
          $row = $res->fetch_assoc();
          if($pass==$row['password']){
            
              $_SESSION['email'] = $row['email'];
              $_SESSION['pass'] = $row['password'];
              
              echo "<script>window.location='index.php'</script>";
          }else{
            // echo "<script>alert('wrong password')</script>";
            echo "<script>window.location='loginpage.php?pass_error'</script>";
          }
      }else{
        //   echo "<script>alert('wrong email')</script>";
        echo "<script>window.location='loginpage.php?email_error'</script>";
      }
    }
    $mysqli->close();
?>

<?php
include('includes/header.php');
include('includes/topnavbar.php');
include('includes/sidebar.php');
?>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 my-5">
            <?php
                    if(isset($_GET['pass_error'])){
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey alert!</strong>wrong password
                        <button class="close" data-dismiss="alert">&times;</button>
                    </div>
                <?php
                    }
                ?>
            <?php
                    if(isset($_GET['email_error'])){
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey alert!</strong>wrong email
                        <button class="close" data-dismiss="alert">&times;</button>
                    </div>
                <?php
                    }
                ?>
            <div class="card my-5 shadow">
                
                <div class="card-header bg-dark">
                    Login form
                </div>
                <div class="card-body">

                    <form action="" method="post">

                        <div class="form-group">
                            <label for="name">Email</label>
                            <input id="name" type="text" name="email" placeholder="Enter email" class="form-control" autofocus>
                            <span id="sname" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <label for="name">Password</label>
                            <input id="pass" type="text" name="pass" placeholder="Enter password" class="form-control">
                            <span id="spass" class="text-danger"></span>
                        </div>

                        <div class="form-group">
                            <button id="lbtn" name="btn" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <a href="ragisterpage.php" class="text-danger">Register here</a>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>

</section>

<?php
include('includes/footer.php')
?>