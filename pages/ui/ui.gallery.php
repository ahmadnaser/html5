<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.header.php"); ?>
<script type="text/javascript" src="/src/js/framework/ui/ui.slider.js"></script>
<script type="text/javascript">
	(function($){
		$(document).ready(function(){
			var _slider=new ui.Slider({
				container: $('.ui-slider-wrapper'),
				view : $('.ui-slider-view>li'),
				prev : $('.ui-slider-control a.prev'),
				next : $('.ui-slider-control a.next'),
				callback : function(obj){
					$('.ui-slider-text').text(Number(obj.select+1)+" / "+obj.total);
				}
			});
		});
	})($);
</script>
<style type="text/css">	 	
	.wrapper { } 
	.ui-slider-wrapper { margin:0 auto; width:600px; }
	.ui-slider-view { position: relative;  height:600px; border:1px solid #FF0000; }
	.ui-slider-view li { position: absolute; top:0; left:0; width:600px; height:600px; text-align:center;}
	.ui-slider-view li img { display:inline-block;}
	.ui-slider-view li .vm {display:inline-block; height:600px; font-size:0; line-height:0;}
	.ui-slider-view li * {vertical-align:middle;}
	
	.ui-slider-control { text-align: center; padding:30px 0;}
	.ui-slider-control .ui-slider-text { padding:0 10px; }
	.ui-slider-control a.prev.disable , .ui-slider-control a.next.disable  { color:#E2E4E6; }
</style>

<article id="contents">
	<div class="ui-slider-wrapper"> 
		<ul class="ui-slider-view">
			<li><span class="vm">&nbsp;</span><img src="/src/images/common/gallery/img1.jpg"/></li>
			<li><span class="vm">&nbsp;</span><img src="/src/images/common/gallery/img2.jpg"/></li>
			<li><span class="vm">&nbsp;</span><img src="/src/images/common/gallery/img3.jpg"/></li>
			<li><span class="vm">&nbsp;</span><img src="/src/images/common/gallery/img4.jpg"/></li>
			<li><span class="vm">&nbsp;</span><img src="/src/images/common/gallery/img5.jpg"/></li>
			<li><span class="vm">&nbsp;</span><img src="/src/images/common/gallery/img6.jpg"/></li>
			<li><span class="vm">&nbsp;</span><img src="/src/images/common/gallery/img7.jpg"/></li>
		</ul>
		<div class="ui-slider-control">
			<a class="prev" href="#">이전</a>
			<span class="ui-slider-text">1/ 4</span>
			<a class="next" href="#">다음</a>
		</div>	 
	</div>
</article><!-- article End -->
<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.footer.php"); ?>