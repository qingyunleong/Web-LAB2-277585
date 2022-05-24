<?php

if (isset($_POST['submit'])) {

    include 'dbconnect.php';

    $email = $_POST['email'];
    $pass = sha1($_POST['password']);

    $sqllogin = "SELECT * FROM tbl_users WHERE user_email = '$email' AND user_password = '$pass'";

    $stmt = $conn->prepare($sqllogin);
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();

    if ($number_of_rows  > 0) {

        session_start();
        $_SESSION["sessionid"] = session_id();
        $_SESSION["email"] = $email;

        echo "<script>alert('Login Success');</script>";
        echo "<script> window.location.replace('index.php')</script>";
    } else {
        echo "<script>alert('Login Failed');</script>";
        echo "<script> window.location.replace('login.php')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Raleway'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script src="../js/login.js" defer></script>
</head>

<body onload="loadCookies()">

    <header class="w3-header w3-center">
        <img src="../res/background.png" style="width:100%">
    </header>
    

    <div style="display:flex; justify-content:center">
        <div class="w3-container w3-padding w3-margin" style="max-width:1000px;">

            <form name="loginForm" action="login.php" method="post">

                <div class="w3-half">
                    <div class="w3-text-black">
                        <div class="w3-container">
                            <div style="display:flex; justify-content:center">
                                <div class="w3-container w3-padding w3-margin " style="width:400px; margin:auto; text-align:left">

                                    <div class="w3-display-container ">
                                        <img src="../res/signin-image.jpg" style="width:100%">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>

                <div class="w3-half">
                    <div>
                        <p class="w3-xxlarge"><b>Sign in</b></p>
                    </div>
                    <p>
                        <label><b>Email</b></label>
                        <input class="w3-input w3-round w3-border" type="email" name="email" id="idemail" placeholder="Enter your email address" required>
                    </p>
                    <p>
                        <label><b>Password</b></label>
                        <input class="w3-input w3-round w3-border" type="password" name="password" id="idpassword" placeholder="Enter your password" required>
                    </p>
                    <p>
                        <input class="w3-check" name="rememberme" type="checkbox" id="idremember" onclick="rememberMe()">
                        <label>Remember Me</label>
                    </p>
                    <p><input class="w3-button w3-round w3-border" style="background-color: #133764 ; color:white" type="submit" name="submit" id="idsubmit"></p>
                    <p>No Have Account? <a href="registerpage.php" style="text-decoration:none;"><u>Sign up here.</u></a>
                    <p><br>
                </div>
            </form>
        </div>
    </div>

    <div id="cookieNotice" class="w3-right w3-block" style="display: none;">
        <div class="w3-blue">
            <h4>Cookie Consent</h4>
            <p>This website uses cookies or similar technologies, to enhance your browsing experience and provide personalized recommendations.
                By continuing to use our website, you agree to our
                <a style="color:#115cfa;" href="/privacy-policy">Privacy Policy</a>
            </p>
            <div class="w3-button">
                <button onclick="acceptCookieConsent();">Accept</button>
            </div>
        </div>
    </div>

    <script>
        let cookie_consent = getCookie("user_cookie_consent");
        if (cookie_consent != "") {
            document.getElementById("cookieNotice").style.display = "none";
        } else {
            document.getElementById("cookieNotice").style.display = "block";
        }
    </script>

    <footer class="w3-footer w3-center w3-margin-bottom" style="background-color: #133764 ; color:white">
        <p>Copyright MyTutor&copy;</p>
    </footer>

</body>

</html>