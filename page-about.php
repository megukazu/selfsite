<?php get_header(); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()): the_post(); ?>
  <main class="l-main" role="main">
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
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/myself.jpg" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/about/myself.jpg 1x, <?php echo get_template_directory_uri(); ?>/assets/images/about/myself@2x.jpg 2x" alt="私自身の写真です。外でベンチに座りながら作業しています。">
          </figure>
        </div>
        <!-- /.mediaPrimary -->
      </div>
      <!-- /.l-container__short -->
    </section>
    <section class="l-section">
      <div class="l-container__short">
        <h2 class="heading heading__primary">Career</h2>
        <!-- /.l-container__short -->
        <article class="">
          <h3 class="screen-reader-text">経歴</h3>
          <div class="career_wrap">
            <p class="stateDate"><time datetime="2020-01">2020年1月</time></p>
            <p class="contents__text">
              現在自社開発系企業でコーダーとして勤務しており、コンテンツを追加する業務を行っております。<br>
              同時に5〜7個の追加作業を進めつつ、チームの業務管理も行っております。<br>
              コーディングだけではなく、広い視野もってチームで作業することが得意です。
            </p>
          </div>
          <!-- /.career_wrap -->
        </article>
      </div>
    </section>
  </main>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
