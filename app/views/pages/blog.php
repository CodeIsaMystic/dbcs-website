<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- HERO SECTION --->
<section class="blog-hero-bg hero-bg-img">
  <div class="hero grid--hero container container--md">
    <div class="pt-md pb-lg mt-lg mb-lg">
      <h4 class="subheading fontW700 txt-upp txt-blue mb-xs">Blog</h4>
      <h1 class="heading-primary txt-light mb-xs">
        <?= $data['title']; ?>
      </h1>
      <p class="txt-content txt-light pb-md">
        <?= $data['description']; ?>
      </p>
    </div>
  </div>
</section>

<!-- POST SECTION TITLE --->
<section class="bg-white pb pt-md">
  <div class="container container--md txt-center">
    <h4 class="subheading fontW700 txt-upp txt-blue mb-xs">Blog</h4>
    <h2
    class="heading-secondary txt-dark-gray font-garamond fontW500 mb"
    >
    Nos derniers articles en date..
  </h2>
</div>
</section>


<?php require APP_ROOT . '/views/posts/index.php'; ?>


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

          <button class="btn btn--baseline btn-hover b-radius25 mt-xxs">
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
