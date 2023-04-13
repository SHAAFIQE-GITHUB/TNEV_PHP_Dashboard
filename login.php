<?php
session_start();
include "db_connect.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if (true) {
        if (empty($uname)) {
            header("Location: index.php?error=User name is required to Login");
            exit();
        } else if (empty($pass)) {
            header("Location: index.php?error=Password is required to Login");
            exit();
        } else {
            $sql = "SELECT * FROM `users_tnev` WHERE user_name = '$uname' AND password = '$pass'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['user_name'] === $uname && $row['password'] === $pass) {
                    $_SESSION['user_name'] = $row['user_name'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: home.php");
                    exit();
                } else {
                    header("Location: index.php?error=Incorrect User name or password");
                    exit();
                }
            } else {
                header("Location: index.php?error=Incorrect Username or Password");
                exit();
            }
        }
    }
} else {
    header("Location: index.php?error=Incorrect Username or Password");
    exit();
}
