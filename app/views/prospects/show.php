
<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>


<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO PROSPECT PAGE -->
<section class="hero--fullW bg-white">
  <div>
    <picture>
      <img src="<?php echo URL_ROOT; ?>/img/site/full-width/jogger.png" alt="Image of a jogger in the street"/>
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
          <span class="txt-blue"><?= $data['prospect']->prospect_name ?></span>.
        </h3>
        <p class="txt-content--small mb">
          Vous trouverez dans cette section, toutes les informations que vous avez sauvegardées sur ce prospect.
        </p> 
        


        <!-- NAME PROSPECT -->
        <div>
          <p class="">
            Nom du prospect:
          </p>
          <span class="txt-content--xsmall txt-blue"> 
            <?= $data['prospect']->prospect_name; ?>
          </span>
        </div>
        
        <!-- EMAIL PROSPECT -->
        <div>
          <p class="mt-sm">
            Email du prospect:
          </p>
          <span class="txt-content--xsmall txt-blue"> 
            <?= $data['prospect']->prospect_email; ?>
          </span>
        </div>
          

        <!-- DATE CONTACT PROSPECT -->
        <div>
          <p class="mt-sm">
            Date de prise de contact:
          </p>
          <span class="txt-content--xsmall txt-blue"> 
            <?= getDateFormatted($data['prospect']->prospect_created_at); ?>
          </span>

          <!-- PHONE -->
          <p class="mt-sm">
            Numéro de téléphone: 
          </p>
          <span class="txt-content--small txt-blue">
            <?php 
              $prospect_array = convertDataObject($data);
              
              if(is_null(array_values($prospect_array)[7])) {
                echo ' Pas de numéro enregistré pour le moment.';
              } else {
                echo $data['prospect']->prospect_phone;
              } 
            ?> 
          </span>

          <!-- ADRESS PROSPECT -->
          <p class="mt-sm"> 
            Adresse: 
          </p>
          <span class="txt-content--xsmall txt-blue">
            <?php
            if(
              is_null(array_values($prospect_array)[9]) ||
              is_null(array_values($prospect_array)[10]) ||
              is_null(array_values($prospect_array)[11]) ||
              is_null(array_values($prospect_array)[12])
              ) {
                echo ' Pas d\'adresse enregistré pour le moment.';
                
              } else {
                echo $data['prospect']->prospect_address_nr . ' ' . $data['prospect']->prospect_address_str . ' ' . $data['prospect']->prospect_postal_code . ' ' . $data['prospect']->prospect_city ;
              } 
              ?> 
            </span>
          
          <p class="txt-content--xsmall mt-sm"> 
            <!-- IS CUSTOMER -->
            <span class="txt-blue">
              <?= $data['prospect']->prospect_name; ?>
            </span> n'est pas encore client.
          </p>
          
          <p class="txt-content--xsmall"> 
            <!-- HAD FREE COURSE -->
            <span class="txt-blue">
              <?= $data['prospect']->prospect_name; ?>
            </span> n'est pas bénéficié de son cours gratuit.
          </p>

        </div>
        <!-- PERSONAL PROSPECT INFOS -->
        <div>

        <?php
          // $dataArr = convertDataObject($data);
          // var_dump($dataArr);

          // $data1 = getArrPropVal($dataArr, 1); 
          // echo $data1;
          // die();
        ?>

        </div>

      </div>
    </div>



  </div>

</section>

<!-- FOOTER --> 
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
