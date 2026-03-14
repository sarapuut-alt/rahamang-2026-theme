<?php

get_header();

$front_page_title = get_field('front_page_title');

?>

<main>

    <!--Top section: -->
    
    <section class="top-section content-container">
      <div class="top-section__content">
        <div class="top-section__text-content">
          <h1><?php echo esc_html($front_page_title); ?></h1>
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

        <p class="feature-section__subtitle text-body-large">
          Rahamäng õpetab lastele olulisi rahoskusi läbi lõbusate tegevuste ja lugude, mis jäävad neile meelde kogu eluks.
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

    <!--Materials section: -->
       
<section class="materials-section">
  <div class="materials-section__inner content-container">
    <h2 class="materials-section__title text-heading-2">
      <?php
        printf(
          'Avasta %s materjalid',
          '<span class="text-accent">rahatarkuse</span>'
        );
      ?>
    </h2>

    <p class="materials-section__subtitle text-body-large">
      Vali endale sobiv materjal, mis aitab lastel mõista raha väärtust ja tarka rahakasutust.
    </p>

    <ul class="materials-cards">
      <?php

      // Kaardid 

      $materials = [
        [
          'img'       => get_template_directory_uri() . '/assets/books/book-tom-opib-rahamangu.png',
          'langs'     => ['EE','EN','RU'],
          'kicker'    => 'Rahatarkuse lasteraamat',
          'title'     => 'Tom õpib rahamängu',
          'excerpt'   => 'Kõige populaarsem rahatarkuse raamat lastele.',
          'price'     => '€20.00',
          'permalink' => '#',
        ],
        [
          'img'       => get_template_directory_uri() . '/assets/books/book-mina-opin-rahamangu.png',
          'langs'     => ['EE'],
          'kicker'    => 'Rahatarkuse töövihik lastele',
          'title'     => 'Mina õpin rahamängu',
          'excerpt'   => 'Eesti esimene rahatarkuse töövihik lastele, 2.–4. klass.',
          'price'     => '€20.00',
          'permalink' => '#',
        ],
        [
          'img'       => get_template_directory_uri() . '/assets/books/book-mina-opetan-rahamangu.png',
          'langs'     => ['EE'],
          'kicker'    => 'Rahatarkuse juhend õpetajatele',
          'title'     => 'Mina õpetan rahamängu',
          'excerpt'   => 'Õppematerjal, mis toetab rahatarkuse õpetamist.',
          'price'     => '€20.00',
          'permalink' => '#',
        ],
      ];

      foreach ($materials as $item): ?>
        <li class="materials-card">
          <a class="materials-card__link" href="<?php echo esc_url($item['permalink']); ?>">
            <div class="materials-card__media">
              <?php if (!empty($item['langs'])): ?>
                <div class="materials-card__langs">
                  <?php foreach ($item['langs'] as $lang): ?>
                    <span class="materials-card__lang"><?php echo esc_html($lang); ?></span>
                  <?php endforeach; ?>
                </div>
              <?php endif; ?>
              <img src="<?php echo esc_url($item['img']); ?>" alt="" loading="lazy" />
            </div>

            <div class="materials-card__body">
              <?php if (!empty($item['kicker'])): ?>
                <p class="materials-card__kicker text-body-small"><?php echo esc_html($item['kicker']); ?></p>
              <?php endif; ?>

              <h3 class="materials-card__title"><?php echo esc_html($item['title']); ?></h3>

              <?php if (!empty($item['excerpt'])): ?>
                <p class="materials-card__excerpt text-body-medium"><?php echo esc_html($item['excerpt']); ?></p>
              <?php endif; ?>

              <?php if (!empty($item['price'])): ?>
                <p class="materials-card__price"><?php echo esc_html($item['price']); ?></p>
              <?php endif; ?>
            </div>
          </a>
          <div class="cart-btn-container">
            <button class="materials-card__button" onclick="window.location.href='<?php echo esc_url($item['permalink']); ?>'; return false;">
              Lisa ostukorvi
            </button>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>

    <div class="button-container button-container--center">
      <a href="" class="btn btn-secondary">
        Vaata lisaks
      </a>
    </div>
  </div>
</section>

    <!--Materials section 2: -->
       
<section class="materials-section-2">
  <div class="materials-section-2__inner content-container">
    <h2 class="materials-section-2__title text-heading-2">
      <?php
        printf(
          'Rahatarkuse %s allalaadimiseks',
          '<span class="text-accent">materjalid</span>'
        );
      ?>
    </h2>

    <p class="materials-section-2__subtitle text-body-large">
      Mängulised ja praktilised abimaterjalid, mis toetavad lapse rahatarkuse arengut. Mõned tasuta, teised mugavalt allalaetavad väikese tasu eest.
    </p>
    
    <h3 class="text-heading-3 section-subheading">
    <img
    class="section-subheading__icon"
    src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/gift-duotone.svg' ); ?>"
    alt=""
    >
    <span class="section-subheading__text">Tasuta materjalid</span>
    </h3>

<ul class="materials-cards">
  <?php

  // Kaardid 2

  $materials = [
    [
      'img'       => get_template_directory_uri() . '/assets/materials/ettevotluse-alused.png',
      'tags'      => ['Tasuta'],
      'kicker'    => 'Tasuta rahatarkuse materjal',
      'title'     => 'Rahatarkuse õppematerjal lapsele: ettevõtluse alused',
      'permalink' => '#',
    ],
    [
      'img'       => get_template_directory_uri() . '/assets/materials/kulutamise-juhend.png',
      'tags'      => ['Tasuta'],
      'kicker'    => 'Tasuta rahatarkuse materjal',
      'title'     => 'Teadliku kulutamise juhend lapsele',
      'permalink' => '#',
    ],
    [
      'img'       => get_template_directory_uri() . '/assets/materials/varvimislehed.png',
      'tags'      => ['Tasuta'],
      'kicker'    => 'Tasuta rahatarkuse materjal',
      'title'     => 'Erinevad rahatarkuse värvimislehed lapsele',
      'permalink' => '#',
    ],
  ];
  ?>

  <?php foreach ($materials as $item): ?>
    <li class="materials-card-2">
      <a class="materials-card-2__link" href="<?php echo esc_url($item['permalink']); ?>">
        
        <div class="materials-card-2__media">
          <?php if (!empty($item['tags'])): ?>
            <div class="materials-card-2__tags">
              <?php foreach ($item['tags'] as $tag): ?>
                <span class="materials-card-2__tag"><?php echo esc_html($tag); ?></span>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <img src="<?php echo esc_url($item['img']); ?>" alt="" loading="lazy" decoding="async" />
        </div>

        <div class="materials-card-2__body">
          <?php if (!empty($item['kicker'])): ?>
            <p class="materials-card-2__kicker text-body-small"><?php echo esc_html($item['kicker']); ?></p>
          <?php endif; ?>

          <h3 class="materials-card-2__title"><?php echo esc_html($item['title']); ?></h3>
        </div>

        <div class="materials-card-2__button-row">
          <span class="btn btn-tertiary materials-card-2__cta">
            Lae alla tasuta
            <img
            class="icon-download"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/download-simple.svg' ); ?>"
            alt="" />
          </span>
        </div>

      </a>
    </li>
  <?php endforeach; ?>
</ul>

    <h3 class="text-heading-3 section-subheading">
    <img
    class="section-subheading__icon"
    src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/books-duotone.svg' ); ?>"
    alt=""
    aria-hidden="true"
    width="32"
    height="32"
    loading="lazy"
    decoding="async"
    >
    <span class="section-subheading__text">Tasulised materjalid</span>
    </h3>

    <ul class="materials-cards">
  <?php

  // Kaardid 3

  $materials = [
    [
      'img'       => get_template_directory_uri() . '/assets/materials/unknown.png',
      'kicker'    => 'TEEMA 2',
      'title'     => 'Unistamine',
      'price'     => '€6.00',
      'permalink' => '#',
    ],
    [
      'img'       => get_template_directory_uri() . '/assets/materials/unknown.png',
      'kicker'    => 'TEEMA 6',
      'title'     => 'Tom teenib raha',
      'price'     => '€6.00',
      'permalink' => '#',
    ],
    [
      'img'       => get_template_directory_uri() . '/assets/materials/unknown.png',
      'tags'      => ['Erihind'],
      'kicker'    => 'KÕIK TEEMAD',
      'title'     => 'Täiskursus',
      'price'     => '€49.00',
      'permalink' => '#',
    ],
  ];
  ?>

  <?php foreach ($materials as $item): ?>
    <li class="materials-card-2">
      <a class="materials-card-2__link" href="<?php echo esc_url($item['permalink']); ?>">
        
        <div class="materials-card-2__media">
          <?php if (!empty($item['tags'])): ?>
            <div class="materials-card-2__tags">
              <?php foreach ($item['tags'] as $tag): ?>
                <span class="materials-card-2__tag"><?php echo esc_html($tag); ?></span>
              <?php endforeach; ?>
            </div>
          <?php endif; ?>

          <img src="<?php echo esc_url($item['img']); ?>" alt="" loading="lazy" decoding="async" />
        </div>

        <div class="materials-card-2__body">
          <?php if (!empty($item['kicker'])): ?>
            <p class="materials-card-2__kicker text-body-small"><?php echo esc_html($item['kicker']); ?></p>
          <?php endif; ?>

          <h3 class="materials-card-2__title"><?php echo esc_html($item['title']); ?></h3>

          <?php if (!empty($item['price'])): ?>
          <p class="materials-card-2__price"><?php echo esc_html($item['price']); ?></p>
          <?php endif; ?>
        </div>
        

        <div class="materials-card-2__button-row">
          <span class="btn btn-tertiary materials-card-2__cta">
            Vaata lähemalt
            <img
            class="icon-download"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/caret-right-light.svg' ); ?>"
            alt=""
            aria-hidden="true"
            width="18"
            height="18" />
          </span>
        </div>

      </a>
    </li>
  <?php endforeach; ?>
</ul>

    <div class="button-container button-container--center">
      <a href="" class="btn btn-secondary">
        Vaata ka teisi teemavihikuid
      </a>
    </div>
  </div>
</section>

    <!--CTA offer section: -->

<section class="cta-offer">
  <div class="cta-offer__inner content-container">
    <div class="cta-offer__card">

      <div class="cta-offer__badge">
        <img
          src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/heart-duotone-pink.svg' ); ?>"
          alt=""
          aria-hidden="true"
          loading="lazy"
          decoding="async"
        >
        <span class="cta-offer__badge-text">Piiratud pakkumine</span>
      </div>

      <h2 class="cta-offer__title text-heading-2">
        Tee oma lapsele <span class="text-accent">väärtuslik kingitus</span>
      </h2>

      <p class="cta-offer__subtitle text-body-large">
        Telli Rahamängu suur kombo (raamat + töövihik + juhend) ja anna oma lapsele oskused, mis kestavad terve elu.
        <strong> Tasuta kohaletoimetamine üle Eesti!</strong>
      </p>

      <div class="cta-offer__actions">
        <a href="#" class="btn btn-secondary">
          Telli nüüd €73.00
        </a>
      </div>

      <ul class="cta-offer__trust">
        <li class="cta-offer__trust-item">
          <img
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/lock-laminated-duotone.svg' ); ?>"
            alt=""
          >
          <span>Turvaline makse</span>
        </li>
        <li class="cta-offer__trust-item">
          <img
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/package-duotone.svg' ); ?>"
            alt=""
          >
          <span>Tasuta tarne</span>
        </li>
        <li class="cta-offer__trust-item">
          <img
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/cat-duotone.svg' ); ?>"
            alt=""
          >
          <span>30‑päevane garantii</span>
        </li>
      </ul>

    </div>
  </div>
</section>

<!-- Testimonials section -->

<section class="testimonials-section">
  <div class="testimonials-section__inner content-container">

    <h2 class="testimonials-section__title text-heading-2">
      Mida ütlevad <span class="text-accent">rahulolevad</span> vanemad
    </h2>

    <p class="testimonials-section__subtitle text-body-large">
      Tuhanded pered üle Eesti on juba avastanud Rahamängu võlu.
    </p>

    <ul class="testimonials-cards">

      <!-- Kaart 1 -->
      <li class="testimonial-card">
        <!-- Jutumärgi ikoon -->
        <div class="testimonial-card__quote-icon">
          <img
            class="testimonial-card__quote-icon-img"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/quotes-duotone.svg' ); ?>"
            alt=""
          >
        </div>

        <!-- Tsitaat -->
        <blockquote class="testimonial-card__quote text-body-medium">
          “Minu laps, kes muidu küsib iga raamatu juures, et kui mitu lehekülge ma pean veel lugema, luges seda vabatahtlikult ja tassib kooli kaasa. Sisu on väga hea ja kaasahaarav.”
        </blockquote>

        <!-- Tähed failist -->
        <div class="testimonial-card__stars" aria-label="Hinnang: 5/5">
          <img
            class="testimonial-card__stars-img"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/stars.svg' ); ?>"
            alt=""
          >
        </div>

        <!-- Õhuke joon -->
        <hr class="testimonial-card__divider" aria-hidden="true">

        <!-- Autor -->
        <div class="testimonial-card__author">
          <div class="testimonial-card__avatar" aria-hidden="true">K</div>
          <div class="testimonial-card__meta">
            <div class="testimonial-card__name text-heading-5">Kadri</div>
            <div class="testimonial-card__role text-body-small">Ema</div>
          </div>
        </div>
      </li>

      <!-- Kaart 2 -->
      <li class="testimonial-card">
        <div class="testimonial-card__quote-icon">
          <img
            class="testimonial-card__quote-icon-img"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/quotes-duotone.svg' ); ?>"
            alt=""
          >
        </div>

        <blockquote class="testimonial-card__quote text-body-medium">
          “Minu 8‑aastane laps loeb praegu iseseisvalt ‘Tom õpib rahamängu’ raamatut. Tema jaoks on lugemine päris raske tegevus, aga sisu poolest talle meeldib.”
        </blockquote>

        <div class="testimonial-card__stars" aria-label="Hinnang: 5/5">
          <img
            class="testimonial-card__stars-img"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/stars.svg' ); ?>"
            alt=""
          >
        </div>

        <hr class="testimonial-card__divider" aria-hidden="true">

        <div class="testimonial-card__author">
          <div class="testimonial-card__avatar" aria-hidden="true">R</div>
          <div class="testimonial-card__meta">
            <div class="testimonial-card__name text-heading-5">Riina</div>
            <div class="testimonial-card__role text-body-small">8‑aastase lapse ema</div>
          </div>
        </div>
      </li>

      <!-- Kaart 3 -->
      <li class="testimonial-card">
        <div class="testimonial-card__quote-icon">
          <img
            class="testimonial-card__quote-icon-img"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/quotes-duotone.svg' ); ?>"
            alt=""
          >
        </div>

        <blockquote class="testimonial-card__quote text-body-medium">
          “Minu 4‑aastasele meeldivad kaks esimest peatükki, eriti teine, kus Tomil mänguasjadega jama juhtub. Väga korralik ja mõtlemapanev raamat ka lapsevanematele. Aitäh!”
        </blockquote>

        <div class="testimonial-card__stars" aria-label="Hinnang: 5/5">
          <img
            class="testimonial-card__stars-img"
            src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/stars.svg' ); ?>"
            alt=""
          >
        </div>

        <hr class="testimonial-card__divider" aria-hidden="true">

        <div class="testimonial-card__author">
          <div class="testimonial-card__avatar" aria-hidden="true">K</div>
          <div class="testimonial-card__meta">
            <div class="testimonial-card__name text-heading-5">Katri</div>
            <div class="testimonial-card__role text-body-small">4‑aastase lapse ema</div>
          </div>
        </div>
      </li>
    </ul>

  </div>
</section>

<?php get_footer(); ?> 