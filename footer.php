<?php
?>

<footer class="site-footer">

  <div class="site-footer__wave" aria-hidden="true">
    <img
      src="<?php echo esc_url( get_template_directory_uri() . '/assets/background-footer.png' ); ?>"
      alt=""
    >
  </div>

  <div class="site-footer__inner content-container">
    <div class="site-footer__grid">

      <div class="site-footer__col site-footer__col--brand">
        <a class="site-footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo.svg' ); ?>"
            alt="Rahamäng"
          >
        </a>

        <p class="site-footer__copy text-body-small">
          <img
            class="site-footer__heart"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/heart-duotone-pink.svg' ); ?>"
            alt=""
          >
          <?php echo esc_html( date('Y') ); ?> Rahamäng
        </p>

        <p class="site-footer__desc text-body-medium">
          Rahamäng on Eesti lasteraamat, mis õpetab lastele rahatarkust, säästmist ja tarka rahakasutust läbi lõbusate lugude.
        </p>

        <p class="site-footer__label text-body-small">Saadaval:</p>
        <div class="site-footer__stores">
          <a class="btn btn-store" href="https://www.apollo.ee/" target="_blank" rel="noopener">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/logos/apollo.svg' ); ?>" alt="" width="20" height="20">
            <span>APOLLO</span>
          </a>
          <a class="btn btn-store" href="https://rahvaraamat.ee/" target="_blank" rel="noopener">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/logos/rahvaraamat.svg' ); ?>" alt="" width="20" height="20">
            <span>Rahva Raamat</span>
          </a>
        </div>

        <div class="site-footer__social">
          <a class="btn btn-icon-circle" href="https://facebook.com/" target="_blank" rel="noopener" aria-label="Facebook">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/facebook-logo-duotone.svg' ); ?>" alt="" width="18" height="18">
          </a>
          <a class="btn btn-icon-circle" href="https://instagram.com/" target="_blank" rel="noopener" aria-label="Instagram">
            <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/instagram-logo-duotone.svg' ); ?>" alt="" width="18" height="18">
          </a>
        </div>
      </div>

      <!-- Veerg 2: Kiirlingid -->
      <nav class="site-footer__col site-footer__col--links" aria-labelledby="footer-quick">
        <h3 id="footer-quick" class="site-footer__heading text-heading-4">
          <span class="site-footer__dot site-footer__dot--blue" aria-hidden="true"></span>
          Leia kiirelt
        </h3>
        <ul class="site-footer__links">
          <li><a href="#raamat">Raamatust</a></li>
          <li><a href="#materjalid">Materjalid</a></li>
          <li><a href="#arvustused">Arvustused</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
        </ul>
      </nav>

      <!-- Veerg 3: Kontakt -->
      <div class="site-footer__col site-footer__col--contact">
        <h3 class="site-footer__heading text-heading-4">
          <span class="site-footer__dot site-footer__dot--pink" aria-hidden="true"></span>
          Kontakt
        </h3>
        <ul class="site-footer__contact">
          <li>
            <img class="site-footer__contact-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/envelope-duotone.svg' ); ?>" alt="" width="20" height="20">
            <a href="mailto:riin@rahamang.ee">riin@rahamang.ee</a>
          </li>
          <li>
            <img class="site-footer__contact-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/device-mobile-camera-duotone.svg' ); ?>" alt="" width="20" height="20">
            <a href="tel:+3725130330">+372 51 30 330</a>
          </li>
          <li>
            <img class="site-footer__contact-icon" src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/castle-turret-duotone.svg' ); ?>" alt="" width="20" height="20">
            <span>EduRuut OÜ</span>
          </li>
        </ul>
      </div>

    </div>

    <div class="site-footer__bottom">
      <a class="site-footer__legal" href="#">Privaatsuspoliitika</a>
      <a class="site-footer__legal" href="#">Tingimused</a>
    </div>

  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
``