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
								<a href="./add_client.php" class="dropdown-item active">Add a new Client</a>
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

	$sql = "select * from clients ORDER BY id DESC LIMIT 1";
	$result = $mysqli->query($sql);


	if ($result->num_rows > 0) {
		while ($row = $result->fetch_assoc()) {
			$id1 = $row['id'] + 1;
		}
	} else {
		$id1 = 1;
	}
	?>

	<div class="form1">
		<form action="client_addedtoDB.php" method="post">
			<div class="row">
				<div class="col lg-3">
					Client Name: <input type="text" name="name" required><br><br>
				</div>

				<div class="col lg-3">
					Phone Number: <input type="text" name="phn" required><br><br>
				</div>
			</div>


			Address: <textarea type="text" name="address" rows=3 cols=50 required></textarea><br><br>

			<div style="float: center;">
				<center>
					<form action="client_addedtoDB.php" method="post">
						<button class="button" name="idid" style="float: center;" value=<?php echo htmlspecialchars($id1); ?>>Add Client</button>
					</form>
					<input class="button" type="reset" style="float: center">

					<form action="../home.php" method="post">
						<button class="button" style="float: center;">Cancel</button>
					</form>
				</center>
			</div>
		</form>
	</div>
</body>

</html>