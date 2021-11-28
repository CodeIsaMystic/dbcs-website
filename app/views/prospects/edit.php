
<!-- HEADER -->
<?php 
  require APP_ROOT . '/views/inc/header.php'; 
  // var_dump($data);
  // $phone_data = strlen($data['prospect']->prospect_phone);
  // echo $phone_data;
  // die();

?>


<!-- SECTION EDIT-PROSPECT -->
<section class="edit-pagespb-lg pt-lg">
  <!-- BACK BTN -->
  <div class="container container--lg pX">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/prospects/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <!-- EDIT PROSPECT -->
  <div class="container container--md pX">
    <div class="grid--1-col b-radius4 box-shad">
      <div class="article-content txt-dark txt-content pX">
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
              <span class="txt-content--xsmall txt-center txt-danger mb-xxs"><?php echo ($data['prospect_main_err']);?></span>
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
              <label class="fontW700 txt-blue mb-xxs" for="prospectName" >Nom de votre prospect</label>
              
              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?php echo ($data['prospect_name_err']);?></span>
              </span>
              
              <input 
                type="text" 
                name="prospect_name" 
                class="bg-white mb-xxs" 
                id="prospectName"
                value="<?php echo ($data['prospect']->prospect_name); ?>">
            </div>
        
            <!-- email -->
            <div class="form-admin-prospect--display base-info-email mb-xxs">
              <label class="fontW700 txt-blue mb-xxs" for="prospectEmail" >Email de votre prospect</label>

              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?php echo ($data['prospect_email_err']); ?></span>
              </span>
            
              <input 
                type="email" 
                name="prospect_email" 
                class="bg-white mb-xxs"
                id="prospectEmail" 
                value="<?php echo ($data['prospect']->prospect_email); ?>">
            </div>

            <!-- phone -->
            <div class="base-info-phone">
              <label class="fontW700 txt-blue" for="prospectPhone" >Numéro de téléphone</label>
              <p class="txt-content--small mt-xs mb-xxs">
                Le numéro de téléphone doit <span class="fontW700">impérativement commencer par "0"</span> et <span class="fontW700">contenir 10 chiffres</span>. Notez que vous pouvez laisser ce champs vide si vous le souhaitez.
              </p>

              
              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?php echo ($data['prospect_phone_err']); ?></span>
              </span>
            
              <input 
                type="tel" 
                name="prospect_phone" 
                class="bg-white" 
                id="prospectPhone"
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
              <!-- address nr -->
              <div class="form-admin-prospect--display address-nr">
                <label class="fontW700 txt-blue mb-xxs" for="prospectAddressNr" tabindex="0">Numéro:</label>
                <input type="number" id="prospectAddressNr" name="prospect_address_nr" class="bg-white mb-xxs" value="<?php echo $data['prospect']->prospect_address_nr; ?>">
              </div>
              
              <!-- address str -->
              <div class="form-admin-prospect--display address-str">
                <label class="fontW700 txt-blue mb-xxs" for="prospectAddressStr"  tabindex="0">Rue:</label>
                <input type="text" id="prospectAddressStr" name="prospect_address_str" class="bg-white mb-xxs" value="<?php echo $data['prospect']->prospect_address_str; ?>">
              </div>
            </div>
            
            
            <div>
              <!-- postal code -->
              <div class="form-admin-prospect--display location-code">
                <label class="fontW700 txt-blue mb-xxs" for="prospectPostalCode" tabindex="0">Code Postal:</label>
                <input type="number" id="prospectPostalCode" name="prospect_postal_code" class="bg-white mb-xxs" value="<?php echo $data['prospect']->prospect_postal_code; ?>">
              </div>
              
              <!-- city -->
              <div class="form-admin-prospect--display location-city">
                <label class="fontW700 txt-blue mb-xxs" for="prospectCity" tabindex="0">Ville:</label>
                <input type="text" id="prospectCity" name="prospect_city" class="bg-white mb-xxs" value="<?php echo $data['prospect']->prospect_city; ?>">
              </div>
            </div> 
          </div>

          <!-- SECTION COACHING INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs" tabindex="0"> 
              Coaching Informations:
            </h3>
            
            <p class="txt-content--small mb-xs">
              <span class="fontW700"></span> de votre prospect. Notez que vous devez enregistrer l'adresse complète, <span class="fontW700"></span>.
            </p>
            
            <!-- type coaching -->
            <div class="form-admin-prospect--display type-coaching">
              <label class="fontW700 txt-blue mb-xxs" for="coachingSubject" >
                Coaching
              </label>
              <div>
                <select name="coaching_subject" id="coachingSubject" class="bg-white"> 
                  <option value="default">Choisir</option>
                  <option value="basic">Programme Basique</option>
                  <option value="fit">Programme Fitness</option>
                  <option value="weight-loss">Programme Régime</option>
                  <option value="heart-beat">Programme Cardio</option>
                  <option value="weight">Programme Muscle</option>
                  <option value="sport">Programme Sport Prépa</option>
                  <option value="health">Programme Santé</option>
                  <option value="injury">Programme Reprise</option>
                </select>
              </div>
            </div>
            
            <!-- is-customer -->
            <div class="form-admin-prospect--display is-customer">
              <div>
                <input class="bg-white" id="isCustomer" name="is_customer" type="checkbox" value="0">
                <label for="isCustomer" >Client</label>
              </div>
            </div>
            
            <!-- free-course -->
            <div class="form-admin-prospect--display free-course">
              <div>
                <input class="bg-white" id="freeCourse" name="free_course" type="checkbox" value="<?php echo $data['prospect']->free_course; ?>">
                <label for="freeCourse" >Essai gratuit</label>
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
?>