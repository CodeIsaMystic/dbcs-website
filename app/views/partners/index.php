<?php
// echo 'Partners page';
// var_dump($data);
// die();
?>

<!-- SECTION PARTNERS --->
<?php foreach($data['partners'] as $partner) : ?>

<section class="posts bg-white pb-md">
  <div class="container container--md">
    <article class="post grid--1-col b-radius4 box-shad1">

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
          <a class="" href="<?php echo URL_ROOT; ?>/partners/show/<?php echo $partner->partner_id; ?>">
            <h3 class="heading-post txt-dark-gray font-garamond">
              <?php echo $partner->partner_company_name; ?>
            </h3>
          </a>
          <p class="txt-content">
            <?php  echo $partner->partner_email; ?>
          </p>
          
          <a href="#" class="link link--underline mt-sm">
          Voir fiche contact &rarr;
          </a>
          <!-- <a href="<?php //echo URL_ROOT; ?>/artners/show/<?php// echo $partner->partner_id; ?>" class="link link--underline mt-sm">
          Voir fiche contact &rarr;
          </a> -->
        </div>
      </div>
    </article>
  </div>
</section>

<?php endforeach; ?>

