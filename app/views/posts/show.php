
<!-- HEADER -->
<?php 
require APP_ROOT . '/views/inc/header.php';
?>


<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO POST PAGE -->
<section class="full-width bg-white">
  <div>
    <picture>
      <img src="<?= URL_ROOT; ?>/img/uploads/<?= $data['post']->post_image ?>" alt="close up of two hands doing massage"/>
    </picture>
  </div>
  <div class="full-width__heading full-width__heading--center">
    <h4 class="subheading fontW700 txt-upp txt-blue">Article</h4>
    <h1 class="heading-primary txt-dark-gray txt-center fontW500 font-garamond">
      <?= e($data['post']->post_title); ?>
    </h1>

    <p class="txt-content--xsmall mt-xs">
      Article publié le
      <span class="txt-blue">
        <?= getDateFormatted($data['post']->post_created_at); ?>
      </span> 
    </p>

    <p class="txt-content--xsmall">
      Depuis le site internet 
      <span class="txt-blue">
        <?= !empty($data['post']->post_source_link) ? getLinkFormat(e($data['post']->post_source_link)) : 'non renseigné'; ?>
      </span>
    </p>
  </div>
</section>

<!-- SECTION POST PAGE CONTENT -->
<section class="show-pages bg-white mt-md">
  <!-- BACK BTN -->
  <div class="container container--lg pX">

    <div class="txt-dark mb">
      <a href="<?= URL_ROOT; ?>/pages/blog" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <div class="container container--lg pX">
    <div class="article-content txt-dark mb-xs">
      <?= $data['post']->post_body; ?>
    </div>

    <div class="article-content txt-dark mb">
      <a href="<?= $data['post']->post_source_link; ?>" target="_blank" class="link link-dark link--underline">
        <?php 
        if( $data['post']->post_source_link != null) {
          echo getLinkFormat($data['post']->post_source_link);  
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
