<?php
  session_start();
  
  $username=$_SESSION['username'];
  ?>
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
                    <a class="nav-link" href="profile.php" >profile </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="index.html">logout</a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </header>

      
<form class="container" style="
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align-last: right;
    text-align:justify;
">
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
.div{
  align-content : center;
}
</style>
<?php echo "<div><h1>WELCOME: <U>$username</U></h1>"; ?>
        <div class="mb-3">
            <h3>Book Labours: <a href="labours.php" class="btn btn-outline-success my-2 my-sm-0">BookNow</a></h3>
        </div>
        <div class="mb-3">
            <h3>Book Machinery: <a href="insert.php" class="btn btn-outline-success my-2 my-sm-0">BookNow</a></h3>
        </div>
        <div class="mb-3">
            <h3>Book Transport: <a href="display.php" class="btn btn-outline-success my-2 my-sm-0">BookNow</a></h3>
        </div>
        <div class="mb-3"></div>
            <h3>Book Warehouses: <a href="display.php" class="btn btn-outline-success my-2 my-sm-0">BookNow</a></h3>
        </div>



</form>

</body>
</html>
