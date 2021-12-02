<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- SECTION PARTNERS -->
<section class="index-pages bg-white mt-lg pb-md">
  <div class="container container--md pX">
    <h2 class="heading-secondary txt-dark-gray fontW500 font-garamond mb">Tout les partenaires enregistrés</h2>
    
    <?php foreach($data['partners'] as $partner) : ?>
    <article class="grid--1-col b-radius4 box-shad mb-sm">

      <div class="article-content">

        <div class="article-content__desc">
          <p class="txt-content--xsmall fontW500">
            Vous êtes en contact avec ce partenaire depuis le
            <span class="txt-blue">
              <?= getDateFormatted($partner->partner_created_at); ?>
            </span> 
          </p>
        </div>
        
        <div class="article-content__basic-info txt-dark mt-md">
          <a href="<?= URL_ROOT; ?>/partners/show/<?= e($partner->partner_id); ?>">
            <h3 class="heading-post txt-dark-gray font-garamond">
              <?= e($partner->partner_company_name); ?>
            </h3>
          </a>
          <p class="txt-content">
            <?= e($partner->partner_email); ?>
          </p>
          
          <a href="<?= URL_ROOT; ?>/partners/show/<?= e($partner->partner_id); ?>" class="link link--underline mt-sm">
          Voir fiche contact &rarr;
          </a>
        </div>
      </div>
    </article>
    <?php endforeach; ?>

  </div>
</section>


<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>

