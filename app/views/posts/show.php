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
      <source srcset="<?php echo URL_ROOT; ?>/img/posts/pages/physio.png" type="image/webp" />
      <source srcset="<?php echo URL_ROOT; ?>/img/posts/pages/physio.png" type="image/png" />

      <img src="<?php echo URL_ROOT; ?>/img/posts/pages/physio.png" alt="#"/>
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
  <div class="container container--lgs">
    <div class="post-content txt-dark mb-xs">
      <?php echo $data['post']->body; ?>
    </div>

    <div class="post-content txt-dark mb">
      <a href="<?php echo $data['post']->source_link; ?>" target="_blank" class="link link-dark link--underline">
        <?php 
        if($data['post']->source_link != null) {
          echo $data['post']->source_link;  
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
