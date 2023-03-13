<?php

if ($_SERVER['REQUEST_METHOD']=='POST') {
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=='' or $password=='' ){
      echo '<div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Error!</strong> please enter the values which are mandatory
    </div>';
    }
    else{
    
$conn = mysqli_connect("localhost", "root", "","vasp");
if (!$conn) {
    die( '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Error!</strong> sorry we have some technical issues..!
  </div>');
}
$sql="SELECT * FROM `v1register` WHERE username='$username' AND password='$password';";

$result=mysqli_query($conn,$sql);

if($result){
  $num=mysqli_num_rows($result);
if($num==1){
  echo '<div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>success!</strong> login done succesfully !
    </div>';
  session_start();
  $_SESSION['loggedin']=true;
  $_SESSION['username']=$username;
  header("location:welcome.php");
}
else{
  echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>error!</strong> username doesn\'t exists!
</div>';
}

}
else{
  echo '<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Error!</strong> "sorry we have some technical issues. sorry for the inconvienience"
</div>';
}


}
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <title>VASP</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </head>
  <body class="main-layout">
    <header>
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="index.html"
                      ><img
                        src="images/logo.jpg"
                        width="88"
                        height="36"
                        alt="#"
                    /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
              <nav class="navigation navbar navbar-expand-md navbar-dark">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#navbarsExample04"
                  aria-controls="navbarsExample04"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarsExample04">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item d_none">
                      <a class="nav-link" href="#"
                        ><i class="fa fa-search" aria-hidden="true"></i
                      ></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="index.html"> Home </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="products.html">Facilities </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section style="background-color:blanchedalmond;">
  <div class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;"><h1 style="color:black;"><strong>PLEASE ENTER YOUR CREDENTIALS</strong><h1></div>

    <div class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;">
    <form action="/project/vasp/signin.php" method="POST" class="form-group col-md-6">
      <div class="mb-3">
        <label for="username" class="form-label"><h2>username <span style="color:brown">*</span> </h2></label>
        <input
          type="text"
          name="username"
          class="form-control"
          id="username"
          aria-describedby="emailHelp"
        />
        <div id="emailHelp" class="form-text"></div>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label" 
          ><h2>password <span style="color:brown">*</span> </h2></label
        >
        <input
          type="text"
          name="password"
          class="form-control"
          id="password"
          aria-describedby="emailHelp"
        />
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1" />&nbsp
        <label class="form-check-label" for="exampleCheck1">&nbsp remember me?</label>
      </div>
      <button type="submit" class="btn btn-primary">LOGIN</button>
      <div>
        new user <a href="signup.php"><strong>Register?</strong> </a>
      </div>
    </form>
</div>
    </section>
  </body>
</html>
