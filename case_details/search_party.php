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
    <link href="../css/index_style.css" rel="stylesheet" type="text/css">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <style>
        table {
            border-style: solid;
            border-width: 2px;
            border-color: pink;
        }

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
                        <a href="./diary/dateRetrieve.php" class="nav-item nav-link">Diary</a>

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

    $partyName = $_POST['partyName'];
    $type = $_POST['type'];
    $userId = $_SESSION["userID"];

    $sql = "select * from cases A join magistrate B where (A.firstParty='$partyName' or A.secondParty='$partyName')
            and A.type='$type' and A.userId='$userId' and A.userId=B.userid and A.magistrate=B.id;";

    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        echo "<center><table border='1'><tr>
        <th><center>Case Number</center></th>
        <th><center>Case Name</center></th>
        <th><center>Started On</center></th>
        <th><center>Case Type</center></th>
        <th><center>Court Name</center></th>
        <th><center>Magistrate Name</center></th>
        <th><center>Is Transferred?</center></th>
        <th><center>Is decided?</center></th>
        <th><center>Won or Lost</center></th>
        </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><center>" . $row['caseNum'] . "</center></td>";
            $vs = ' vs ';
            $idcase = $row['caseNum'];
            $caseName = $row['firstParty'] . $vs . $row['secondParty'];
    ?>
            <td style="font-size:15px">
                <center><a href="../show_cases/casedetails_caseview.php?varname=<?php echo $idcase ?>">
                        <?php
                        echo $caseName . "</a></center></td>";
                        echo "<td><center>" . $row['startedOn'] . "</center></td>";
                        echo "<td><center>" . $row['type'] . "</center></td>";
                        echo "<td><center>" . $row['courtType'] . "</center></td>";
                        echo "<td><center>" . $row['name'] . "</center></td>";
                        echo "<td><center>" . $row['isTransferred'] . "</center></td>";
                        echo "<td><center>" . $row['isDecided'] . "</center></td>";
                        echo "<td><center>" . $row['status'] . "</center></td>"; ?>
                        <!-- <td><center>
                <a name='remarks' href="remarks.php?varname=<?php echo $idcase ?>" style='font-size:12px'>View Remarks</a><br>
            </center></td> -->
                    <?php
                    echo "</tr>";
                }
            } else {
                    ?>
                    <center>
                        <h4>No Cases Found</h4>
                        <br><br>
                        <div class="button" style="float: center; width: 30%">
                            <center>
                                <form action="../home.php" class="button" style="display: inline; width:18px">
                                    <input type="submit" value="Go to Home Page">
                                </form>

                                <form action="./partyName.php">
                                    <button>Search another Case</button>
                                </form>
                            </center>
                        </div>
                    </center>
                <?php
            }

            echo "</table></center>";
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