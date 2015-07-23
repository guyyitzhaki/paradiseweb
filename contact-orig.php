<?php include 'header.php';?>
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
       	<iframe src="https://www.google.com/maps/embed/v1/place?q=31.767259%2C%2035.216975&key=AIzaSyA1JlMeff0b7r1mn3wtwq-_9KJenHiRYNc" width="100%" height="300" frameborder="0"></iframe>
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