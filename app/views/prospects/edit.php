
<!-- HEADER -->
<?php 
require APP_ROOT . '/views/inc/header.php'; 

// var_dump($data);
// $phone_data = strlen($data['prospect']->prospect_phone);
// echo $phone_data;
// die();

?>


<!-- SECTION EDIT-PROSPECT -->
<section class="edit-post pb-lg pt-lg">
  <!-- BACK BTN -->
  <div class="container container--lg">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/prospects/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <!-- EDIT FORM -->
  <div class="container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="post-content txt-dark txt-content">
        <h3 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Modifier votre prospect
        </h3>
        
        <p class="txt-content--small mb">
          Vous pouvez, à tout moment modifier et ajouter de nouvelles informations sur vos contacts. Pensez qu'il est une priorité que de <span class="fontW700">pouvoir augmenter votre base emails</span>.
        </p> 
        
        <!-- FORM-ADMIN-PROSPECT -->
        <form class="form-admin-prospect" 
        action="<?php echo URL_ROOT; ?>/prospects/edit/<?php echo ($data['prospect']->prospect_id); ?>" method="post">

          <!-- SECTION BASE-INFO -->
          <div>
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-center txt-danger mb-xxs"><?php echo ($data['prospect_main_err']);?></p>
            </span>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mb-xs" tabindex="0"> 
              Base d'information:
            </h3>
            
            <p class="txt-content--small mb-xs">
              Modifier ici les informations nécessaires pour votre affaire. Une base pour fidéliser vos futurs clients et garder ainsi le contact. Il est important de <span class="fontW700">construire votre base emails</span>.
            </p>

            <!-- name -->
            <div class="form-admin-prospect--display base-info-name">
              <label class="fontW700 txt-blue mb-xxs">Nom de votre prospect</label>
              
              <span class="b-radius4">
                <p class="txt-content--xsmall txt-danger"><?php echo ($data['prospect_name_err']);?></p>
              </span>
              
              <input 
                type="text" 
                name="prospect_name" 
                class="bg-white mb-xxs" 
                value="<?php echo ($data['prospect']->prospect_name); ?>">
            </div>
        
            <!-- email -->
            <div class="form-admin-prospect--display base-info-email mb-xxs">
              <label class="fontW700 txt-blue mb-xxs">Email de votre prospect</label>

              <span class="b-radius4">
                <p class="txt-content--xsmall txt-danger"><?php echo ($data['prospect_email_err']); ?></p>
              </span>
            
              <input 
                type="email" 
                name="prospect_email" 
                class="bg-white mb-xxs" 
                value="<?php echo ($data['prospect']->prospect_email); ?>">
            </div>

            
            
            <!-- phone -->
            <div class="base-info-phone">
              <label class="fontW700 txt-blue">Numéro de téléphone</label>
              <p class="txt-content--small mt-xs mb-xxs">
                Le numéro de téléphone doit <span class="fontW700">impérativement commencer par "0"</span> et <span class="fontW700">contenir 10 chiffres</span>. Notez que vous pouvez laisser ce champs vide si vous le souhaitez.
              </p>

              
              <span class="b-radius4">
                <p class="txt-content--xsmall txt-danger"><?php echo ($data['prospect_phone_err']); ?></p>
              </span>
            
              <input 
                type="tel" 
                name="prospect_phone" 
                class="bg-white" 
                value="<?php echo $data['prospect']->prospect_phone; ?>">
            </div>
          </div>


          <!-- SECTION PHYSICAL ADDRESS -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs" tabindex="0"> 
              Adresse Physique:
            </h3>
            
            <p class="txt-content--small mb-xs" tabindex="0">
              <span class="fontW700">Ajoutez ici l'adresse complète</span> de votre prospect. Notez que vous devez enregistrer l'adresse complète, <span class="fontW700">ou bien seulement la ville</span>.
            </p>
            
            <div>
              <div class="form-admin-prospect--display address-nr">
                <label class="fontW700 txt-blue mb-xxs" tabindex="0">Numéro:</label>
                <input type="number" name="prospect_address_nr" class="bg-white mb-xxs" value="<?php echo $data['prospect']->prospect_address_nr; ?>">
              </div>
              
              <div class="form-admin-prospect--display address-str">
                <label class="fontW700 txt-blue mb-xxs" tabindex="0">Rue:</label>
                <input type="text" name="prospect_address_str" class="bg-white mb-xxs" value="<?php echo $data['prospect']->prospect_address_str; ?>">
              </div>
            </div>
            
            
            <div>
              <div class="form-admin-prospect--display location-code">
                <label class="fontW700 txt-blue mb-xxs" tabindex="0">Code Postal:</label>
                <input type="number" name="prospect_postal_code" class="bg-white mb-xxs" value="<?php echo $data['prospect']->prospect_postal_code; ?>">
              </div>
              
              <div class="form-admin-prospect--display location-city">
                <label class="fontW700 txt-blue mb-xxs" tabindex="0">Ville:</label>
                <input type="text" name="prospect_city" class="bg-white mb-xxs" value="<?php echo $data['prospect']->prospect_city; ?>">
              </div>
            </div> 
          </div>

            
          <!-- INPUT SUBMIT -->
          <div>
            <input type="submit" class="btn btn-hover btn-hover--dark btn25 mt-xs mb-xs" value="Enregistrez">
          </div>

        </form>

      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php 
require APP_ROOT . '/views/inc/footer.php'; 

var_dump($data);
die();
?>