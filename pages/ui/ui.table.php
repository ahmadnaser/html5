<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.header.php"); ?>
<style type="text/css">
	.d_desc {margin:0 20px 20px 20px; padding:9px; border:1px dashed #BDBFC2; background:#f5f5f5; font-size:12px; line-height:15px; }
	
	.wrapper { padding: 200px; } 
	.ui-table-wrap { border-top:1px solid #FF0000; width:800px;}
	.ui-table {  }
	.ui-table td , .ui-table th { border-left: 1px solid #1423BA; border-bottom:1px solid #1423BA; }
</style>

<article id="contents">
	<div class="wrapper"> 
		<div class="ui-table-wrap">
			<table class="ui-table" summary="table에 대한 상세 설명">
			<caption>테이블 표 제목 ex) 결제에 대한 상세표.</caption>
			<colgroup>
				<col width="15%">
				<col width="*">
				<col width="35%">
			</colgroup>
			<thead>
				<tr>
					<th scope="col">결제수단</th>
					<th scope="col">설명</th>
					<th scope="col">비고</th>
				</tr>
			</thead>
			<!-- <tfoot>
				<tr>
					<td>aaaa</td>
					<td>ssss</td>
					<td>cccc</td>
				</tr>
			</tfoot> -->
			<tbody>
				<tr>
					<th scope="row">N(new)</th>
					<td>개통 이력만 있는 미사용 기기로 외관상 사용감이 전혀 없는 상태</td>
					<td rowspan="3">기능 이상이 없으며 정상 작동되는 단말</td>
				</tr>
				<tr>
					<th scope="row">A</th>
					<td>사용 흔적 있으나 외관 균열/깨짐이 없고 도색/변색이 심하지 않은 상태
						<ul>
							<li>- 외관 케이스/버튼에 금이 가거나 떨어진 부분이 없고 버튼 숫자 식별 가능한 상태</li>
						</ul>
					</td> 
				</tr>
				<tr>
					<th scope="row">B</th>
					<td>사용 흔적 있으나 외관 균열/깨짐이 없고 도색/변색이 심하지 않은 상태
						<ul>
							<li>- 외관 케이스/버튼에 금이 가거나 떨어진 부분이 없고 버튼 숫자 식별 가능한 상태</li>
						</ul>
					</td> 
				</tr>
				<tr>
					<th scope="row">불량</th>
					<td>극심한 파손 및 고장으로 사용이 불가능한 상태 또는 침수 흔적이 있는 단말
						<ul>
							<li>- 침수된 기기(외관 부식 및 침수지 변색)</li>
							<li>- 배터리 변형 (부풀음) 및 충전 불가 상태</li>
							<li>- 화면/버튼/카메라/벨/진동 등 기능 이상이 있는 상태</li>
							<li>- 외관 틈이 벌어져 내부 화로가 보이는 상태</li>
						</ul>
					</td>												
					<td>기능 이상 또는 정상 작동 불가 단말</td>
				</tr>
			</tbody>
		</table>
		</div>
			
		<div class="dtable_desc">
			<ul class="note">
				<li>구매/배송/반품/AS 관련 문의 시 고객님의 주문번호를 써주시면 더 자세한 상담이 가능합니다.</li>
				<li>상담/문의 내용 및 답변은 비공개로 설정되며, 작성자 본인만 확인 가능합니다.</li>
				<li>해당 서비스와 관계 없거나 음란성, 광고글, 비방글, 욕설 등은 임의로 삭제될 수 있습니다.</li>
			</ul>
		</div>
	</div>
</article><!-- article End -->
<?php include($_SERVER['DOCUMENT_ROOT']."/pages/inc/inc.footer.php"); ?>