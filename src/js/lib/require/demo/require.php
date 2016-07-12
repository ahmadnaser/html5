<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta name="keywords" content="Web Developer" />
		<meta name="description" content="HTML/CSS/JAVASCRIP/JQUERY/PHP" />

		<!--[if lt IE 9]><script type="text/javascript" src="/src/js/lib/html5/html5.js"></script><![endif]-->
		<!-- <script type="text/javascript" src="/src/js/lib/jquery/jquery.js"></script> -->
		<script type="text/javascript" src="/src/js/framework/core/core.js"></script>
	</head>
	<body>
		<script type="text/javascript" src="/src/js/lib/require/require.js"></script>
		<!-- 개별 script 추가-->

		<script type="text/javascript">
			require(["/src/js/lib/require/demo/sample.js"], function() {
				alert('requirejs .js');
			});

			require(["/src/js/lib/jquery/jquery.js"], function(text) {
		//		var TRAX = $;
				console.log('aaaa');
			});
		</script>
		<article id="contents">
			<section id='name1-cnt'>
				<a href="https://github.com/jrburke/requirejs">https://github.com/jrburke/requirejs</a>
			</section><!-- name1-->
			<section id='name2-cnt'>
				2
			</section><!-- name2-->
		</article><!-- article End -->
		<footer>

			<!-- copyright logo infomation address -->
		</footer><!-- footer End -->

	</body>
</html>