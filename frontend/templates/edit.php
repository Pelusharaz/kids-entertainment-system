<?php 
session_start(); 
if(!isset($_SESSION['email'])) {
$msg = "Please Sign In Correctly or your Account will be De-activated Completely!";
echo "<script type='text/javascript'>alert('$msg');</script>";
header("refresh: 0, ../");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kids Computer Entertainment System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>

  <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
  <link rel="icon" href="../../assets/imgs/logo.jpg" type="image/icon type">
</head>

<style>body {
            background-color: #eeeeee;
        }

        .h7 {
            font-size: 0.8rem;
        }

        .gedf-wrapper {
            margin-top: 0.97rem;
        }

        @media (min-width: 992px) {
            .gedf-main {
                padding-left: 4rem;
                padding-right: 4rem;
            }
            .gedf-card {
                margin-bottom: 2.77rem;
            }
        }

        /**Reset Bootstrap*/
        .dropdown-toggle::after {
            content: none;
            display: none;
        }
        .button{
         height:auto;
         padding:6px 20px;
         text-align:center;
         opacity: 1;
         background: aqua;
         color:black;
         border-radius:25px;
        }
        @media screen and (max-width: 600px){
            .top-post{
                margin-top:10px;
                margin-bottom:10px;
            }
        }
        </style>
<body>
       
    <nav class="navbar navbar-light" style="background-color:blue;">
        <a href="#" class="navbar-brand" style="font-family:'Dancing Script';font-size: 30px;color:white;"><b>Kids Computer Entertainment System</b></a>
        <form class="form-inline">
            <div class="input-group">
                <input type="text" class="form-control" aria-label="Recipient's username" aria-describedby="button-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </nav>


    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="h5"><?php echo $_SESSION['username'];?></div>
                        <div class="h7 text-muted">My Bio</div>
                        <div class="h7">Sharing love with the kids is my passion
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="h6 text-muted">Followers</div>
                            <div class="h5">5.2342</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted">Following</div>
                            <div class="h5">6758</div>
                        </li>
                        <li class="list-group-item">
                            <strong>Terms</strong>
                            <p>Only kids content allowed !</p>
                            <p style="color:red;">Violation of terms may lead to account diactivation</p>
                        </li>
                        <li class="list-group-item"><a href="../../includes/logout.php" class="text-dark text-decoration-none">Logout <i class="fa fa-sign-out"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 gedf-main">

                <!--- \\\\\\\Post-->
                
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <?php
                include '../../includes/dbconfiq.php';
                $query = mysqli_query($con, "SELECT * FROM posts WHERE id = '".$_GET['pid']."' order by id desc");
                while($row = mysqli_fetch_array($query)){
                ?>
                <div class="card gedf-card" id="<?php echo $row['id'];?>">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <?php
                                    $query2 = mysqli_query($con, "SELECT * 
                                    FROM users 
                                    WHERE users.id = '".$row['user_id']."'");
                                    while($row2 = mysqli_fetch_array($query2)){
                                ?>
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" height="45" src="../../includes/forms/img/<?php echo $row2['profile'];?>" alt="">
                                </div>
                                <div class="ml-2">
                                

                                    <div class="h5 m-0"><?php echo $row2['username'];?></div>
                                    <div class="h7 text-muted"><?php echo $row2['email'];?></div>

                                <?php }?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <form action="../../includes/forms/edit.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body top-post">
                        <?php if($row['file_ext'] == 'mp4'){ ?>
                          <video class="img-fluid" src="../../includes/forms/img/<?php echo $row['file'];?>" controls></video>
                        <?php }else{?>
                        <img class="img-fluid" src="../../includes/forms/img/<?php echo $row['file'];?>">
                        <?php }?>
                        <br>
                        <input type="file" name="file" class="form-control" required>
                        <input type="text" class="form-control" name="title" value="<?php echo $row['title'];?>">
                        <input type="hidden" name="pid" value="<?php echo $_GET['pid'];?>">
                        <textarea name="message" class="form-control" id="" cols="30" rows="10"><?php echo $row['message'];?></textarea>
                    </div>
                    <div class="card-footer">
                        <button type="submit" name="editpost" class="button"> Update</button>
                        <a href="./home.php#<?php echo $_GET['pid'];?>" class="card-link text-secondary">Go Back</a>
                    </div>
                    </form>
                </div>
                <br>
                <?php  }?>

                
                <!-- Post /////-->



            </div>
            <div class="col-md-3">
                <div class="card gedf-card">
                    <div class="card-body">
                        <h5 class="card-title">Recommended for you</h5>
                        <hr>
                        <?php
                        include '../../includes/dbconfiq.php';
                        $query = mysqli_query($con, "SELECT * FROM posts ORDER BY RAND() LIMIT 1");
                        while($row = mysqli_fetch_array($query)){
                        ?>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['title'];?></h6>
                        <p class="card-text"><?php echo $row['message'];?></p>
                        <a href="" class="card-link text-secondary">Refresh</a>
                        <a href="#" class="card-link text-secondary">Share</a>

                        <?php }?>
                    </div>
                    <!-- gif -->
                    <img src="../../assets/imgs/kids-gif.gif" styel="float:right;" alt="kids"  width="50%">
                </div>
            </div>
        </div>
    </div>
<script></script>
<!--footer-->
<?php
    require_once '../../includes/footer.php';
   ?>
</body>
</html>
