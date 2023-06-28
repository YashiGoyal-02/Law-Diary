<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <link href="css/style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" type="text/css" />

    <!-- <head> -->
    <meta charset="utf-8">
    <title>Kaanun</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Law Firm Website Template" name="keywords">
    <meta content="Law Firm Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/index_style.css" rel="stylesheet" type="text/css">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .button_home {
            padding: 8px;
            color: #ffffff;
            background-color: rgb(69, 67, 67);
            border-radius: 6px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;
            border: none;
        }

        .boxDate {
            border: 1px solid black;
            margin: 3%;
            min-height: 280px;
            border-radius: 10px;
        }

        .caselink {
            text-decoration: none;
            color: inherit;
        }

        .caselink:hover {
            text-decoration: none;
            color: inherit;
        }

        hr {
            border-top: 1px solid black;
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
                                <a href="../add_client/add_client.php" class="dropdown-item">Add a new Client</a>
                                <a href="../client_details/searchClient.php" class="dropdown-item">Search Client</a>
                                <a href="../client_details/clientList.php" class="dropdown-item">Client List</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Search Cases</a>
                            <div class="dropdown-menu">
                                <a href="../case_details/partyName.php" class="dropdown-item">By Party Name</a>
                                <a href="../searchByDates/enterDate.php" class="dropdown-item active">By Dates</a>
                                <!-- <a href="" class="dropdown-item">Search by Court Name</a> -->
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
    $mysqli = new mysqli("localhost", "root", "", "lawdiary");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }
    $userId = $_SESSION["userID"];
    ?>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            <form action="../searchByDates/enterDate.php" method="post">
                <input type="radio" id="oneMonth" name="selectTime" value="oneMonth" onchange="this.form.submit()">
                <label for="oneMonth">1 month</label><br>

                <input type="radio" id="twoMonth" name="selectTime" value="twoMonth" onchange="this.form.submit()">
                <label for="twoMonth">2 months</label><br>

                <input type="radio" id="custom" name="selectTime" value="custom" onchange="this.form.submit()">
                <label for="custom">Custom</label><br>
            </form>
        </div>
    </div>

    <?php
    if (isset($_POST["to"])) {
        $start = $_POST['from'];
        $end = $_POST['to'];
        $var = strtotime($start);
        $endDate = strtotime($end);
        while ($var <= $endDate) { ?>
            <br><br><br>
            <div class="row">
                <?php
                $count = 4;
                while ($count > 0 && $var <= $endDate) {
                    $formattedDate = date('Y-m-d', $var);
                    $printDate = date('M j', $var);
                    $printDay = date('D', $var); ?>
                    <div class="col-sm-3">
                        <div class="boxDate">
                            <center>
                                <h6><?php echo $printDate ?></h6>
                                <h6><?php echo $printDay ?></h6>
                                <hr>
                            </center>
                            <div name="content" style="margin-left: 5%;">
                                <?php
                                $sql = "select * from cases A join casedate B on A.caseNum=B.caseid and A.userId=B.userid 
                        join magistrate C on B.magistrateId=C.id and A.userId=C.userid where A.userId=$userId and  
                        B.date='$formattedDate'";
                                $result = $mysqli->query($sql);
                                if ($result->num_rows > 0) {
                                    $sno = 1;
                                    while ($row = $result->fetch_assoc()) {
                                        $vs = ' vs ';
                                        $idcase = $row['caseNum'];
                                        $caseName = $row['firstParty'] . $vs . $row['secondParty'];
                                ?>
                                        <p style="font-size:14px; display:inline"><?php echo $sno . ". " ?>
                                            <a href="../show_cases/casedetails_caseview.php?varname=<?php echo $idcase ?>" style="display:inline" class="caselink">
                                                <?php
                                                echo $caseName . "</a>"; ?>
                                                <p style="display:inline"><?php echo " - " ?></p>
                                                <p style="font-size: 14px; color:red; display:inline"><?php echo $row['name'] ?></p><br>
                                        <?php
                                        $sno++;
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php
                    $var = strtotime('+1 day', $var);
                    $count--;
                }
                ?>
            </div>
            <?php
        }
    }

    if (isset($_POST['selectTime'])) {
        $val = $_POST['selectTime'];
        if ($val == 'oneMonth') {
            $start = date('Y-m-d');
            $end = date('Y-m-d', strtotime($start . '+30 days'));
            // echo $start;
        } else if ($val == 'twoMonth') {
            $start = date('Y-m-d');
            $end = date('Y-m-d', strtotime($start . '+60 days'));
        }

        if ($val == 'oneMonth' || $val == 'twoMonth') {
            $var = strtotime($start);
            $endDate = strtotime($end);
            while ($var <= $endDate) { ?>
                <br><br><br>
                <div class="row">
                    <?php
                    $count = 6;
                    while ($count > 0 && $var <= $endDate) {
                        $formattedDate = date('Y-m-d', $var);
                        $printDate = date('M j', $var);
                        $printDay = date('D', $var); ?>
                        <div class="col-sm-2">
                            <div class="boxDate">
                                <center>
                                    <h6><?php echo $printDate ?></h6>
                                    <h6><?php echo $printDay ?></h6>
                                    <hr style="border-top:1px solid black">
                                    <?php
                                    $sql = "select * from cases A join casedate B on A.caseNum=B.caseid and A.userId=B.userid 
                    join magistrate C on B.magistrateId=C.id and A.userId=C.userid where A.userId=$userId and  
                    B.date='$formattedDate'";
                                    $result = $mysqli->query($sql);
                                    if ($result->num_rows > 0) {
                                        $sno = 1;
                                        while ($row = $result->fetch_assoc()) {
                                            $vs = ' vs ';
                                            $caseName = $row['firstParty'] . $vs . $row['secondParty'];
                                            $idcase = $row['caseNum'];
                                    ?>
                                            <p style="font-size:14px; display:inline"><?php echo $sno . ". " ?>
                                                <a href="../show_cases/casedetails_caseview.php?varname=<?php echo $idcase ?>" style="display:inline" class="caselink">
                                                    <?php
                                                    echo $caseName . "</a>"; ?>
                                                    <p style="display:inline"><?php echo " - " ?></p>
                                                    <p style="font-size: 14px; color:red; display:inline"><?php echo $row['name'] ?></p><br>
                                            <?php
                                            $sno++;
                                        }
                                    } ?>
                                </center>
                            </div>
                        </div>
                    <?php
                        $var = strtotime('+1 day', $var);
                        $count--;
                    }
                    ?>
                </div>
            <?php
            }
        } else if ($val == 'custom') {
            ?>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-6">
                    <form action="../searchByDates/customDate.php" method="post">
                        <div class="row">
                            <div class="col-sm-4">
                                From: <input type="date" name="from" id="from" class="from">
                            </div>
                            <div class="col-sm-3">
                                To: <input type="date" name="to" id="to" class="to" onchange="this.form.submit()">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    <?php
        }
    }

    ?>

    <br><br><br>
    <div class="row">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <!-- <div class="button"> -->
            <center>
                <form action="../home.php" style="display: inline;">
                    <button type="submit" class="button_home" onclick="this.form.submit()">Go to Home Page</button>
                </form>
            </center>
            <!-- </div> -->
        </div>
    </div>




</body>

</html>