<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
  <main class="l-main" role="main">
    <section class="l-section">
      <div class="l-container__short">
        <h2 class="heading heading__primary">Works</h2>
        <div class="cardPrimary">
          <div class="cardPrimary__body">
            <h3 class="cardPrimary__title --emphasis">カフェのサイト(架空)</h3>
            <dl class="contents__wrap --margin">
              <dt class="contents__title --margin">制作日</dt>
              <dd class="contents__text"><time datetime="2019-06-24">2019年9月15日</time></dd>
              <dt class="contents__title --margin">制作期間</dt>
              <dd class="contents__text">3日間</dd>
              <dt class="contents__title --margin">使用言語・ツール</dt>
              <dd class="contents__text contents__lineListWrap">
                <ul>
                  <li class="contents__lineList">HTML</li>
                  <li class="contents__lineList">CSS</li>
                  <li class="contents__lineList">jQuery</li>
                  <li class="contents__lineList">WordPress</li>
                </ul>
              </dd>
              <dt class="contents__title --margin">制作概要</dt>
              <dd class="contents__text">
                書籍「WordPress デザイン入門」で制作したサイトになります。<br>
                記事表示時に関連記事の表示も行っています。
            </dd>
            </dl>
          </div>
          <!-- cardPrimary__body -->
          <figure class="cardPrimary__thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_coffee.jpg" srcset="?php echo get_template_directory_uri(); ?>/assets/images/works/detail_coffee.jpg 1x, ?php echo get_template_directory_uri(); ?>/assets/images/works/detail_coffee@2x.jpg 2x" alt="架空のカフェのサイトです。">
          </figure>
        </div>
        <!-- cardPrimary -->
      </div>
      <div class="l-section__button">
        <p class="l-section__buttonItem"><a href="https://demoganbarou.com/mvcoffee/" class="button button__primary" target="_blank" rel="noopener noreferrer">Website</a></p>
        <p class="l-section__buttonItem"><a href="https://github.com/megukazu/Dummy-coffee" class="button button__primary" target="_blank" rel="noopener noreferrer">GitHub</a></p>
        <p class="l-section__buttonItem"><a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="button button__primary">Works</a></p>
      </div>
      <!-- /.l-section__button -->
    </section>
  </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
