<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- SECTION PARTNERS -->
<section class="posts bg-white mt-lg pb-md">
  <div class="container container--md pX">
    <h2 class="heading-secondary txt-dark-gray fontW500 font-garamond mb">Tout les partenaires enregistrés</h2>
    
    <?php foreach($data['partners'] as $partner) : ?>
    <article class="post grid--1-col b-radius4 box-shadmb-sm">

      <div class="post-content">

        <div class="post-content__details">
          <p class="txt-content--xsmall fontW500">
            Vous êtes en contact avec ce partenaire depuis le
            <span class="txt-blue">
              <?php  echo getDateFormatted($partner->partner_created_at); ?>
            </span> 
          </p>
        </div>
        
        <div class="post-content__article txt-dark mt-md">
          <a href="<?php echo URL_ROOT; ?>/partners/show/<?php echo $partner->partner_id; ?>">
            <h3 class="heading-post txt-dark-gray font-garamond">
              <?php echo $partner->partner_company_name; ?>
            </h3>
          </a>
          <p class="txt-content">
            <?php  echo $partner->partner_email; ?>
          </p>
          
          <a href="<?php echo URL_ROOT; ?>/partners/show/<?php echo $partner->partner_id; ?>" class="link link--underline mt-sm">
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

