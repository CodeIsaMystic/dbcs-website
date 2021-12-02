
<!-- HEADER -->
<?php 
  require APP_ROOT . '/views/inc/header.php'; 
?>


<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO PARTNER PAGE -->
<section class="full-width bg-white">
  <div>
    <picture>
      <img src="<?= URL_ROOT; ?>/img/site/hero/jogger.jpg" alt="Image of a jogger in the street"/>
    </picture>
  </div>
  <div class="full-width__heading full-width__heading--center">
    <h4 class="subheading fontW700 txt-upp txt-blue">Partenaire</h4>
    <h1 class="heading-primary txt-dark-gray txt-center fontW500 font-garamond">
      <?= e($data['partner']->partner_company_name); ?>
    </h1>

    <p class="txt-content--xsmall mt-xs">
      Vous êtes entré en contact avec ce partenaire le  
      <span class="txt-blue">
        <?= getDateFormatted($data['partner']->partner_created_at); ?>
      </span> 
    </p>
  </div>
</section>

<!-- SECTION CONTENT PARTNER PAGE -->
<section class="show-pages bg-white pb-md">
  <!-- BACK BTN -->
  <div class="container container--lg pX">

    <div class="txt-dark mb">
      <a href="<?= URL_ROOT; ?>/partners/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>

  <!-- PARTNER PAGE INFO CONTENT -->
  <div class="container container--md pX">
    <div class="grid--1-col b-radius4 box-shad">
      <div class="article-content txt-dark txt-content pX">
        <h2 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Informations sur le partenaire 
          <span class="txt-blue"><?= e($data['partner']->partner_company_name) ?></span>.
        </h2>
        <p class="txt-content--small mb">
          Vous trouverez dans cette section, toutes les informations que vous avez sauvegardées sur ce partenaire.
        </p> 

        <!-- basic information -->
        <div>
          <h3 class="subheading txt-upp mt-sm">
            Base d'informations
          </h3>
          <!-- name -->
          <h5 class="fontW500 mt-xs">
            Nom:
          </h5>
          <span class="txt-content--xsmall txt-blue"> 
            <?= e($data['partner']->partner_company_name); ?>
          </span>
        
        
          <!-- email -->
          <h5 class="fontW500 mt-xs">
            Email:
          </h5>
          <span class="txt-content--xsmall txt-blue"> 
            <?= e($data['partner']->partner_email); ?>
          </span>

          <!-- date contact -->
          <h5 class="fontW500 mt-xs">
            Date de prise de contact:
          </h5>
          <span class="txt-content--xsmall txt-blue"> 
            <?= getDateFormatted($data['partner']->partner_created_at); ?>
          </span>

          <!-- phone -->
          <h5 class="fontW500 mt-xs">
            Numéro de téléphone: 
          </h5>

          <span class="txt-content--xsmall txt-blue">
            <?= phoneHandler($data['partner']->partner_phone) ?>
          </span>

          <!-- city -->
          <h5 class="fontW500 mt-xs">
            Ville
          </h5>
          <span class="txt-content--xsmall txt-blue">
            <?= isset($data['partner']->partner_city) && !empty($data['partner']->partner_city)
             ? e($data['partner']->partner_city)
             : "Vous n'avez pas encore localisé le partenaire."
            ?> 
          </span>
        </div>

        <!-- business info -->
        <div class="mb"> 
          <h3 class="subheading txt-upp mt">
            Informations business
          </h3>
          <h5 class="fontW500 mt-xs"> 
              Type de partenariat
          </h5>
          <span class="txt-content--xsmall txt-blue">
            <?= typePartnershipHandler($data['partner']->type_partnership) ; ?>
          </span>

          
          <!-- coaching subject -->
          <h5 class="fontW500 mt-xs"> 
            Accord: 
          </h5>
          <span class="txt-content--xsmall txt-blue">
            <?= haveDealHandler($data['partner']->have_deal) ; ?>
          </span>
        </div> 
     
            
      </div>
    </div>
  </div>
  
</section>

<!-- FOOTER --> 
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
