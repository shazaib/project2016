	
	<div class="side-bar">
		<div class="profile-img">
			<?php  echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image']).'"  width="130px" height="130px"/>'; ?>
		</div>
		<h1 class="profile-img-name"><?php echo $row['firstname']; ?></h1>

		<button class="side-bar-btn btn-img-user" onclick="location.href='driver-profile'">Profile</button>
		
		<button class="side-bar-btn btn-img-monthly-status" style="border-bottom:1px solid #ccc; border-top:none;" onclick="location.href='monthly-status'">Monthly Status</button>
		
		<button class="side-bar-btn btn-img-today-fare" style="border-bottom:1px solid #ccc; border-top:none;" onclick="location.href='today-fares'">Today Fares</button>

		<button class="side-bar-btn btn-img-signout" style="border-bottom:1px solid #ccc; border-top:none;" onclick="location.href='signout_driver'">Sign Out</button>

	</div>
