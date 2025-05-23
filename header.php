<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
	<script>
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N5LL8SSD');
</script>
<!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
     wp_head();
    ?>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5LL8SSD"
  height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<section class="site-header">
    <div class="container">
    <!-- Row: Logo + Language -->
      <div class="header-top">
        <!-- Logo -->
        <div class="logo">
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="<?php bloginfo( 'name' ); ?>">
          </a>
        </div>

        <!-- Language Selector -->
        <?php
          $current_lang = pll_current_language(); // ดึงภาษาปัจจุบัน

          // ตั้งค่าภาษาที่ต้องการแสดง
          $languages = [
            'th' => ['slug' => 'th', 'label' => 'TH', 'url' => pll_home_url('th')], 
            'en' => ['slug' => 'en', 'label' => 'EN', 'url' => pll_home_url('en')],
          ];

          echo '<div class="lang-switcher">';
          $index = 0;
          foreach ($languages as $lang) {
            $is_active = ($current_lang === $lang['slug']) ? 'class="active"' : '';
            echo '<a href="' . esc_url($lang['url']) . '" ' . $is_active . '>' . esc_html($lang['label']) . '</a>';
            if (++$index < count($languages)) {
              echo ' <span>|</span> ';
            }
          }
          echo '</div>';
          ?>
      </div>

      
    </div>
    <!-- Navigation Menu -->
      
 
</section>
<section class="site-menu">
    <div class="container">
      <nav class="main-menu">
        <?php 
          wp_nav_menu(array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul class="menu-primary">%3$s</ul>'
          ));
        ?>
      </nav>
    </div>
</section>


