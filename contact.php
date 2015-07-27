<?php include 'header.php';?>
<!--<script src="assets/processing.js" type="text/javascript"></script>-->
<!--<script type="text/javascript">-->
    <!--// convenience function to get the id attribute of generated sketch html element-->
    <!--function getProcessingSketchId () { return 'paradisemap'; }-->
<!--</script>-->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
	var map;
	function initialize() {
		var hotelLatLng = new google.maps.LatLng(31.767259, 35.216975);
		map = new google.maps.Map(document.getElementById('map-canvas'), {
			zoom: 16,
			center: hotelLatLng
		});

		var borderCoordinates = [
			new google.maps.LatLng(31.768187,35.216627),
			new google.maps.LatLng(31.768046,35.217152),
			new google.maps.LatLng(31.767964,35.217683),
			new google.maps.LatLng(31.767886,35.218129),
			new google.maps.LatLng(31.766906,35.218145),
			new google.maps.LatLng(31.766919,35.217919),
			new google.maps.LatLng(31.766942,35.217496),
			new google.maps.LatLng(31.766988,35.217007),
			new google.maps.LatLng(31.767020,35.216755),
			new google.maps.LatLng(31.767052,35.216519),
			new google.maps.LatLng(31.767467,35.216551),
			new google.maps.LatLng(31.767740,35.216551),
			new google.maps.LatLng(31.767813,35.216551),
			new google.maps.LatLng(31.768082,35.216594),
			new google.maps.LatLng(31.768183,35.216621)
		];
		var borderOptions = {
			path: borderCoordinates,
			strokeColor: "#656565",
			strokeOpacity: 1,
			strokeWeight: 1
		}
		var border = new google.maps.Polyline(borderOptions);
		border.setMap(map);

		var hotelCoordinates = [
			new google.maps.LatLng(31.767476,35.216680),
			new google.maps.LatLng(31.767407,35.217217),
			new google.maps.LatLng(31.767038,35.217227),
			new google.maps.LatLng(31.767106,35.216664)
		];
		var hotelOptions = {
			path: hotelCoordinates,
			strokeColor: "#E9E5DC",
			strokeOpacity: 0.8,
			strokeWeight: 2,
			fillColor: "#EEEEEE",
			fillOpacity: 0.7
		}
		var hotel = new google.maps.Polygon(hotelOptions);
		hotel.setMap(map);

		var hotelMarker = new google.maps.Marker({
			position: hotelLatLng,
			map: map,
			icon: 'images/mapicon.png'
		});


	}

	google.maps.event.addDomListener(window, 'load', initialize);

</script>
<div class="container">

<h2 class="title">Contact</h2>


<!-- form -->
<div class="contact">



       <div class="row">
       	<div class="col-sm-12">
			<h3>42 Gedalyahu Alon st, Jerusalem, Israel</h3>
		</div>
       	<div class="col-sm-12">
       	<div class="map">
			<div id="map-canvas" style="width: 100%; height: 300px"></div>
       	<!--<iframe src="https://www.google.com/maps/embed/v1/place?q=31.767259%2C%2035.216975&key=AIzaSyA1JlMeff0b7r1mn3wtwq-_9KJenHiRYNc" width="100%" height="300" frameborder="0"></iframe>-->
            <!--<canvas id="paradisemap" data-processing-sources="assets/paradisemap.pde"-->
                    <!--width="1144" height="493">-->
                <!--<p>Your browser does not support the canvas tag.</p>-->
                <!--&lt;!&ndash; Note: you can put any alternative content here. &ndash;&gt;-->
            <!--</canvas>-->
            <!--<noscript>-->
                <!--<p>JavaScript is required to view the contents of this page.</p>-->
            <!--</noscript>-->
        </div>


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form role="form" method="post" action="contact-mail.php">
			<div class="form-group">	
			<input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name" required="true" >
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" required="true" >
			</div>
			<div class="form-group">
			<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="true" >
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone">
			</div>
			<div class="form-group">
			<textarea type="email" class="form-control" id="msg" name="msg" placeholder="Message" rows="4" required="true" ></textarea>
			</div>
					
			<button type="submit" class="btn btn-default">Send</button>
			</form>
			</div>


       	</div>
       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>