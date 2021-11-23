
<!-- HEADER -->
<?php 
require APP_ROOT . '/views/inc/header.php';

$prospect_array = convertDataObject($data);
// var_dump($prospect_array);










// $email = $prospect_array['prospect_email'];
// $name = $prospect_array['prospect_name'];
// $phone = $prospect_array['prospect_phone'];

// $address_str = $prospect_array['prospect_address_nr'] . $prospect_array['prospect_address_str'];

// $postal_code = $prospect_array['prospect_postal_code'];
// $city = $prospect_array['prospect_city'];

// $full_address = $address_str . '<br>' . $postal_code . ' ' . $city;



// echo '<hr>';
// var_dump($data);
// echo '<hr>';

// echo $name . '<br>';
// echo $email . '<br>';
// echo $phone . '<hr>';

// echo $address_str . '<hr>';
// echo $full_address . '<br>';

// die();
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

<!-- SECTION PROSPECT PAGE CONTENT -->
<section class="post-page bg-white pb-md">
  <!-- BACK BTN -->
  <div class="container container--lg">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/prospects/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>

  </div>

  <!-- PROSPECT INFO PAGE CONTENT -->
  <div class="container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="post-content txt-dark txt-content">
        <h3 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Informations sur le prospect 
          <span class="txt-blue">
            <?= $data['prospect']->prospect_name ?>
          </span>.
        </h3>
        <p class="txt-content--small mb">
          Vous trouverez dans cette section, toutes les informations que vous avez sauvegardées sur ce prospect.
        </p> 
        


        <!-- NAME PROSPECT -->
        <div>
          
          <h3 class="subheading txt-upp mt-sm">
            Informations basiques
          </h3>
          <h5 class="fontW500">
            Nom:
          </h5>
          <span class="txt-content--xsmall txt-blue"> 
            <?= $data['prospect']->prospect_name; ?>
          </span>
        
        <!-- EMAIL PROSPECT -->
          <h5 class="fontW500">
            Email:
          </h5>
          <span class="txt-content--xsmall txt-blue"> 
            <?= $data['prospect']->prospect_email; ?>
          </span>

        <!-- DATE CONTACT PROSPECT -->
          <h5 class="fontW500">
            Date de prise de contact:
          </h5>
          <span class="txt-content--xsmall txt-blue"> 
            <?= getDateFormatted($data['prospect']->prospect_created_at); ?>
          </span>
          
          <!-- PHONE -->
          <h5 class="fontW500">
            Numéro de téléphone: 
          </h5>
          <span class="txt-content--xsmall">
            <?php 
              if(is_null(array_values($prospect_array)[7])) {
                echo ' Pas de numéro enregistré pour le moment.';
              } else {
                echo $data['prospect']->prospect_phone;
              } 
            ?> 
          </span>
          <div>
          
          <!-- ADRESS PROSPECT -->
          <div> 
            <h3 class="subheading txt-upp mt">
              Adresse
            </h3>
              <?php
                if(
                  is_null(array_values($prospect_array)[9]) ||
                  is_null(array_values($prospect_array)[10]) ||
                  is_null(array_values($prospect_array)[11]) ||
                  is_null(array_values($prospect_array)[12])
                  ) {
                    echo '<span class="txt-content--xsmall txt-danger">Pas d\'adresse enregistré pour le moment.</span> ';
                    
                  } else {
                    echo '<span class="txt-content--xsmall">' . $data['prospect']->prospect_address_nr . ' ' . $data['prospect']->prospect_address_str . ' ' . $data['prospect']->prospect_postal_code . ' ' . $data['prospect']->prospect_city . '</span>';
                  } 
              ?> 

            
          </div>

          
          <?php
            // $dataArr = convertDataObject($data);
            // var_dump($dataArr);
            
            // $data1 = getArrPropVal($dataArr, 1); 
            // echo $data1;
            // die();
            ?>

          <!-- ADDITIONAL INFO -->
          <div class="mb-md"> 
            <h3 class="subheading txt-upp mt">
              Informations coaching
            </h3>

            
            <!-- HAD FREE COURSE -->
            <h5 class="fontW500"> 
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


            <!-- IS CUSTOMER -->
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
            
            
            <!-- COACHING SUBJECT -->
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

</section>

<!-- FOOTER --> 
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
