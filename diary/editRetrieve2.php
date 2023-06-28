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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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


    $todayDate = $_POST['todayDate'];
    $caseid = $_POST['caseid'];
    $caseDateId = $_POST['caseDateId'];
    $userId = $_SESSION["userID"];
    $magNow = $_POST['magNow'];

    $stages = array(
        'Filed', 'Allowed', 'Dismissed', 'Appearance', 'Argument', 'Challan', 'Charge', 'Consideration', 'Correct Address', 'Defence', 'Bailable Warrant',
        'Non Bailable Warrant', 'Plaintiff Evidence', 'Exparte Evidence', 'Prosecution Evidence', 'Defendant Evidence', 'Respondent Evidence',
        'Munadi', 'Notice', 'Order', 'Reply', 'Replication', 'Rebuttal', 'Report', 'Publication', 'Written Statement', '313 Cr.P.C.', 'L.Rs',
        'No instruction pleaded', 'To file Affidavit', 'Lower Court Record', 'Correct Address', 'To give document'
    );

    $sql = "select * from cases A join casedate B on A.userId=B.userid and A.caseNum=B.caseid join 
            magistrate C on B.userid=C.userid and A.magistrate=C.id where A.userId='$userId' and
            B.caseDate='$todayDate' and A.caseNum=$caseid order by B.id limit 1;";

    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <center>
        <div class="row">
            <div class="col-4 col-md-5"></div>
            <div class="col-4 col-md-2">
                <div class="button">
                    <h5><?php echo date("M j, Y", strtotime($todayDate)); ?><br><?php echo date("l", strtotime($todayDate)); ?></h5>
                </div>
                <br>
                <?php
                $vs = ' vs ';
                $caseName = $row['firstParty'] . $vs . $row['secondParty'];?>
                <h5><b><?php echo $caseName;?></b></h5> <br>             
            </div>
        </div>

        <div class="row">
            <div class="col-0 col-sm-4 col-md-3"></div>
            <div class="col-12 col-sm-4 col-md-6" style="border: 1px black solid;">
                <form action="../diary/saveRetrieve.php" method="post" id="saveChanges">
                    
                    <input type="hidden" readonly name="caseDateId" value=<?php echo $caseDateId ?>>
                    <input type="hidden" readonly name="todayDate" value="<?php echo $todayDate ?>">
                    <input type="hidden" readonly name="caseid" value=<?php echo $caseid ?>>
                    <div class="row">
                        <div class="col-sm-6 col-6">
                            <!-- Stage -->
                            <?php $stageCurrent = $row['stage']; ?>
                            Stage:
                            <select name="editStage" id="editStage" required>
                                <?php
                                foreach ($stages as $valStage) {
                                    if (strcmp($valStage, $stageCurrent) == 0) {
                                ?>
                                        <option value='<?php echo $valStage ?>' selected><?php echo $valStage;?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value='<?php echo $valStage; ?>'><?php echo $valStage;?></option>
                                    <?php
                                    }
                                }
                                ?>
                            </select>                            
                        </div>

                        <div class="col-sm-6 col-6">
                            <!-- Next Date -->
                            Next Date:
                            <?php
                            $nextRetSql = "select * from casedate where caseid=$caseid and caseDate>'$todayDate' order by caseDate asc limit 1;";
                            $nextRetRes = $mysqli->query($nextRetSql);
                            if ($nextRetRes->num_rows > 0) {
                                $nextRetRow = $nextRetRes->fetch_assoc();
                                $nextRetDate = $nextRetRow['caseDate'];
                                $nextId = $nextRetRow['id'];
                                $nextMag = $nextRetRow['magistrateId'];
                            }
                            ?>
                            <input type="date" name="editDate" value="<?php echo $nextRetDate ?>">
                            <input type="hidden" readonly name="currentNext" value="<?php echo $nextRetDate ?>">
                            <input type="hidden" readonly name="nextId" value="<?php echo $nextId ?>">
                            <input type="hidden" readonly name="nextMag" value="<?php echo $nextMag ?>">
                        </div>
                    </div>

                    <!-- Magistrate -->
                    <br><center>
                    <?php
                        $selectSql = "select * from magistrate where userid=$userId";
                        $selectResult = $mysqli->query($selectSql);
                        if ($selectResult->num_rows > 0) { ?>
                            Court Name:
                            <select name="selectMag" id="selectMag" onchange="EnableDisableTextBox(this)">
                            <?php
                                while ($selectRow = $selectResult->fetch_assoc()) {
                                    $val = $selectRow['name'];
                                    $idVal = $selectRow['id'];
                                    if ($idVal == $magNow) {
                                    ?>
                                        <option value=<?php echo $idVal ?> selected><?php echo $val ?></option>
                                    <?php
                                    } else {
                                    ?>
                                        <option value=<?php echo $idVal ?>><?php echo $val ?></option>          
                                    <?php
                                    }
                                }
                                echo "<option value=0>Other</option>";
                                echo "</select>&ensp;
                                ";
                        }
                            ?>
                        Other:
                        <input type="text" id="txtOther" name="txtOther" disabled="disabled" />
                    </center>

                    <button style="font-size:15px" class="button" id="submit" name="saveButton" onclick="document.getElementById('saveChanges').submit()">
                    <i class="fas fa-save"></i> Save</button>
                </form>
            </div>
        </div>



<script type="text/javascript">
    function EnableDisableTextBox(selectMag) {
        var selectedValue = selectMag.options[selectMag.selectedIndex].value;
        var txtOther = document.getElementById("txtOther");
        txtOther.disabled = selectedValue == 0 ? false : true;
        if (!txtOther.disabled) {
            txtOther.focus();
        }
    }
</script>
</body>

</html>