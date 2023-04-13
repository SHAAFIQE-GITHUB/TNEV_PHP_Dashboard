<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>

<!DOCTYPE html>
<html lang="en">
<head>
<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
        <link rel="stylesheet" href="admin.css" />
        <title>ADMIN DASHBOARD</title>
        <link rel="stylesheet" href="admin.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    </head>
</head>
<body>
<div class="center">
      <h1>ADD AMBULANCE</h1>
      <form>
        <div class="inputbox">
          <input type="text" required="required">
          <span>IP ADDRESS</span>
        </div>
        <div class="inputbox">
          <input type="text" required="required">
          <span>MAC ADDRESS</span>
        </div>
        <div class="inputbox">
          <input type="button" value="EDIT">
        </div>
      </form>
    </div>

    <div id="bottom">Copyright 	&#169; TNEV 2023</div>
     </div>
    <a href = "logout.php">Logout</a>
</body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
