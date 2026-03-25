<?php
/**
 * Footer template
 */
?>

<footer class="site-footer">

  <!-- Ülemine laine -->
  <div class="site-footer__wave" aria-hidden="true">
    <img
      src="<?php echo esc_url( get_template_directory_uri() . '/assets/background-footer.png' ); ?>"
      alt=""
    >
  </div>

  <div class="site-footer__inner content-container">

    <div class="site-footer__grid">

      <!-- Veerg 1 -->
      <div class="site-footer__col site-footer__col--brand">

        <a class="site-footer__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
          <img
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/logo.svg' ); ?>"
            alt="Rahamäng"
          >
        </a>

        <p class="site-footer__desc text-body-medium">
          Rahamäng on Eesti lasteraamat, mis õpetab lastele rahatarkust, säästmist ja tarka
          rahakasutust läbi lõbusate lugude.
        </p>

        <!-- Saadaval -->
        <p class="site-footer__label text-body-small">Saadaval:</p>

        <div class="site-footer__stores">

          <a class="btn btn-store" href="https://www.apollo.ee/" target="_blank" rel="noopener">
            <img
              class="store-logo"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/logos/apollo.svg' ); ?>"
              alt="Apollo"
            >
          </a>

          <a class="btn btn-store" href="https://rahvaraamat.ee/" target="_blank" rel="noopener">
            <img
              class="store-logo"
              src="<?php echo esc_url( get_template_directory_uri() . '/assets/logos/rahvaraamat.svg' ); ?>"
              alt="Rahva Raamat"
            >
          </a>

        </div>

        <!-- Leia meid -->
        <p class="site-footer__label text-body-small">Leia meid:</p>
        <div class="site-footer__social">

          <a class="btn btn-icon-circle" 
            href="https://facebook.com/" 
            target="_blank" 
            rel="noopener"
            aria-label="Facebook">
        <img class="social-icon"
          src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/facebook-logo-duotone-2.svg' ); ?>"
          alt="">
        </a>

        <a class="btn btn-icon-circle"
          href="https://instagram.com/"
          target="_blank"
          rel="noopener"
          aria-label="Instagram">
        <img class="social-icon"
          src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/instagram-logo-duotone-2.svg' ); ?>"
          alt="">
      </a>
</div>
      </div>
      
      <!-- Veerg 2 — Kiirlingid -->
      <nav class="site-footer__col site-footer__col--links" aria-labelledby="footer-quick">
        <h3 id="footer-quick" class="site-footer__heading text-heading-4">
          <span class="site-footer__dot site-footer__dot--blue"></span>
          Leia kiirelt
        </h3>

        <ul class="site-footer__links">
          <li><a href="#raamat">Raamatust</a></li>
          <li><a href="#materjalid">Materjalid</a></li>
          <li><a href="#arvustused">Arvustused</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
        </ul>
      </nav>


      <!-- Veerg 3 — Kontakt -->
      <div class="site-footer__col site-footer__col--contact">
        <h3 class="site-footer__heading text-heading-4">
          <span class="site-footer__dot site-footer__dot--pink"></span>
          Kontakt
        </h3>

        <ul class="site-footer__contact">

          <li>
            <img class="site-footer__contact-icon"
                 src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/envelope-duotone-2.svg' ); ?>"
                 alt="">
            <a href="mailto:riin@rahamang.ee">riin@rahamang.ee</a>
          </li>

          <li>
            <img class="site-footer__contact-icon"
                 src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/device-mobile-camera-duotone-2.svg' ); ?>"
                 alt="">
            <a href="tel:+3725130330">+372 5130 330</a>
          </li>

          <li>
            <img class="site-footer__contact-icon"
                 src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/castle-turret-duotone-2.svg' ); ?>"
                 alt="">
            <span>EduRuut OÜ</span>
          </li>

        </ul>
      </div>

    </div> <!-- /grid -->

    <!-- Alumine navigatsioon -->
    <div class="site-footer__bottom">
      <a class="site-footer__legal" href="#">© 2026 Rahamäng</a>
      <a class="site-footer__legal" href="#">Privaatsuspoliitika</a>
      <a class="site-footer__legal" href="#">Tingimused</a>
    </div>

  </div><!-- /.inner -->

</footer>

<?php wp_footer(); ?>
</body>
</html>