<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.header.php"); ?>
<script type="text/javascript" src="/src/js/framework/util/util.string.js"></script>
<style type="text/css" rel="stylesheet">
	#txtCount {	width:500px; height:300px; border:1px solid #ff0000; background:#FFF4D1;  }
</style>
<script type="text/javascript">
	$(document).ready(function(){	
		util.string.getCount(	{
			target: $('#txtCount'),
			result:$('#control-txt'),
			limit:20
		});	
	});
</script>
<article id="contents">
	 <div id="stringWrap">
	 	<textarea id="txtCount">TEXT</textarea>
	 	<div id="control-txt">xxx/자</div>
	 </div>	
</article><!-- article End -->
<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.footer.php"); ?>