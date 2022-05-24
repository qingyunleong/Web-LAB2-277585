
<?php
session_start();
if (!isset($_SESSION['sessionid'])) {
    echo "<script>alert('Session not available. Please login');</script>";
    echo "<script> window.location.replace('login.php')</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/menu.js" defer></script>

    <title>Welcome to MyTutor</title>
</head>

<body>
    <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
        <button onclick="w3_close()" class="w3-bar-item w3-button w3-large"><i class="fa fa-remove w3-right"></i></button>

        <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-th-large fa-fw w3-margin-right"></i>Dashboard</a>
        <a href="" class="w3-bar-item w3-button"><i class="fa fa-user-circle fa-fw w3-margin-right"></i>Portfolio</a>
        <a href="" class="w3-bar-item w3-button"><i class="fa fa-institution fa-fw w3-margin-right"></i>My Tutor</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-graduation-cap fa-fw w3-margin-right"></i>Class</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-credit-card fa-fw w3-margin-right"></i>Payment</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-book fa-fw w3-margin-right"></i>Reports</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>Logout</a>
    </div>

    <div class="" style="background-color: #133764">
        <button class="w3-button w3-xlarge" style="background-color: #133764" onclick="w3_open()">☰</button>
        <div class="w3-container">
            <img src="../res/background.png" style="width:100%">
        </div>
    </div>


    <footer class="w3-footer w3-center w3-bottom" style="background-color: #133764; color:white">Copyright MyTutor&copy;</footer>

</body>

</html>