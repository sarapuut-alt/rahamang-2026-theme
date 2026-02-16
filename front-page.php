<?php

get_header();

?>

<main>

    <!--Top section: -->
    
    <section class="top-section content-container">

        <div class="top-section__content">
            
            <div class="top-section__text-content">

                <h1 class="text-heading-1">Õpeta lastele <span class="text-accent">rahatarkust</span> läbi mängu</h1>

                <p class="text-body-large">
                    Rahamäng on lõbus ja hariv lasteraamat, mis õpetab väikestele rahatarkust, säästmist ja targat rahakasutust läbi põnevate lugude ja mängude.
                </p>

                <img class="top-section__image-mobile" src="<?php echo get_template_directory_uri(); ?>/assets/creatures.png" alt="">

                <div class="button-container">
                    <a href="" class="btn btn-secondary">
                        Osta raamat
                    </a>
    
                    <a href="" class="btn btn-tertiary">
                        Loe rohkem
                    </a>
                </div>


            </div>

            <img class="top-section__image" src="<?php echo get_template_directory_uri(); ?>/assets/creatures.png" alt="">

        </div>

    </section>


    <!--Feature section: -->
    <section class="feature-section">
      <div class="feature-section__inner content-container">

        <h2 class="feature-section__title text-heading-2">
          <?php
            printf(
              'Rahatarkus, mis jääb %s',
              '<span class="text-accent">kogu eluks</span>'
            );
          ?>
        </h2>

        <p class="feature-section__subtitle.text-body-large">
          Rahamäng õpetab lastele olulisi rahoskusi läbi lõbusate tegevuste ja lugude,
          mis jäävad neile meelde kogu eluks.
        </p>

        <ul class="feature-cards">
          <?php
          // Kaartide andmed 
          $cards = [
            [
              'icon'  => get_template_directory_uri() . '/assets/icons/piggy-bank-duotone.svg',
              'title' => 'Säästmise põhited',
              'text'  => 'Lapsed õpivad, miks on oluline raha kõrvale panna ja kuidas seada säästueesmärke.',
            ],
            [
              'icon'  => get_template_directory_uri() . '/assets/icons/target-duotone.svg',
              'title' => 'Eesmärkide seadmine',
              'text'  => 'Raamat aitab lastel mõista, kuidas planeerida ja saavutada oma rahalisi unistusi.',
            ],
            [
              'icon'  => get_template_directory_uri() . '/assets/icons/lightbulb-filament-duotone.svg',
              'title' => 'Nutikad otsused',
              'text'  => 'Lõbusate näidete kaudu õpivad lapsed tegema tarku valikuid raha kulutamisel.',
            ],
            [
              'icon'  => get_template_directory_uri() . '/assets/icons/puzzle-piece-duotone.svg',
              'title' => 'Õppimine läbi mängu',
              'text'  => 'Interaktiivsed harjutused ja mängud muudavad rahatarkuse omandamise põnevaks.',
            ],
          ];

          foreach ($cards as $card): ?>
            <li class="feature-card">
              <?php if (!empty($card['icon'])): ?>
                <img class="feature-card__icon"
                     src="<?php echo esc_url($card['icon']); ?>"
                     alt=""
                     aria-hidden="true" />
              <?php endif; ?>

              <h3 class="feature-card__title">
                <?php echo esc_html($card['title']); ?>
              </h3>

              <p class="feature-card__text text-body-medium">
                <?php echo esc_html($card['text']); ?>
              </p>
            </li>
          <?php endforeach; ?>
        </ul>

      </div>
    </section>


</main>

<?php get_footer(); ?>