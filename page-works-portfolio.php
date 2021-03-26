<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
  <main class="l-main" role="main">
    <section class="l-section">
      <div class="l-container__short">
        <h2 class="heading heading__primary">Works</h2>
        <div class="cardPrimary">
          <div class="cardPrimary__body">
            <h3 class="cardPrimary__title --emphasis">ポートフォリオサイト</h3>
            <dl class="contents__wrap --margin">
              <dt class="contents__title --margin">制作日</dt>
              <dd class="contents__text"><time datetime="2020-06-29">2020年6月29日</time></dd>
              <dt class="contents__title --margin">制作期間</dt>
              <dd class="contents__text">1か月</dd>
              <dt class="contents__title --margin">使用言語・ツール</dt>
              <dd class="contents__text contents__lineListWrap">
                <ul>
                  <li class="contents__lineList">HTML</li>
                  <li class="contents__lineList">CSS</li>
                  <li class="contents__lineList">jQuery</li>
                  <li class="contents__lineList">WordPress </li>
                  <li class="contents__lineList">Sass</li>
                </ul>
              </dd>
              <dt class="contents__title --margin">要件定義</dt>
              <dd class="contents__text">
                <ul>
                  <li class="contents__list">チームで働く適正があることを伝える。</li>
                  <li class="contents__list">制作実績を確認しやすくする。</li>
                </ul>
              </dd>
              <dt class="contents__title --margin">制作概要</dt>
              <dd class="contents__text">
                <ul>
                  <li class="contents__list">｢落ち着き｣や｢清潔感｣を表すためメインカラーを白とし、余白を多めにとったデザインを採用しました。</li>
                  <li class="contents__list">｢真面目さ｣や｢几帳面さ｣を表すためフォントは明朝体を採用しました。</li>
                  <li class="contents__list">制作実績以外は色を抑えることで制作実績を確認しやすいようにしました。</li>
                  <li class="contents__list">制作概要、コンテンツ、コードが確認しやすいように、それぞれ｢詳細｣｢Webサイト｣｢GitHub｣のリンクを作成しました。</li>
                </ul>
              </dd>
              <dt class="contents__title --margin">制作のポイント</dt>
              <dd class="contents__text">
                古い修正案件を踏まえて、Flexboxを使用せずに制作しました。<br>
                そして、制作実績のcardの横並びは、display:inline-blockで行い、card内でpaddingやmarginが使えるようcard間の余白は透明なボーダーで行いました。
              </dd>
              <dd><img class="contents__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/works/works_layout.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works/works_layout.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/works/works_layout@2x.jpg 2x" alt="ポートフォリオの中で透明なボーダーで余白を作っている部分のサンプル画像です。"></dd>
            </dl>
          </div>
          <!-- cardPrimary__body -->
          <figure class="cardPrimary__thumbnail">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_portfolio.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/works/detail_portfolio.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/works/detail_portfolio@2x.jpg 2x" alt="今ご覧いただいているポートフォリオサイトの内容になります。">
          </figure>
        </div>
        <!-- cardPrimary -->
      </div>
      <div class="l-section__button">
        <p class="l-section__buttonItem"><a href="https://demoganbarou.com/" class="button button__primary" target="_blank" rel="noopener noreferrer">Website</a></p>
        <p class="l-section__buttonItem"><a href="https://github.com/megukazu/portfolio" class="button button__primary" target="_blank" rel="noopener noreferrer">GitHub</a></p>
        <p class="l-section__buttonItem"><a href="<?php echo esc_url( home_url( '/works' ) ); ?>" class="button button__primary">Works</a></p>
      </div>
      <!-- /.l-section__button -->
    </section>
  </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
