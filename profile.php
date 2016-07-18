<!DOCTYPE html>
<html>
<head>
	<title>User Account</title>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

<!-- Latest compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


<!-- Latest compiled Bootstrap JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- Google font API -->
<link href='https://fonts.googleapis.com/css?family=Lato:900italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>

<!-- Reset CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

<!-- Style sheet -->
<link rel="stylesheet" type="text/css" href="style.css">

<!-- Font Awesome -->
<script src="https://use.fontawesome.com/4ab730f0d1.js"></script>

<!-- Account -->
<link rel="stylesheet" type="text/css" href="account.css">

</head>

<body>

	<header>
		<img src="images/logo3.png">
	</header>
	
	<div id="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-3">
					<?php include'account-side-bar.php'; ?>
				</div>

				<div class="col-lg-9 col-md-9 col-sm-9">

				<div class="artical">
					<div class="artical-header">
						<h1 class="artical-header-h1">Profile</h1>
					</div>
					
					<div class="artical-content">

						<div class="profile-img" style="margin:-165px 0px 0px 50px; float:left;">
							<img src="images/profile-img.png" style="margin-top:30px;">
						</div>
						
						
						<div class="artical-sub-content">
							<h1><a class="change-pic" href="#">Change Picture</a></h1><br>
				
							<ul>
								<li class="txt" style="margin-top: 50px; font-weight:600;"><label>User Name :</label></li>
								<li class="txt" style="margin: -13px 0px 0px 180px;"><h1>Ammar Alam</h1></li>

								<li class="txt" style="font-weight:600;"><label>Email :</label></li>
								<li class="txt" style="margin: -13px 0px 0px 180px;"><h1>example@gmail.com</h1></li>
								
								<li class="txt" style="font-weight:600;"><label>Password :</label></li>
								<li class="txt" style="margin: -13px 0px 0px 180px;"><h1>12345678</h1></li>
								
								<li class="txt" style="font-weight:600;"><label>Phone No :</label></li>
								<li class="txt" style="margin: -13px 0px 0px 180px;"><h1>03052536258</h1></li>

								<li class="txt" style="font-weight:600;"><label>City :</label></li>
								<li class="txt" style="margin: -13px 0px 0px 180px;"><h1>karachi</h1></li>

								<li class="txt" style="font-weight:600;"><h1>Address :</h1></li>
								<li class="txt" style="margin: -13px 0px 0px 180px;"><h1>Buffer Zone</h1></li>
							</ul>

						</div>

					</div>

				</div>


				</div>

			</div>
		</div>
	</div>

<<<<<<< HEAD

</body>
</html>

<?php 

	include ('footer.php'); 

	?>
=======
<?php include'footer.php'; ?>

</body>

	

</html>
>>>>>>> 514a1a68ae3419f3603d56a745f5aa8210391546
