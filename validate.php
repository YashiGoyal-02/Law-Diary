<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/style.css">
    <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" />
    <link href="css/index_style.css" rel="stylesheet">
    <!-- <title>Login Page</title> -->
</head>

<body>
    <div class="wrapper">
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="logo">
                        <center>
                            <a href="./index.php" class="link_head">
                                <p>Kaanun</p>
                            </a>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav id="navbar" class="navbar order-last order-lg-4" style="margin-left: 5%;">
        <h3 style="font-family: 'Tangerine', serif; font-size: 40px; display: inline;">Welcome to Law Diary</h3>
    </nav>
    <br><br><br>
    <?php

    $mysqli = new mysqli("localhost", "root", "", "lawdiary");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    $username = $_POST["username"];
    $password = $_POST["password"];
    // echo $username;
    // echo $password;

    $sql = "select * from userdetails;";
    $result = $mysqli->query($sql);
    $login = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if (($row['username'] == $username) && ($row['password'] == $password)) {
                $_SESSION["userID"] = $row['id'];
                $login = 1;
                header("location: home.php");
            }
        }
    }

    if ($login == 0) {

        echo "<script language='javascript'>";
        echo "alert('INVALID CREDENTIALS -- USER NOT VERIFIED')";
        echo "</script>";
    ?>
        <br><br><br>
        <center>
            <h1>Invalid Credentials</h1>
            <a href="../LawDiary/index.php"><button style="font-size: 25px;">Try Again</button></a>
        </center>
    <?php
        die();
    }

    ?>

</body>

</html>