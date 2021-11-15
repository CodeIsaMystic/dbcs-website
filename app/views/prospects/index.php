<?php
// echo 'Prospect page';
// var_dump($data);
// die();
?>

<!-- SECTION PROSPECTS --->
<?php foreach($data['prospects'] as $prospect) : ?>

<section class="posts bg-white pb-md">
  <div class="container container--md">
    <article class="post grid--1-col b-radius4 box-shad1">

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
          
          <a href="#" class="link link--underline mt-sm">
          Voir fiche contact &rarr;
          </a>
          <!-- <a href="<?php //echo URL_ROOT; ?>/prospects/show/<?php// echo $prospect->prospect_id; ?>" class="link link--underline mt-sm">
          Voir fiche contact &rarr;
          </a> -->
        </div>
      </div>
    </article>
  </div>
</section>

<?php endforeach; ?>

