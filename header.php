<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo('name') ?></title>
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/dist/styles.min.css' ?>">
</head>
<body>
  
<header class="c-header js-header">
    <nav
      class="c-nav l-container l-flex u-justify-content-between u-align-items-center"
    >
      <a class="c-nav__logo l-flex  u-align-items-center" to="/">
        <img src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) ); ?>" alt="logo" />
      </a>

      <div class="c-nav__menu js-nav__menu">
        <ul class="c-nav__list l-flex u-align-items-center">
          <li class="c-nav__item">
            <a
              anchor-to="home"
              class="c-nav__link js-anchor"
              href="javascript:void(0)"
              >Quienes somos</a
            >
          </li>
          <li class="c-nav__item">
            <a
              anchor-to="services"
              class="c-nav__link js-anchor"
              href="javascript:void(0)"
              >Servicios</a
            >
          </li>
          <li class="c-nav__item">
            <a
              anchor-to="platform"
              class="c-nav__link js-anchor"
              href="javascript:void(0)"
              >Receta médica</a
            >
          </li>
          <li class="c-nav__item">
            <a
              anchor-to="contact"
              class="c-nav__link js-anchor"
              href="javascript:void(0)"
              >Contacto</a
            >
          </li>
          <li class="c-nav__item">
            <a
              anchor-to="faq"
              class="c-nav__link js-anchor"
              href="javascript:void(0)"
              >Faq</a
            >
          </li>
          <li class="c-nav__item">
            <a
              class="c-nav__link c-nav__link--cta"
              href="https://clinic.recetamedica.es/login"
              target="_blank"
              >Ingresar</a
            >
          </li>
        </ul>

        <div  class="c-nav__close">
          <i class="bx bx-x"></i>
        </div>
      </div>

      <div  class="c-nav__toggle">
        <i class="bx bx-grid-alt"></i>
      </div>
    </nav>
  </header>


