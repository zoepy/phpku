<?php  
if( empty(session_id()) && !headers_sent()){
    session_start();
    ob_start();
}?>
<?php
    if(isset($_POST['submit'])){
        $pass=$_POST['password'];
        $nama=$_POST['username'];
        
        
        if($nama=="wiwit" & $pass=="1234"){
            $_SESSION['username']=$nama;
             $_SESSION['password']=$pass;
            header("location:index.php");
        }else{
            echo "<script>alert('login gagal')</script>";}
      
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>How To Create Simple Login Form Design In Bootstrap 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://www.markuptag.com/bootstrap/5/css/bootstrap.min.css">
</head>
<body>

    <div class="container ">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-2">
                    <form action="" method="post" class="row g-3">
                        <h4>Welcome Back</h4>
                        <div class="col-12">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe"> Remember me</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" name="submit" class="btn btn-dark float-end">Login</button>
                        </div>
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Have not account yet? <a href="#">Signup</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>

</body>
</html>

