<!DOCTYPE html>
<html>

<head>
	<title>Admin</title>

	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<link rel="icon" type="image/png" href="assets/AT-pro-logo.png" />

	<!-- Import lib -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- End import lib -->

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
require('./pages/CLASS/dbcon.php');

$query_run = mysqli_query($con, "SELECT COUNT(*) as result FROM `building`");
$a = mysqli_fetch_array($query_run);

$query_run = mysqli_query($con, "SELECT COUNT(*) as result FROM `class`");
$b = mysqli_fetch_array($query_run);

$query_run = mysqli_query($con, "SELECT COUNT(*) as result FROM `course`");
$c = mysqli_fetch_array($query_run);

$query_run = mysqli_query($con, "SELECT COUNT(*) as result FROM `department`");
$d = mysqli_fetch_array($query_run);

$query_run = mysqli_query($con, "SELECT COUNT(*) as result FROM `enroll`");
$e = mysqli_fetch_array($query_run);

$query_run = mysqli_query($con, "SELECT COUNT(*) as result FROM `professor`");
$f = mysqli_fetch_array($query_run);

$query_run = mysqli_query($con, "SELECT COUNT(*) as result FROM `room`");
$g = mysqli_fetch_array($query_run);

$query_run = mysqli_query($con, "SELECT COUNT(*) as result FROM `school`");
$h = mysqli_fetch_array($query_run);

$query_run = mysqli_query($con, "SELECT COUNT(*) as result FROM `semester`");
$i = mysqli_fetch_array($query_run);

$query_run = mysqli_query($con, "SELECT COUNT(*) as result FROM `student`");
$j = mysqli_fetch_array($query_run);
?>

<body class="overlay-scrollbar">
	<!-- navbar -->
	<?php
	require('./component/navbar.php')
	?>
	<!-- end navbar -->
	<!-- sidebar -->
	<?php
	require('./component/sidebar.php')
	?>
	<!-- end sidebar -->
	<!-- main content -->
	<div class="wrapper">
		<div class="row">
			<a href="./pages/BUILDING/index.php" class="col-6 col-m-6 col-sm-6">
				<div class="counter bg-primary">
					<p>
						<i class="fas fa-spinner"></i>
					</p>
					<h3>
						<?= $a['result']; ?>
					</h3>
					<p>Building</p>
				</div>
			</a>
			<a href="./pages/CLASS/index.php" class="col-6 col-m-6 col-sm-6">
				<div class="counter bg-success">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3><?= $b['result']; ?></h3>
					<p>Class</p>
				</div>
			</a>
			<a href="./pages/COURSE/index.php" class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-danger">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3><?= $c['result']; ?></h3>
					<p>Course</p>
				</div>
			</a>
			<a href="./pages/DEPARTMENT/index.php" class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-warning">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3><?= $d['result']; ?></h3>
					<p>Department</p>
				</div>
			</a>
			<a href="./pages/ENROLL/index.php" class="col-3 col-m-6 col-sm-6">
				<div class="counter" style="background-color: pink;">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3><?= $e['result']; ?></h3>
					<p>Enroll</p>
				</div>
			</a>
			<a href="./pages/PROFESSOR/index.php" class="col-3 col-m-6 col-sm-6">
				<div class="counter" style="background-color: black;">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3><?= $f['result']; ?></h3>
					<p>Professer</p>
				</div>
			</a>
			<a href="./pages/ROOM/index.php" class="col-3 col-m-6 col-sm-6">
				<div class="counter" style="background-color: #FFA07A;">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3><?= $g['result']; ?></h3>
					<p>Room</p>
				</div>
			</a>
			<a href="./pages/SCHOOL/index.php" class="col-3 col-m-6 col-sm-6">
				<div class="counter bg-primary" style="background-color: #BDB76B;">
					<p>
						<i class="fas fa-tasks"></i>
					</p>
					<h3><?= $h['result']; ?></h3>
					<p>School</p>
				</div>
			</a>
			<a href="./pages/SEMESTER/index.php" class="col-3 col-m-6 col-sm-6">
				<div class="counter" style="background-color: #008B8B;">
					<p>
						<i class="fas fa-check-circle"></i>
					</p>
					<h3><?= $i['result']; ?></h3>
					<p>Semester</p>
				</div>
			</a>
			<a href="./pages/STUDENT/index.php" class="col-3 col-m-6 col-sm-6">
				<div class="counter" style="background-color: #00CED1;">
					<p>
						<i class="fas fa-bug"></i>
					</p>
					<h3><?= $j['result']; ?></h3>
					<p>Student</p>
				</div>
			</a>
		</div>
		<div class="row">
			<div class="col-8 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							SCHOOL
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">

						<table>
							<thead>
								<tr>
									<th>SCHOOL_CODE</th>
									<th>SCHOOL_NAME</th>
									<th>PROF_NUM</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$query = "SELECT * FROM school";
								$query_run = mysqli_query($con, $query);

								if (mysqli_num_rows($query_run) > 0) {
									foreach ($query_run as $school) {
								?>

										<tr>
											<td><?= $school['SCHOOL_CODE']; ?></td>
											<td><?= $school['SCHOOL_NAME']; ?></td>
											<td><?= $school['PROF_NUM']; ?></td>
										</tr>

								<?php
									}
								} else {
									echo "<h5> No Record Found </h5>";
								}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-4 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Progress bar
						</h3>
						<i class="fas fa-ellipsis-h"></i>
					</div>
					<div class="card-content">
						<div class="progress-wrapper">
							<p>
								Building
								<span class="float-right">2%</span>
							</p>
							<div class="progress">
								<div class="bg-primary" style="width: 2%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Class
								<span class="float-right">10%</span>
							</p>
							<div class="progress">
								<div class="bg-success" style="width:10%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Course
								<span class="float-right">9%</span>
							</p>
							<div class="progress">
								<div class="bg-danger" style="width:9%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Department
								<span class="float-right">17%</span>
							</p>
							<div class="progress">
								<div class="bg-warning" style="width:17%"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Enroll
								<span class="float-right">69.5%</span>
							</p>
							<div class="progress">
								<div class="bg-danger" style="width:69.5%; background-color: pink;"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Professer
								<span class="float-right">31%</span>
							</p>
							<div class="progress">
								<div class="bg-danger" style="width:31%; background-color: black;"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Room
								<span class="float-right">68%</span>
							</p>
							<div class="progress">
								<div class="bg-danger" style="width:68%; background-color: #FFA07A;"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								School
								<span class="float-right">3.5%</span>
							</p>
							<div class="progress">
								<div class="bg-danger" style="width:3.5%; background-color: #BDB76B;"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Semester
								<span class="float-right">4%</span>
							</p>
							<div class="progress">
								<div class="" style="width:4%; background-color: #008B8B;"></div>
							</div>
						</div>
						<div class="progress-wrapper">
							<p>
								Student
								<span class="float-right">70%</span>
							</p>
							<div class="progress">
								<div class="" style="width:70%; background-color: #00CED1;"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-m-12 col-sm-12">
				<div class="card">
					<div class="card-header">
						<h3>
							Chartjs
						</h3>
					</div>
					<div class="card-content">
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end main content -->
	<!-- import script -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="index.js"></script>
	<!-- end import script -->
</body>

</html>