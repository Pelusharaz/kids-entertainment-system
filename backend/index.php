<?php
session_start();
include '../includes/dbconfiq.php';
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $msg = '';

    $query = mysqli_query($con, "SELECT * FROM admin where email = '$email'");
    $row = mysqli_fetch_assoc($query);

    if ($row >= 1) {
        
        if (password_verify($password, $row['password'])) {

            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];

            header('refresh: 0, ./templates/users.php');
            $msg = "Login Access Granted. WELCOME!";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        } else {
            header('refresh: 0, ./');
            $msg = "Login Access Denied. Please use the correct credentials";
            echo "<script type='text/javascript'>alert('$msg');</script>";
        }

    } else {

        header('refresh: 0, ./');
        $msg = "This user does not exist. Please use the correct credentials";
        echo "<script type='text/javascript'>alert('$msg');</script>";
    }
} elseif (isset($_POST['Register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $admin = mysqli_query($con, "SELECT * FROM admin WHERE email='$email'");
    $rows = mysqli_num_rows($admin);
    if ($rows >= 1) {
        $msg = "This user ALready Exists. Please use a different email to sign Up.";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header("refresh: 0, ./");
    } else {
        $insert = mysqli_query($con, "INSERT INTO admin(email, username, password) VALUES('$email', '$username', '$password')");
        $msg = "Registration Successful! Procced to sign in.";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header("refresh: 0, ./#SignIn");
    }
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>

    <link rel="icon" href="../assets/imgs/logo.jpg" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>

<body>
    <style>
    .button{
    height:auto;
    padding:6px 20px;
    text-align:center;
    opacity: 1;
    background: aqua;
    color:black;
    border-radius:25px;
   }
    </style>

   <div class="header" style="display:flex;justify-content:space-around;">
     <?php
      require_once '../includes/header2.php';
     ?>
   </div>
   <div class="logo">
       <a href="#" class="navbar-brand" style="font-family:'Dancing Script';font-size: 30px;"><b>Kids Computer Entertainment System</b></a>
    </div>
    
    <div class="vh-100 d-flex justify-content-center align-items-center" style="margin-top:-80px;" id="SignIn">
        <div class="col-md-5 p-5 shadow-sm border rounded-5 border-secondary bg-white">
            <h2 class="text-center mb-4 text-secondary">Sign In Form</h2>
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control border border-secondary" id="exampleInputPassword1">
                </div>
                <!-- <p class="small"><a class="text-secondary" href="forget-password.html">Forgot password?</a></p> -->
                <div class="d-grid">
                    <button class="button" name="login" type="submit">Sign In</button>
                </div>
            </form>
            <div class="mt-3">
                <!-- <p class="mb-0  text-center">Don't have an account? <a href="#SignUp" class="text-secondary fw-bold" >Sign
                        Up</a></p> -->
            </div>
        </div>
    </div>


    <!-- <div class="vh-100 d-flex justify-content-center align-items-center" id="SignUp">
        <div class="col-md-5 p-5 shadow-sm border rounded-5 border-secondary bg-white">
            <h2 class="text-center mb-4 text-secondary">Sign Up Form</h2>
            <form method="Post" action="">
            <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Username</label>
                    <input type="username" name="username" class="form-control border border-secondary" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control border border-secondary" id="exampleInputPassword1">
                </div>
                <p class="small"><a class="text-secondary" href="forget-password.html">Forgot password?</a></p>
                <div class="d-grid">
                    <button class="button" name="Register" type="submit">Sign Up</button>
                </div>
            </form>
            <div class="mt-3">
                <p class="mb-0  text-center">Already have an account? <a href="#SignIn" class="text-secondary fw-bold">Sign
                        In</a></p>
            </div>
        </div>
    </div> -->

<!--footer-->
<?php
    require_once '../includes/footer.php';
   ?>
   <!-- Scripts -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
  <script type="text/javascript" src="../js/script1.js"></script>

</body>

</html>