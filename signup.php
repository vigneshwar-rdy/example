<!DOCTYPE html>
<html>
<style>
  .btn{
    color:brown;
  }
  </style>

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
                  <a href="index.html"><img src="images/logo.jpg" width="88" height="36" alt="#" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
            <nav class="navigation navbar navbar-expand-md navbar-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item d_none">
                    <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
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
                  <li class="nav-item">
                    <a class="nav-link" href="signin.php">login </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

      

  <?php


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $fathername=$_POST['fathername'];
    $phone=$_POST['phone'];
    $alterno=$_POST['alterno'];
    $village=$_POST['village'];
    $locality=$_POST['locality'];
    $adress=$_POST['adress'];
    $email = $_POST['email'];
    $typeofwork=$_POST['typeofwork'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    if ($firstname == "" or $email == '' or $username == '' or $password == '' or $typeofwork=='' or $phno='' or $adress=='' or $village=='' ) {
      echo '<div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>enter the values which are mandatory..!</strong>
    </div>';
    } else if ($password != $confirmpassword) {

      echo '<div class="alert alert-danger alert-dismissible fade in">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>pwd and confirm pwd must be same..!</strong>
      </div>';
    } else {

      $conn = mysqli_connect("localhost", "root", "", "vasp");
      if (!$conn) {
        die('<div class="alert alert-success alert-dismissible fade in">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>REGISTRATION DONE SUCCESFULLY..!</strong>
        </div>');
      }
      $sql = "INSERT INTO `v1register` (`firstname`, `lastname`, `fathername`, `phone`, `email`, `alterno`, `village`, `locality`, `adress`, `typeofwork`, `username`, `password`, `confirmpassword`) VALUES ('$firstname', '$lastname', '$fathername', '$phone', '$email', '$alterno', '$village', '$locality', '$adress', '$typeofwork', '$username', '$password', '$confirmpassword');";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo '<div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>REGISTRATION DONE SUCCESFULLY..!</strong>
    </div>';
      }
      else {
        echo '<div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>username already in use please try with another..!</strong>
    </div>';
      }
    }
  }
  ?>
      
<section style="background-color:rgba(21, 176, 248, 0.642);">
  <div class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;"><h1 style="color:black;"><strong>PLEASE  FILL  THIS  FORM  TO  REGISTER  WTIH  US</strong><h1></div>

  <div class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;">
    <form action="/project/vasp/signup.php" method="POST" class="form-group col-md-6">
      <div class="mb-3">
        <label for="firstname" class="form-label">
          <h2 style='color:black'>firstname <span style="color:brown">*</span></h2>
        </label>
        <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="emailHelp" />
      </div>
      <div class="mb-3">
        <label for="lastname" class="form-label">
          <h2 style='color:black'>lastname</h2>
        </label>
        <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="emailHelp" />
      </div>


      <div class="mb-3">
        <label for="fathername" class="form-label">
          <h2 style='color:black'>fathername</h2>
        </label>
        <input type="text" name="fathername" class="form-control" id="fathername" aria-describedby="emailHelp" />
        <div id="emailHelp" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="phone" class="form-label">
          <h2 style='color:black'>phone <span style="color:brown">*</span></h2>
        </label>
        <input type="text" name="phone" class="form-control" id="phone" aria-describedby="emailHelp" />
        <div id="emailHelp" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="phno" class="form-label">
          <h2 style='color:black'>alterno</h2>
        </label>
        <input type="text" name="alterno" class="form-control" id="alterno" aria-describedby="emailHelp" />
        <div id="emailHelp" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="village" class="form-label">
          <h2 style='color:black'2>village/town <span style="color:brown">*</span></h2>
        </label>
        <input type="text" name="village" class="form-control" id="village" aria-describedby="emailHelp" />
        <div id="emailHelp" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="locality" class="form-label">
          <h2 style='color:black'>locality</h2>
        </label>
        <input type="text" name="locality" class="form-control" id="locality" aria-describedby="emailHelp" />
        <div id="emailHelp" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="adress" class="form-label">
          <h2 style='color:black'>adress <span style="color:brown">*</span></h2>
        </label>
        <input type="text" name="adress" class="form-control" id="adress" aria-describedby="emailHelp" />
        <div id="emailHelp" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="typeofwork" class="form-label">
          <h2 style='color:black'>typeofwork <span style="color:brown">*</span></h2>
        </label>
        <input type="text" name="typeofwork" class="form-control" id="typeofwork" aria-describedby="emailHelp" />
        <div id="emailHelp" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="email" class="form-label">
          <h2 style='color:black'>email <span style="color:brown">*</span></h2>
        </label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" />
        <div id="emailHelp" class="form-text"></div>
      </div>

      <div class="mb-3">
        <label for="username" class="form-label">
          <h2 style='color:black'>username <span style="color:brown">*</span></h2>
        </label>
        <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" />
      </div>


      <div class="mb-3">
        <label for="password" class="form-label">
          <h2 style='color:black'>password <span style="color:brown">*</span></h2>
        </label>
        <input type="password" name="password" class="form-control" id="password" aria-describedby="emailHelp" />
      </div>
      <div class="mb-3">
        <label for="confirmpassword" class="form-label">
          <h2 style='color:black'>confirmpassword <span style="color:brown">*</span></h2>
        </label>
        <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" aria-describedby="emailHelp" />
      </div>

      <button type="submit" class="btn btn-primary">REGISTER</button>
      <div>
        existing user <a href="signin.php"><strong>Login?</strong> </a>
      </div>
    </form>
  </div>
  </div>
  </div>
</section>
</body>

</html>