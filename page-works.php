<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
  <main class="l-main" role="main">
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
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_addkita.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_addkita.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_addkita@2x.jpg 2x" alt="広告会社のTopPageです。">
              </figure>
            </div>
            <!-- cardPrimary -->
          </article>
          <article class="l-grid__item -tab4Of12 -lap4Of12">
            <div class="cardPrimary">
              <div class="cardPrimary__body">
                <h3 class="cardPrimary__title">
                  料理屋のサイト（架空）<br>
                  <span class="cardPrimary__title--caption">(WordPress)</span>
                </h3>
                <div class="cardPrimary__wrap">
                  <p class="cardPrimary__link"><a href="<?php echo esc_url( home_url( '/works-bistro' ) ); ?>">詳細</a></p>
                  <p class="cardPrimary__link"><a href="https://demoganbarou.com/bistro/" target="_blank" rel="noopener noreferrer">Webサイト</a></p>
                  <p class="cardPrimary__link"><a href="https://github.com/megukazu/Dummy-bistro" target="_blank" rel="noopener noreferrer">GitHub</a></p>
                </div>
                <!-- /.cardPrimary__wrap -->
              </div>
              <!-- cardPrimary__body -->
              <figure class="cardPrimary__thumbnail">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_bistro.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_bistro.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_bistro@2x.jpg 2x" alt="料理屋のサイト（架空）">
              </figure>
            </div>
            <!-- cardPrimary -->
          </article>
          <article class="l-grid__item -tab4Of12 -lap4Of12">
            <div class="cardPrimary">
              <div class="cardPrimary__body">
                <h3 class="cardPrimary__title">
                  カフェのサイト（架空）<br>
                  <span class="cardPrimary__title--caption">(WordPress)</span>
                </h3>
                <div class="cardPrimary__wrap">
                  <p class="cardPrimary__link"><a href="<?php echo esc_url( home_url( '/works-coffee' ) ); ?>">詳細</a></p>
                  <p class="cardPrimary__link"><a href="https://demoganbarou.com/mvcoffee/" target="_blank" rel="noopener noreferrer">Webサイト</a></p>
                  <p class="cardPrimary__link"><a href="https://github.com/megukazu/Dummy-coffee" target="_blank" rel="noopener noreferrer">GitHub</a></p>
                </div>
                <!-- /.cardPrimary__wrap -->
              </div>
              <!-- cardPrimary__body -->
              <figure class="cardPrimary__thumbnail">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_coffee.jpg" srcset="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_coffee.jpg 1x, <?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/works/works_coffee@2x.jpg 2x" alt="架カフェのサイト（架空）">
              </figure>
            </div>
            <!-- cardPrimary -->
          </article>
          <article class="l-grid__item -tab4Of12 -lap4Of12">
            <div class="cardPrimary">
              <div class="cardPrimary__body">
                <h3 class="cardPrimary__title">デザイナーのWebサイト（架空）</h3>
                <span class="cardPrimary__title--caption">(WordPress)</span>
                <div class="cardPrimary__wrap">
                  <p class="cardPrimary__link"><a href="<?php echo esc_url( home_url( '/works-design' ) ); ?>">詳細</a></p>
                  <p class="cardPrimary__link"><a href="https://demoganbarou.com/design/" target="_blank" rel="noopener noreferrer">Webサイト</a></p>
                  <p class="cardPrimary__link"><a href="https://github.com/megukazu/Dummy-design" target="_blank" rel="noopener noreferrer">GitHub</a></p>
                </div>
                <!-- /.cardPrimary__wrap -->
              </div>
              <!-- cardPrimary__body -->
              <figure class="cardPrimary__thumbnail">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/works_design.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works/works_design.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/works/works_design@2x.jpg 2x" alt="架空のデザイナーのWebサイトです。">
              </figure>
            </div>
            <!-- cardPrimary -->
          </article>
        </div>
        <!-- /.l-grid -->
        <p class="l-section__button --center"><a href="<?php echo esc_url( home_url( 'contact' ) ); ?>" class="button button__primary">Contact</a></p>
      </div>
      <!-- /.l-container__full -->
    </section>
  </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
