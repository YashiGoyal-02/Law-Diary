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
                                <a href="../show_cases/case_view.php" class="dropdown-item active">Case List</a>
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

    $userId = $_SESSION["userID"];

    $sql = "select * from cases A join magistrate B where A.userId=$userId and A.userId=B.userid and A.magistrate=B.id";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) { ?>
        <center>
            <table border='1' style="margin-left: 3%; margin-right: 3%;">
                <tr>
                    <th>
                        <center>S.No.</center>
                    </th>
                    <th>
                        <center>Case Name</center>
                    </th>
                    <th>
                        <center>Representating</center>
                    </th>
                    <th>
                        <center>Opposite Council</center>
                    </th>
                    <th>
                        <center>Started On</center>
                    </th>
                    <th>
                        <center>Case Type</center>
                    </th>
                    <th>
                        <center>Court Name</center>
                    </th>
                    <th>
                        <center>Magistrate Name</center>
                    </th>
                    <th>
                        <center>Is Transferred?</center>
                    </th>
                    <th>
                        <center>Is decided?</center>
                    </th>
                    <th>
                        <center>Won or Lost</center>
                    </th>
                    <th>
                        <center>Actions</center>
                    </th>
                </tr>

                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td><center>" . $row['caseNum'] . "</center></td>";
                    $vs = ' vs ';
                    $idcase = $row['caseNum'];
                    $caseName = $row['firstParty'] . $vs . $row['secondParty']; ?>
                    <td style="font-size:15px">
                        <center><a href="casedetails_caseview.php?varname=<?php echo $idcase ?>">
                                <?php
                                echo $caseName . "</a></center></td>";
                                echo "<td><center>" . $row['whomRepresent'] . "</center></td>";
                                // <?php
                                $oppNum = "Mobile Number: ";
                                $oppNum = $oppNum . $row['oppCouncilPhn'];
                                ?>
                    <td class="oppCoun">
                        <center><?php echo $row['oppCouncil'] ?></center>
                        <span class="oppNum"><?php echo $oppNum ?></span>
                    </td>
                    <?php
                    // echo "<td><center>" . $row['oppCouncil'] . "</center></td>";
                    echo "<td><center>" . date("d-m-Y", strtotime($row['startedOn'])) . "</center></td>";
                    echo "<td><center>" . $row['type'] . "</center></td>";
                    echo "<td><center>" . $row['courtType'] . "</center></td>";
                    echo "<td><center>" . $row['name'] . "</center></td>";
                    echo "<td><center>" . $row['isTransferred'] . "</center></td>";
                    echo "<td><center>" . $row['isDecided'] . "</center></td>";
                    echo "<td><center>" . $row['status'] . "</center></td>";

                    if ($row['isTransferred'] == 0 &&  $row['isDecided'] == 0) {
                    ?>
                        <td>
                            <center>
                                <select name="payment" id="payment" onchange="window.location.href=this.value;" required>
                                    <option value="" selected disabled>--</option>
                                    <option value="transfer.php?varname=<?php echo $idcase ?>">Transferred</option>
                                    <!-- <option value="change.php?varname=<?php echo $idcase ?>">Magistrate Changed</option> -->
                                    <option value="won.php?varname=<?php echo $idcase ?>">Won</option>
                                    <option value="lost.php?varname=<?php echo $idcase ?>">Lost</option>
                                    <option value="enter_data_remarks.php?varname=<?php echo $idcase ?>">Add Remarks</option>
                                    <option value="../citations/addToCase.php?caseid=<?php echo $idcase ?>">Add Citations</option>
                                </select>
                            </center>
                        </td>
                    <?php
                    } else {
                    ?>
                        <td>
                            <center>
                                <select name="payment" id="payment" onchange="window.location.href=this.value;" required>
                                    <option value="" selected disabled>--</option>
                                    <option value="transfer.php?varname=<?php echo $idcase ?>" disabled>Transferred</option>
                                    <option value="change.php?varname=<?php echo $idcase ?>" disabled>Magistrate Changed</option>
                                    <option value="won.php?varname=<?php echo $idcase ?>" disabled>Won</option>
                                    <option value="lost.php?varname=<?php echo $idcase ?>" disabled>Lost</option>
                                    <option value="enter_data_remarks.php?varname=<?php echo $idcase ?>">Add Remarks</option>
                                    <option value="../citations/addToCase.php?caseid=<?php echo $idcase ?>">Add Citations</option>
                                </select>
                            </center>
                        </td>
                    <?php
                    }
                    ?>
                    </tr>
                <?php
                }
            } else {
                ?>
                <center>
                    <h4>No Cases Found</h4>
                </center>
            <?php
            }

            echo "</table></center>";
            ?>

            <br><br><br>
            <center>
                <form action="../home.php" style="display: inline;">
                    <input type="submit" class="button" value="Go to Home Page">
                </form>
            </center>

</body>

</html>