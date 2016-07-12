<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.header.php"); ?>
<style type="text/css">
	.d_desc {margin:0 20px 20px 20px; padding:9px; border:1px dashed #BDBFC2; background:#f5f5f5; font-size:12px; line-height:15px;}
	
	div.wrapper{width:940px;margin:0 auto;padding:0 30px 36px;position:relative;}
	div#header{background:#f5f5f5;height:72px;border-bottom:1px solid #eee;margin:0;}
	div#header h4{float:left;position:absolute;top:24px;left:145px;border-left:1px solid #ddd;padding-left:14px;}
	div#header h4 small{font-size:14px;font-weight:normal;}
	div#header h4 a,div#header h4 a:visited{font-weight:normal;}
	div.page-header{padding:0 0 8px;margin:18px 0;border-bottom:1px solid #ddd;}
	div.page-header h1{padding:0;margin:0;font-size:24px;line-height:27px;letter-spacing:0;}
	.awesome,.awesome:visited{background:#222 url('http://zurb.com/blog_uploads/0000/0617/alert-overlay.png') repeat-x;display:inline-block;padding:5px 10px 6px;color:#fff;text-decoration:none;-moz-border-radius:5px;-webkit-border-radius:5px;-moz-box-shadow:0 1px 3px rgba(0,0,0,0.5);-webkit-box-shadow:0 1px 3px rgba(0,0,0,0.5);text-shadow:0 -1px 1px rgba(0,0,0,0.25);border-bottom:1px solid rgba(0,0,0,0.25);position:relative;cursor:pointer;}
	.awesome:hover{background-color:#111;color:#fff;}
	.awesome:active{top:1px;}.small.awesome,.small.awesome:visited{font-size:11px;padding;}
	.awesome,.awesome:visited,.medium.awesome,.medium.awesome:visited{font-size:13px;font-weight:bold;line-height:1;text-shadow:0 -1px 1px rgba(0,0,0,0.25);}
	.large.awesome,.large.awesome:visited{font-size:14px;padding:8px 14px 9px;}.green.awesome,.green.awesome:visited{background-color:#91bd09;}
	.green.awesome:hover{background-color:#749a02;}.blue.awesome,.blue.awesome:visited{background-color:#2daebf;}.blue.awesome:hover{background-color:#007d9a;}
	.red.awesome,.red.awesome:visited{background-color:#e33100;}.red.awesome:hover{background-color:#872300;}.magenta.awesome,.magenta.awesome:visited{background-color:#a9014b;}
	.magenta.awesome:hover{background-color:#630030;}.orange.awesome,.orange.awesome:visited{background-color:#ff5c00;}
	.orange.awesome:hover{background-color:#d45500;}.yellow.awesome,.yellow.awesome:visited{background-color:#ffb515;}
	.yellow.awesome:hover{background-color:#fc9200;}
	
</style>
<article id="contents">
	<div class="wrapper">
		<div class="page-header">
			<h1>Buttons on White Background</h1>
		</div>
		<div class="column-row">
			<div class="five columns">
				<a class="large awesome">Super Awesome Button &raquo;</a> <br/><br/>
				<a class="large blue awesome">Awesome Blue Button &raquo;</a> <br/><br/>
				<a class="large magenta awesome">Awesome Magenta Button &raquo;</a> <br/><br/>
				<a class="large red awesome">Awesome Red Button &raquo;</a> <br/><br/>
				<a class="large orange awesome">Awesome Orange Button &raquo;</a> <br/><br/>
				<a class="large yellow awesome">Awesome Yellow Button &raquo;</a>
			</div>
			<div class="five columns">
				<a class="medium awesome">Super Awesome Button &raquo;</a> <br/><br/>
				<a class="medium blue awesome">Awesome Blue Button &raquo;</a> <br/><br/>
				<a class="medium magenta awesome">Awesome Magenta Button &raquo;</a> <br/><br/>
				<a class="medium red awesome">Awesome Red Button &raquo;</a> <br/><br/>
				<a class="medium orange awesome">Awesome Orange Button &raquo;</a> <br/><br/>
				<a class="medium yellow awesome">Awesome Yellow Button &raquo;</a>
			</div>
			<div class="four columns">
				<a class="small awesome">Super Awesome Button &raquo;</a> <br/><br/>
				<a class="small blue awesome">Awesome Blue Button &raquo;</a> <br/><br/>
				<a class="small magenta awesome">Awesome Magenta Button &raquo;</a> <br/><br/>
				<a class="small red awesome">Awesome Red Button &raquo;</a> <br/><br/>
				<a class="small orange awesome">Awesome Orange Button &raquo;</a> <br/><br/>
				<a class="small yellow awesome">Awesome Yellow Button &raquo;</a>
			</div>
		</div>
			<br/><br/>
			<div class="page-header">
				<h1>Same Buttons on Dark Background</h1>
			</div>
			<div style="background: #333; padding: 30px 36px; float: left;">
				<div class="column-row">
					<div class="five columns">
						<a class="large awesome">Super Awesome Button &raquo;</a> <br/><br/>
						<a class="large blue awesome">Awesome Blue Button &raquo;</a> <br/><br/>
						<a class="large magenta awesome">Awesome Magenta Button &raquo;</a> <br/><br/>
						<a class="large red awesome">Awesome Red Button &raquo;</a> <br/><br/>
						<a class="large orange awesome">Awesome Orange Button &raquo;</a> <br/><br/>
						<a class="large yellow awesome">Awesome Yellow Button &raquo;</a>
					</div>
					<div class="five columns">
						<a class="medium awesome">Super Awesome Button &raquo;</a> <br/><br/>
						<a class="medium blue awesome">Awesome Blue Button &raquo;</a> <br/><br/>
						<a class="medium magenta awesome">Awesome Magenta Button &raquo;</a> <br/><br/>
						<a class="medium red awesome">Awesome Red Button &raquo;</a> <br/><br/>
						<a class="medium orange awesome">Awesome Orange Button &raquo;</a> <br/><br/>
						<a class="medium yellow awesome">Awesome Yellow Button &raquo;</a>
					</div>
					<div class="four columns">
						<a class="small awesome">Super Awesome Button &raquo;</a> <br/><br/>
						<a class="small blue awesome">Awesome Blue Button &raquo;</a> <br/><br/>
						<a class="small magenta awesome">Awesome Magenta Button &raquo;</a> <br/><br/>
						<a class="small red awesome">Awesome Red Button &raquo;</a> <br/><br/>
						<a class="small orange awesome">Awesome Orange Button &raquo;</a> <br/><br/>
						<a class="small yellow awesome">Awesome Yellow Button &raquo;</a>
					</div>
				</div>
			</div>
			<br class="clear"/>
			<br/><br/>
			<div class="page-header">
			<h1>Using the Button Element</h1>
			</div>
			<div class="column-row">
				<div class="five columns">
					<button class="large awesome">Super Awesome Button &raquo;</button> <br/><br/>
					<button class="large blue awesome">Awesome Blue Button &raquo;</button> <br/><br/>
					<button class="large magenta awesome">Awesome Magenta Button &raquo;</button> <br/><br/>
					<button class="large red awesome">Awesome Red Button &raquo;</button> <br/><br/>
					<button class="large orange awesome">Awesome Orange Button &raquo;</button> <br/><br/>
					<button class="large yellow awesome">Awesome Yellow Button &raquo;</button>
				</div>
				<div class="five columns">
					<button class="medium awesome">Super Awesome Button &raquo;</button> <br/><br/>
					<button class="medium blue awesome">Awesome Blue Button &raquo;</button> <br/><br/>
					<button class="medium magenta awesome">Awesome Magenta Button &raquo;</button> <br/><br/>
					<button class="medium red awesome">Awesome Red Button &raquo;</button> <br/><br/>
					<button class="medium orange awesome">Awesome Orange Button &raquo;</button> <br/><br/>
					<button class="medium yellow awesome">Awesome Yellow Button &raquo;</button>
				</div>
				<div class="four columns">
					<button class="small awesome">Super Awesome Button &raquo;</button> <br/><br/>
					<button class="small blue awesome">Awesome Blue Button &raquo;</button> <br/><br/>
					<button class="small magenta awesome">Awesome Magenta Button &raquo;</button> <br/><br/>
					<button class="small red awesome">Awesome Red Button &raquo;</button> <br/><br/>
					<button class="small orange awesome">Awesome Orange Button &raquo;</button> <br/><br/>
					<button class="small yellow awesome">Awesome Yellow Button &raquo;</button>
			</div>
		</div>
	</div>
</article><!-- article End -->
<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.footer.php"); ?>