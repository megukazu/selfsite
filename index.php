  <?php get_header(); ?>
  <main class="l-main" role="main">
    <div class="hero --home">
      <picture class="p-hero__thumbnail">
        <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/hero-sp.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/hero-sp@2x.jpg 2x" media="(max-width: 767px)">
        <source srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/hero-tab.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/hero-tab@2x.jpg 2x" media="(max-width: 1023px)">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/hero-pc.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/hero-pc.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home/hero-pc@2x.jpg 2x" alt="丁寧なwebサイト作りを通じて、クライアント様が求める価値を提供していきたいと思っています。">
      </picture>
      <div class="hero__body">
        <p class="hero__copy">
          <em>人にも機械にもやさしい</em>、<br>
          丁寧なWebサイトを作ります。
        </p>
      </div>
      <!-- /.hero-body -->
    </div>
    <!-- /.hero -->
    <section class="l-section">
      <div class="l-container__short">
        <h2 class="heading heading__primary">About</h2>
        <div class="mediaPrimary">
          <dl class="mediaPrimary__body">
            <dt class="contents__title mediaPrimary__title">目黒 秀和</dt>
            <dd class="contents__text">アクセシビリティを意識したマークアップはSEOにも効果があると言われています。利用者に使いやすく検索エンジンにも理解されやすい、みんなに<em>やさしいコーディング</em>を心がけています。</dd>
            <dt class="contents__title --margin">使用言語・ツール</dt>
            <dd class="contents__text contents__lineListWrap">
              <ul>
                <li class="contents__lineList">HTML</li>
                <li class="contents__lineList">CSS</li>
                <li class="contents__lineList">JavaScript</li>
                <li class="contents__lineList">jQuery</li>
                <li class="contents__lineList">Vue.js</li>
                <li class="contents__lineList">PHP</li>
                <li class="contents__lineList">GitHub</li>
                <li class="contents__lineList">WordPress </li>
                <li class="contents__lineList">Sass</li>
              </ul>
            </dd>
          </dl>
          <figure class="mediaPrimary__thumbnail">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/myself.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/myself.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/about/myself@2x.jpg 2x" alt="私自身の写真です。外でベンチに座りながら作業しています。">
          </figure>
        </div>
        <!-- /.mediaPrimary -->
        <p class="l-section__button"><a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="button button__primary">Read More</a></p>
      </div>
      <!-- /.l-container__short -->
    </section>
    <section class="l-section">
      <div class="l-container__full">
        <h2 class="heading heading__primary">
          Works
        <span class="heading__caption">ぜひ制作実績のご確認もお願いいたします。</span>
        </h2>
        <div class="l-grid -gutter">
          <article class="l-grid__item -tab4Of12 -lap4Of12">
            <div class="cardPrimary">
              <div class="cardPrimary__body">
                <h3 class="cardPrimary__title">
                  ポートフォリオサイト<br>
                  <span class="cardPrimary__title--caption">(WordPress)</span>
                </h3>
                <div class="cardPrimary__wrap">
                  <p class="cardPrimary__link"><a href="<?php echo esc_url( home_url( '/works-portfolio' ) ); ?>">詳細</a></p>
                  <p class="cardPrimary__link"><a href="https://demoganbarou.com/" target="_blank" rel="noopener noreferrer">Webサイト</a></p>
                  <p class="cardPrimary__link"><a href="https://github.com/megukazu/portfolio" target="_blank" rel="noopener noreferrer">GitHub</a></p>
                </div>
                <!-- /.cardPrimary__wrap -->
              </div>
              <!-- cardPrimary__body -->
              <figure class="cardPrimary__thumbnail js-cardPrimary__thumbnail">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_portfolio.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_portfolio.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_portfolio@2x.jpg 2x" alt="今ご覧いただいているポートフォリオサイトです。">
              </figure>
            </div>
            <!-- cardPrimary -->
          </article>
          <article class="l-grid__item -tab4Of12 -lap4Of12">
            <div class="cardPrimary">
              <div class="cardPrimary__body">
                <h3 class="cardPrimary__title">
                  建築会社のサイト（架空）<br>
                  <span class="cardPrimary__title--caption">(animation)</span>
                </h3>
                <div class="cardPrimary__wrap">
                  <p class="cardPrimary__link"><a href="<?php echo esc_url( home_url( '/works-const' ) ); ?>">詳細</a></p>
                  <p class="cardPrimary__link"><a href="https://demoganbarou.com/construction/" target="_blank" rel="noopener noreferrer">Webサイト</a></p>
                  <p class="cardPrimary__link"><a href="https://github.com/megukazu/construction" target="_blank" rel="noopener noreferrer">GitHub</a></p>
                </div>
                <!-- /.cardPrimary__wrap -->
              </div>
              <!-- cardPrimary__body -->
              <figure class="cardPrimary__thumbnail">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_const.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_const.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_const@2x.jpg 2x" alt="架空の建築会社のサイトです。">
              </figure>
            </div>
            <!-- cardPrimary -->
          </article>
          <article class="l-grid__item -tab4Of12 -lap4Of12">
            <div class="cardPrimary">
              <div class="cardPrimary__body">
                <h3 class="cardPrimary__title">
                  広告会社のTopPage（模写）<br>
                  <span class="cardPrimary__title--caption">(animation)</span>
                </h3>
                <div class="cardPrimary__wrap">
                  <p class="cardPrimary__link"><a href="<?php echo esc_url( home_url( '/works-addkita' ) ); ?>">詳細</a></p>
                  <p class="cardPrimary__link"><a href="https://dummy-addkita.demoganbarou.com/" target="_blank" rel="noopener noreferrer">Webサイト</a></p>
                  <p class="cardPrimary__link"><a href="https://github.com/megukazu/repro-addkita" target="_blank" rel="noopener noreferrer">GitHub</a></p>
                </div>
                <!-- /.cardPrimary__wrap -->
              </div>
              <!-- cardPrimary__body -->
              <figure class="cardPrimary__thumbnail">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_addkita.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_addkita.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_addkita@2x.jpg 2x" alt="架空の広告会社のトップページです。">
              </figure>
            </div>
            <!-- cardPrimary -->
          </article>
        </div>
        <!-- /.l-grid -->
        <p class="l-section__button"><a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="button button__primary">Read More</a></p>
      </div>
      <!-- /.l-container__full -->
    </section>
  </main>
  <?php get_footer(); ?>
