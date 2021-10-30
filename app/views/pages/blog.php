<!-- HEADER --->
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- FLASH  MESSAGES -->
<?php require APP_ROOT . '/views/inc/flashmessages.php'; ?>


<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>

 <!-- SECTION HERO BLOG -->
<section class="hero--fullW bg-white">
  <div>
    <picture>
      <source srcset="<?php echo URL_ROOT; ?>/img/site/full-width/gym2.png" type="image/webp" />
      <source srcset="<?php echo URL_ROOT; ?>/img/site/full-width/gym2.png" type="image/png" />

      <img src="<?php echo URL_ROOT; ?>/img/site/full-width/gym2.png" alt="gym with people listening their coach"/>
    </picture>
  </div>
  <div class="hero--fullW__heading hero--fullW__heading--left">
    <h4 class="subheading fontW700 txt-upp txt-blue pb-xxs">Article</h4>
    <h1 class="heading-primary txt-dark-gray fontW500 font-garamond pb-xs">
        <?= $data['title']; ?>
    </h1>
    <p class="txt-content txt-dark">
        <?= $data['description']; ?>
      </p>
  </div>
</section>

<!-- SECTION TITLE CENTER --->
<section class="bg-white pb-md pt-md">
  <div class="container container--md txt-center">
    <h2
    class="heading-secondary txt-dark-gray font-garamond fontW500"
    >
    Nos derniers articles en date...
  </h2>
</div>
</section>

<!-- SECTION POSTS -->
<?php require APP_ROOT . '/views/posts/index.php'; ?>

<!-- SECTION PARTNERS -->
<section class="bg-white mb-lg pt-lg">
  <div class="container container--lg">
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

<!-- FOOTER --->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
