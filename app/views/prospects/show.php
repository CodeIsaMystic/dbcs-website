
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
<section class="hero--fullW bg-white">
  <div>
    <picture>
      <img src="<?php echo URL_ROOT; ?>/img/site/full-width/jogger.jpg" alt="Image of a jogger in the street"/>
    </picture>
  </div>
  <div class="hero--fullW__heading hero--fullW__heading--center">
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
<section class="post-page bg-white pb-md">
  <!-- BACK BTN -->
  <div class="container container--lg">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/prospects/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>


  <!-- PROSPECT PAGE INFO CONTENT -->
  <div class="add-post container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="post-content txt-dark txt-content">
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
          <span class="txt-content--xsmall txt-danger">
            <?= $data['prospect']->prospect_name . " a bénéficié de son essai gratuit."; ?>
            <?php 
              // if ($data['prospect']->had_free_course  === 1) 
              // echo "$data['prospect']->prospect_name" . " a bénéficié de son essai gratuit.";
              // else 
              // echo "$data['prospect']->prospect_name" . " n\'a pas encore bénéficié de son essai.";
            ?>
          </span>


          <!-- is-customer -->
          <h5 class="txt-content--xsmall mt-xs"> 
            
          </h5>  
          <span class="txt-content--xsmall txt-blue">
            <?php //echo $data['prospect']->prospect_name; ?>
          </span>    

          <?php 
            // if ($data['prospect']->prospect_is_customer) 
            // $data['prospect']->prospect_is_customer = 1;
            // echo               
            // - Le contact 
            // - est client
            // - depuis "insert_time= now()" .
            // - Il a bénéficié de son essai gratuit.
            // else 
            // $data['prospect']->prospect_is_customer = 0;


            // if ($data['prospect']->had_free_course) 

          ?>
          
          
          <!-- coaching subject -->
          <h5 class="fontW500 mt-xs"> 
            Coaching objectifs
          </h5>
          
          <span class="txt-content--xsmall txt-blue">
            <?= 'Programme "Régime minceur" le 30-11-21'; ?>
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

        </div>
        
      </div>
    </div>
  </div>



  </div>

</section>

<!-- FOOTER --> 
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
