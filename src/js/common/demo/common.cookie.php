<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.header.php"); ?>
<style type="text/css">
    article { width:100%; text-align: center; padding:100px 0;  }
	#popup { display:inline-block; position: relative; width:400px; height:500px; border:1px solid #000000;}
    #popup .ui-day-close { position:absolute; bottom:0; width:100%; background: #B3B3B3; }
    #popup .ui-day-close input {   margin-left:10px;}
    #popup .ui-day-close a {  float: right; margin-right:10px;}
</style>

<article>
	<div id="popup">
        <br><br>
        <div class="cookie">
            <input type="button" value="쿠키만들기" onclick="$(window).setCookie('myCar','TRAX',1);">
            <input type="button" value="쿠키가져오기" onclick="alert($(window).getCookie('myCar'));">
            <input type="button" value="쿠키지우기" onclick="$(window).setCookie('myCar','',-1);">
        </div>
        <div class="ui-day-close">
            <input id="close_id" type="checkbox"><label for="close_id">1일간 열지않음</label>
            <a href="#"><img alt="배너 숨기기" src="http://www.tworlddirect.com/pimg/webeditor/201412/02/20141202101635_file0.gif"></a>
        </div>
	</div>
</article><!-- article End -->
<script type="text/javascript">
    setTimeout(function(){
        var _val=$(window).getCookie('myCar');
        if(_val===undefined){
            //  alert('쿠키가없다.');
        }else{
            //  alert('쿠키있음');
        }
    },1000);

    var _btn = document.getElementById('close_id');
    _btn.addEventListener('change',function(event){
        event.preventDefault();
        var _isChk=this.checked; // true  false
        console.log( _isChk );
        if(_isChk){
            $(window).setCookie('myCar','TRAX',1);
        }else{
            $(window).setCookie('myCar','',-1);
        }
    });
</script>
<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.footer.php"); ?>