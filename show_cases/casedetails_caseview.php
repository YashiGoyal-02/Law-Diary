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

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Template Stylesheet -->
    <link href="../css/index_style.css" rel="stylesheet">
    <style>
        table {
            border-style: solid;
            border-width: 2px;
            border-color: pink;
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
    <br><br><br>

    <?php
    $mysqli = new mysqli("localhost", "root", "", "lawdiary");

    // Check connection
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;
        exit();
    }

    $caseId = $_GET['varname'];
    $userId = $_SESSION["userID"];


    $sql = "select * from cases where caseNum=$caseId and userId=$userId";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
            <div class="res" style="margin-left: 10%">
                <div class="row">
                    <div class="col-sm-4">
                        <?php
                        echo "Case Number: " . $row['caseNum'];
                        $vs = ' vs ';
                        $idcase = $row['caseNum'];
                        $caseName = $row['firstParty'] . $vs . $row['secondParty'];
                        echo "<br>Case Name: " . $caseName;
                        echo "<br>Representating: " . $row['whomRepresent'];
                        echo "<br>Case Type: " . $row['type'];
                        echo "<br>Court Name: " . $row['courtType'];
                        echo "<br><br>Remarks: ";
                        $rems = $row['remarks'];
                        $search = array('.', ':');
                        $replace = array('.<br />&emsp;&emsp;&emsp;&emsp;&ensp;', '');
                        echo $longDesc = str_replace($search, $replace, $rems); ?>
                        <!-- <td><center> -->
                        <!-- <br><br><a name='home' href="../home.php" style='font-size:17px; margin-left:11%'>Go to Home Page</a> -->
                        <br><br>
                        <div style="float: center;">
                            <center>
                                <form action="../show_cases/enter_data_remarks.php" style="display: inline" method="get">
                                    <input type="hidden" value=<?php echo $idcase ?> name="varname">
                                    <input class="button" type="submit" value="Edit Remarks">
                                </form>
                            </center>

                            <center>
                                <form action="../citations/addToCase.php" style="display: inline" method="get">
                                    <input type="hidden" value=<?php echo $caseId ?> name="caseid">
                                    <input class="button" type="submit" value="Add Citations">
                                </form>
                            </center>

                            <center>
                                <form action="../home.php" style="display: inline">
                                    <input class="button" type="submit" value="Go Back">
                                </form>
                            </center>

                            <center>
                                <form action="../show_cases/case_view.php" style="display: inline">
                                    <input class="button" type="submit" value="View Case List">
                                </form>
                            </center>

                        </div>
                    </div>

                    <div class="col-sm-1"></div>
                    <div class="col-sm-6">
                        <h4>
                            <center><b>Hearings</b></center>
                        </h4><br>
                        <?php
                        $dateSql = "select * from casedate A join magistrate B where A.userid=$userId and A.userid=B.userid and A.caseid=$caseId and B.id=A.magistrateId order by date asc";
                        $dateResult = $mysqli->query($dateSql);

                        if ($dateResult->num_rows > 0) {
                            $srNo = 1;
                            echo "<center><table border='1'><tr>
                        <th><center>S.No.</center></th>
                        <th><center>Date</center></th>
                        <th><center>Stage</center></th>
                        <th><center>In the Court of</center></th>
                        <th><center>Fee Paid</center></th>
                        </tr>";
                            $total = 0;
                            while ($rowDate = $dateResult->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td><center>" . $srNo . "</center></td>";
                                $srNo = $srNo + 1;

                                echo "<td><center>" . date("d-m-Y", strtotime($rowDate['date'])) . "</center></td>";
                                $dateExtr = $rowDate['date'];
                                echo "<td><center>" . $rowDate['stage'] . "</center></td>";
                                echo "<td><center>" . $rowDate['name'] . "</center></td>"; ?>
                                <td>
                                    <center>
                                        <?php
                                        if ($rowDate['feePaid'] == 0) {
                                        ?>
                                            <form action="../show_cases/updatedFee.php" method="get">
                                                <input type="hidden" name="dateExtr" value="<?php echo $dateExtr ?>">
                                                <input type="hidden" name="varname" value="<?php echo $caseId ?>">
                                                <input type="number" name="feePaid" size=6 onchange="this.form.submit()">
                                            </form>
                                        <?php
                                        } else {
                                            echo $rowDate['feePaid'];
                                            $total += $rowDate['feePaid'];
                                        }
                                        ?>
                                    </center>
                                </td>
                            <?php
                                echo "</tr>";
                            } ?>
                            <tr>
                                <td colspan="3">
                                    <center>Total Fee Recieved</center>
                                </td>
                                <td></td>
                                <td>
                                    <center><?php echo $total ?></center>
                                </td>
                            <?php
                            echo "</table></center>";
                        }


                            ?>
                    </div>
                </div>
            </div>
    <?php
        }
    }
    ?>

</body>

</html>