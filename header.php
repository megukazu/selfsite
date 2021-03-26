<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="丁寧なマークアップとCSSやjQueryでのアニメーションができます。ご連絡をお待ちしております。">
  <meta name="twitter:card" content="summary" /> <!--①-->
  <meta name="twitter:site" content="@demoganbarou" />
  <meta property="og:title" content="Hidekazu Meguro Portfolio" />
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://demoganbarou.com/" />
  <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/twitter_card.jpg" />
  <meta property="og:site_name" content="HidekazuMeguro Front-End Engineer" />
  <meta property="og:description" content="丁寧なマークアップとCSSやjQueryでのアニメーションができます。ご連絡をお待ちしております。" />
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/common/fav.svg" type="image/svg+xml">
  <?php wp_head() ?>
  <title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>
</head>
<body>
  <header class="l-header" role="banner">
    <div class="l-container__full">
      <div class="l-header__title">
        <h1 class="l-header__logo"><a href="<?php echo home_url(); ?>">Hidekazu Meguro <br><span class="l-header__caption">Front-End Engineer</span></a></h1>
      </div>
      <!-- /.l-header__title -->
      <nav class="l-header__nav" role="navigation">
        <h2 class="screen-reader-text">サイト内メニュー</h2>
        <button type="button" class="js-button-hamburger button button__hamburger" aria-controls="global-nav" aria-expanded="false">
          <span class="button__hamburgerLine">
            <span class="screen-reader-text">メニューを開閉する</span>
          </span>
        </button>
        <ul id="is-global-nav" class="l-globalNav">
          <?php wp_nav_menu( array(
            'theme_location'=>'globalnav',
            'container'     =>'',
            'menu_class'    =>'l-globalNav__item',
            'items_wrap' => '%3$s',//<ul>を出力しない
            ));
          ?>
        </ul>
      </nav>
    </div>
    <!-- /.l-container__full -->
  </header>
