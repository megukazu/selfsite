<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
  <main class="l-main" role="main">
    <section class="l-section">
      <div class="l-container__short">
        <h2 class="heading heading__primary">Works</h2>
        <div class="cardPrimary">
          <div class="cardPrimary__body">
            <h3 class="cardPrimary__title --emphasis">広告会社のTopPage（模写）</h3>
            <dl class="contents__wrap --margin">
              <dt class="contents__title --margin">制作日</dt>
              <dd class="contents__text"><time datetime="2019-07-06">2019年7月6日</time></dd>
              <dt class="contents__title --margin">制作期間</dt>
              <dd class="contents__text">5日間</dd>
              <dt class="contents__title --margin">使用言語・ツール</dt>
              <dd class="contents__text contents__lineListWrap">
                <ul>
                  <li class="contents__lineList">HTML</li>
                  <li class="contents__lineList">CSS</li>
                  <li class="contents__lineList">jQuery</li>
                </ul>
              </dd>
              <dt class="contents__title --margin">要件定義</dt>
              <dd class="contents__text">
                <ul>
                  <li class="contents__list">動きのあるサイトのアウトプットをする</li>
                  <li class="contents__list">animationメソッドやjQueryのアウトプットをする</li>
                  <li class="contents__list">実際のサイトのコードは見ない。</li>
                </ul>
              </dd>
              <dt class="contents__title --margin">制作のポイント</dt>
              <dd class="contents__text">
                プラグインを使用せずに、装飾部分はCSSとjQueryだけで作成しました。
              </dd>
            </dl>
          </div>
          <!-- cardPrimary__body -->
          <figure class="cardPrimary__thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_addkita.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_addkita.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/works/detail_addkita@2x.jpg 2x" alt="架空のコンサルティング会社の会社概要ページです。">
          </figure>
        </div>
        <!-- cardPrimary -->
      </div>
      <div class="l-section__button">
        <p class="l-section__buttonItem"><a href="https://dummy-addkita.demoganbarou.com/" class="button button__primary" target="_blank" rel="noopener noreferrer">Website</a></p>
        <p class="l-section__buttonItem"><a href="https://github.com/megukazu/repro-addkita" class="button button__primary" target="_blank" rel="noopener noreferrer">GitHub</a></p>
        <p class="l-section__buttonItem"><a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="button button__primary">Works</a></p>
      </div>
      <!-- /.l-section__button -->
    </section>
  </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
