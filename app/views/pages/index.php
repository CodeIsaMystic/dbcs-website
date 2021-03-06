<!-- HEADER -->
<?php
require APP_ROOT . '/views/inc/header.php'; 
?>

<!-- FLASH  MESSAGES -->
<?php require APP_ROOT . '/views/inc/flashmessages.php'; ?>

<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>

<!-- SECTION HERO -->
<section class="bg-white pb-lg">
  <div class="hero grid--hero container container--md pX">
    <div class="hero--txt mt-lg">
      <h1 class="heading-primary txt-dark-gray fontW700 mb-sm">
        <?= e($data['title']); ?>
      </h1>
      <p class="txt-content txt-dark-gray mb">
        <?= e($data['description']); ?>
      </p>
      <div class="btn-wrapper">
        <a href="#cta" class="btn btn-hover btn-hover--blue txt-center mr"
          >Votre premier essai gratuit</a
        >
      </div>
      <div class="customers-profiles mt">
        <div class="customers-profiles__imgs">
          <img
            class="b-radius50"
            src="<?= URL_ROOT; ?>/img/site/customers/customer-1.jpg"
            alt="Customer photo 1"
          />
          <img
            class="b-radius50"
            src="<?= URL_ROOT; ?>/img/site/customers/customer-2.jpg"
            alt="Customer photo 2"
          />
          <img
            class="b-radius50"
            src="<?= URL_ROOT; ?>/img/site/customers/customer-3.jpg"
            alt="Customer photo 3"
          />
          <img
            class="b-radius50"
            src="<?= URL_ROOT; ?>/img/site/customers/customer-4.jpg"
            alt="Customer photo 4"
          />
          <img
            class="b-radius50"
            src="<?= URL_ROOT; ?>/img/site/customers/customer-5.jpg"
            alt="Customer photo 5"
          />
          <img
            class="b-radius50"
            src="<?= URL_ROOT; ?>/img/site/customers/customer-6.jpg"
            alt="Customer photo 6"
          />
        </div>
        <p class="txt-content fontW500">
          <span class="txt-blue fontW700">... nos sportifs</span> qui ont
          déjà réussis!
        </p>
      </div>
    </div>
    <div class="hero--img img-80 pt mt-lg">
      <picture>
        <img
          src="<?= URL_ROOT; ?>/img/site/mockups/hero.png"
          alt="A mockup with 3 images about gym, fitness & sport with man and woman"
        />
      </picture>
    </div>
  </div>
</section>

<!-- SECTION PARTNERS -->
<section class="bg-white pt-md">
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

<!-- SECTION STEP HOW IT WORKS -->
<section class="step bg-white mt-xl mb-lg pX">
  <div class="container container--md pX">
    <h4 class="subheading fontW700 txt-upp txt-blue mb-xs">
      Comment ça marche
    </h4>
    <h2 class="heading-secondary txt-dark-gray mb pb">
      Ton coaching personnalisé en 3 étapes
    </h2>
  </div>

  <div
    class="
      container container--sm
      grid grid--2-cols
      grid-gap--large
      grid--center-v pX
    "
  >
    <!-- STEP 01 -->
    <div>
      <p class="step__number fontW700 mb-xxs">01</p>
      <h3 class="heading-tertiary txt-dark-gray mb-sm">
        Contactez le coach (et profitez du 1er essai gratuit)
      </h3>
      <p class="txt-content--large">
        Prenez contact, afin de pouvoir déterminer les objectifs, les
        contraintes, les disponibilités. Le coach travaillera pour vous
        proposer un plan adapté à vos besoins.
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
    <div class="step-text-box">
      <p class="step__number fontW700 mb-xxs">02</p>
      <h3 class="heading-tertiary txt-dark-gray mb-sm">
        Premier entretien: objectifs & programme
      </h3>
      <p class="txt-content--large">
        Approuvez le plan, et bénéficiez des premiers conseils pro. Les
        premières séances seront de bons tests, afin de confirmer et
        d'ajuster votre programme. Votre ressenti est la clé.
      </p>
    </div>

    <!-- STEP 03 -->
    <div class="step-text-box">
      <p class="step__number fontW700 mb-xxs">03</p>
      <h3 class="heading-tertiary txt-dark-gray mb-sm">
        Mettez en place tout votre programme
      </h3>
      <p class="txt-content--large">
        Suite à cette première collaboration, nous déterminerons ensemble
        les bases pour construire cette routine à long terme afin de
        réaliser vos objectifs et de miser sur votre santé.
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

<!-- SECTION TESTIMONIALS -->
<section
  class="grid--testimonial-section linear-grad-lightBlue mt-xl pb-lg"
>
  <div class="testimonials">
    <h4 class="subheading fontW700 txt-upp txt-upp txt-blue mb-xs">
      Témoignages
    </h4>
    <h2 class="heading-secondary txt-dark-gray mb-md">
      Commencer, c'est se donner l'envie de continuer...
    </h2>

    <div class="grid--testimonials">
      <figure class="testimonial">
        <img
          class="b-radius50 mb-xxs"
          alt="Photo of customer Dave Bryson"
          src="<?= URL_ROOT; ?>/img/site/customers/dave.jpg"
        />
        <blockquote class="txt-content--narrow font-garamond mb-xs">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maxime
          quae, eaque eius eos sapiente corrupti nesciunt voluptate
          debitis!
        </blockquote>
        <p class="testimonial-name txt-content">&mdash; Julien L...</p>
      </figure>

      <figure class="testimonial">
        <img
          class="b-radius50 mb-xxs"
          alt="Photo of customer Ben Hadley"
          src="<?= URL_ROOT; ?>/img/site/customers/ben.jpg"
        />
        <blockquote class="txt-content--narrow font-garamond mb-xs">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos
          distinctio maxime sint atque dolorum sapiente in laborum harum!
        </blockquote>
        <p class="testimonial-name txt-content">&mdash; Nicolas D...</p>
      </figure>

      <figure class="testimonial">
        <img
          class="b-radius50 mb-xxs"
          alt="Photo of customer Joe"
          src="<?= URL_ROOT; ?>/img/site/customers/steve.jpg"
        />
        <blockquote class="txt-content--narrow font-garamond mb-xs">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint
          facilis ipsam laborum eius voluptates possimus. Reprehenderit
          tempore ratione minus!
        </blockquote>
        <p class="testimonial-name txt-content">&mdash; Joe Lesportif</p>
      </figure>

      <figure class="testimonial">
        <img
          class="b-radius50 mb-xxs"
          alt="Photo of customer Hannah Smith"
          src="<?= URL_ROOT; ?>/img/site/customers/hannah.jpg"
        />
        <blockquote class="txt-content--narrow font-garamond mb-xs">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Inventore nesciunt unde, soluta nisi odio recusandae eligendi
          eos!
        </blockquote>
        <p class="testimonial-name txt-content">&mdash; Anna F...</p>
      </figure>
    </div>
  </div>

  <div class="gallery grid--gallery">
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-1.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-2.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-3.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-4.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-5.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-6.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-7.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-8.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-9.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-10.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-11.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
    <figure class="gallery__item">
      <img
        src="<?= URL_ROOT; ?>/img/site/gallery/gallery-12.jpg"
        alt="Gallery photo of gym men and women doing sport"
      />
    </figure>
  </div>
</section>

<!-- SECTION PRICING -->
<section class="pricing-plan bg-white pt-lg pb-md">
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
          à l'unité
        </p>
        <p class="plan__price mb-xs txt-dark fontW700">
          59,90<span class="fontW500">€/cours</span>
        </p>
        <p class="plan__text txt-content">
          revient à un budget de 240€/mois, pour 4 cours sans engagement.
        </p>
      </header>
      <ul class="plan__list txt-dark">
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <span>Entretien, séance coaching</span>
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
          49,90<span class="fontW500">€/cours</span>
        </p>
        <p class="plan__text txt-content">
          revient à un budget de 200€/mois pour un engagement d'1 mois.
        </p>
      </header>
      <ul class="plan__list txt-dark">
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p>Entretien, séance coaching</p>
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
              >Programme, gestion de la difficulté</span
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
          29,90<span class="fontW500">€/cours</span>
        </p>
        <p class="plan__text txt-content">
          revient à un budget de 120€/mois avec un engagement sur 2mois.
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
              >Programme, gestion de la difficulté</span
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
          <p><span class="fontW700">Fidélisation</span></p>
        </li>
        <li class="list-item">
          <ion-icon
            class="icon-blue icon-sm"
            name="checkmark-outline"
          ></ion-icon>
          <p><span class="fontW700">10ème séance</span> gratuite</p>
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
      services suivants:
    </aside>
  </div>

  <div class="container container--md grid grid-gap--medium grid--4-cols pX">
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
        Analyser votre évolution
      </h3>
      <p class="txt-content">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Provident, optio quasi? Laboriosam.
      </p>
    </div>
  </div>

  <div class="container container--md txt-center pX">
    <a href="<?= URL_ROOT; ?>/pages/coaching" class="link link--underline "
      >Rendez-vous à la page Coaching &rarr;</a
    >
  </div>
</section>

<!-- SECTION FORM-PROSPECT -->
<section class="linear-grad-lightBlue pb-lg pt-lg" id="cta">
  <div class="container container--md with-parallax pX">

    <div class="form-prospect grid--form-prospect b-radius4 box-shad">
      <div class="form-prospect__text-box txt-dark linear-grad-blue">
        <h2 class="heading-secondary txt-dark-gray mb">
          Contactez le coach
        </h2>
        <p class="txt-content--large mb">
          Amateurs, Sportifs ou bien semi-professionnels, tentez votre
          chance, le coach vous recontactera pour commencer à vous aider
          dans vos objectifs. Il pourra alors, vous faire profiter de
          votre premier cours gratuit. (pour établir un partenariat vous
          pouvez nous contactez via la rubrique de
          <a class="link link-dark" href="#">"partenariat"</a> en bas de
          page)
        </p>

        <!-- form-prospect -->
        <form action="<?= URL_ROOT; ?>/pages/index" method="post" class="grid--form">
          <div>
            <label class="fontW700 mb-xxs" for="prospectName">Nom Complet</label>
            
            <span class="b-radius4">
              <span class="txt-content--xsmall txt-danger"><?= e($data['prospect_name_err']);?></span>
            </span>

            <input
              class="b-radius4 bg-white"
              id="prospectName"
              type="text" value="<?= e($data['prospect_name']); ?>"
              placeholder="votre nom"
              name="prospect_name"
              required
            />
          </div>

          <div>
            <label class="fontW700 mb-xxs" for="prospectEmail" >Adresse Mail</label>

            <span class="b-radius4">
              <span class="txt-content--xsmall txt-danger"><?= e($data['prospect_email_err']); ?></span>
            </span>
            
            <input
              class="b-radius4 bg-white"
              id="prospectEmail"
              type="email" value="<?= e($data['prospect_email']); ?>"
              placeholder="email@example.com"
              name="prospect_email"
              required
            />
          </div>

          <div class="free-course mt-xs">
            <div>
              <input class="b-radius4 bg-white" id="askFreeCourse" type="checkbox" name="ask_free_course" value="<?= e($data['ask_free_course']); ?>">
              <label class="fontW700" for="askFreeCourse" >Essai gratuit</label>
            </div>
          </div>

          <button type="submit" class="btn btn--baseline btn-hover btn-hover--blue">
            Essai gratuit
          </button>
        </form>
      </div>
      <div
        class="form-prospect__img-box"
        role="img"
        aria-label="Bastien Desmet Coach Sportif"
      ></div>
    </div>
  </div>
</section>

 <!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>