<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=620">
		<title>HTML5 Demo: geolocation</title>
	</head>
	<body>
		<section id="wrapper">
			<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
			<article>
				<p>
					Finding your location: <span id="status">checking...</span>
				</p>
			</article>
			<script type="text/javascript">
				/*
				 *	geolocation success
				 */
				function success(position) {
					var s = document.querySelector('#status');
					console.log('위도 : ' + position.coords.latitude);
					console.log('경도 : ' + position.coords.longitude);
					if (s.className == 'success') {
						// not sure why we're hitting this twice in FF, I think it's to do with a cached result coming back
						return;
					}
					s.innerHTML = "found you!";
					s.className = 'success';
					var mapcanvas = document.createElement('div');
					mapcanvas.id = 'mapcanvas';
					mapcanvas.style.height = '400px';
					mapcanvas.style.width = '560px';
					document.querySelector('article').appendChild(mapcanvas);

					var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
					var myOptions = {
						zoom : 15,
						center : latlng,
						mapTypeControl : false,
						navigationControlOptions : {
							style : google.maps.NavigationControlStyle.SMALL
						},
						mapTypeId : google.maps.MapTypeId.ROADMAP
					};
					var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);

					var marker = new google.maps.Marker({
						position : latlng,
						map : map,
						title : "You are here! (at least within a " + position.coords.accuracy + " meter radius)"
					});
				}

				// Error !!!
				function error(msg) {
					var s = document.querySelector('#status');
					s.innerHTML = typeof msg == 'string' ? msg : "failed";
					s.className = 'fail';
					// console.log(arguments);
				}

				if (navigator.geolocation) {
					navigator.geolocation.getCurrentPosition(success, error);
				} else {
					error('not supported');
				}
			</script>
		</section>
	</body>
</html>