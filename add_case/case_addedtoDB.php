<?php
// Start the session
session_start();
?>


<html>

<head>
    <link href="../css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" />
    <link href="../css/index_style.css" rel="stylesheet" type="text/css">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .button {
            /* width: 40%; */
            padding: 8px;
            color: #ffffff;
            background: none rgb(69, 67, 67);
            border: none;
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="logo">
                        <center>
                            <a href="../index.php" class="link_head">
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

        // database connection
        $mysqli = new mysqli("localhost", "root", "", "lawdiary");

        // Check connection
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            exit();
        }
        // echo $_SESSION["userID"];

        $userId = $_SESSION["userID"];
        $id = $_POST['idid'];
        $fparty = $_POST['fparty'];
        $sparty = $_POST['sparty'];
        $startedOn = $_POST['startedon'];
        $type = $_POST['type'];
        $whomRepresent = $_POST['represent'];
        $court = $_POST['court'];
        $magistrate = $_POST['selectMag'];
        $oppCouncil = $_POST['opp'];
        $oppCouncilPhn = $_POST['oppNum'];
        $number = $_POST['number'];
        $address = $_POST['address'];
        $empty = '-';
        $rems = '';
        ?>


        <?php
        if ($magistrate == 0) {
            $magName = $_POST['txtOther'];
            $getMag = "select * from magistrate where userid=$userId order by id desc limit 1";
            $resultMag = $mysqli->query($getMag);
            if ($resultMag->num_rows > 0) {
                $rowMag = $resultMag->fetch_assoc();
                $idMag = $rowMag['id'] + 1;
            } else {
                $idMag = 1;
            }

            $magistratesql = "insert into magistrate (userid, id, name, datemag) values ('$userId', '$idMag', '$magName', '$startedOn') ";
            if ($mysqli->query($magistratesql) === FALSE) {
                echo "Error: " . $magistratesql . "<br>" . $mysqli->error;
            }

            $magistrate = $idMag;
        }


        $sql = "insert into cases (caseNum, userId, firstParty, secondParty, whomRepresent, oppCouncil, oppCouncilPhn, startedOn, type, courtType, magistrate, remarks, isTransferred, isDecided, status) 
    values ('$id', '$userId', '$fparty', '$sparty', '$whomRepresent', '$oppCouncil', '$oppCouncilPhn', '$startedOn', '$type', '$court', '$magistrate','$rems' , 0, 0, '$empty')";
        if ($mysqli->query($sql) === FALSE) {
            echo "Error: " . $sql . "<br>" . $mysqli->error;
        }


        $datesql = "insert into casedate (userid, caseid, date, stage, magistrateid) values ('$userId', '$id', '$startedOn', 'Filed', '$magistrate')";
        if ($mysqli->query($datesql) === FALSE) {
            echo "Error: " . $datesql . "<br>" . $mysqli->error;
        }


        $getClient = "select * from clients order by id desc limit 1";
        $resultCl = $mysqli->query($getClient);
        if ($resultCl->num_rows > 0) {
            $rowCl = $resultCl->fetch_assoc();
            $idCl = $rowCl['id'] + 1;
        } else {
            $idCl = 1;
        }
        // echo $whomRepresent;

        if ($whomRepresent == 'Plaintiff') {
            $clientsql = "insert into clients (id, userId, clientName, phn, address) select $idCl, '$userId', '$fparty', '$number', '$address'
            where not exists (select 1 from clients where userId=$userId and clientName='$fparty' and phn='$number')";
            if ($mysqli->query($clientsql) === FALSE) {
                echo "Error: " . $clientsql . "<br>" . $mysqli->error;
            }
        } else if ($whomRepresent == 'Defendant' || $whomRepresent == 'Respondent') {
            $clientsql = "insert into clients (id, userId, clientName, phn, address) select $idCl, '$userId', '$sparty', '$number', '$address'
            where not exists (select 1 from clients where userId=$userId and clientName='$sparty' and phn='$number')";
            if ($mysqli->query($clientsql) === FALSE) {
                echo "Error: " . $clientsql . "<br>" . $mysqli->error;
            }
        }

        $last_id = $mysqli->insert_id;

        ?>

        <br><br>
        <center>
            <h2 style="color: grey">New Case Successfully added!!</h2>
            <h3>Case Number : <?php echo $id ?><br>Case Name : <?php echo $fparty ?> vs <?php echo $sparty ?></h3>
        </center>


        <div class="row">
            <div class="col-sm-4 col-lg-4 col-4"></div>
            <div class="col-sm-4 col-lg-4 col-4">
                <form action="./add_case.php" method="post">
                    <button style="float: center;" class="button">Add Another Case</button>
                </form>


                <form action="../home.php" style="display: inline;">
                    <input type="submit" class="button" value="Go to Home Page">
                </form>
            </div>
            <div class="col-sm-4 col-lg-4 col-4"></div>
        </div>

</body>

</html>