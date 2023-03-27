
<style>
  @media screen and (max-width: 600px) {
    .hlinks{
      float:left;
      font-size:20px;
    }
    .drop{
      margin-top:148px;
    }
  }
</style>

<!--navbar-->
  
<div class="container-fluid p-0">
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color:blue;">
    <div class="container-fluid">
      <img src="assets/imgs/logo.jpg" alt="logo" class="logo" style="border-radius:50%" width="7%">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 hlinks">
          <li class="nav-item">
            <a class="nav-link active" style="color:white;" aria-current="page" href="index.php">Home</a>
          </li>
          <!--contacts-->
          <li class="nav-item">
            <a class="nav-link" style="color:white;" href="contact.php">Contact</a>
          </li>
           <!--about-->
          <li class="nav-item">
            <a class="nav-link" style="color:white;" href="about.php">About</a>
          </li>
           
        </ul>
        <ul class="navbar-nav d-flex flex-row drop">
           <li class="nav-item me-3 me-lg-0 dropdown" >
           <!-- session -->
            
           <div class="dropdown">
           
            <a class="nav-link dropdown-toggle" style="color:white;" href="#" id="navbarDropdown" role="button"
               data-mdb-toggle="dropdown"
               aria-expanded="false"
               aria-haspopup="true" >
               <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="frontend/index.php">Sign Up</a>
              <a class="dropdown-item" href="frontend/index.php">Log in</a>
              <a class="dropdown-item" href="includes/logout.php">Log Out</a>
            </div>
          </div>
          </li>
          <li class="nav-item" > <p style="color:white; margin-right:10px;margin-top:6px;">Welcome</p></li>
        </ul>

      </div>
    </div>
  </nav>
  </div>