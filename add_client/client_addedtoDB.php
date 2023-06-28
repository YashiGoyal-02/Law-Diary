<?php
session_start();
?>

<html>

<head>
    <link href="../css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" />
    <link href="../css/index_style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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



    <div class="nav-bar" style="margin:auto">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="../home.php" class="nav-item nav-link">Home</a>
                        <a href="../diary/dateRetrieve.php" class="nav-item nav-link">Diary</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Cases</a>
                            <div class="dropdown-menu">
                                <a href="../add_case/add_case.php" class="dropdown-item">Add a new Case</a>
                                <a href="../show_cases/case_view.php" class="dropdown-item">Case List</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Citations</a>
                            <div class="dropdown-menu">
                                <a href="../citations/addCaseSelect.php" class="dropdown-item">Add to Case</a>
                                <a href="../citations/addGeneral.php" class="dropdown-item">Add General</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Clients</a>
                            <div class="dropdown-menu">
                                <a href="./add_client/add_client.php" class="dropdown-item">Add a new Client</a>
                                <a href="./client_details/searchClient.php" class="dropdown-item">Search Client</a>
                                <a href="./client_details/clientList.php" class="dropdown-item">Client List</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Search Cases</a>
                            <div class="dropdown-menu">
                                <a href="../case_details/partyName.php" class="dropdown-item">By Party Name</a>
                                <a href="../searchByDates/enterDate.php" class="dropdown-item">By Dates</a>
                            </div>
                        </div>
                        <a href="../home.php #footer" class="nav-item nav-link">Contact Us</a>
                        <a href="../index.php" class="nav-item nav-link">Log Out</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>


    <nav id="navbar" class="navbar order-last order-lg-4" style="margin-left: 5%;">
        <h3 style="font-family: 'Tangerine', serif; font-size: 40px; display: inline;">Welcome to Law Diary</h3>
    </nav>
    <br><br><br>

    <?php

    // database connection
    $mysqli = new mysqli("localhost", "root", "", "lawdiary");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    // echo "success"

    $userId = $_SESSION["userID"];
    $id = $_POST['idid'];
    $name = $_POST['name'];
    $phn = $_POST['phn'];
    $address = $_POST['address'];
    ?>


    <?php

    $sql = "insert into clients (id, userId, clientName, phn, address) values ('$id', '$userId', '$name', '$phn', '$address')";

    if ($mysqli->query($sql) === FALSE) {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }


    // $last_id = $mysqli->insert_id;
    ?>

    <br><br><br>
    <center>
        <h1 style="color: grey">New Client Successfully added!!</h1>
        <h1>Client Number : <?php echo $id ?><br>Client Name : <?php echo $name ?></h1>
    </center>

    <center>
        <form action="../home.php" class="button-3" style="display: inline">
            <input type="submit" value="Go to Home Page">
        </form>
    </center>

</body>

</html>