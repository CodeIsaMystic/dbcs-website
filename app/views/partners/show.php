
<!-- HEADER -->
<?php 
  require APP_ROOT . '/views/inc/header.php'; 
  // var_dump($data);
  // die();

  $phone_number = $data['partner']->partner_phone;
?>


<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO PARTNER PAGE -->
<section class="full-width bg-white">
  <div>
    <picture>
      <img src="<?php echo URL_ROOT; ?>/img/site/hero/jogger.jpg" alt="Image of a jogger in the street"/>
    </picture>
  </div>
  <div class="full-width__heading full-width__heading--center">
    <h4 class="subheading fontW700 txt-upp txt-blue">Partenaire</h4>
    <h1 class="heading-primary txt-dark-gray txt-center fontW500 font-garamond">
      <?php echo $data['partner']->partner_company_name; ?>
    </h1>

    <p class="txt-content--xsmall mt-xs">
      Vous êtes entré en contact avec ce partenaire le  
      <span class="txt-blue">
        <?php  echo getDateFormatted($data['partner']->partner_created_at); ?>
      </span> 
    </p>
  </div>
</section>

<!-- SECTION CONTENT PARTNER PAGE -->
<section class="show-pages bg-white pb-md">
  <!-- BACK BTN -->
  <div class="container container--lg pX">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/partners/list" class="link link-dark link--underline">
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
          <span class="txt-blue"><?= $data['partner']->partner_company_name ?></span>.
        </h2>
        <p class="txt-content--small mb">
          Vous trouverez dans cette section, toutes les informations que vous avez sauvegardées sur ce partenaire.
        </p> 

        <!-- basic information -->
        <div>
          <h3 class="subheading txt-upp mt-sm">
            Informations basiques
          </h3>
          <!-- name -->
          <h5 class="fontW500 mt-xs">
            Nom:
          </h5>
          <span class="txt-content--xsmall txt-blue"> 
            <?= $data['partner']->partner_company_name; ?>
          </span>
        
        
          <!-- email -->
          <h5 class="fontW500 mt-xs">
            Email:
          </h5>
          <span class="txt-content--xsmall txt-blue"> 
            <?= $data['partner']->partner_email; ?>
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
            <?php 
              if(isValidPhone($phone_number)) {
                echo '<span class="txt-content--xsmall txt-blue">' . $phone_number . '</span>';
              } elseif(empty($phone_number)) {
                echo '<span class="txt-content--xsmall txt-blue">Aucun numéro enregistré pour le moment.</span>';
              } 
              else {
                echo '<span class="txt-content--xsmall txt-blue">Aucun numéro enregistré pour le moment.</span>';
              } 
            ?> 

          <!-- city -->
          <h5 class="fontW500 mt-xs">
            Ville
          </h5>
          <span class="txt-content--xsmall txt-blue">
            <?php
             if(isset($data['partner']->partner_city) && 
             !empty($data['partner']->partner_city)) {
               echo $data['partner']->partner_city ;
             } else {
               echo "Vous n'avez pas encore localisé le partenaire.";
             }
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
            <?= "L'entreprise est active sur le Web, nous avons établi un partenariat de type 'Blogging'."; ?>
            <?php 
              // - Il a commencé son programme le "date_started_plan"
              //
              // if(isset($data['prospect']->coaching_subject)) {
              //   echo $data['prospect']->coaching_subject;
              // } else {
              //   echo 'Nous n\'avons pas encore défini d\'objectifs personnels en terme de coaching';
              // }
            ?>
          </span>

          
          <!-- coaching subject -->
          <h5 class="fontW500 mt-xs"> 
            Accord: 
          </h5>
          <span class="txt-content--xsmall txt-danger"> 
            <?php if ($data['partner']->have_deal  === 1) {
              echo "Nous avons établi un accord avec " . $data['partner']->partner_company_name . ", le " . $data['partner']->date_started_patnership;
              } else {
                echo "Nous n'avons pas encore établi d'accord avec " . $data['partner']->partner_company_name;
              }
            ?>
          </span>
        </div> 
     
          
        <!-- PARTNER BUSINESS INFOS ready to setup & test -->
        <!-- <div>
          <p class="mt-sm">
            Logo de l'entreprise:
          </p>
          <img src="<?php// echo blablabla ?>" />
        
          <p class="mt-sm">
            Ville de localisation de l'entreprise:
          </p>
          <span class="txt-content--xsmall txt-blue"> 
            <?php //echo $data['partner']->partner_city; ?>
          </span>
        
            <?php //if($data['partner']->is_web_business === 1) : ?>
              <p class="txt-content--xsmall mt-sm">  
                <span class="txt-blue">
                  <?//= $data['partner']->partner_company_name; ?>
                </span> est principalement en activité sur le web.
              </p> 
            <?php //else : ?>
              <p class="txt-content--xsmall mt-sm">  
                <span class="txt-blue">
                  <?//= $data['partner']->partner_company_name; ?>
                </span> a son activité partiellement sur le web et dans le réel!?.
              </p> 
            <?php //endif; ?>
        -->
        

        <!-- PARTNERSHIP  ready to setup & test-->
        <!-- <div>
              <?php //if($data['partner']->have_deal === 1) : ?>
                <p class="txt-content--xsmall mt-sm">  
                  <span class="txt-blue">
                    Vous avez établi un partenariat de type  
                    <?php //echo $data['partner']->type_partnership; ?>
                  </span>...
                </p>  
                <p class="mt-xs">
                  Date de début de ce partenariat:
                </p>
                <span class="txt-content--xsmall txt-blue"> 
                  <?//= getDateFormatted($data['partner']->date_started_partnership); ?>
                </span>
              <?php //else : ?>
                <p class="mt-xs">
                  Il n'y a pas d'accord pour le moment.
                </p>
                <span class="txt-content--xsmall txt-blue"> 
                  <?php //echo getDateFormatted($data['partner']->date_started_partnership); ?>
                </span>
                <?php //endif; ?>
              </div> -->
            
            
          </div>
        </div>
      </div>
      
    </section>

    <!-- FOOTER --> 
    <?php require APP_ROOT . '/views/inc/footer.php'; ?>
    