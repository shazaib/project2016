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

 <style>
      #right-panel {
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;

      }

      #right-panel select, #right-panel input {
        font-size: 15px;

      }

      #right-panel select {

        width: 140%;
      }

      #right-panel i {
        font-size: 12px;
      }
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 500px;
        float: left;
        width: 50%;
        height: 50%;
    
      }
      #right-panel {
        margin: 20px;
        border-width: 2px;
        width: 20%;
        float: left;
        text-align: left;
        padding-top: 20px;
      }
      #directions-panel {
        margin-top: 20px;
        background-color: #FFEE77;
        padding: 10px;
      }
    </style>


</head>

<body>

  <?php session_start(); 

  include ('includes/config.php');
  $email=$_SESSION['email']; 


if ($email==NULL) {
  header("Location:404");
 }


 $sql="SELECT username,email, paswd, phone_no, city, adress,image FROM signup_user WHERE email='$email'";
 $obj=new config();
 $res=$obj->select($sql);

  while ($row=$res->fetch_assoc()) {
  

?>

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
						<h1 class="artical-header-h1">Book Now</h1>
					</div>
					
					 <div id="map"></div>
    
    <div id="right-panel">
    <div>
       <b>Start:</b>
    <select id="start"  class="form-control input-sm">
      <option selected disabled>Start Desitination</option>
      <option value="Gulshan-e-Surjani,karachi">Gulshan-e-Surjani</option>
      <option value="Gulberg Town,Karachi">Gulberg Town</option>
      <option value="Nagan Chowrangi, Karachi">Nagan Chowrangi</option>
      <option value="Anda Mor Road, Karachi">Anda Mor Road</option>
      <option value="Serena Towers and Mobile Market, Karachi">Serena Towers and Mobile Market</option>
      <option value="5 Star Round About, Shahrah-Sher Shah Suri, Karachi">5 Star Round About</option>
      <option value="Hyderi Bus Stop, Karachi">Hyderi </option>
      <option value="KDA Chowrangi Bus Stop, Karachi">KDA Chowrangi</option>
      <option value="Tariq Road, Karachi, Sindh">Tariq Road</option>
      <option value="Mausoleum of Quiad Azam, M. A. Jinnah Road, Karachi">Mausoleum of Quiad Azam, M. A. Jinnah Road</option>
      <option value="Sea View Karachi, Sea View Road, Karachi">Sea View Karachi, Sea View Road</option>
      <option value="Tariq Road, Karachi, Sindh">Tariq Road</option>
    </select>
  
    <b>End:</b>
    <select id="end" class="form-control input-sm">
          <option selected disabled>End Desitination</option>
      <option value="Gulshan-e-Surjani,karachi">Gulshan-e-Surjani</option>
      <option value="Gulberg Town,Karachi">Gulberg Town</option>
      <option value="Nagan Chowrangi, Karachi">Nagan Chowrangi</option>
      <option value="Anda Mor Road, Karachi">Anda Mor Road</option>
      <option value="Serena Towers and Mobile Market, Karachi">Serena Towers and Mobile Market</option>
      <option value="5 Star Round About, Shahrah-Sher Shah Suri, Karachi">5 Star Round About</option>
      <option value="Hyderi Bus Stop, Karachi">Hyderi </option>
      <option value="KDA Chowrangi Bus Stop, Karachi">KDA Chowrangi</option>
      <option value="Tariq Road, Karachi, Sindh">Tariq Road</option>
      <option value="Mausoleum of Quiad Azam, M. A. Jinnah Road, Karachi">Mausoleum of Quiad Azam, M. A. Jinnah Road</option>
      <option value="Sea View Karachi, Sea View Road, Karachi">Sea View Karachi, Sea View Road</option>
      <option value="Tariq Road, Karachi, Sindh">Tariq Road</option>
    </select>


     <!-- <b>Waypoints:</b> <br>
    <i>(multiple selection)</i> <br> -->
    <select multiple id="waypoints" hidden>
      <option value="Gulshan-e-Surjani,karachi">Gulshan-e-Surjani</option> 
      <option value="Gulshan-e-Surjani,karachi">Gulshan-e-Surjani</option>
      <option value="Gulberg Town,Karachi">Gulberg Town</option>
      <option value="Nagan Chowrangi, Karachi">Nagan Chowrangi</option>
      <option value="Anda Mor Road, Karachi">Anda Mor Road</option>
      <option value="Serena Towers and Mobile Market, Karachi">Serena Towers and Mobile Market</option>
      <option value="5 Star Round About, Shahrah-Sher Shah Suri, Karachi">5 Star Round About</option>
      <option value="Hyderi Bus Stop, Karachi">Hyderi </option>
      <option value="KDA Chowrangi Bus Stop, Karachi">KDA Chowrangi</option>
      <option value="Tariq Road, Karachi, Sindh">Tariq Road</option>
      <option value="Mausoleum of Quiad Azam, M. A. Jinnah Road, Karachi">Mausoleum of Quiad Azam, M. A. Jinnah Road</option>
      <option value="Sea View Karachi, Sea View Road, Karachi">Sea View Karachi, Sea View Road</option>
      <option value="Tariq Road, Karachi, Sindh">Tariq Road</option>
    </select>
    
    <!-- <br> -->
    <input type="text" class="form-control input-sm" value="<?php echo $row['username']; ?>"> 
  <input type="text" class="form-control input-sm" value="<?php echo $row['city']; ?>"> <input type="text" class="form-control input-sm" value="<?php echo $row['phone_no']; ?>"> 
    <br>
      <input type="submit" class="btn-danger form-control input-sm" id="submit" value="Booking Now"></br>
    </div>
    <div id="directions-panel" hidden></div>
    </div>
   

    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 24.8615, lng: 67.0099}
        });
        directionsDisplay.setMap(map);

        document.getElementById('submit').addEventListener('click', function() {
          calculateAndDisplayRoute(directionsService, directionsDisplay);
        });
      }

      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        var waypts = [];
        var checkboxArray = document.getElementById('waypoints');
        for (var i = 0; i < checkboxArray.length; i++) {
          if (checkboxArray.options[i].selected) {
            waypts.push({
              location: checkboxArray[i].value,
              stopover: true
            });
          }
        }

        directionsService.route({
          origin: document.getElementById('start').value,
          destination: document.getElementById('end').value,
          waypoints: waypts,
          optimizeWaypoints: true,
          travelMode: google.maps.TravelMode.DRIVING
        }, function(response, status) {
          if (status === google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
            var route = response.routes[0];
            var summaryPanel = document.getElementById('directions-panel');
            summaryPanel.innerHTML = '';
            // For each route, display summary information.
            for (var i = 0; i < route.legs.length; i++) {
              var routeSegment = i + 1;
          
              summaryPanel.innerHTML += route.legs[i].start_address + ' to ';
              summaryPanel.innerHTML += route.legs[i].end_address + '<br>';
              summaryPanel.innerHTML += route.legs[i].distance.text + '<br>';
              summaryPanel.innerHTML += "Amount" + (parseInt(route.legs[i].distance.text)*30);

              }
          } else {
            window.alert('Directions request failed due to ' + status);
          }



        });
      }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjmANqiA3CjCY2QjYSfI9GapQ8khcICOA&callback=initMap">
    </script>



<?php } ?>
</body>
</html>