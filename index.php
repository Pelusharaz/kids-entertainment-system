<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Kids Computer Entertainment System</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <link rel="icon" href="assets/imgs/logo.jpg" type="image/icon type">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <link rel="stylesheet" href="assets/style.css">
</head>


<body>
   
   <div id="hero">
   <div class="header" style="display:flex;justify-content:space-around;">
   <?php
    require_once 'includes/header.php';
   ?>
   </div>
   <div class="logo">
        <a href="#" class="navbar-brand" style="font-family:'Dancing Script';font-size: 30px;"><b>Kids Computer Entertainment System</b></a>
    </div>
   <br><br>
    <div class="flex" style="display:flex;justify-content:space-around;">
        <div class="img front" style="width:50%">
           <img src="assets/imgs/kids3.jpg" alt="kids" width="100%" height="400px;">
        </div>
        <div class="p" style="width:50%;">
            <div style="margin-top:auto;">
            <h2>Kids Computer<span style="color:blue;"> Entertainment </span>System</h2>

              <p>
                welcome to a plaform where <strong style="color:blue;"> Kids Entertainment </strong>is our priority, <br/>
                Enjoy fun, and educative content customized and monitored just for you.<span> 
              </p>
              <div class="line"></div> 
              <p>create posts and make comments for free. creating an account is free.</p>
              <!-- gif -->
              <img src="assets/imgs/kids-gif.gif" styel="float:right;" alt="kids"  width="50%">
           </div>
        </div>
    </div>

    </div>
    
    
 <!--footer-->
   <?php
    require_once 'includes/footer.php';
   ?>
   <!-- Scripts -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
  <script type="text/javascript" src="js/script1.js"></script>
</body>
</html>