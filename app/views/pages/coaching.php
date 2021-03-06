<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>


<!-- FLASH  MESSAGES -->
<?php require APP_ROOT . '/views/inc/flashmessages.php'; ?>

<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>

 <!-- SECTION HERO CONTACT -->
<section class="full-width bg-white">
  <div>
    <picture>
      <img src="<?= URL_ROOT; ?>/img/site/hero/coaching.jpg" alt="Two womens doing sport in a gym"/>
    </picture>
  </div>
  <div class="full-width__heading full-width__heading--left">
    <h4 class="subheading fontW700 txt-upp txt-blue pb-xxs">Coaching</h4>
    <h1 class="heading-primary txt-dark-gray fontW500 font-garamond pb-xs">
        <?= e($data['title']); ?>
    </h1>
    <p class="txt-content txt-dark">
      <?= e($data['description']); ?>
    </p>
  </div>
</section>

<!-- SECTION TITLE CENTER -->
<section class="bg-white pb-md pt-md">
  <div class="container container--md txt-center pX">
    <h2
    class="heading-secondary txt-dark-gray font-garamond fontW500 pb"
    >
    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
  </h2>
  <p class="txt-content txt-dark">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam reprehenderit excepturi veritatis eligendi culpa quam, fugiat quia tenetur saepe explicabo rem, libero voluptatem id neque! Deleniti quasi soluta porro, vel facilis atque quaerat cumque ipsam tempora similique, ea exercitationem tenetur sed. Cumque nostrum, ipsum dolorum sit eos eveniet exercitationem? Eveniet asperiores minima eius nesciunt tempora eum tenetur. Unde omnis quasi earum, cumque saepe enim repellat nesciunt possimus nulla blanditiis facilis esse repudiandae temporibus eveniet aliquid exercitationem eum tempora. Ad recusandae cupiditate tempore accusantium, obcaecati saepe harum beatae pariatur. Fuga delectus animi perspiciatis eius itaque, sed repellendus sit maiores dolor, molestiae, qui incidunt dolore nesciunt consequatur. Suscipit nulla labore eum consectetur illum quisquam iure facilis alias provident voluptas.
  </p>
</div>
</section>

<!-- SECTION PARTNERS -->
<section class="bg-white pt-lg pb-lg">
  <div class="container container--lg pX">
    <h2 class="subheading txt-upp txt-center fontW500 mb-sm">
      Nos partenaires
    </h2>
    <div class="partners-logo">
      <img src="<?= URL_ROOT; ?>/img/site/logos/logos-partners/decathlon.png" alt="Decathlon logo" />
      <img
        src="<?= URL_ROOT; ?>/img/site/logos/logos-partners/cep-gilles-cometti.png"
        alt="CEP Gilles Cometti logo"
      />
      <img src="<?= URL_ROOT; ?>/img/site/logos/logos-partners/hbx-noir.png" alt="HBX logo" />
      <img
        src="<?= URL_ROOT; ?>/img/site/logos/logos-partners/naturacademy.png"
        alt="Naturacademy logo"
      />
      <img
        src="<?= URL_ROOT; ?>/img/site/logos/logos-partners/lappart.png"
        alt="L'Appart Fitness logo"
      />
    </div>
  </div>
</section>

<!-- SECTION COACHING DETAILS -->
<section class="coaching-details bg-white pt-md">
  <div class="container container--md pX">
    <h4 class="subheading fontW700 txt-blue txt-upp mb-xs">
      Coaching
    </h4>
    <h2 class="heading-secondary txt-dark-gray mb-md">
      Le coaching, plus en d??tails...
    </h2>
  </div>

  <div class="container container--md pX">
  <p class="txt-content txt-dark mb-lg">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam reprehenderit excepturi veritatis eligendi culpa quam, fugiat quia tenetur saepe explicabo rem, libero voluptatem id neque! Deleniti quasi soluta porro, vel facilis atque quaerat cumque ipsam tempora similique, ea exercitationem tenetur sed. Cumque nostrum, ipsum dolorum sit eos eveniet exercitationem? Eveniet asperiores minima eius nesciunt tempora eum tenetur.
  </p>
</div>
  
  <div class="container container--md grid grid-gap--medium grid--4-cols mt-md pX">
    <div class="feature">
      <ion-icon
        class="icon-blue icon-sm b-radius50 mb-sm"
        name="calendar-outline"
      ></ion-icon>
      <h3 class=" mb-xs txt-dark-gray fontW700">
        Programmez vos objectifs
      </h3>
      <p class="txt-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Consectetur alias quaerat velit tenetur fugiat eos!
      </p>
    </div>
    <div class="feature">
      <ion-icon
        class="icon-blue icon-sm b-radius50 mb-sm"
        name="pulse-outline"
      ></ion-icon>
      <h3 class=" mb-xs txt-dark-gray fontW700">
        Travailler sur le cardio
      </h3>
      <p class="txt-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui alias
        repellendus aperiam.
      </p>
    </div>
    <div class="feature">
      <ion-icon
        class="icon-blue icon-sm b-radius50 mb-sm"
        name="barbell-outline"
      ></ion-icon>
      <h3 class=" mb-xs txt-dark-gray fontW700">
        Muscler votre corps
      </h3>
      <p class="txt-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
        impedit aliquam consequatur.
      </p>
    </div>
    <div class="feature">
      <ion-icon
        class="icon-blue icon-sm b-radius50 mb-sm"
        name="bar-chart-outline"
      ></ion-icon>
      <h3 class=" mb-xs txt-dark-gray fontW700">
        Analyser votre ??volution
      </h3>
      <p class="txt-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Provident, optio quasi? Laboriosam.
      </p>
    </div>
  </div>

  
  <div class="container container--md pX">
  <p class="txt-content txt-dark mt-xl">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam reprehenderit excepturi veritatis eligendi culpa quam, fugiat quia tenetur saepe explicabo rem, libero voluptatem id neque! Deleniti quasi soluta porro, vel facilis atque quaerat cumque ipsam tempora similique, ea exercitationem tenetur sed. Cumque nostrum, ipsum dolorum sit eos eveniet exercitationem? Eveniet asperiores minima eius nesciunt tempora eum tenetur.
  </p>
</div>

<div class="container container--md txt-center pX">
  <a href="#" class="link link--underline mt-md mb-md"
    >En direct ou bien avec le formulaire ci-dessous, le coach vous contactera</a
  >
</div>

</section>

<!-- SECTION HOW IT WORKS -->
<section class="step bg-white mt-xl pb-lg pX">
  <div class="container container--md pX">
    <h4 class="subheading fontW700 txt-upp txt-blue mb-xs">
      Comment ??a marche
    </h4>
    <h2 class="heading-secondary txt-dark-gray mb-lg pb">
      Ton coaching personnalis?? en 3 ??tapes
    </h2>
  </div>

  <div
    class="
      container container--sm pX
      grid grid--2-cols
      grid-gap--large
      grid--center-v
    "
  >
    <!-- STEP 01 -->
    <div>
      <p class="step__number fontW700 mb-xxs">01</p>
      <h3 class="heading-tertiary txt-dark-gray mb-sm">
        Contactez le coach (et profitez du 1er essai gratuit)
      </h3>
      <p class="txt-content--large">
        Prenez contact, afin de pouvoir d??terminer les objectifs, les
        contraintes, les disponibilit??s. Le coach travaillera pour vous
        proposer un plan adapt?? ?? vos besoins.
      </p>
    </div>

    <div class="step__img-box">
      <img
        src="<?= URL_ROOT; ?>/img/site/mockups/mockup-contact.png"
        class=" img-30"
        alt="iPhone with contact section on screen"
      />
    </div>

    <!-- STEP 02 -->
    <div class="step__img-box">
      <img
        src="<?= URL_ROOT; ?>/img/site/mockups/mockup-call.png"
        class=" img-30"
        alt="iPhone with view when calling a client"
      />
    </div>
    <div>
      <p class="step__number fontW700 mb-xxs">02</p>
      <h3 class="heading-tertiary txt-dark-gray mb-sm">
        Premier entretien: objectifs & programme
      </h3>
      <p class="txt-content--large">
        Approuvez le plan, et b??n??ficiez des premiers conseils pro. Les
        premi??res s??ances seront de bons tests, afin de confirmer et
        d'ajuster votre programme. Votre ressenti est la cl??.
      </p>
    </div>

    <!-- STEP 03 -->
    <div>
      <p class="step__number fontW700 mb-xxs">03</p>
      <h3 class="heading-tertiary txt-dark-gray mb-sm">
        Mettez en place tout votre programme
      </h3>
      <p class="txt-content--large">
        Suite ?? cette premi??re collaboration, nous d??terminerons ensemble
        les bases pour construire cette routine ?? long terme afin de
        r??aliser vos objectifs et de miser sur votre sant??.
      </p>
    </div>
    <div class="step__img-box">
      <img
        src="<?= URL_ROOT; ?>/img/site/mockups/organisation-mockup.png"
        class=" img-38"
        alt="mockup of a note and a calendar scheduling tasks"
      />
    </div>
  </div>
</section>


<!-- SECTION PRICING -->
<section class="pricing-plan bg-white pt-xl pb-md">
  <div class="container container--md pX">
    <h4 class="subheading fontW700 txt-blue txt-upp mb-xs">
      Prix & Abonnements
    </h4>
    <h2 class="heading-secondary txt-dark-gray mb-md">
      Investir sainement sur le long terme...
    </h2>
  </div>

  <div
    class="container container--md grid grid--3-cols grid-gap--medium mb pX"
  >
    <div class="pricing-plan__card pricing-plan__card--starter plan b-radius4 box-shad">
      <header class="mb txt-center">
        <p class="plan__name mb-sm fontW700 txt-upp txt-blue">
          Cours <br />
          ?? l'unit??
        </p>
        <p class="plan__price mb-xs txt-dark fontW700">
          59,90<span class="fontW500">???/cours</span>
        </p>
        <p class="plan__text txt-content">
          revient ?? un budget de 240???/mois, pour 4 cours sans engagement.
        </p>
      </header>
      <ul class="plan__list txt-dark">
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <span>Entretien, s??ance coaching</span>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <span>Conseils & motivations</span>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="close-outline"
          ></ion-icon>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="close-outline"
          ></ion-icon>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="close-outline"
          ></ion-icon>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="close-outline"
          ></ion-icon>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="close-outline"
          ></ion-icon>
        </li>
      </ul>
      <div class="plan__btn txt-center">
        <a href="<?= URL_ROOT; ?>/pages/index.php#cta" class="btn btn-hover btn-hover--blue"
          >Commencer votre entrainement</a
        >
      </div>
    </div>

    <div
      class="pricing-plan__card pricing-plan__card--intermediate plan b-radius4 box-shad"
    >
      <header class="mb txt-center">
        <p class="plan__name mb-sm fontW700 txt-upp txt-blue">
          Pack de 4 <br />
          cours
        </p>
        <p class="plan__price mb-xs txt-dark fontW700">
          49,90<span class="fontW500">???/cours</span>
        </p>
        <p class="plan__text txt-content">
          revient ?? un budget de 200???/mois pour un engagement d'1 mois.
        </p>
      </header>
      <ul class="plan__list txt-dark">
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p>Entretien, s??ance coaching</p>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p>
            <span class="fontW700">Conseils & motivations</span>
          </p>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p>
            <span class="fontW700"
              >Programme, gestion de la difficult??</span
            >
          </p>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="close-outline"
          ></ion-icon>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="close-outline"
          ></ion-icon>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="close-outline"
          ></ion-icon>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="close-outline"
          ></ion-icon>
        </li>
      </ul>
      <div class="plan__btn txt-center">
        <a href="<?= URL_ROOT; ?>/pages/index.php#cta" class="btn btn-hover btn-hover--blue"
          >Commencer votre entrainement</a
        >
      </div>
    </div>

    <div
      class="
        pricing-plan__card pricing-plan__card--complete
        plan b-radius4
        box-shad
        linear-grad-lightBlue
      "
    >
      <header class="mb txt-center">
        <p class="plan__name mb-sm fontW700 txt-upp txt-dark-gray">
          Pack de 8 <br />
          cours
        </p>
        <p class="plan__price mb-xs txt-dark fontW700">
          29,90<span class="fontW500">???/cours</span>
        </p>
        <p class="plan__text txt-content">
          revient ?? un budget de 120???/mois avec un engagement sur 2mois.
        </p>
      </header>
      <ul class="plan__list txt-dark">
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p>Plan, entretien, objectifs</p>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p>
            <span class="fontW700">Conseils & motivations</span>
          </p>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p>
            <span class="fontW700"
              >Programme, gestion de la difficult??</span
            >
          </p>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p><span class="fontW700">Suivi individuel</span></p>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p><span class="fontW700">Contact 7j/7</span></p>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p><span class="fontW700">Fid??lisation</span></p>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p><span class="fontW700">10??me s??ance</span> gratuite</p>
        </li>
      </ul>
      <div class="plan__btn txt-center">
        <a href="<?= URL_ROOT; ?>/pages/index.php#cta" class="btn btn-hover btn-hover--blue"
          >Commencer votre entrainement</a
        >
      </div>
    </div>
  </div>

  <div class="container container--md grid grid-gap--large pX">
    <aside class="txt-content txt-center">
      Nos prix comprennent la TVA & tout nos cours/abonnements inclus les
      services cit?? ci-dessus.
    </aside>
  </div>
</section>

<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>