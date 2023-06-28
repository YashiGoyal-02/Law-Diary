<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kaanun</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="css/index_style.css" rel="stylesheet" type="text/css">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: black;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="logo">
                            <center>
                                <a href="../LawDiary/index.php" class="link_head">
                                    <p>Kaanun</p>
                                </a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Bar End -->


    <form action="validate.php" method="post" id="signin">
        <div class="login-box">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-8">
                    <h1>Login</h1>

                    <div class="textbox">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" placeholder="Username" name="username" size=15 required>
                    </div>

                    <div class="textbox">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                        <input type="password" name="password" placeholder="Password" size=15 id="myInput" required><br>
                        <br><input type="checkbox" onclick="myFunction()">
                        <h6>Show Password</h6>
                    </div>

    </form>
    <center>
        <button class="button" onclick="$('#signin').submit();">Sign In</button>
        <button class="button" onclick="window.open('./create.php');">Register</button>
    </center>
    </div>
    </div>
    </div>
    </div>
    <br><br>

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>