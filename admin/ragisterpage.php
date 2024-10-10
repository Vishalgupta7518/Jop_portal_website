<?php
    session_start();
    if(isset($_SESSION['email'])){
        echo "<script>window.location='index.php'</script>";
    }
    include('db_connection.php');
    if(isset($_POST['btn'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password =md5($_POST['pass']);
    $query = "SELECT * FROM admin WHERE email='$email'"; 
    $res = $mysqli->query($query);
    if($res->num_rows>0){
        
        // echo "<script>alert('User Already Exists')</script>";
        echo "<script>window.location='ragisterpage.php?user_exist'</script>";
    
    }else{
        $query1 = 'INSERT INTO admin(name,email,password) VALUES (?,?,?)';

    if(!($stmt = $mysqli->prepare($query1))){
        echo "Prepare failed".$mysqli->errno.$mysqli->error;
        die;
    }
    if(!($stmt->bind_param('sss',$name,$email,$password))){
        echo "Bining failed".$mysqli->errno.$mysqli->error;
        die;
    }
    if(!($stmt->execute())){
        echo "Execute failed".$mysqli->errno.$mysqli->error;
        die;
    }

    echo "<script>window.location='loginpage.php'</script>";
    $stmt->close();
    $mysqli->close();

    }

}   
    

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
                    if(isset($_GET['user_exist'])){
                ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey alert!</strong>user already exist
                        <button class="close" data-dismiss="alert">&times;</button>
                    </div>
                <?php
                    }
                ?>
                <div class="card my-5 shadow">
                    <div class="card-header bg-dark">
                        Ragister Page

                    </div>

                    <div class="card-header">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="name" type="text" name="name" placeholder="Enter name" class="form-control" autofocus>
                                <span id="sname" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input id="email" type="text" name="email" placeholder="Enter email" class="form-control">
                                <span id="semail" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input id="pass" type="password" name="pass" placeholder="Enter password" class="form-control">
                                <span id="spass" class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="name">Re-password</label>
                                <input id="rpass" type="text" name="rpass" placeholder="Enter re-password" class="form-control">
                                <span id="srpass" class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <button id="btn" name="btn" class="btn btn-primary btn-block">Register</button>
                            </div>
                            <a href="loginpage.php" class="text-danger">Login here</a>
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