<?php
// Start the session
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
    <link href="../css/index_style.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        .oppCoun {
            position: relative;
        }

        .oppNum {
            display: none;
            position: absolute;
            z-index: 100;
            border: 1px;
            background-color: white;
            border: 1px solid black;
            padding: 3px;
            color: black;
            top: 20px;
            left: 20px;
        }

        .oppCoun:hover span.oppNum {
            display: block;
        }

        .goToLink {
            text-decoration: none;
            color: inherit;
        }

        .goToLink:link {
            text-decoration: none;
            color: inherit;
        }

        .goToLink:visited {
            text-decoration: none;
            color: inherit;
        }

        .goToLink:hover {
            text-decoration: none;
            color: inherit;
        }

        .goToLink:active {
            text-decoration: none;
            color: inherit;
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
                        <a href="../diary/dateRetrieve.php" class="nav-item nav-link active">Diary</a>

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
                                <a href="../searchByDates/enterDate.php" class="dropdown-item">By Dates</a>
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
    <br><br>

    <?php
    $mysqli = new mysqli("localhost", "root", "", "lawdiary");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }


    $userId = $_SESSION["userID"];
    $caseId = $_POST['caseid'];
    $nextdate = $_POST['nextdate'];
    $todayDate = $_POST['todayDate'];

    $magSql = "select * from casedate where caseid=$caseId and userid=$userId order by caseDate desc limit 1;";
    $resultMag = $mysqli->query($magSql);
    $rowMag = $resultMag->fetch_assoc();
    $idPrev = $rowMag['magistrateId'];

    $datesql = "insert into casedate (userid, caseid, caseDate, stage, magistrateid) values ('$userId', '$caseId', '$nextdate', '', $idPrev)";
    if ($mysqli->query($datesql) === FALSE) {
        echo "Error: " . $datesql . "<br>" . $mysqli->error;
    }




    $sql = "select * from cases A join casedate B join magistrate C
            where A.userId='$userId' and A.userId=B.userid and 
            B.userid=C.userid and A.caseNum=B.caseid and 
            B.caseDate='$todayDate' and A.magistrate=C.id;";

    $result = $mysqli->query($sql);
    $srNo = 1;

    ?>

    <center>
        <div class="row">
            <div class="col-4 col-md-5"></div>
            <div class="col-4 col-md-2 button">
                <h5><?php echo date("M j, Y", strtotime($todayDate)); ?><br><?php echo date("l", strtotime($todayDate)); ?></h5>
            </div>
        </div>


        <div class="row">
            <div class="col-0 col-sm-4 col-md-3"></div>
            <div class="col-12 col-sm-4 col-md-9">
                <div>
                    <div class="row">
                        <div class="col-3 col-sm-4 col-md-2 text-center">
                            <form action="../diary/prevRetrieve.php" style="display: inline; width:18px" method="post">
                                <input type="hidden" value=<?php echo $todayDate ?> name="dateToday">
                                <input type="submit" class="button" value="&laquo; Prev" style="float:left; margin-left:25px">
                            </form>
                        </div>

                        <div class="col-6 col-sm-4 col-md-4 text-center">
                            <form action="../diary/manualRetrieve.php" style="display: inline" method="post">
                                <input type="hidden" value=<?php echo $todayDate ?> name="dateToday">
                                <input class="button" type="date" name="manualDate" onchange="this.form.submit()">
                            </form>
                        </div>

                        <div class="col-3 col-sm-4 col-md-2 text-center">
                            <form action="../diary/nextRetrieve.php" style="display: inline; width:18px" method="post">
                                <input type="hidden" value=<?php echo $todayDate ?> name="dateToday">
                                <input type="submit" class="button" value="Next &raquo;" style="float:right; margin-right:25px">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <br><br>


    <?php
    if ($result->num_rows > 0) {
        echo "<center><table border='1'><tr>
        <th><center>Serial Number</center></th>
        <th><center>Previous Date</center></th>
        <th><center>Court Name</center></th>
        <th><center>Case Title</center></th>
        <th><center>Stage</center></th>
        <th><center>Next Date</center></th>
        <th><center>Representative of</center></th>
        <th><center>Opposite Council</center></th>
        <th><center>Actions</center></th>
        </tr>";


        while ($row = $result->fetch_assoc()) {
            echo "<tr><td><center>" . $srNo . "</center></td>";
            $srNo = $srNo + 1;
            $caseNum = $row['caseNum'];
            $vs = ' vs ';
            $caseName = $row['firstParty'] . $vs . $row['secondParty'];

            //Previous Date
            $dateSql = "select * from casedate where caseid=$caseNum and caseDate<'$todayDate' and userid=$userId order by caseDate desc limit 1;";
            $resultPrev = $mysqli->query($dateSql);
            if ($row['stage'] == 'Filed') {
                echo "<td><center>-</center></td>";
            } else if ($resultPrev->num_rows > 0) {
                $rowPrev = $resultPrev->fetch_assoc(); ?>
                <td>
                    <center>
                        <a href="goToDate.php?manualDate=<?php echo $rowPrev['caseDate'] ?>" class="goToLink"><?php echo date("d-m-Y", strtotime($rowPrev['caseDate'])) ?></a>
                    </center>
                </td>
            <?php

            } else {
                echo "<td><center>-</center></td>";
            }


            echo "<td><center>" . $row['name'];
            $magId = $row['magistrate'];
            ?>
            </center>
            </td>

            <!-- Case Title -->
            <td style="font-size:15px">
                <center><a href="../show_cases/casedetails_caseview.php?varname=<?php echo $caseNum ?>">
                        <?php
                        echo $caseName . "</a></center></td>";

                        $stages = array(
                            'Allowed', 'Dismissed', 'Appearance', 'Argument', 'Challan', 'Charge', 'Consideration', 'Correct Address', 'Defence', 'Bailable Warrant',
                            'Non Bailable Warrant', 'Plaintiff Evidence', 'Exparte Evidence', 'Prosecution Evidence', 'Defendant Evidence', 'Respondent Evidence',
                            'Munadi', 'Notice', 'Order', 'Reply', 'Replication', 'Rebuttal', 'Report', 'Publication', 'Written Statement', '313 Cr.P.C.', 'L.Rs',
                            'No instruction pleaded', 'To file Affidavit', 'Lower Court Record', 'Correct Address', 'To give document'
                        );

                        // Stage
                        if ($row['stage'] == NULL) {
                        ?>
            <td>
                <center>
                    <form action="./updateStage.php" method="post">
                        <input type="hidden" name="caseid" value=<?php echo $caseNum ?> />
                        <input type="hidden" name="caseDate" value=<?php echo $todayDate ?> />
                        <select name="stageSelect" id="stageSelect" onchange="this.form.submit()" required>
                            <option value="" selected disabled>--</option>
                            <?php
                            foreach ($stages as $val) : ?>
                                <option value='<?php echo $val; ?>'><?php echo $val; ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                    </form>
                </center>
            </td>
            <?php
                        } else {
                            $stageVal = $row['stage'];
                            echo "<td><center>$stageVal</center></td>";
                        }

                        // Next Date
                        $dateSqlNext = "select * from casedate where caseid='$caseNum' order by caseDate asc;";
                        $resultNext = $mysqli->query($dateSqlNext);
                        $flag = 0;
                        $count = 0;
                        if ($resultNext->num_rows > 1) {
                            while ($rowNext = $resultNext->fetch_assoc()) {
                                if ($rowNext['caseDate'] > $todayDate) {
                                    // $count+=1;
                                    $flag = 1; ?>
                    <td>
                        <center>
                            <a href="goToDate.php?manualDate=<?php echo $rowNext['caseDate'] ?>" class="goToLink"><?php echo date("d-m-Y", strtotime($rowNext['caseDate'])) ?></a>
                        </center>
                    </td>

            <?php
                                    break;
                                }
                            }
                        }

                        if ($flag == 0) {
            ?>
            <td>
                <center>
                    <form action="updateNextDate.php" method="post" onchange="this.form.submit()">
                        <input type="hidden" name="todayDate" value=<?php echo $todayDate ?>>
                        <input type="hidden" name="caseid" value=<?php echo $caseNum ?>>
                        <input type="date" name="nextdate" onchange="this.form.submit()">
                    </form>
                </center>
            </td>
        <?php
                        }

                        echo "<td><center>" . $row['whomRepresent'] . "</center></td>";

                        $oppNum = "Mobile Number: ";
                        $oppNum = $oppNum . $row['oppCouncilPhn'];
        ?>
        <td class="oppCoun">
            <center><?php echo $row['oppCouncil'] ?></center>
            <span class="oppNum"><?php echo $oppNum ?></span>
        </td>

        <td>
            <?php
            if ($row['isDecided'] == 0 && $row['isTransferred'] == 0) {
            ?>
                <form action="./editRetrieve.php" method="post" style="display: inline;">
                    <input type="hidden" name="magNow" value=<?php echo $magId ?>>
                    <input type="hidden" name="todayDate" value=<?php echo $todayDate ?>>
                    <input type="hidden" name="caseid" value=<?php echo $caseNum ?>>
                    <button style="font-size:15px" class="button" onclick="this.form.submit()"><i class="fas fa-pencil-alt"></i> Edit</button>
                </form>

                <form action="./deleteRetrieve.php" method="post" style="display:inline">
                    <input type="hidden" name="todayDate" value=<?php echo $todayDate ?>>
                    <input type="hidden" name="caseid" value=<?php echo $caseNum ?>>
                    <button style="font-size:15px" class="button" onclick="this.form.submit()"><i class="fas fa-trash"></i> Delete</button>
                </form>
            <?php
            }
            ?>
        </td>
        </tr>

    <?php
        }

        echo "</table></center>";
    } else {
    ?>
    <center>
        <br><br>
        <h4>No Cases Found On <?php echo date("d-m-Y", strtotime($todayDate)); ?></h4>
    </center>
<?php
    }

    // echo "</table></center>";
?>

<br><br><br>
<center>
    <form action="../home.php" style="display: inline;">
        <input type="submit" class="button" value="Go to Home Page">
    </form>
    <form action="../add_case/add_case.php">
        <input type="submit" class="button" value="Add another Case">
    </form>
</center>
</body>

</html>