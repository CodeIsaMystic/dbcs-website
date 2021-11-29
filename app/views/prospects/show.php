
<!-- HEADER -->
<?php 
  require APP_ROOT . '/views/inc/header.php';

  $phone_number = $data['prospect']->prospect_phone;

// var_dump($data);

// die();
// echo $data['prospect']->prospect_phone;
// isValidPhone($data['prospect']->prospect_phone);

?>



<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO PROSPECT PAGE -->
<section class="full-width bg-white">
  <div>
    <picture>
      <img src="<?php echo URL_ROOT; ?>/img/site/hero/jogger.jpg" alt="Image of a jogger in the street"/>
    </picture>
  </div>
  <div class="full-width__heading full-width__heading--center">
    <h4 class="subheading fontW700 txt-upp txt-blue">Prospect</h4>
    <h1 class="heading-primary txt-dark-gray txt-center fontW500 font-garamond">
      <?php echo $data['prospect']->prospect_name; ?>
    </h1>

    <p class="txt-content--xsmall mt-xs">
      Ce prospect vous a contacté le 
      <span class="txt-blue">
        <?php  echo getDateFormatted($data['prospect']->prospect_created_at); ?>
      </span> 
    </p>
  </div>
</section>

<!-- SECTION CONTENT PROSPECT PAGE -->
<section class="show-pages bg-white pb-md">
  <!-- BACK BTN -->
  <div class="container container--lg pX">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/prospects/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>


  <!-- PROSPECT PAGE INFO CONTENT -->
  <div class="container container--md pX">
    <div class="grid--1-col b-radius4 box-shad">
      <div class="article-content txt-dark txt-content pX">
        <h2 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Informations sur le prospect 
          <span class="txt-blue">
            <?= $data['prospect']->prospect_name ?>
          </span>.
        </h2>
        <p class="txt-content--small mb">
          Vous trouverez dans cette section, toutes les informations que vous avez sauvegardées sur ce prospect.
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
            <?= $data['prospect']->prospect_name; ?>
          </span>
        
          <!-- email-->
          <h5 class="fontW500 mt-xs">
            Email:
          </h5>
          <span class="txt-content--xsmall txt-blue"> 
            <?= $data['prospect']->prospect_email; ?>
          </span>

          <!-- date contact -->
          <h5 class="fontW500 mt-xs">
            Date de prise de contact:
          </h5>
          <span class="txt-content--xsmall txt-blue"> 
            <?= getDateFormatted($data['prospect']->prospect_created_at); ?>
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

          <!-- address -->
          <h5 class="fontW500 mt-xs">
            Adresse
          </h5>
          <span class="txt-content--xsmall txt-blue">
            <?php echo $data['prospect_final_address'] ;
            ?> 
          </span>
        </div>
        

        <!-- additional info -->
        <div class="mb"> 
          <h3 class="subheading txt-upp mt">
            Informations coaching
          </h3>

          
          <!-- had-free-course -->
          <h5 class="fontW500 mt-xs"> 
            Essai gratuit
          </h5>

          <?php if($data['prospect']->free_course === "1") : ?>
            <span class="txt-content--xsmall txt-blue">
              <?= $data['prospect']->prospect_name . " a bénéficié de son essai gratuit."; ?>
            </span>
          <?php else : ?>
            <span class="txt-content--xsmall txt-danger">
              <?= $data['prospect']->prospect_name . " n'a pas bénéficié de son cours d'essai gratuit."; ?>
            </span>
          <?php endif; ?>
             
          <!-- is-customer / type_coaching -->
          <h5 class="fontW500 mt-xs"> 
            Coaching
          </h5>  
          
          <?php if($data['prospect']->is_customer === "1") : ?>
            <span class="txt-content--xsmall txt-blue">
              <?php echo $data['prospect']->prospect_name . " est client, ..."; ?>
            </span>    
          <?php else : ?>
            <span class="txt-content--xsmall txt-danger">
              <?php echo $data['prospect']->prospect_name . " n'est pas encore client, ..."; ?>
            </span>
          <?php endif; ?>
          
          <span class="txt-content--xsmall txt-blue">
            <?php 
              // if(isset($data['prospect']->coaching_subject)) {
              //   echo $data['prospect']->coaching_subject;
              // } else {
              //   echo 'Nous n\'avons pas encore défini d\'objectifs personnels en terme de coaching';
              // }
            ?>
          </span>

        </div>
        
      </div>
    </div>
  </div>



  <!-- </div> -->

</section>

<!-- FOOTER --> 
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
