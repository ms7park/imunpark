<!DOCTYPE html>
<!-- saved from url=(0050)https://www.im594.co.kr/html/customer/register.php -->
<html lang="ko"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">

    <title>이문 아이파크 자이 오피스텔 IM594</title>
    <!-- SEO meta tag -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="date" content="">
    <meta name="sitecode" content="">
    <!-- // SEO meta tag -->

    <!-- Open Graph -->
    <meta property="og:url" content="https://www.i-park.com">
    <meta property="og:image" content="../img/common/og_img_kakao_ver.jpg">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="이문 아이파크 자이 오피스텔 IM594">
    <meta property="og:title" content="이문 아이파크 자이 오피스텔 IM594">
    <meta property="og:description" content="이문 아이파크 자이 오피스텔 IM594 공식 홈페이지">
    <!-- // Open Graph -->

    <!-- Icon & Favicon -->
    <link rel="shortcut icon" href="https://www.im594.co.kr/html/img/common/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.im594.co.kr/html/img/common/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.im594.co.kr/html/img/common/favicon.ico">
    <link rel="apple-touch-icon" href="https://www.im594.co.kr/html/img/common/favicon.ico">
    <!-- // Icon & Favicon -->

    <link rel="stylesheet" href="./register_files/libs.css">
    <link rel="stylesheet" href="./register_files/ipark-template.css">

    <!-- Javascript -->
    <script type="text/javascript" async="" src="./register_files/destination"></script><script type="text/javascript" async="" src="./register_files/js"></script><script async="" src="./register_files/gtm.js"></script><script src="./register_files/swiper.min.js"></script>
    <script src="./register_files/vendor.min.js"></script>
    <script src="./register_files/common.js"></script>
    <script src="./register_files/main.js"></script>
    <script src="./register_files/sub.js"></script>
    <!-- // Javascript -->

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TRF895T');</script>
	<!-- End Google Tag Manager -->

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TRF895T"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- 네이버 애널리틱스 -->
	<script type="text/javascript" src="./register_files/wcslog.js"></script>
	<script type="text/javascript">
	if(!wcs_add) var wcs_add = {};
	wcs_add["wa"] = "1fe298879b1cf00";
	if(window.wcs) {
	  wcs_do();
	}
	</script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#c_edomian").change(function(){
			if( $.trim($("#c_edomian option:selected").val())=="" ){
				$("#c_email2").val("");
			}else{
				$("#c_email2").val($("#c_edomian option:selected").val());
			}
		});
	});

	function _onSubmit() {
		var frm = document.customer_register;

		if(!checkText(frm.c_name,"성명을 입력해 주세요.")) return false;

		if((frm.c_gender[0].checked==false)&&(frm.c_gender[1].checked==false)){
			alert("분류를 선택해 주세요.");
			return false;
		}

		if((frm.c_age[0].checked==false) && (frm.c_age[1].checked==false) && (frm.c_age[2].checked==false) ){
			alert("관심층을 선택해 주세요.");
			return false;
		}


		if(!checkText(frm.c_mobile1,"휴대폰번호를 입력해 주세요.")) return false;
		if(!checkText(frm.c_mobile2,"휴대폰번호를 입력해 주세요.")) return false;
		if(!checkText(frm.c_mobile3,"휴대폰번호를 입력해 주세요.")) return false;

		if(!checkText(frm.c_sido,"주소 도/시를 입력해 주세요.")) return false;
		if(!checkText(frm.c_gugun,"주소 시/군/구를 입력해 주세요.")) return false;
		if(!checkText(frm.c_dong,"주소 읍/면/동를 입력해 주세요.")) return false;



		if(frm.is_agree1[0].checked==false){
			alert("개인정보 수집 및 이용목적에 동의해 주세요.");
			return false;
		}
		if(frm.is_agree2[0].checked==false){
			alert("개인정보 분양마케팅 활용 이용동의에 동의해 주세요.");
			return false;
		}
		if(frm.is_agree3[0].checked==false){
			alert("개인정보의 취급위탁에 동의해 주세요.");
			return false;
		}

	}


	function checkText(f, alertText) {
		if (f.value == "")
		{
			alert(alertText);
			return false;
		}

		return true;
	}
</script><script type="text/javascript" async="" src="./register_files/f.txt"></script></head>





<body style="background:#fff; color:#000">
	<div id="wrap">
		<div id="contents">
			<div class="inner_1200">
                <div class="con_title"> <span></span></div>
				<div class="sub_section customer">

				<h4>개인정보 수집 및 이용에 대한 안내</h4>
				<p class="cus_text">
					이문 아이파크 자이 오피스텔 IM594는 관심고객등록을 위해 아래와 같이 개인정보를 수집하고 있습니다. <br>
					이에 개인정보 수집 및 이용에 대해 안내해 드리니 충분히 읽어보신 후 동의하여 주시기 바랍니다.
				</p>
				<form id="customer_register" name="customer_register" method="post" action="https://www.im594.co.kr/html/customer/register_ok.php" onsubmit="return _onSubmit();">
				<input type="hidden" name="mode" value="proc">
				<div class="policy">
						<strong>이문 아이파크 자이 오피스텔 IM594 분양 홈페이지 는 서비스 이용을 위해 필요한 최소한의 범위로 개인정보를 수집합니다.</strong><br><br>


						<strong>1. 수집하는 개인정보 항목</strong><br>
						회사는 관심고객등록을 통하여 아래와 같은 개인정보를 수집하고 있습니다.<br><br>

						- 수집항목 : 이름 , 휴대전화번호 , 서비스 이용기록 , 접속 로그 , 쿠키 , 접속 IP 정보 등<br>
						- 개인정보 수집방법 : 홈페이지(관심고객등록 및 설문조사) , 경품 행사 응모 , 이벤트 응모 또한, 귀하께서 이문 아이파크 자이 오피스텔 IM594 홈페이지의 개인정보 수집/이용, 개인정보 처리위탁의 내용에 대해
						각각 「동의」버튼 또는 「비동의」버튼을 클릭할 수 있는 절차를 마련하여, 각각의 「동의」버튼을 클릭하면 해당 사항을 동의한 것으로 간주합니다.<br><br>

						<strong>2. 개인정보의 수집 및 이용목적</strong><br>
						개인정보 항목별 구체적인 수집 및 이용목적은 다음과 같습니다.<br><br>
						- 이름, 전화번호 : 고지사항 전달, 불만처리 등을 위한 원활한 의사소통 경로의 확보, 새로운 서비스 및 뉴스, 이벤트 정보 등의 안내<br>
						- 이름, 주소, 전화번호 : 경품 배송에 대한 정확한 배송지의 확보<br><br>

						<strong>3. 개인정보의 보유 및 이용기간</strong><br>
						보유 및 이용기간 : 개인정보 수집 후 6개월까지<br><br>
						- 파기절차 : 별도 DB 이관 후 일정 기간 저장 후 파기<br>
						- 파기방법 : 종이 출력 정보 - 분쇄 또는 소각, 전자 파일 정보 - 재생 불가능한 기술 방법 사용<br><br>


						<strong>4. 개인정보 수집 동의 거부권</strong><br>
						모든 고객은 동의를 거부할 수 있으며, 동의를 거부할 경우 관심고객으로 등록이 불가합니다.<br><br>
				</div>

				<div class="check mb30">
					<p>① 개인정보 수집 및 이용목적에 동의하십니까? (필수)
					<span><input type="radio" name="is_agree1" id="check1" value="Y"><label for="check1">동의</label>  <input type="radio" name="is_agree1" id="check2" value="N"><label for="check2">동의하지않음</label></span></p>
					<p>② 개인정보는 분양마케팅에 활용됩니다. 동의하십니까? (필수)
					<span><input type="radio" name="is_agree2" id="check3" value="Y"><label for="check3">동의</label>  <input type="radio" name="is_agree2" id="check4" value="N"><label for="check4">동의하지않음</label></span></p>

					<h4 class="mt15">개인정보 취급 위탁동의</h4>
					<table class="tb_type1 mt15">
						<thead>
							<tr>
								<th>개인정보 취급을 받는자(수탁자)</th>
								<th>개인정보 취급 위탁을 하는 업무의 내용</th>
							</tr>
						</thead>
							<tbody>
							<tr>
								<td>SEOBO C&amp;D, ㈜산하E&amp;C</td>
								<td>분양마케팅 업무대행(안내, 상담, 기타 서비스 등)</td>
							</tr>

							<tr>
								<td>유진엠㈜, 한양기획㈜</td>
								<td>정보시스템 운영 및 광고대행 등</td>
							</tr>

							<tr>
								<td>㈜디노위버</td>
								<td>분양 홈페이지 관리, 운영</td>
							</tr>

							</tbody>
						</table>
						<p class="mt10">※ 서비스 제공을 위해서 필요한 최소한의 개인정보이므로 동의를 해주셔야 서비스를 이용하실 수 있습니다.
							<span><input type="radio" name="is_agree3" id="check5" value="Y"><label for="check5">동의</label>  <input type="radio" name="is_agree3" id="check6" value="N"><label for="check6">동의하지않음</label></span></p>

				</div><br>

				<!-- <div class="check mb30">
					<p>① 개인정보 수집 및 이용목적에 동의하십니까? (필수)
					<span><input type="radio" name="is_agree1" id="check1" value="Y" checked="checked" /><label for="check1">동의</label>  <input type="radio" name="is_agree1" id="check2" value="N" /><label for="check2">동의하지않음</label></span></p>
					<p>② 개인정보는 분양마케팅에 활용됩니다. 동의하십니까? (필수)
					<span><input type="radio" name="is_agree2" id="check3" value="Y" checked="checked" /><label for="check3">동의</label>  <input type="radio" name="is_agree2" id="check4" value="N" /><label for="check4">동의하지않음</label></span></p>
					<p>③ 개인정보의 취급위탁에 동의하십니까? (필수)
					<span><input type="radio" name="is_agree3" id="check5" value="Y" checked="checked" /><label for="check5">동의</label>  <input type="radio" name="is_agree3" id="check6" value="N" /><label for="check6">동의하지않음</label></span></p>
				</div><br> -->



				<h4 class="mt60">개인정보 등록</h4>
				<table class="board-write">
				<!--
				    <tr>
						<th><span>*</span>구분</th>
						<td>
							<input type="radio" name="type"  value="오피스텔"  title="오피스텔" checked>
							<label for="">오피스텔</label>&nbsp;&nbsp;&nbsp;&nbsp;
							 <input type="radio" name="type"  value="상업시설"  title="여상업시설>
							<label for="" class="ml5">상업시설</label>
						</td>
					</tr>
					-->
					<tbody><tr>
						<th><span>*</span>이름</th>
						<td><input type="text" class="width1" name="c_name" id="c_name" title="이름" required=""></td>
					</tr>
					<!-- <tr>
						<th><span>*</span>분류</th>
						<td>
							<input type="radio" name="c_gender" id="c_gender_m" value="상가"  title="상가">
							<label for="c_gender_m">상가</label>&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" name="c_gender" id="c_gender_w" value="오피스텔"  title="오피스텔">
							<label for="c_gender_w" class="ml5">오피스텔</label>
						</td>
					</tr> -->
					<!-- <tr>
						<th><span>*</span>관심층</th>
						<td>
							<input type="radio" name="c_age" id="1F" value="1F"  title="1F">
							<label for="1F" class="ml5">1F</label>&nbsp;&nbsp;&nbsp;&nbsp;

							<input type="radio" name="c_age" id="2F" value="2F"  title="2F">
							<label for="2F" class="ml5">2F</label>&nbsp;&nbsp;&nbsp;&nbsp;

							<input type="radio" name="c_age" id="3F" value="3F"  title="3F">
							<label for="3F" class="ml5">3F</label>
						</td>
					</tr> -->
					<tr>
						<th><span>*</span>휴대전화</th>
						<td><input type="text" class="width2" name="c_mobile1" id="c_mobile1" title="휴대전화" required="" maxlength="4"> &nbsp;- &nbsp;
							<input type="text" class="width2" name="c_mobile2" id="c_mobile2" title="휴대전화" required="" maxlength="4"> &nbsp;- &nbsp;
							<input type="text" class="width2" name="c_mobile3" id="c_mobile3" title="휴대전화" required="" maxlength="4">
						</td>
					</tr>

					<tr>
						<th><span>*</span>주소</th>
						<td>


							<select name="c_sido" id="c_sido" class="add" onchange="changeAddr1();">
								<option value="">도/시</option>
								<option value="강원도">강원도</option>
								<option value="경기도">경기도</option>
								<option value="경상남도">경상남도</option>
								<option value="경상북도">경상북도</option>
								<option value="광주광역시">광주광역시</option>
								<option value="대구광역시">대구광역시</option>
								<option value="대전광역시">대전광역시</option>
								<option value="부산광역시">부산광역시</option>
								<option value="서울특별시">서울특별시</option>
								<option value="세종특별자치시">세종특별자치시</option>
								<option value="울산광역시">울산광역시</option>
								<option value="인천광역시">인천광역시</option>
								<option value="전라남도">전라남도</option>
								<option value="전라북도">전라북도</option>
								<option value="제주특별자치도">제주특별자치도</option>
								<option value="충청남도">충청남도</option>
								<option value="충청북도">충청북도</option>
							</select>

							<span id="span_1"><select name="c_gugun" id="c_gugun" class="add" onchange="changeAddr2();"><option value="">시/군/구</option></select></span>

							<span id="span_2"><select name="c_dong" id="c_dong" class="add"><option value="">읍/면/동</option></select></span>
						</td>
					</tr>
				</tbody></table>
				<!-- <p class="mt10 fs14" style="color:#cd1618; "><span>* 표시항목은 필수 입력 사항입니다.</span></p> -->
				<div class="mt30 tc">
					<button type="submit" class="btnPoint" onclick="gtag(&#39;event&#39;, &#39;CompleteRegistration&#39;, {   &#39;event_category&#39; : &#39;이문 아이파크 자이 오피스텔 IM594&#39;,   &#39;event_label&#39; : &#39;등록하기&#39; });">등록</button>
				</div>
				</form>
			</div>
			</div>
		</div>
		<!-- //contents -->





	</div>
	<!-- //wrap -->










<script>
function changeAddr1(){
	var targetUrl;
	var c_sido = document.customer_register.c_sido.value;
	var ua = window.navigator.userAgent;

	if (ua.indexOf("MSIE")>0||ua.indexOf("Trident")>0)
	{
		c_sido = encodeURI(c_sido);
	}

	if(c_sido!=""){
		targetUrl = "/html/customer/register_ajax_address.php?c_sido="+c_sido;
		$.ajax({
			url: targetUrl,
			async: false,
			type: 'GET',
			scriptCharset : 'UTF-8',
			success: function(data){
				$("#span_1").html(data);
			},
			error: function(request,status,error) {
				alert("에러 : " + error);
				return;
			}
		});
	}
}
</script>

<script>
function changeAddr2(){
	var targetUrl;
	var c_sido = document.customer_register.c_sido.value;
	var c_gugun = document.customer_register.c_gugun.value;
	var ua = window.navigator.userAgent;

	if (ua.indexOf("MSIE")>0||ua.indexOf("Trident")>0)
	{
		c_sido = encodeURI(c_sido);
		c_gugun = encodeURI(c_gugun);
	}

	if((c_sido!="")&&(c_gugun!="")){
		targetUrl = "/html/customer/register_ajax_address.php?c_sido="+c_sido+"&c_gugun="+c_gugun;
		$.ajax({
			url: targetUrl,
			async: false,
			type: 'GET',
			scriptCharset : 'UTF-8',
			success: function(data){
				$("#span_2").html(data);
			},
			error: function(request,status,error) {
				alert("에러 : " + error);
				return;
			}
		});
	}
}
</script>
<script id="logwatch-version-script" type="text/javascript" src="chrome-extension://ejcfaoljoljggllehfnoddphnehofdcd/js/web_accessible_resources.js" data-tab-id="209246354"></script></body><whale-quicksearch translate="no"><template shadowrootmode="closed"><style></style><div class="quicksearch mac"></div></template></whale-quicksearch><widget-window style="opacity: 1; background-color: rgb(255, 255, 255); border: 1px solid rgb(135, 132, 129); width: auto; height: auto; display: none;"><template shadowrootmode="open">
<style>*{margin:0;padding:0;user-select:none}#content{display:grid;grid-template-rows:40px calc(100% - 55px) 15px;height:100%;grid-template-columns:100%;box-sizing:border-box}#header{overflow:hidden;z-index:2000;height:40px;margin-bottom:-1px;font-family:Helvetica,sans-serif;font-size:12px;line-height:1.25em;box-sizing:border-box;cursor:move}#header h1{margin-left:10px;height:39px;font-weight:normal;color:#878481;position:relative;display:inline-block;white-space:nowrap;box-sizing:border-box;padding:14px 5px;font-size:12px;letter-spacing:-0.05em;font-weight:normal;align-content:center}#header #opacity-bar{-webkit-appearance:none;position:absolute;right:35px;top:18px;width:50px;margin-right:10px}#header #opacity-bar:focus{outline:none}#header #opacity-bar::-webkit-slider-runnable-track{width:100%;height:3px;cursor:pointer;border-radius:2px;background:#878481}#header #opacity-bar::-webkit-slider-thumb{border:0px;border-radius:100%;height:10px;width:10px;background:#c3c2c0;cursor:pointer;-webkit-appearance:none;margin-top:-3px}.window-close{position:absolute;right:0;top:0;padding:10px;cursor:pointer}.window-close:hover{filter:brightness(0%)}#header:active::before{position:fixed;content:"";top:0;left:0;width:100vw;height:100vh;background-color:rgba(0,0,0,0)}table#main{overflow:hidden;width:100%;height:100%;min-height:44px;grid-template-rows:30px calc(100% - 30px);box-sizing:border-box;display:grid;border-spacing:2px;position:relative}table#main thead{border-bottom:1px solid #eee;margin:0 5px}table#main thead tr{display:grid;grid-template-columns:auto 75px 65px 75px;font-size:12px;line-height:1.7em;font-family:sans-serif}table#main thead tr th{clip:auto;height:34px;line-height:34px;font-size:12px;color:#878481;position:static !important;font-weight:normal}table#main tbody{overflow-y:scroll;height:100%;text-align:center}table#main tbody::-webkit-scrollbar{width:5px}table#main tbody::-webkit-scrollbar-thumb{background-color:rgba(135,132,129,.4);border-radius:5px}table#main tbody tr{display:grid;height:22px;grid-template-columns:auto 75px 65px 75px;font-size:12px;line-height:1.7em;font-family:sans-serif}table#main tbody tr td{padding-top:2px;font-size:12px;line-height:1.7em;font-family:sans-serif;color:#666;border-bottom:1px solid #eee}table#main tbody tr td:first-child{text-align:left;padding-left:15px;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;margin-left:5px}table#main tbody tr td:nth-child(2){text-align:right;font-size:11px}table#main tbody tr td:nth-child(3){text-align:right;font-size:11px}table#main tbody tr td:nth-child(3).lower-stock{color:#017eff}table#main tbody tr td:nth-child(3).upper-stock{color:#e12301}table#main tbody tr td:nth-child(4){font-family:sans-serif;position:relative}table#main tbody tr td:nth-child(4) span{position:absolute;width:55px;height:22px;right:15px;text-align:right;font-size:11px}table#main tbody tr td:nth-child(4) span.lower-stock{color:#017eff}table#main tbody tr td:nth-child(4) span.upper-stock{color:#e12301}.icon{width:8px;margin-right:3px;display:inline-block;vertical-align:middle;overflow:hidden}*::-webkit-scrollbar:not(tbody){width:0}</style>
<div id="content">
    <div id="header">
        <h1 id="widget-title">undefined</h1>
        <input id="opacity-bar" type="range" min="1" max="100" style="opacity: 0.31;">
        <span class="window-close" style="opacity: 0.31;"><img alt="미니위젯 닫기" class="window-close" src="chrome-extension://loboidpmlojcalnkgelcncghllmkiico/img/close.svg" width="20" height="20" style="opacity: 0.31;"></span>
    </div>
    <table id="main">
        <thead>
            <tr>
                <th>종목</th>
                <th>시세</th>
                <th>전일비</th>
                <th>등락률</th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
    <div id="footer"></div>
</div></template></widget-window></html>