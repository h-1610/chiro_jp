<?php get_header(); ?>

<!--****************************************************************************************************
*   top
****************************************************************************************************-->

<div class="main-view sp-none new-main">
    <img src="<?php echo site_url(); ?>/wp-content/themes/corporate-pro/original/img/topPC.jpg" class="main-view" alt="メイン">
    <!--<p><span class="main-bold">“患者さんの健康に責任を持つ”</span><br>私たちは日本でわずか0.01%の<br>米国公認カイロプラクティックドクターです</p>-->
</div>
<div class="main-view pc-none">
    <img src="<?php echo site_url(); ?>/wp-content/themes/corporate-pro/original/img/topSP.jpg" class="main-view" alt="メイン">
    <!--<p><span class="main-bold">“患者さんの健康に責任を持つ”</span><br>私たちは日本でわずか0.01%の<br>米国公認カイロプラクティックドクターです</p>-->
</div>

<!--****************************************************************************************************
*   news
****************************************************************************************************-->
<!-- //// お知らせ
<section class="flex-fluid">
    <div class="flex-container justify-center">
        <h2 class="homeNews__ttl">お知らせ</h2>
        <ul class="homeNewsItem__ul">
            <?php
            $args = array(
                'posts_per_page' => 4,
            );
            $news_posts = new WP_Query( $args );

            if( $news_posts->have_posts() ):
            while( $news_posts->have_posts() ): $news_posts->the_post();
            $cat = get_the_category();
            $catId = $cat[0]->cat_ID;
            $catName = $cat[0]->name;
            ?>
            <li>
                <a href="<?php the_permalink(); ?>" class="flex-fluid justify-start nowrap">
                    <span class="homeNewsItem__date">
                        <time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y.m.d' ); ?></time>
                    </span>

                    <?php if($catName == "お客様の声") : ?>
                        <span class="homeNewsItem__cat homeNewsItem__cat--customer">
                            <?php echo $catName ?>
                        </span>
                    <?php elseif($catName == "スタジオ情報") : ?>
                        <span class="homeNewsItem__cat homeNewsItem__cat--studio">
                            <?php echo $catName ?>
                        </span>
                    <?php else : ?>
                        <span class="homeNewsItem__cat">
                            <?php echo $catName ?>
                        </span>
                    <?php endif; ?>


                    <?php the_title('<h3 class="homeNewsItem__ttl">', '</h3>'); ?>
                </a>
            </li>
            <?php endwhile; endif; ?>
        </ul>

        <div class="flex-fluid justify-center mb24">
            <a href="<?php echo esc_url(home_url('/')."news/"); ?>" class="more__btn">
                もっと見る
            </a>
        </div>
    </div>
</section>
//////  お知らせ  -->

<!--****************************************************************************************************
*   about
****************************************************************************************************-->
<div class="home__area home__area--bg sp-none">
    <div class="flex-container">
        <h2 class="main__ttl">ABOUT<span>私たちについて</span></h2>

        <div class="col-sm-12 sp-lg-6">
            <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/about01.jpg'; ?>" class="homeAbout__img" alt="img">
            <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/about02.jpg'; ?>" class="homeAbout__img m-bottom0" alt="img">
        </div>
        <div class="col-sm-12 sp-lg-6">
            <h3 class="homeAbout__ttl">
                アクティブエイジングとは<span class="block"></span>
                「生涯元気に活動するための健康づくり」です。<span class="block"></span>
                薬や外科に頼らず<span class="sp-block"></span>自然治癒力を最大限発揮できる<span class="block"></span>
                心と身体づくりをサポートいたします。
            </h3>
            <p class="homeAbout__txt">
                カイロプラクティックは<span class="block"></span>
                WHOが認める国際的なヘルスケアです。<span class="block"></span>
                私たちは臨床歴15年、延べ5万人以上の<span class="sp-block"></span>施術を行ってきました。<span class="block"></span>
                高い志を持ち、皆様の健康のために<span class="block"></span>
                最善を尽くす事をお約束します。
            </p>
        </div>
    </div>
</div>

<div class="home__area home__area--bg pc-none">
    <div class="flex-container">
        <h2 class="main__ttl">ABOUT<span>私たちについて</span></h2>

        <div class="col-sm-12 sp-lg-6">
            <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/about01.jpg'; ?>" class="homeAbout__img" alt="img">
        </div>
        <div class="col-sm-12 sp-lg-6">
            <h3 class="homeAbout__ttl">
              アクティブエイジングとは<span class="block"></span>
              「生涯元気に活動するための健康づくり」です。<span class="block"></span>
              薬や外科に頼らず<span class="sp-block"></span>自然治癒力を最大限発揮できる<span class="block"></span>
              心と身体づくりをサポートいたします。
            </h3>
        </div>
        <div class="col-sm-12 sp-lg-6">
            <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/about02.jpg'; ?>" class="homeAbout__img" alt="img">
        </div>
        <div class="col-sm-12 sp-lg-6">
            <p class="homeAbout__txt">
              カイロプラクティックは<span class="block"></span>
              WHOが認める国際的なヘルスケアです。<span class="block"></span>
              私たちは臨床歴15年、延べ5万人以上の<span class="sp-block"></span>施術を行ってきました。<span class="block"></span>
              高い志を持ち、皆様の健康のために<span class="block"></span>
              最善を尽くす事をお約束します。
            </p>
        </div>
    </div>
</div>

<!--****************************************************************************************************
*   pain
****************************************************************************************************-->
<div class="home__area">
    <div class="flex-container">
        <h2 class="main__ttl">PAIN<span>お悩み</span></h2>
        <p class="main__txt">
            皆さまのお悩みに合わせた施術を行います。
        </p>

        <h2 class="sub-title_first center">部位別のお悩み</h2>

        <div class="flex-fluid justify-center m-top10">
            <a class="w45" href="<?php echo site_url(); ?>/parts/">
                <figure class="img__hover benefit__figure max100">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/parts01.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">頭・首・肩</p>
            </a>
            <a class="w45" href="<?php echo site_url(); ?>/parts#back">
                <figure class="img__hover benefit__figure max100">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/parts03.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">背中・腰・骨盤</p>
            </a>
            <a class="w45" href="<?php echo site_url(); ?>/parts#arm max100">
                <figure class="img__hover benefit__figure">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/parts04.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">腕・肘・手</p>
            </a>
            <a class="w45" href="<?php echo site_url(); ?>/parts#crotch">
                <figure class="img__hover benefit__figure max100">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/parts05.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">股関節・膝・足</p>
            </a>
        </div>

        <h2 class="sub-title center b-t m-bo p-b-s b-top-gray">専門的なお悩み</h2>

        <div class="flex-fluid justify-center m-top10">
            <a class="w45 m-bottom20_pc" href="<?php echo site_url(); ?>/herniated_disc/">
                <figure class="img__hover benefit__figure2">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/expert01.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">椎間板ヘルニア</p>
            </a>
            <a class="w45 m-bottom20_pc" href="<?php echo site_url(); ?>/spinal_canal_stenosis/">
                <figure class="img__hover benefit__figure2">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/expert02.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">脊柱管狭窄症</p>
            </a>
            <a class="w45 m-bottom20_pc" href="<?php echo site_url(); ?>/maternity_problems/">
                <figure class="img__hover benefit__figure2">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/expert03.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">産前産後のお悩み</p>
            </a>
            <a class="w45" href="https://aachiro.jp/deskworker_problems/">
                <figure class="img__hover benefit__figure2">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/expert04.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">デスクワーカーのお悩み</p>
            </a>
            <a class="w45" href="https://aachiro.jp/sports_injuries/">
                <figure class="img__hover benefit__figure2">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/expert05.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">スポーツ障害</p>
            </a>
            <a class="w45" href="https://aachiro.jp/osteoarthritis/">
                <figure class="img__hover benefit__figure2">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/expert06.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">変形性膝関節・股関節症</p>
            </a>

        </div>
        <h2 class="sub-title center b-t m-bo p-b-s b-top-gray">姿勢のお悩み</h2>
        <div class="flex-fluid justify-center m-top10">
            <a class="w45" href="<?php echo site_url(); ?>/straight_neck/">
                <figure class="img__hover benefit__figure max100">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/stneck_icon.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">ストレートネック</p>
            </a>
            <a class="w45" href="<?php echo site_url(); ?>/round_back">
                <figure class="img__hover benefit__figure max100">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/nekoze_icon.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold">猫背</p>
            </a>
            <a class="w45" href="<?php echo site_url(); ?>/scoliosis">
                <figure class="img__hover benefit__figure">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/sokuwan_icon.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold height-auto_sp">側わん症</p>
            </a>
            <a class="w45" href="<?php echo site_url(); ?>/straight_back">
                <figure class="img__hover benefit__figure max100">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/stback_icon.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 bold height-auto_sp">ストレートバック</p>
            </a>
        </div>

    </div>
</div>


<!--****************************************************************************************************
*   service
****************************************************************************************************-->
<div class="home__area home__area--bg">
    <div class="flex-container">
        <h2 class="main__ttl">SERVICE<span>施術・サービス</span></h2>

        <p class="main__txt">
            国際基準の施術・サービスをご提供しています。
        </p>

        <div class="top-cbp-flex block-im m-top10">
            <a href="<?php echo site_url(); ?>/chiropractic/">
                <figure class="img__hover benefit__figure">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/chiro_icon.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0 sp-line">カイロプラクティック<br class="sp-block"></p>
            </a>
            <a href="<?php echo site_url(); ?>/cbp/">
                <figure class="img__hover benefit__figure">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/cbp_icon.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0">CBP® 姿勢矯正</p>
            </a>
            <a href="<?php echo site_url(); ?>/myofascial_release/">
                <figure class="img__hover benefit__figure">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/kinmaku_icon.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0">筋膜リリース</p>
            </a>
            <a href="https://aapilates.jp/">
                <figure class="img__hover benefit__figure">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/pilates_icon.png" class="homeBenefit__img" alt="img">
                </figure>
                <p class="parts-text m-bottom0">ピラティス<span class="block"></span><span class="font-small">（専門サイトへ）</span></p>
            </a>
        </div>

        <!-- //// 筋膜リリース
            <div class="col-sm-12 sp24-md-6 sp24-lg-3">
                <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/service04.jpg'; ?>" class="homeStaff__img" alt="img">
                <p class="homeStaff__name font-b">筋膜リリース</p>

            </div>
        ////  筋膜リリース  -->

    </div>
</div>


<!--****************************************************************************************************
*   staff
****************************************************************************************************-->
<div class="home__area p-bottom0">
    <div class="flex-container p-bottom35">
        <h2 class="main__ttl">STAFF<span>スタッフ</span></h2>

        <p class="main__txt center">当院のスタッフは日本では数少ない<span class="block"></span>米国公認カイロプラクティックドクターです。
        </p>
        <!--pcスタッフ-->
        <div class="sp-none">
            <div class="flex-fluid justify-between">
                <div class="col-sm-12 sp24-md-6 sp24-lg-3">
                    <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/staff01.png" class="homeStaff__img" alt="img">
                    <p class="homeStaff__name m-bottom0"><span class="kanji">井田 知孝</span><br>Tomotaka Ida</p>

                </div>
                <div class="col-sm-12 sp24-md-6 sp24-lg-3">
                    <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/staff02.png'; ?>" class="homeStaff__img" alt="img">
                    <p class="homeStaff__name m-bottom0"><span class="kanji">和田 勝義</span><br>Katsuyoshi Wada</p>

                </div>
                <div class="col-sm-12 sp24-md-6 sp24-lg-3">
                    <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/staff03.png'; ?>" class="homeStaff__img" alt="img">
                    <p class="homeStaff__name m-bottom0"><span class="kanji">坂西 龍之介</span><br>Ryunosuke Banzai</p>

                </div>
            </div>
        </div>
        <!--spスタッフ-->
        <div class="pc-none sp-staff-w m-bottom0">
            <div class="swiper-container">
                <div class="swiper-wrapper sp-m-bottom">
                    <div class="swiper-slide">
                        <div class="col-sm-12 sp24-md-6 sp24-lg-3">
                            <img src="https://aachiro.jp/wp/wp-content/themes/corporate-pro/original/img/staff01.png" class="homeStaff__img" alt="img">
                            <p class="homeStaff__name m-bottom0"><span class="kanji">井田 知孝</span><br>Tomotaka Ida</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-sm-12 sp24-md-6 sp24-lg-3">
                            <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/staff02.png'; ?>" class="homeStaff__img" alt="img">
                            <p class="homeStaff__name m-bottom0"><span class="kanji">和田 勝義</span><br>Katsuyoshi Wada</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-sm-12 sp24-md-6 sp24-lg-3">
                            <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/staff03.png'; ?>" class="homeStaff__img" alt="img">
                            <p class="homeStaff__name m-bottom0"><span class="kanji">坂西 龍之介</span><br>Ryunosuke Banzai</p>
                        </div>
                    </div>
                </div><!--swiper-wrapper-->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div><!--swiper-containar-->

    </div>
</div>

<!--****************************************************************************************************
*   review
****************************************************************************************************-->
<div class="home__area home__area--bg">
    <h2 class="main__ttl">REVIEW<span>皆さまの声</span></h2>
    <div class="sp-none">
        <div class="review_img_pc">
          <img src="<?php echo site_url(); ?>/wp-content/themes/corporate-pro/original/img/review_saitosan.png" class="col-sm-12" alt="お客さまの声：さいとうさん">
        </div>
    </div>
    <div class="pc-none">
        <div class="review_img padding-box">
          <img src="<?php echo site_url(); ?>/wp-content/themes/corporate-pro/original/img/review_saitosan_sp.png" class="col-sm-12" alt="お客さまの声：さいとうさん">
        </div>
    </div>
<!--
    <div class="flex-container">
        <h2 class="main__ttl">REVIEW<span>皆さまの声</span></h2>
        <div class="flex-fluid justify-center item-start">
            <div class="col-sm-12 sp-md-3 pt-up">
                <div class="flex-fluid">
                    <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/review01.png'; ?>" class="homeReview__img" alt="img">
                    <div class="homeReview__NameArea">
                        <p class="homeReview__name">会社員 さいとうさん</p>
                        <p class="homeReview__sub pc-up">慢性的な肩こり・腰痛で来院</p>
                    </div>
                </div>
            </div>
            <div class="review_txt">
                <img src="<?php echo site_url(); ?>/wp-content/themes/corporate-pro/original/img/review_saito.png" class="col-sm-12" alt="お客さまの声：さいとうさん">
            </div>
-->
            <!--
            <div class="homeReview__txtArea">
                <div class="homeReview__txtArea--inner arm">
                    <img src="http://aachiro.jp/wp/wp-content/uploads/2018/12/review_koron_r.png">
                    <p class="homeReview__txt">
                        学生時代から机に向かってものを作ることが好きで<br>
                        慢性的な肩こり持ちでした。
                    </p>
                    <p class="homeReview__txt">
                        肩こりとは一生付き合っていくものと諦めていましたが<br>
                        社会人になって、1日パソコンに向かって座り仕事をする日々で<br>
                        腰痛や全身の疲れに本格的に悩まされはじめました。<br>
                    </p>
                    <p class="homeReview__txt">
                        姿勢と背骨についてこれからも引き続きメンテナンスを<br>
                        お願いしたいと考えています。
                    </p>
                    <img src="http://aachiro.jp/wp/wp-content/uploads/2018/12/review_koron.png">
                </div>
            </div>
        </div>
        -->

        <div class="sp-none">
            <div class="review_img_pc review_p-top">
              <img src="<?php echo site_url(); ?>/wp-content/themes/corporate-pro/original/img/review_makisan.png" class="col-sm-12" alt="お客さまの声：槇さん">
            </div>
        </div>
        <div class="pc-none">
            <div class="review_img padding-box">
              <img src="<?php echo site_url(); ?>/wp-content/themes/corporate-pro/original/img/review_makisan_sp.png" class="col-sm-12" alt="お客さまの声：槇さん">
            </div>
        </div>
<!--
        <div class="flex-fluid justify-center item-start">
            <div class="col-sm-12 sp-md-3 pt-up">
                <div class="flex-fluid">
                    <img src="<?php echo esc_url(home_url()).'/wp/wp-content/uploads/review02.png'; ?>" class="homeReview__img" alt="お客さまの声：槇さん">
                    <div class="homeReview__NameArea">
                        <p class="homeReview__name">槇さんファミリー</p>
                        <p class="homeReview__sub pc-up">健康管理と産前産後ケア</p>
                    </div>
                </div>
            </div>
            <div class="review_txt">
                <img src="<?php echo site_url(); ?>/wp-content/themes/corporate-pro/original/img/review_maki.png" class="col-sm-12" alt="img">
            </div>
-->
            <!--
            <div class="homeReview__txtArea">
                <div class="homeReview__txtArea--inner arm">
                    <img src="http://aachiro.jp/wp/wp-content/uploads/2018/12/review_koron_r.png">
                    <p class="homeReview__txt ">
                        先生とはかれこれ5年以上<br>
                        お付き合いをさせてもらってます。
                    </p>
                    <p class="homeReview__txt ">
                        姿勢のケアの仕方や、どのように背骨に負担がかかるかを<br>
                        筋道立てて説明してくださり<br>
                        自分の身体への意識が明らかに変化しました。
                    </p>
                    <p class="homeReview__txt ">
                        今では自分で寝る前にストレッチをするようになり<br>
                        ものぐさな自分からは考えられないくらいです。<br>
                        先生のお陰で姿勢と背骨のメンテの大切さを教わりました。<br>
                        ありがとうございます！！
                    </p>
                    <img src="http://aachiro.jp/wp/wp-content/uploads/2018/12/review_koron.png">
                </div>
            </div>
            -->
        </div>
    </div>
</div>

<div class="home__area home__area--bg_new">

    <div class="w-980">
        <h2 class="sub-title_new center">医師の推薦</h2>
    </div>

    <!--pc-staff-->
    <div class="pc-none">
    <div class="justify-center w-980 p-t3 padding-box">
      <img src="<?php echo site_url(); ?>/wp-content/themes/corporate-pro/original/img/ishi_sp.png" alt="">
    </div>
    </div><!-- //pc-staff -->

    <!--sp-staff-->
    <div class="sp-none">
    <div class="w-980">
    <div class="justify-center w-980 p-t3 ishi-wrap">
        <img src="<?php echo site_url(); ?>/wp-content/themes/corporate-pro/original/img/ishi.png" alt="">
    </div>
    </div>
    </div><!-- //pc-staff -->

</div>

<!--****************************************************************************************************
*   faq
****************************************************************************************************-->
<div class="home__area">
    <div class="flex-container">
        <h2 class="main__ttl">FAQ<span>よくある質問</span></h2>

        <div class="homeFaq__item">
            <div class="flex-fluid justify-start item-start nowrap">
                <span class="faq__icon">Q</span>
                <p class="faq__txt faq__txt--q">
                    カイロプラクティックって安全ですか？
                </p>
            </div>

            <div class="flex-fluid justify-start item-start nowrap mt12">
                <span class="faq__icon--a">A</span>
                <p class="faq__txt faq__txt--a">
                  カイロプラクティックはアメリカで生まれ科学的根拠を積極的に取り入れました。その結果、手技療法の中で唯一WHOに認められる国際的なヘルスケアとなりました。現在約100カ国に広がっており多くの方に支持されています。
                </p>
            </div>
        </div>

        <div class="homeFaq__item">
            <div class="flex-fluid justify-start item-start nowrap">
                <span class="faq__icon">Q</span>
                <p class="faq__txt faq__txt--q">
                    施術は痛くないですか？
                </p>
            </div>

            <div class="flex-fluid justify-start item-start nowrap mt12">
                <span class="faq__icon--a">A</span>
                <p class="faq__txt faq__txt--a">
                    当院では米国公認のカイロプラクティックドクターが施術を行います。極力痛みのない、安全かつ適切な施術を行っております。
                </p>
            </div>
        </div>

        <div class="homeFaq__item">
            <div class="flex-fluid justify-start item-start nowrap">
                <span class="faq__icon">Q</span>
                <p class="faq__txt faq__txt--q">
                    施術は何回くらい必要ですか？
                </p>
            </div>

            <div class="flex-fluid justify-start item-start nowrap mt12">
                <span class="faq__icon--a">A</span>
                <p class="faq__txt faq__txt--a">
                  特別に重症な場合、または慢性的な状態を除いて一般的には5回の施術で50％以上改善していただくことが多いです。
                </p>
            </div>
        </div>
    </div>

    <div class="flex-fluid justify-center">
        <a href="<?php echo esc_url(home_url('/').'clinic-information#faq'); ?>" class="more__btn m-bottom0">
            もっと見る
        </a>
    </div>
</div>



<!--****************************************************************************************************
*   access
****************************************************************************************************-->
<div class="home__area home__area--bg">
    <div class="flex-container">
        <h2 class="main__ttl">ACCESS<span>アクセス</span></h2>

        <div class="view-box">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1545413610437!6m8!1m7!1sCAoSLEFGMVFpcE44a1lCcWNZcG15a1VwWFlYaTNVZXBQakhOMlcwa20xZ3lOSEw5!2m2!1d35.61127748148482!2d139.6323619037902!3f90.32963705108345!4f-2.418884468856646!5f0.7820865974627469" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

        <div class="col-sm-12 sp-lg-6">
            <div class='embed-container'>
                <iframe src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.666562090502!2d139.63019821563057!3d35.611290780210766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018f440fde99c65%3A0x625122fceb5a4b6b!2z44CSMTU4LTAwOTQg5p2x5Lqs6YO95LiW55Sw6LC35Yy6546J5bed77yS5LiB55uu77yX4oiS77yT!5e0!3m2!1sja!2sjp!4v1538145277629' width='600' height='450' frameborder='0' style='border:0' allowfullscreen></iframe></div>
        </div>

        <div class="col-sm-12 sp-lg-6">
            <p class="homeAccess__ttl font-14">アクティブエイジング カイロプラクティック 二子玉川</p>
            <p class="homeAccess__txt">
                〒158-0094 東京都世田谷区玉川2-7-3 2F<br>
                二子玉川駅東口より徒歩4分・上野毛駅より徒歩8分
            </p>
            <p class="homeAccess__txt">
                【TEL】03−6312−4223<br>
                【時間】9:00〜21:00<br>
                【休み】年中無休
            </p>
        </div>
    </div>
    <div class="flex-fluid justify-center mt24">
        <a href="<?php echo esc_url(home_url('/').'clinic-information#faq'); ?>" class="more__btn m-bottom0">
            当院について
        </a>
    </div>
</div>

<!--  ///--SNS--///
<div class="white-back">
    <aside class="sns-box_new">
        <ul class="sns-box sp-flex">
            <li><a href="https://www.facebook.com/activeageingpilates/" target="brank"><img src="https://aapilates.jp/wp/wp-content/uploads/2018/11/flogo_rgb_hex-brc-site-250.png" alt="facebookアイコン"></li></a>
            <li><a href="https://www.instagram.com/activeageing_pilates/" target="brank"><img src="https://aapilates.jp/wp/wp-content/uploads/2018/11/app-icon2.png" alt="Instagramアイコン"></a></li>
        </ul>
    </aside>
</div>
///--SNS--///  -->


<?php get_footer(); ?>
