<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
  <main class="l-main" role="main">
    <section class="l-section">
      <div class="l-container__short">
        <h2 class="heading heading__primary">Works</h2>
        <div class="cardPrimary">
          <div class="cardPrimary__body">
            <h3 class="cardPrimary__title --emphasis">Dummy Store（架空）</h3>
            <dl class="contents__wrap --margin">
              <dt class="contents__title --margin">制作日</dt>
              <dd class="contents__text"><time datetime="2019-07-06">2019年7月6日</time></dd>
              <dt class="contents__title --margin">制作期間</dt>
              <dd class="contents__text">6時間</dd>
              <dt class="contents__title --margin">使用言語・ツール</dt>
              <dd class="contents__text contents__lineListWrap">
                <ul>
                  <li class="contents__lineList">HTML</li>
                  <li class="contents__lineList">CSS</li>
                  <li class="contents__lineList">jQuery</li>
                </ul>
              </dd>
              <dt class="contents__title --margin">制作概要</dt>
              <dd class="contents__text">オンラインサロンShibajukuの課題で制作したWebサイトになります。</dd>
            </dl>
          </div>
          <!-- cardPrimary__body -->
          <figure class="cardPrimary__thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_store.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_store.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/works/detail_store@2x.jpg 2x" alt="架空のECサイトのランディングページです。">
          </figure>
        </div>
        <!-- cardPrimary -->
      </div>
      <div class="l-section__button">
        <p class="l-section__buttonItem"><a href="https://dummy-store.demoganbarou.com/" class="button button__primary" target="_blank" rel="noopener noreferrer">Website</a></p>
        <p class="l-section__buttonItem"><a href="https://github.com/megukazu/Dummy-Store" class="button button__primary" target="_blank" rel="noopener noreferrer">GitHub</a></p>
        <p class="l-section__buttonItem"><a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="button button__primary">Works</a></p>
      </div>
      <!-- /.l-section__button -->
    </section>
  </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
