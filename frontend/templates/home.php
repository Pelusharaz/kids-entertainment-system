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

  <link rel="icon" href="../../assets/imgs/logo.jpg" type="image/icon type">
</head>

    <style>
        .wrapper{
            position: relative;
        }
        .wrapper{
            position: absolute;
            width:100%;
            height:auto;
            background-image: url('../../assets/imgs/kids2.jpg');
            background-repeat: no-repeat;
            opacity:1;
            background-size:cover;
        }
        .wrapper-content{
            position:relative;
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
  <div class="wrapper">
    <div class="wrapper-content">
    <nav class="navbar navbar-light" style="background-color:blue;">
          <img src="../../assets/imgs/logo.jpg" alt="logo" class="logo" style="border-radius:50%" width="7%">
          <a href="#" class="navbar-brand" style="font-family:'Dancing Script';font-size: 30px;"><b style="color:white;">Kids Computer Entertainment System</b></a>
        
         <form class="form-inline" style="float:right;" >
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
                            <div class="h5">5000</div>
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
                <div class="card gedf-card top-post">
                    <div class="card-header">
                       <strong>(NOTE : ONLY KIDS CONTENT ALLOWED!)</strong>
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active text-dark" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Add New Post</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-dark" id="images-tab" data-toggle="tab" role="tab" aria-controls="images" aria-selected="false" href="#images">Image</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form action="../../includes/forms/add.php" method="post" enctype="multipart/form-data">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <label for="title" class="sr-only">Post Title</label>
                                    <input type="text" name="title" class="form-control m-1" placeholder="post title">
                                    <label class="sr-only" for="message">Post message</label>
                                    <textarea class="form-control m-1" name="message" id="message" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="images" role="tabpanel" aria-labelledby="images-tab">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Upload image</label>
                                    </div>
                                </div>
                                <div class="py-4"></div>
                            </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" name="postbtn" class="button">Create Post </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <?php
                include '../../includes/dbconfiq.php';
                $query = mysqli_query($con, "SELECT * FROM posts order by id desc");
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
                            <div>
                                <div class="dropdown">
                                    <?php 
                                    if($row['user_id'] == $_SESSION['user_id']){?>
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h text-dark"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <a class="dropdown-item" href="edit.php?pid=<?php echo $row['id'];?>">Edit</a>
                                        <a class="dropdown-item" href="../../includes/forms/delete.php?pid=<?php echo $row['id']?>">Delete</a>
                                    </div>
                                    <?php }else{?>
                                        <button class="btn btn-dark">Follow</button>
                                    <?php }?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <?php if($row['file_ext'] == 'mp4'){ ?>
                          <video class="img-fluid" src="../../includes/forms/img/<?php echo $row['file'];?>" controls></video>
                        <?php }else{?>
                        <img class="img-fluid" src="../../includes/forms/img/<?php echo $row['file'];?>">
                        <?php }?>
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i><?php echo $row['timer'];?></div>
                        <a class="card-link" href="#">
                            <h5 class="card-title text-secondary"><b><?php echo $row['title'];?></b></h5>
                        </a>

                        <p class="card-text"><?php echo $row['message'];?></p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link text-secondary"><i class="fa fa-gittip"></i> Like</a>
                        <a href="./comments.php?pid=<?php echo $row['id'];?>" class="card-link text-secondary"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link text-secondary"><i class="fa fa-mail-forward"></i> Share</a>
                    </div>
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
    <script type="text/javascript" src="../../js/script1.js"></script>
    </div>
  </div>
</body>
</html>
