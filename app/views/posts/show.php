
<!-- HEADER -->
<?php
require APP_ROOT . '/views/inc/header.php';
?>


<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO POST PAGE -->
<section class="hero--fullW bg-white">
  <div>
    <picture>
      <img src="<?php echo URL_ROOT; ?>/img/uploads/<?php echo $data['post']->image ?>" alt="close up of two hands doing massage"/>
    </picture>
  </div>
  <div class="hero--fullW__heading hero--fullW__heading--center">
    <h4 class="subheading fontW700 txt-upp txt-blue">Article</h4>
    <h1 class="heading-primary txt-dark-gray txt-center fontW500 font-garamond">
      <?php echo $data['post']->title; ?>
    </h1>

    <p class="txt-content--xsmall mt-xs">
      Article publié le
      <span class="txt-blue">
        <?php  echo getDateFormatted($data['post']->created_at); ?>
      </span> 
    </p>

    <p class="txt-content--xsmall">
      Depuis le site internet 
      <span class="txt-blue">
        <?php  echo getLinkFormat($data['post']->source_link); ?>
      </span>
    </p>
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
          echo getLinkFormat($data['post']->source_link);  
        } else {
          echo '';
        }
          ?>
      </a>
    </div>
  </div>
</section>

<!-- FOOTER --> 
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
