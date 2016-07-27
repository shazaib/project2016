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

        width: 100%;
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
        width: 100%;
        height: 50%;
      }
      #right-panel {
        margin: 20px;
        border-width: 2px;
        /*width: 20%;*/
        float: left;
        text-align: left;
       margin-top: 2px;
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
					
          <form method="post">
        <div id="right-panel">
          <form method="post">
        <label for="same">Name :<input type="text" id="same"  name="name"  readonly class="form-control input-sm" value="<?php echo $row['username']; ?>"> </label>
        <label for="sames">City :<input type="text" id="sames"  name="city" readonly  class="form-control input-sm" value="<?php echo $row['city']; ?>"> </label>
        <label for="samess">Cell Number :<input type="text" id="samess"  name="num" readonly  class="form-control input-sm" value="<?php echo $row['phone_no']; ?>"></label> 
            <label for="sam">User Email :<input type="email" id="sam"  name="useremail" readonly  class="form-control input-sm" value="<?php echo $row['email']; ?>"></label> 
         <?php } ?>
        <div>
        <b>Start:</b>
        <select id="start"  class="form-control input-sm" name="start">
          <option selected disabled>Start Desitination</option>
          <?php   

          $sql="SELECT starting_location FROM map";
          $obj=new config();
          $res=$obj->select($sql);

          while ($row=$res->fetch_assoc()) {
            echo  "<option value='".$row['starting_location']."'>".$row['starting_location']."</option>";
           } ?>

        </select>
  
        <b>End:</b>
        <select id="end" class="form-control input-sm" name="end">
              <option selected disabled>End Desitination</option>
          <?php   

        $sql="SELECT ending_location FROM map";
        $obj=new config();
        $res=$obj->select($sql);

        while ($row=$res->fetch_assoc()) {
          echo  "<option value='".$row['ending_location']."'>".$row['ending_location']."</option>";
         } ?>

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
      <table>
       <tr>
          <td><label for="same1">Date :<input type="date" name="date" id="same1" class="form-control input-sm"></label></td>
          <td><label for="same2">Time :<input type="time" name="time" id="same2" class="form-control input-sm"></label></td>
        
       </tr>
      </table>


     <label>No of Pasangers :</label>
     <select name="taxi" id="taxi" onchange="check()" class="form-control input-sm" required>
     <option>Number of Passengers </option>
      <?php for ($i=1; $i <=12 ; $i++) { 
        echo '<option value="'.$i.'">'.$i.'</option>';
      } ?>
     </select>

     <script type="text/javascript">

     function check() {
       var val = document.getElementById('taxi').value;
       if(val>=1 && val<=4) {
        document.getElementById('psg').value = 1;
       } 
       else if(val>=5 && val<=8) {
           document.getElementById('psg').value = 2;
       }

       else if(val>=9 && val<=12) {
           document.getElementById('psg').value = 3;
       }   
      }

     </script>
       
  
    <label> No: of taxis : <input id="psg"  class="form-control input-sm" placeholder="No of Taxi" name="psg" readonly type="text"></label>
    <input id="amount"  class="form-control input-sm" placeholder="Amount" name="amount" type="text">
    <input id="Distance"  class="form-control input-sm" placeholder="Distance" name="Distance" type="text">
    <br>
    <br>
      <table><tr><td><input type="submit" name="ins"  class="btn btn-danger input-sm" id="submit" value="Booknow"></td>
      <td><div id="error" style="margin-left:50px; color:red; font:italic 17px arial";></div></td></tr></table>
       </form>
    </br>

     </div>

   </form>
   
    <div id="directions-panel" hidden></div>
    </div>

    <br>

    <div id="map"></div>


    <script>
      function initMap() {
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer;
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: {lat: 24.8615, lng: 67.0099}
        });
        directionsDisplay.setMap(map);

        document.getElementById('end').addEventListener('change', function() {
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
              var dis=(route.legs[i].distance.text); 
              document.getElementById('Distance').value=dis;
              var amounts=(parseInt(route.legs[i].distance.text)*30); 
              document.getElementById('amount').value=amounts;
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

</body>
</html>



<?php  

if (isset($_POST['ins'])) {

    $name=$_POST['name']; 
    $city=$_POST['city'];
    $num=$_POST['num'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $date=$_POST['date'];
    $time=$_POST['time']; 
    $amount=$_POST['amount'];
    $Distance=$_POST['Distance'];
    $taxis=$_POST['psg'];
    $useremail=$_POST['useremail'];
    $fares='No';

    $sql="SELECT id FROM booking_info";
    $obj=new config();
    $res=$obj->select($sql);

     while ($row=$res->fetch_assoc()) {
         
        $status=$row['status'];
        $email=$row['email'];     

        if ($status=="Available") {
          
           $sql="INSERT into booknow VALUES('','$useremail','$name','$city','$num','$start','$end','$date','$time','$taxis','$amount','$Distance','$email','$fares')";
           $obj=new config();
           $obj->dbconfig($sql);
        }   
		
		  else{

          echo '<script> document.getElementById("error").innerHTML="Drivers not Available for this time"; </script>';
        }

}



   
  
    }

 ?>

