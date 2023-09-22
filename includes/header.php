<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NL93TDLK');</script>
    <!-- End Google Tag Manager -->
    <?php wp_head(); ?>
</head>

<body <?php body_class('bubble'); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NL93TDLK"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <?php bk_navbar_before();?>

    <header
      class="header main-menu"
    >
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
          <div class="container-fluid">
            <div class="mobile-menu-icon d-md-none">
              <button class="hamburger hamburger--squeeze mobile-primary-menu" type="button">
                <span class="hamburger-box">
                  <span class="hamburger-inner" ></span>
                </span>
              </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav justify-content-md-center w-100">
                <li class="navbar-item">
                  <a class="d-md-none navbar-item--mobile fw-title-italic" href="<?php bloginfo('url');?>">Home</a>
                  <a
                    href="<?php bloginfo('url');?>"
                    class="octagon d-none d-md-block"
                  >
                    <div class="octagon--outer">
                      <span class="octagon--inner">
                        Home
                      </span>
                    </div>
                  </a>
                </li>
                <li class="navbar-item">
                  <a class="d-md-none navbar-item--mobile fw-title-italic" href="<?php echo site_url('/fighters');?>">Fighters</a>
                  <a
                    href="<?php echo site_url('/fighters');?>"
                    class="octagon d-none d-md-block"
                  >
                    <div class="octagon--outer">
                      <span class="octagon--inner">
                        Fighters
                      </span>
                    </div>
                  </a>
                </li>
                <li class="navbar-item">
                  <a class="d-md-none navbar-item--mobile fw-title-italic" href="<?php echo site_url('/contact');?>">Contact</a>
                  <a
                  href="<?php echo site_url('/contact');?>"
                    class="octagon d-none d-md-block"
                  >
                    <div class="octagon--outer">
                      <span class="octagon--inner">
                        Contact
                      </span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    
    <div class="cd-loader">
        <div class="cd-loader__grid">
            <div class="cd-loader__item text-center">
                <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="4" cy="12" r="3">
                        <animate id="spinner_qFRN" begin="0;spinner_OcgL.end+0.25s" attributeName="cy" calcMode="spline" dur="0.6s" values="12;6;12" keySplines=".33,.66,.66,1;.33,0,.66,.33"/>
                    </circle>
                    <circle cx="12" cy="12" r="3">
                        <animate begin="spinner_qFRN.begin+0.1s" attributeName="cy" calcMode="spline" dur="0.6s" values="12;6;12" keySplines=".33,.66,.66,1;.33,0,.66,.33"/>
                    </circle>
                    <circle cx="20" cy="12" r="3">
                        <animate id="spinner_OcgL" begin="spinner_qFRN.begin+0.2s" attributeName="cy" calcMode="spline" dur="0.6s" values="12;6;12" keySplines=".33,.66,.66,1;.33,0,.66,.33"/>
                    </circle>
                </svg>
                <p>
                    <small>Loading...</small>
                </p>
            </div>
        </div>
    </div>
    
    <main class="content-wrapper">