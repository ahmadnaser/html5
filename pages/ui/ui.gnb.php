<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.header.php"); ?>
<style type="text/css">
	 
	
	.wrapper { padding: 100px; } 
	.ui-navi {width:400px; }
	.ui-navi li {  float: none; }
	.ui-navi > li > a { position:relative;  display: block; padding:10px 20px; background:#CCC; font-weight: bolder; font-size:14px;  }
	.ui-navi > li > a:after { position:absolute; top:5px; right:0; width:3px; height:25px; background:#ff0000; content:'';}
	
	.ui-navi > li > ul.smenu { display:none; }
	.ui-navi > li.on > ul.smenu { display:block; }
	.ui-navi > li > ul.smenu li { }
	.ui-navi > li > ul.smenu li a {display:block; padding:10px 0px 10px 50px; background:#EEE;  }
	

</style>

<article id="contents">
	<div class="wrapper"> 
		<ul class="ui-navi">
			<li>
				<a href="#" class="ui-on-anchor">navi_1111</a>
				<ul class="smenu">
					<li><a href="#">sub_1</a></li>
					<li><a href="#">sub_2</a></li>
					<li><a href="#">sub_3</a></li>
					<li><a href="#">sub_4</a></li>
					<li><a href="#">sub_5</a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="ui-on-anchor">navi_2</a>
				<ul class="smenu">
					<li><a href="#">sub_1</a></li>
					<li><a href="#">sub_2</a></li>
					<li><a href="#">sub_3</a></li>
					<li><a href="#">sub_4</a></li>
					<li><a href="#">sub_5</a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="ui-on-anchor">navi_3</a>
				<ul class="smenu">
					<li><a href="#">sub_1</a></li>
					<li><a href="#">sub_2</a></li>
					<li><a href="#">sub_3</a></li>
					<li><a href="#">sub_4</a></li>
					<li><a href="#">sub_5</a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="ui-on-anchor">navi_4</a>
				<ul class="smenu">
					<li><a href="#">sub_1</a></li>
					<li><a href="#">sub_2</a></li>
					<li><a href="#">sub_3</a></li>
					<li><a href="#">sub_4</a></li>
					<li><a href="#">sub_5</a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="ui-on-anchor">navi_5</a>
				<ul class="smenu">
					<li><a href="#">sub_1</a></li>
					<li><a href="#">sub_2</a></li>
					<li><a href="#">sub_3</a></li>
					<li><a href="#">sub_4</a></li>
					<li><a href="#">sub_5</a></li>
				</ul>
			</li>
			<li>
				<a href="#" class="ui-on-anchor">navi_6</a>
				<ul class="smenu">
					<li><a href="#">sub_1</a></li>
					<li><a href="#">sub_2</a></li>
					<li><a href="#">sub_3</a></li>
					<li><a href="#">sub_4</a></li>
					<li><a href="#">sub_5</a></li>
				</ul>
			</li>
		</ul>
	</div>
</article><!-- article End -->
<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.footer.php"); ?>