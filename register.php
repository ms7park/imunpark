<?php
    include "common/_top.php"
?>

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


<?php
    include "common/_tail.php"
?>