<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- HERO SECTION --->
<section class="contact-hero-bg hero-bg-img">
  <div class="hero grid--hero container container--md">
    <div class="mt-md mb-lg pb-lg pt-lg">
      <h4 class="subheading fontW700 txt-upp txt-blue mb-xs">Contact</h4>
      <h1 class="heading-primary txt-light mb-sm">
        <?= $data['title']; ?>
      </h1>
      <p class="txt-content txt-light">
        <?= $data['description']; ?>
      </p>
    </div>
  </div>
</section>

<!-- DETAILS CONTACT SECTION -->
<section class="bg pt-xl">
  <div class="container container--md">
    <h4 class="subheading fontW700 txt-upp txt-blue mb-xs">Détails</h4>
  </div>

  <div
    class="container container--md grid grid--3-cols grid-gap--large mb"
  >
    <div class="contact-details">
      <div class="col-address">
        <h4 class="heading-secondary font-garamond txt-dark-gray mb-md">
          Adresses
        </h4>
        <p class="txt-content mb-md">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea
          aliquid atque sapiente inventore dolores nam expedita ducimus
          sed, quis, neque architecto, delectus id. Harum, ipsum?
        </p>

        <ul class="social-links mb-sm">
          <li>
            <a class="link link-sm" href="#"
              ><ion-icon class="icon-xs" name="logo-instagram"></ion-icon
            ></a>
          </li>
          <li>
            <a class="link link-sm" href="#"
              ><ion-icon class="icon-xs" name="logo-facebook"></ion-icon
            ></a>
          </li>
          <li>
            <a class="link link-sm" href="#"
              ><ion-icon class="icon-xs" name="logo-snapchat"></ion-icon
            ></a>
          </li>
        </ul>
        <address class="contacts txt-content">
          <p class="mb-sm">
            <a class="link link-sm" href="mailto:contact@dbcs.com"
              >contact@dbcs.com</a
            >
          </p>
          <p class="address link-sm">
            Rue Louis Pasteur, Loire s/Rhône 69700
          </p>
        </address>
      </div>
    </div>
    <div class="contact-details">
      <nav class="col-nav">
        <h4 class="heading-secondary font-garamond txt-dark-gray mb-md">
          Partenariats
        </h4>
        <p class="txt-content mb-md">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatum, saepe ducimus omnis rem qui, repellendus praesentium
          esse aliquam nihil obcaecati delectus excepturi nam dolor sed,
          earum dolorem possimus aliquid? Fuga reprehenderit sint corrupti
          nulla! Autem.
        </p>
        <ul class="vertical-nav">
          <li>
            <a class="link link-sm link--underline" href="#"
              >Partenariat &rarr;</a
            >
          </li>
        </ul>
      </nav>
    </div>
    <div class="contact-details">
      <nav class="col-nav">
        <h4 class="heading-secondary font-garamond txt-dark-gray mb-md">
          Préparation physique<br />
          & Entreprises
        </h4>
        <p class="txt-content mb-md">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. In qui
          nostrum culpa, id dolor ab? Lorem ipsum dolor sit amet
          consectetur adipisicing elit. In qui nostrum culpa, id dolor ab?
        </p>
        <ul class="vertical-nav">
          <li>
            <a class="link link-sm link--underline" href="#"
              >Préparation Physique &rarr;</a
            >
          </li>
          <li>
            <a class="link link-sm link--underline" href="#"
              >Pour les entreprises &rarr;</a
            >
          </li>
        </ul>
      </nav>
    </div>
  </div>
</section>


<!-- PARTNERS SECTION -->
<section class="bg-white mb-lg pt-lg">
  <div class="container container--lg">
    <h2 class="subheading txt-upp txt-center fontW500 mb-sm">
      Nos partenaires
    </h2>
    <div class="partners-logo">
      <img src="<?= URL_ROOT; ?>/img/logos-partners/decathlon.png" alt="Decathlon logo" />
      <img
      src="<?= URL_ROOT; ?>/img/logos-partners/cep-gilles-cometti.png"
        alt="CEP Gilles Cometti logo"
      />
      <img src="<?= URL_ROOT; ?>/img/logos-partners/hbx-noir.png" alt="HBX logo" />
      <img
        src="<?= URL_ROOT; ?>/img/logos-partners/naturacademy.png"
        alt="Naturacademy logo"
      />
      <img
        src="<?= URL_ROOT; ?>/img/logos-partners/lappart.png"
        alt="L'Apprt Fitness logo"
      />
    </div>
  </div>
</section>

<!-- CTA SECTION --->
<section class="linear-grad-lightBlue pb-lg pt-lg">
  <div class="container container--md with-parallax" id="cta">
    <div
      class="
        cta
        grid--cta
        b-radius4
        box-shad1
        linear-grad-blue
        box-parallax
      "
    >
      <div class="cta-text-box txt-dark">
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

        <form class="grid--form" name="sign-up">
          <div>
            <label class="fontW700 mb-xxs" for="full-name"
              >Nom Complet</label
            >
            <input
              class="b-radius4 bg-white"
              id="full-name"
              type="text"
              placeholder="Votre nom"
              name="full-name"
              required
            />
          </div>

          <div>
            <label class="fontW700 mb-xxs" for="email"
              >Adresse Mail</label
            >
            <input
              class="b-radius4 bg-white"
              id="email"
              type="email"
              placeholder="votreMail@example.com"
              name="email"
              required
            />
          </div>

          <div>
            <label class="fontW700 mb-xxs" for="select-where"
              >Où vous nous avez connu?</label
            >
            <select
              class="b-radius4 bg-white"
              id="select-where"
              name="select-where"
              required
            >
              <option value=""></option>
              <option value="facebook">Facebook</option>
              <option value="instagram">Instagram</option>
              <option value="recommandated">Le bouche à oreille</option>
              <option value="firend">Recommandation d'un ami</option>
              <option value="others">Autre</option>
            </select>
          </div>

          <button class="btn btn--baseline btn-hover btn-hover--blue mt-xxs">
            Essai gratuit
          </button>
        </form>
      </div>
      <div
        class="img-box--cta"
        role="img"
        aria-label="Bastien Desmet Coach Sportif"
      ></div>
    </div>
  </div>
</section>


<?php require APP_ROOT . '/views/inc/footer.php'; ?>
