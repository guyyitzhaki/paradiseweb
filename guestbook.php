<?php include 'header.php';?>
<div class="container">
	<h1 class="title">Our Guestbook</h1>
	<div class="row" style="text-align: center;">
		<div class="col-xs-12">
			<div style="height:1020px;">
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
					var js, fjs = d.getElementsByTagName(s)[0];
					if (d.getElementById(id)) return;
					js = d.createElement(s); js.id = id;
					js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=940913035930606";
					fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>

				<div class="fb-page" data-href="https://www.facebook.com/paradiseinnjerusalem" data-width="800" data-height="1000" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/paradiseinnjerusalem"><a href="https://www.facebook.com/paradiseinnjerusalem">Paradise Inn</a></blockquote></div></div>			</div>
		</div>
	</div>
</div>
<?php include 'footer.php';?>