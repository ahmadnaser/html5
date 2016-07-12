<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.header.php"); ?>
<script type="text/javascript" src="/src/js/lib/iscroll/iscroll.js"></script>
<article id="contents">
	<div class="class-wrap ui-iscroll-cnt"><!--  scroll 감싸고있는부분-->
		<div class="scroller"><!-- 실제 스크롤링이 되는 컨텐츠 영역 -->
			<ul>
				<li>Pretty row 1</li>
				<li>Pretty row 2</li>
				<li>Pretty row 3</li>
				<li>Pretty row 4</li>
				<li>Pretty row 5</li>
				<li>Pretty row 6</li>
				<li>Pretty row 7</li>
				<li><a href="#" onclick="javascript:alert('gogo');">Pretty row 8</a></li>
				<li>Pretty row 9</li>
				<li>Pretty row 10</li>
				<li>Pretty row 11</li>
				<li>Pretty row 12</li>
				<li>Pretty row 13</li>
				<li>Pretty row 14</li>
				<li>Pretty row 15</li>
				<li>Pretty row 16</li>
				<li>Pretty row 17</li>
				<li>Pretty row 18</li>
				<li>Pretty row 19</li>
				<li>Pretty row 20</li>
				<li>Pretty row 21</li>
				<li>Pretty row 22</li>
				<li>Pretty row 23</li>
				<li>Pretty row 24</li>
				<li>Pretty row 25</li>
				<li>Pretty row 26</li>
				<li>Pretty row 27</li>
				<li>Pretty row 28</li>
				<li>Pretty row 29</li>
				<li>Pretty row 30</li>
				<li>Pretty row 31</li>
				<li>Pretty row 32</li>
				<li>Pretty row 33</li>
				<li>Pretty row 34</li>
				<li>Pretty row 35</li>
				<li>Pretty row 36</li>
				<li>Pretty row 37</li>
				<li>Pretty row 38</li>
				<li>Pretty row 39</li>
				<li>Pretty row 40</li>
				<li>Pretty row 41</li>
				<li>Pretty row 42</li>
				<li>Pretty row 43</li>
				<li>Pretty row 44</li>
				<li>Pretty row 45</li>
				<li>Pretty row 46</li>
				<li>Pretty row 47</li>
				<li>Pretty row 48</li>
				<li>Pretty row 49</li>
				<li>Pretty row 50</li>
			</ul>			
		</div>
	</div>
	<p stype="padding-top:100px;">sdkfjlsd</p>
	<div class="class-wrap ui-iscroll-cnt" style="top:50%;"><!--  scroll 감싸고있는부분-->
		<div class="scroller"><!-- 실제 스크롤링이 되는 컨텐츠 영역 -->
			<ul>
				<li>Pretty row 1</li>
				<li>Pretty row 2</li>
				<li>Pretty row 3</li>
				<li>Pretty row 4</li>
				<li>Pretty row 5</li>
				<li>Pretty row 6</li>
				<li>Pretty row 7</li>
				<li><a href="#" onclick="javascript:alert('gogo');">Pretty row 8</a></li>
				<li>Pretty row 9</li>
				<li>Pretty row 10</li>
				<li>Pretty row 11</li>
				<li>Pretty row 12</li>
				<li>Pretty row 13</li>
				<li>Pretty row 14</li>
				<li>Pretty row 15</li>
				<li>Pretty row 16</li>
				<li>Pretty row 17</li>
				<li>Pretty row 18</li>
				<li>Pretty row 19</li>
				<li>Pretty row 20</li>
				<li>Pretty row 21</li>
				<li>Pretty row 22</li>
				<li>Pretty row 23</li>
				<li>Pretty row 24</li>
				<li>Pretty row 25</li>
				<li>Pretty row 26</li>
				<li>Pretty row 27</li>
				<li>Pretty row 28</li>
				<li>Pretty row 29</li>
				<li>Pretty row 30</li>
				<li>Pretty row 31</li>
				<li>Pretty row 32</li>
				<li>Pretty row 33</li>
				<li>Pretty row 34</li>
				<li>Pretty row 35</li>
				<li>Pretty row 36</li>
				<li>Pretty row 37</li>
				<li>Pretty row 38</li>
				<li>Pretty row 39</li>
				<li>Pretty row 40</li>
				<li>Pretty row 41</li>
				<li>Pretty row 42</li>
				<li>Pretty row 43</li>
				<li>Pretty row 44</li>
				<li>Pretty row 45</li>
				<li>Pretty row 46</li>
				<li>Pretty row 47</li>
				<li>Pretty row 48</li>
				<li>Pretty row 49</li>
				<li>Pretty row 50</li>
			</ul>			
		</div>
	</div>
</article><!-- article End -->
<style type="text/css">
* {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}


body {
	font-size: 12px;
	font-family: ubuntu, helvetica, arial;
	overflow: hidden; /* this is important to prevent the whole page to bounce */
}



.class-wrap {
	position: absolute;
	z-index: 1;
	top: 10%;
	bottom: 10%;
	left: 0;
	width: 100%;
	background: #ccc;
	overflow: hidden;
	height:200px;
}

.scroller {
	position: absolute;
	z-index: 1;
	-webkit-tap-highlight-color: rgba(0,0,0,0);
	width: 100%;
	-webkit-transform: translateZ(0);
	-moz-transform: translateZ(0);
	-ms-transform: translateZ(0);
	-o-transform: translateZ(0);
	transform: translateZ(0);
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	-webkit-text-size-adjust: none;
	-moz-text-size-adjust: none;
	-ms-text-size-adjust: none;
	-o-text-size-adjust: none;
	text-size-adjust: none;
}

.scroller ul {
	list-style: none;
	padding: 0;
	margin: 0;
	width: 100%;
	text-align: left;
}

.scroller li {
	padding: 0 10px;
	height: 40px;
	line-height: 40px;
	border-bottom: 1px solid #ccc;
	border-top: 1px solid #fff;
	background-color: #fafafa;
	font-size: 14px;
}
</style>
<script type="text/javascript">
(function($){
	/*
	 iscroll 처음에 display:none;  되어있으면 계산이 안됨. visibility:hidden 혹은 opacity:0px 같은것으로 대체한다.
	 **/
	$(document).ready(function(){
		var _iscroll = $('.ui-iscroll-cnt');
			_iscroll.each(function(idx) {
				var _wrapper = $(this).get(0);
				var _iscr = new IScroll(_wrapper, {
					scrollbars : true,
					mouseWheel : true,
					interactiveScrollbars : true,
					shrinkScrollbars : 'scale',
					fadeScrollbars : true,
					click: true
					
				});
			});
			
		
		//myScroll = new IScroll('#wrapper', { mouseWheel: true, click: true });
		//document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
	});
})($);
</script>
<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.footer.php"); ?>