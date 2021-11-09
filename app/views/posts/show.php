<?php 
// var_dump($data);
//  die();
?>

<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>


<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO POST PAGE -->
<section class="hero--fullW bg-white">
  <div>
    <picture>
      <source srcset="<?php echo URL_ROOT; ?>/img/uploads/<?php echo $data['post']->image ?>" type="image/webp" />
      <source srcset="<?php echo URL_ROOT; ?>/img/uploads/<?php echo $data['post']->image ?>" type="image/png" />

      <img src="<?php echo URL_ROOT; ?>/img/uploads/<?php echo $data['post']->image ?>" alt="close up of two hands doing massage"/>
    </picture>
  </div>
  <div class="hero--fullW__heading hero--fullW__heading--center">
    <h4 class="subheading fontW700 txt-upp txt-blue">Article</h4>
    <h1 class="heading-primary txt-dark-gray txt-center fontW500 font-garamond">
      <?php echo $data['post']->title; ?>
    </h1>
  </div>
</section>

<!-- SECTION POST PAGE CONTENT -->
<section class="post-page bg-white mt-md">
  <!-- BACK BTN -->
  <div class="container container--lg">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/pages/blog" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <div class="container container--lg">
    <div class="post-content txt-dark mb-xs">
      <?php echo $data['post']->body; ?>
    </div>

    <div class="post-content txt-dark mb">
      <a href="<?php echo $data['post']->source_link; ?>" target="_blank" class="link link-dark link--underline">
        <?php 
        if( $data['post']->source_link != null) {
          echo getWebsiteSourceLinkFormatted($data['post']->source_link);  
        } else {
          echo '';
        }
          ?>
      </a>
    </div>
  </div>
</section>

<?php 
// var_dump($data);
// die();
?>




<!-- FOOTER --> 
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
