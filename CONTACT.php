<?php include 'include/header.php'; ?>

<html>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://use.fontawesome.com/06815bb9d3.js"></script>

<body>


	<!--MAIN PARAGRAPH-->
	<div id="fpara">


		<!--Contact us Form -->
		<div class="container">
			<form action="action_page.php" name="form" method="POST" onsubmit="return validateForm()">

			  <label for="fname">First Name</label>
			  <input type="text" id="fname" name="firstname" placeholder="Your name..">

			  <label for="lname">Last Name</label>
			  <input type="text" id="lname" name="lastname" placeholder="Your last name..">

				<label for="email">Email</label>
				<input type="email" id="email" name="email" placeholder="insert Your Email">


			  <label for="country">Country</label>
			  <select id="country" name="country">
				<option value="Saudi Arabia">Saudi Arabia</option>
				<option value="australia">Australia</option>
				<option value="Kuwait">Kuwait</option>
				<option value="United Arab Emirates">United Arab Emirates</option>
				<option value="Baḥrayn">Baḥrayn</option>

			  </select>


			  <label for="subject">Subject</label>
			  <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea>

			  <input type="submit" value="Submit">

			</form>
		</div>

<br />

<div id="googleMap" style="width:85%;height:400px; margin:5px auto;"></div>






	</div>





	<script>
		function myMap() {
			var mapProp= {
				center:new google.maps.LatLng(24.734557,46.701852),
				zoom:12,
			};
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

			var marker = new google.maps.Marker({
								position: new google.maps.LatLng(24.734557,46.701852),
								title: "كلية التقنية - جامعة الامير سلطان - الرياض"

						});
			 marker.setMap(map);

		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCK5VqSvlYfujVTKj-XOJ_ByZvxxQfTTho&callback=myMap"></script>
</body>
<script  type="text/javascript" src="scripts/p.js"></script>

<!--Footer-->
<?php include 'include/footer.php'; ?>



<!-- Here Ends The HTML file -Fadi -->
</html>
