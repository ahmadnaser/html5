<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<title>ADMIN</title>
		<!--[if lt IE 9]><script type="text/javascript" src="/src/js/lib/html5/html5.js"></script><![endif]-->				
		<script type="text/javascript" src="/src/js/lib/jquery/jquery.js"></script>
		<script type="text/javascript" src="/src/js/framework/core/core.js"></script>
		<script type="text/javascript" src="/src/js/common/common.bind.js"></script>
		<link type="text/css" rel="stylesheet"   href="/src/css/common/basic.css" />
		<link type="text/css" rel="stylesheet" href="/src/syntaxhighlighter/css/shCoreRDark.css" />
		<script type="text/javascript" src="/src/syntaxhighlighter/js/shCore.js"></script>
		<script type="text/javascript" src="/src/syntaxhighlighter/js/shBrushXml.js"></script>
		<script type="text/javascript">
		     SyntaxHighlighter.config.stripBrs = true;
		     SyntaxHighlighter.defaults.toolbar = false;
		     SyntaxHighlighter.all();
		</script>
		<style>
			.syntaxhighlighter   { font-size:14px !important; }
		</style>
	</head>
	<body>
		<div style="margin:100px;">
		    <span><a href="http://http://alexgorbatchev.com/SyntaxHighlighter/download/">http://alexgorbatchev.com/SyntaxHighlighter/download/</a></span>
		</div>
		<!------------------------------------------------------------------------------------------------------------------------------------------------>
		<!-- 하이라이트 줄 설정-->
		<pre class="brush:html; highlight:[11, 4, 23, 19]">
			<div class="login">
				<div class="lang">
					<select name="" id="">
						<option value="val1" selected="selected">언어선택</option>
						<option value="val2">KOREAN</option>
						<option value="val3">ENGLISH</option>
						<option value="val4">CHINA</option>
					</select>
				</div>
				<div class="wrap">
					<dl>
						<dt>ID</dt>
						<dd><input class="ui-placeholder" type="text" value="아이디" maxlength="30"></dd>
					</dl>
					<dl class="last">
						<dt>PW</dt>
						<dd><input type="password" value="" maxlength="30"></dd>
					</dl>
					<a class="submit" href="#"><span>LOGIN</span></a>
				</div><!-- login wrap-->
				<div class="info"><span>이 시스템은 ADMIN 업무관리 시스템으로 임직원을 위한 공간입니다</span></div>
			</div><!-- login -->
		</pre>
		<!------------------------------------------------------------------------------------------------------------------------------------------------>
	</body>
</html>