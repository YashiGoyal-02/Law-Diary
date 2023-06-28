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

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

	<!-- Bootstrap JS -->
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
							<div class="dropdown-menu" style="border: 1px solid black;">
								<a href="./add_case.php" class="dropdown-item active">Add a new Case</a>
								<a href="../show_cases/case_view.php" class="dropdown-item">Case List</a>
							</div>
						</div>

						<div class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Citations</a>
							<div class="dropdown-menu" style="border: 1px solid black;">
								<a href="../citations/addCaseSelect.php" class="dropdown-item">Add to Case</a>
								<a href="../citations/addGeneral.php" class="dropdown-item">Add General</a>
							</div>
						</div>

						<div class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Manage Clients</a>
							<div class="dropdown-menu" style="border: 1px solid black;">
								<a href="../add_client/add_client.php" class="dropdown-item">Add a new Client</a>
								<a href="../client_details/searchClient.php" class="dropdown-item">Search Client</a>
								<a href="../client_details/clientList.php" class="dropdown-item">Client List</a>
							</div>
						</div>

						<div class="nav-item dropdown">
							<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Search Cases</a>
							<div class="dropdown-menu" style="border: 1px solid black;">
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

	$sql = "select * from cases ORDER BY caseNum DESC LIMIT 1";
	$result = $mysqli->query($sql);

	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$id1 = $row['caseNum'] + 1;
		}
	} else {
		$id1 = 1;
	}

	$userId = $_SESSION["userID"];
	?>

	<div class="form1">
		<form action="case_addedtoDB.php" method="post">
			<div class="row">
				<div class="col-sm-4 col-md-6">
					Party Name <p style="color:red; display:inline">*</p> : <input type="text" name="fparty" size=12 required> &emsp; vs &emsp; <input type="text" name="sparty" size=12 required>
				</div>
				<div class="col-sm-4 col-md-6">
					<?php
					$selSql = "select * from magistrate where userid=$userId";
					$selResult = $mysqli->query($selSql);
					if ($selResult->num_rows > 0) { ?>
						<label for="selectMag" name="selectMag">Court Name <p style="color:red; display:inline">*</p> : </label>
						<select name="selectMag" id="selectMag" onchange="EnableDisableTextBox(this)">
							<option value="" selected disabled>--</option>
							<?php
							while ($selRow = $selResult->fetch_assoc()) {
								$val = $selRow['name'];
								$idVal = $selRow['id'];
							?>
								<option value=<?php echo $idVal; ?>><?php echo $val ?></option>
							<?php
							}
							echo "<option value=0>Other</option>";
							echo "</select><br>";
							?>
							Other:
							<input type="text" id="txtOther" name="txtOther" disabled="disabled" />
						<?php
					} else {
						?>
							Court Name <p style="color:red; display:inline">*</p> : <input type="text" name="selectMag" size=8 required><br><br>
						<?php
					}
						?>
				</div>
			</div>
			<br>

			<div class="row">
				<div class="col-sm-4 col-md-6">
					Started on <p style="color:red; display:inline">*</p> : <input type="date" name="startedon" required><br><br>
				</div>
				<div class="col-sm-4 col-md-6">
					<label for="type">Case Type <p style="color:red; display:inline">*</p> :</label>
					<select name="type" id="type" required>
						<option value="" selected disabled>--</option>
						<option value="Civil">Civil</option>
						<option value="Criminal">Criminal</option>
						<option value="Revenue">Revenue</option>
						<option value="Complaints">Complaints</option>
						<option value="Petition">Petition</option>
						<option value="Execution">Execution</option>
						<option value="MACT Claim Petition">MACT Claim Petition</option>
						<option value="Negotiable Instrument Act">Negotiable Instrument Act</option>
						<option value="FIR Case">FIR Case</option>
						<option value="LAC Petition">LAC Petition</option>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 col-md-6">

					<label for="court">Court Type <p style="color:red; display:inline">*</p> :</label>
					<select name="court" id="court" required>
						<option value="" selected disabled>--</option>
						<option value="Lower Court">Lower Court</option>
						<option value="District Court">District Court</option>
						<option value="High Court">High Court</option>
						<option value="Family Court">Family Court</option>
						<option value="Consumer Court">Consumer Court</option>
						<option value="Revenue Court">Revenue Court</option>
						<option value="State Commission Court">State Commission Court</option>
						<option value="National Commission Court">National Commission Court</option>
						<option value="Army Tribunal Court">Army Tribunal Court</option>
						<option value="Supreme Court">Supreme Court</option>
					</select>
				</div>
				<div class="col-sm-4 col-md-6">
					<label for="represent">Whom to Represent <p style="color:red; display:inline">*</p> :</label>
					<select name="represent" id="represent" required>
						<option value="" selected disabled>--</option>
						<option value="Plaintiff">Plaintiff</option>
						<option value="Defendant">Defendant</option>
						<option value="Respondent">Respondent</option>
					</select> <br><br>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 col-md-6">
					Opposite council <p style="color:red; display:inline">*</p> : <input type="text" name="opp" required><br><br>
				</div>
				<div class="col-sm-4 col-md-6">
					Opposite council Phone Number: <input type="text" name="oppNum"><br><br>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-4 col-md-6">
					Client Address: <textarea name="address" id="" cols="27" rows="4"></textarea>
				</div>
				<div class="col-sm-4 col-md-6">
					Client Phone Number: <input type="text" name="number"><br><br>
				</div>

			</div>

			<br>
			<div class="row">
				<div class="col-sm-2 col-md-4 col-lg-2"></div>
				<div class="col-sm-3 col-md-4">
					<div style="float: center;">
						<center>
							<form action="caseaddedtoDB.php" method="post">
								<button class="button" name="idid" style="float: center; left: 8%" value=<?php echo htmlspecialchars($id1); ?>>Add Case</button>
							</form>
							<input class="button" type="reset" style="float: center">

							<form action="../home.php" style="display: inline; margin-top:-5%">
								<input class="button" type="submit" value="Cancel">
							</form>
						</center>
					</div>
				</div>
			</div>
		</form>
	</div>

	<script>
		function change() {
			if (document.getElementById("court").value == "Supreme Court")
				document.getElementById("state").value = "Delhi";
		};

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