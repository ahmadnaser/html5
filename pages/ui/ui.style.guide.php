<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.header.php"); ?>
<style type="text/css">
	.ui-wrap { margin:50px 0px; }
	input::-webkit-input-placeholder, textarea::-webkit-input-placeholder { color: #0000FF; }
	input:-moz-placeholder, textarea:-moz-placeholder { color: #0000FF; }
	input::-moz-placeholder, textarea::-moz-placeholder {color: #0000FF; }
	input:-ms-input-placeholder, textarea:-ms-input-placeholder { color: #0000FF; }
</style>
<article id="contents">
	<div class="ui-wrap">
		<h2>	<span>h2 가로바 width 100% 형태</span></h2>
	</div>
	<div class="ui-wrap">
		<h3><span>h3 가로바 width 100% 형태</span></h3>
	</div>
	<div class="ui-wrap"><!-- placeHolder-->		
		<input placeholder="플레이스 홀더 텍스트 입력 PLACE HOLDER" name="" value"" style="width:400px;">
	</div>
	<div class="ui-wrap" style="width:90%; margin:0px auto;">
		<!-- table list type -->
		<div class="ui-table-wrap">
			<table class="ui-table">
				<colgroup>
					<col width="20%">
					<col width="5%">
					<col width="*">
					<col width="5%">
				</colgroup>
				<tr>
					<th>타이틀 제목_1</th>
					<th>여백</th>
					<th>타이틀 제목_3</th>
					<th class="last">여백</th>
				</tr>
				<tr>
					<td class="list-img"><a href="#"><img src="/src/images/common/gallery/icon_img1.jpg"/></a></td>
					<td>&nbsp;</td>
					<td>내용내용내용내용내용내용내용내용내용내용내용내용내용내용</td>
					<td class="last">&nbsp;</td>
				</tr>
				<tr>
					<td class="list-img"><a href="#"><img src="/src/images/common/gallery/icon_img2.jpg"/></a></td>
					<td>&nbsp;</td>
					<td>내용내용내용내용내용내용내용내용내용내용내용내용내용내용</td>
					<td class="last">&nbsp;</td>
				</tr>
				<tr class="last">
					<td class="list-img"><a href="#"><img src="/src/images/common/gallery/icon_img3.jpg"/></a></td>
					<td>&nbsp;</td>
					<td>내용내용내용내용내용내용내용내용내용내용내용내용내용내용</td>
					<td class="last">&nbsp;</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="ui-wrap">
		<!-- pager -->
		<div class="ui-pager">
			<div class="ui-pager-wrap">
				<a href="#"><span class="circle on">pager</span></a>
				<a href="#"><span class="circle">pager</span></a>
				<a href="#"><span class="circle">pager</span></a>
				<a href="#"><span class="circle">pager</span></a>
				<a href="#"><span class="circle">pager</span></a>
				<a href="#"><span class="circle">pager</span></a>
				<a href="#"><span class="circle">pager</span></a>	
			</div>
		</div>
	</div>
</article><!-- article End -->
<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.footer.php"); ?>