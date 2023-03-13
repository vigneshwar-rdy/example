<?php
session_start();

$username = $_SESSION['username'];
?>
<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $entry = $_POST['entry'];
    $display = true;
    if ($entry == '') {
        echo '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Book field cannot be empty..!</strong>
    </div>';
        $display = false;
    }
?>

<?php
    if ($display == true) {
        $conn = mysqli_connect("localhost", "root", "", "vasp");

        if (!$conn) {
            die('<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> sorry we have some technical issues. sorry for the inconvienience
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>');
        }


        $sql = "select *from  v1register where username='$entry'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $sql = "select *from  labour where username='$entry'";
            $result = mysqli_query($conn, $sql);

            if (!$result || mysqli_num_rows($result) == 0) {
                $sql = "INSERT INTO labour VALUES ('$entry');";
                $result = mysqli_query($conn, $sql);
                echo '<div class="alert alert-success alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>BOOKING DONE SUCCESFULLY..!</strong>
    </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade in">
<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
<strong>SORRY!  THIS TOOL IS ALREADY BOOKED!</strong>
</div>';
            }
        } else {
            echo '<div class="alert alert-danger alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>please check the username you have entered..!</strong>
    </div>';
        }
        mysqli_close($conn);
    }
}


?>
<!DOCTYPE html>
<html>
<style>
    .btn {
        color: brown;
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
                                        <a class="nav-link" href="welcome.php"> Home </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="facilities.html">Facilities </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="profile.php">profile </a>
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


    <form class="container" action="/project/vasp/labours.php" method="POST" style="
    display: flex;
    flex-direction: column;
    align-items: left;
    text-align-last: left;
    text-align:justify;
">
        <style>
            table,
            th,
            td {
                border: 0px solid black;
                border-collapse: collapse;
            }

            .div {
                align-content: left;
            }
        </style>
        <style>
            .block {
                display: block;
                width: 10%;
                border: none;
                background-color: #04AA6D;
                color: white;
                padding: 14px 28px;
                font-size: 16px;
                cursor: pointer;
                text-align: center;
            }

            .block:hover {
                background-color: #ddd;
                color: black;
            }
        </style>
        <?php
        echo "<div align='left'>
            <strong>
                <h1>You can book labours by entering their username..</h1>
            </strong>
        </div>"; ?>
        <br>


        <input class="form-control mr-sm-2" name="entry" type="search" placeholder="Enter the username here" aria-label="Search" size=20>
        <button class="block" type="submit">Book</button>
    </form>
    <br><br>
    <?php
    $sql = "select *from  v1register where typeofwork='transport'";
    $conn = mysqli_connect("localhost", "root", "", "vasp");
    $result = mysqli_query($conn, $sql);
    echo "
        <div class='container'>
            <strong>
                <h2 style='color: rgb(79, 163, 127);'>You can book labours by entering their username..</h2>
            </strong>
        </div>
        ";
    if (mysqli_num_rows($result) > 0) {
        echo "<div class='container'><table style='width:50%' ><tr><th>USERNAME:</th><th>NAME</th><th>number</th><th>email</th></tr>";
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["username"] . "</td><td>"  . "." . $row["firstname"] . "." . $row["lastname"] . "</td><td>" . $row["phone"] . "</td><td>" . $row["email"] . "</td></tr>";
        }
        echo "</table></div>";
    } else {
        echo "Come on the nextDay. All tools have been booked...!";
    }
    mysqli_close($conn);

    ?>




</body>

</html>