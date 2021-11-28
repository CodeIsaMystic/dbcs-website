<!-- HEADER -->
<?php
// var_dump($_SERVER['QUERY_STRING']); 

require APP_ROOT . '/views/inc/header.php'; ?>

<!-- FLASH  MESSAGES -->
<?php require APP_ROOT . '/views/inc/flashmessages.php'; ?>

<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>

 <!-- SECTION HERO BLOG -->
<section class="full-width bg-white">
  <div>
    <picture>
      <img src="<?php echo URL_ROOT; ?>/img/site/full-width/gym2.jpg" alt="gym with people listening their coach"/>
    </picture>
  </div>
  <div class="full-width__heading full-width__heading--left">
    <h4 class="subheading fontW700 txt-upp txt-blue pb-xxs">Article</h4>
    <h1 class="heading-primary txt-dark-gray fontW500 font-garamond pb-xs">
        <?= $data['title']; ?>
    </h1>
    <p class="txt-content txt-dark">
        <?= $data['description']; ?>
      </p>
  </div>
</section>

<!-- SECTION TITLE CENTER -->
<section class="bg-white pb-md pt-md">
  <div class="container container--md txt-center pX">
    <h2
    class="heading-secondary txt-dark-gray font-garamond fontW500 pb"
    >
    Nos derniers articles en date...
  </h2>

  <p class="txt-content txt-dark">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam reprehenderit excepturi veritatis eligendi culpa quam, fugiat quia tenetur saepe explicabo rem, libero voluptatem id neque! Deleniti quasi soluta porro, vel facilis atque quaerat cumque ipsam tempora similique, ea exercitationem tenetur sed. Cumque nostrum, ipsum dolorum sit eos eveniet exercitationem? Eveniet asperiores minima eius nesciunt tempora eum tenetur.
  </p>
</div>
</section>

<!-- SECTION POSTS -->
<?php require APP_ROOT . '/views/posts/index.php'; ?>

<!-- SECTION PARTNERS -->
<section class="bg-white mb-lg pt-lg">
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

<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
