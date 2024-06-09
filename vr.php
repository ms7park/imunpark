<?php
    include "common/_top.php"
?>

    <!-- Contents -->
    <main id="content" class="container page_vr">

      <section class="section section_sub_top is-active">
        <div class="section_inner">
          <div class="sub_top_txt is-show">
            <h2 class="section_tit">e-모델하우스</h2>
            <strong class="sub_top_tit">각 공간에 최적화된<br>공간을 VR를 통해 경험해보세요.</strong>
          </div>
          <div class="sub_top_imgbox is-show">
            <img src="./images/vr_KV.jpg" alt="" class="media_pc">
            <img src="./images/vr_KV_mobile.jpg" alt="" class="media_tablet">
          </div>
        </div>
      </section>
      <section class="section tab_wrap">
        <div class="section_inner">
          <!-- [D] 탭 형태 클래스 추가 : type_capsule, type_dot, type_title, type_underline -->
          <!-- <div class="tab type_block">
            <div class="tab_area">
              <ul class="tab_list" role="tablist">
                <li class="tab_item is-active" role="none">
                  <button type="button" class="tab_btn" role="tab" aria-selected="true">59A Type</button>
                </li>
                <li class="tab_item" role="none">
                  <button type="button" class="tab_btn" role="tab" aria-selected="false">84B Type</button>
                </li>
              </ul>
            </div>
          </div> -->
          <div class="cont">
            <div class="tab_cont_item is-show" role="tabpanel">
              <h3 class="sub_content_tit">24㎡A</h3>
              <div class="vr_wrap">
                <div class="vr_item" role="tabpanel">
                  <iframe src="./html/vr.html" frameborder="0"></iframe>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    </main>
    <!-- // Contents -->


<?php
    include "common/_tail.php"
?>