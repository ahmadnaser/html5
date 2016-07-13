<!--
	key
	f00bef9a4c1efbdca4ee32ef00865dcf
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en_US" xml:lang="en_US">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7">
	<title>OpenAPI Map Test - 마커, InfoWindow 테스트</title>
	<!-- prevent IE6 flickering -->
	<script type="text/javascript"> try {document.execCommand('BackgroundImageCache', false, true);} catch(e) {} </script>
	<script type="text/javascript" src="http://openapi.map.naver.com/openapi/naverMap.naver?ver=2.0&key=cd6e8fa37fb88ed57e4c378dc2d636fd"></script>
</head>
 <body>
<div id = "testMap" style="border:1px solid #000; width:500px; height:400px; margin:20px;"></div>
<script type="text/javascript">
	// cd6e8fa37fb88ed57e4c378dc2d636fd
 	function revertPanning() {
            oMap.setCenter(oPoint); // - 지도 생성시 지정한 중심점으로 중심점을 설정한다.
    }
                        
	var oCenterPoint = new nhn.api.map.LatLng(37.5224254, 127.0480347);
	nhn.api.map.setDefaultPoint('LatLng');
	oMap = new nhn.api.map.Map('testMap', {
                point : oCenterPoint,
                zoom : 12, // - 초기 줌 레벨은 10으로 둔다.
                enableWheelZoom : true,
                enableDragPan : true,
                enableDblClickZoom : false,
                mapMode : 0,
                activateTrafficMap : false,
                activateBicycleMap : false,
                minMaxLevel : [ 1, 14 ],
                size : new nhn.api.map.Size(500, 400)
	});

	var oPoint = new nhn.api.map.LatLng(37.5224254, 127.0480347); //LatLng 값이 y, x 좌표                         
	var oSize = new nhn.api.map.Size(28, 37);	// 마커 사이즈
	var oOffset = new nhn.api.map.Size(14, 37);	// 마커 위치
	var oIcon = new nhn.api.map.Icon('http://static.naver.com/maps2/icons/pin_spot2.png', oSize, oOffset);  //icon 이미지를 바꿔서 사용할 수 있습니다. 			   
	var oMarker = new nhn.api.map.Marker(oIcon, { title : '타이틀' }); 
	oMarker.setPoint(oPoint);     
	oMap.addOverlay(oMarker); 
	 
	 var mapZoom = new nhn.api.map.ZoomControl(); // - 줌 컨트롤 선언
    mapZoom.setPosition({left:10, bottom:20}); // - 줌 컨트롤 위치 지정
    oMap.addControl(mapZoom); // - 줌 컨트롤 추가. 
    
	var trafficButton = new nhn.api.map.TrafficMapBtn(); // - 실시간 교통지도 버튼 선언
	trafficButton.setPosition({top:10, left:10}); // - 실시간 교통지도 버튼 위치 지정
	oMap.addControl(trafficButton);
       
    var mapTypeChangeButton = new nhn.api.map.MapTypeBtn(); // - 지도 타입 버튼 선언
    mapTypeChangeButton.setPosition({top:10, left:80}); // - 지도 타입 버튼 위치 지정
    oMap.addControl(mapTypeChangeButton);
    
</script>

	<button onclick="revertPanning();">위치 원래대로</button>
</body>
</html>