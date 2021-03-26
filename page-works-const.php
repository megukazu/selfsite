<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
  <main class="l-main" role="main">
    <section class="l-section">
      <div class="l-container__short">
        <h2 class="heading heading__primary">Works</h2>
        <div class="cardPrimary">
          <div class="cardPrimary__body">
            <h3 class="cardPrimary__title --emphasis">建築会社のサイト(架空)</h3>
            <dl class="contents__wrap --margin">
              <dt class="contents__title --margin">制作日</dt>
              <dd class="contents__text"><time datetime="2019-09-17">2019年9月17日</time></dd>
              <dt class="contents__title --margin">制作期間</dt>
              <dd class="contents__text">5日間</dd>
              <dt class="contents__title --margin">使用言語・ツール</dt>
              <dd class="contents__text contents__lineListWrap">
                <ul>
                  <li class="contents__lineList">HTML</li>
                  <li class="contents__lineList">CSS</li>
                  <li class="contents__lineList">jQuery</li>
                  <li class="contents__lineList">WordPress </li>
                </ul>
              </dd>
              <dt class="contents__title --margin">要件定義</dt>
              <dd class="contents__text">
                <ul>
                  <li class="contents__list">WordPressのアウトプットを行う</li>
                  <li class="contents__list">動きのあるサイトのアウトプットを行う</li>
                </ul>
              </dd>
              <dt class="contents__title --margin">制作概要</dt>
              <dd class="contents__text">
                <ul>
                  <li class="contents__list">架空の建築会社を想定したコーポレートサイトです。</li>
                  <li class="contents__list">適切なセクショニングや音声読み上げ対応など、アクセシビリティの向上に努めました。</li>
                  <li class="contents__list">WordPress化を行いました。</li>
                  <li class="contents__list">ヒーロー画像のフェイド処理やパンくずリストをプラグインを使わずに実装しました。</li>
                  <li class="contents__list">画像やテキストのパララックスをプラグインを使わずに実装しました。</li>
                  <li class="contents__list">スクロールアニメーションを実装しました。</li>
                  <li class="contents__list">CSSはFLOCSSで設計しました。</li>
                </ul>
              </dd>
            </dl>
          </div>
          <!-- cardPrimary__body -->
          <figure class="cardPrimary__thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_const.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_const.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/works/detail_const@2x.jpg 2x" alt="今ご覧いただいているポートフォリオサイトの内容になります。">
          </figure>
        </div>
        <!-- cardPrimary -->
      </div>
      <div class="l-section__button">
        <p class="l-section__buttonItem"><a href="https://demoganbarou.com/construction" class="button button__primary" target="_blank" rel="noopener noreferrer">Website</a></p>
        <p class="l-section__buttonItem"><a href="https://github.com/megukazu/construction/" class="button button__primary" target="_blank" rel="noopener noreferrer">GitHub</a></p>
        <p class="l-section__buttonItem"><a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="button button__primary">Works</a></p>
      </div>
      <!-- /.l-section__button -->
    </section>
  </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
