<?php
session_start();
include "db_connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet" href="first_page_style.css" />
    <title>TNEV DASHBOARD</title>
    <link rel="stylesheet" href="first_page_style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <script>
        function redirectToLogin() {
            window.location.href = "login.php"; // Redirect to login.php
        }
    </script>
</head>

<body>
    <header class="header">
        <div class="logo">
            <a class="logo" href="https://www.tnev.in/" target="_blank"><img src="img/logo.png" alt=""></a>
        </div>
        </div>
        <h4>DASHBOARD</h4>
        <!-- <a href="login.php"> -->
        <h4><button onclick="redirectToLogin()">ADMIN</button></h4>
        </a>
        </div>
        </div>
    </header>
    <div class="container">

        <body>
            <div id="map"></div>
            <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
            <script src="script.js"> </script>
    </div>


    <div id="bottom">Copyright &#169; TNEV 2023</div>
    </div>
</body>

</html>
