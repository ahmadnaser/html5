<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.header.php"); ?>
<style type="text/css">@import url("/resource/css/pages/profile.css");</style>
<script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#image").rotate(45);
	});
</script>
<article id="contents">
	<img src="https://www.google.com/images/srpr/logo3w.png" id="image">
	<section id="career-cnt">
		<div class="title">/* Carrer */</div>
		<table>
			<tr><th>Company</th><th>Term</th><th>Position</th><th>Work</th></tr>					
			<tr><td><a href="http://c.vi-nyl.com/" target="_blank">VI-NYL</a></td><td>2008.07.21 ~ NOW</td><td>PL</td><td>FRONT DEVELOPER</td></tr>		
			<tr><td><a href="http://www.grayblue.co.kr/" target="_blank">GRAYBLUE</a></td><td>2007.12.1 ~ 2008.07.20</td><td>PL</td><td>FLASH DEVELOPER</td></tr>		
			<tr><td>MULTI-WIDE</td><td>2005.10.1 ~ 2006.12.30</td><td>WEB DEVELOPER</td><td>HTML+DESIGN+PHP</td></tr>		
			<tr><td>NGM</td><td>2004.03.1 ~ 2005.08.30</td><td>FLASH DEVELOPER</td><td>FLASH+DESIGN+HTML</td></tr>		
		</table>
		
		<div class="title">/* Portfolio  */</div>
		<table>
			<tr><th>Name</th><th>Company</th><th>Term</th><th>Role</th></tr>					
			<tr><td><a href="http://www.tworlddirect.com/" target="_blank">SK Tworld Direct</a></td><td>SKT</td><td>2013.04.01 ~ 2013.09.30</td><td>FRONT-END. DEV (PL)</td></tr>		
			<tr><td>GRAYBLUE</td><td>2007.12.1 ~ 2008.07.20</td><td>FLASH DEVELOPER -PL-</td><td>FLASH+ACTION SCRIPT</td></tr>		
			<tr><td>MULTI-WIDE</td><td>2005.10.1 ~ 2006.12.30</td><td>WEB DEVELOPER</td><td>HTML+DESIGN+PHP</td></tr>		
			<tr><td>NGM</td><td>2004.03.1 ~ 2005.08.30</td><td>FLASH DEVELOPER</td><td>FLASH+DESIGN+HTML</td></tr>		
		</table>	
	</section>			 
</article><!-- article End -->
<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.footer.php"); ?>