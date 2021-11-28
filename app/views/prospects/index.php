<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- SECTION PROSPECTS -->
<section class="posts bg-white mt-lg pb-md">
  <div class="container container--md pX">
    <h2 class="heading-secondary txt-dark-gray fontW500 font-garamond mb">Tout les prospects enregistrés</h2>
    
    <?php foreach($data['prospects'] as $prospect) : ?>
    <article class="post grid--1-col b-radius4 box-shadmb-sm">

      <div class="post-content">

        <div class="post-content__details">
          <p class="txt-content--xsmall fontW500">
            Ce prospect est entré en contact avec vous le
            <span class="txt-blue">
              <?php  echo getDateFormatted($prospect->prospect_created_at); ?>
            </span> 
          </p>
        </div>
        
        <div class="post-content__article txt-dark mt-md">
          <a class="" href="<?php echo URL_ROOT; ?>/posts/show/<?php echo $prospect->prospect_id; ?>">
            <h3 class="heading-post txt-dark-gray font-garamond">
              <?php echo $prospect->prospect_name; ?>
            </h3>
          </a>
          <p class="txt-content">
            <?php  echo $prospect->prospect_email; ?>
          </p>
          
          <a href="<?php //echo URL_ROOT; ?>/prospects/show/<?php// echo $prospect->prospect_id; ?>" class="link link--underline mt-sm">
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

