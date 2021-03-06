<!-- HEADER -->
<?php 
  require APP_ROOT . '/views/inc/header.php'; 
?>

<!-- SECTION ADD-PROSPECT -->
<section class="add-pages pb-lg pt-lg">
  <!-- BACK BTN -->
  <div class="container container--lg pX">

    <div class="txt-dark mb">
      <a href="<?= URL_ROOT; ?>/prospects/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <!-- ADD-PROSPECT -->
  <div class="container container--md pX">
    <div class="grid--1-col b-radius4 box-shad">
      <div class="article-content txt-dark txt-content pX">
        <h2 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Ajoutez un prospect
        </h2>
        <p class="txt-content--small mb">
          <span class="fontW700">Enregistrez un prospect dans cette section</span>. Vous pouvez, à tout moment modifier et ajouter de nouvelles informations sur vos contacts. Pensez qu'il est une priorité que de <span class="fontW700">pouvoir augmenter votre base emails</span>.
        </p>

        <!-- FORM-ADMIN-PROSPECT -->
        <form class="form-admin-prospect" action="<?= URL_ROOT; ?>/prospects/add" method="post">
          
          <!-- SECTION BASE-INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mb-xs"> 
              Base d'information:
            </h3>
            
            <p class="txt-content--small mb-xs">
              Entrez ici les informations nécessaires pour votre affaire. Une base pour fidéliser vos futurs clients et garder ainsi le contact. Il est important de <span class="fontW700">construire votre base emails</span>.
            </p>
            
            <!-- name -->
            <div class="form-admin-prospect--display base-info-name">
              <label class="fontW700 txt-blue mb-xxs" for="prospectName" >Nom complet</label>
              
              <input type="text" name="prospect_name" class="bg-white" id="prospectName" value="<?= e($data['prospect_name']); ?>">
              
              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?= e($data['prospect_name_err']);?></span>
              </span>
            </div>

            <!-- email -->
            <div class="form-admin-prospect--display base-info-email mb-xs">
              <label class="fontW700 txt-blue mt-xs mb-xxs" for="prospectEmail" >Adresse email</label>
              
              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?= e($data['prospect_email_err']); ?></span>
              </span>
              
              <input type="email" name="prospect_email" class="bg-white" id="prospectEmail" value="<?= e($data['prospect_email']); ?>">
            </div>
            <!-- phone -->
            <div class="base-info-phone">
              <label class="fontW700 txt-blue" for="prospectPhone" >Numéro de téléphone</label>
              
              <p class="txt-content--small">
                Dès que vous pourrez, ajoutez ici le numéro de téléphone de votre prospect.
              </p>
              
              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?= e($data['prospect_phone_err']); ?></span>
              </span>
              
              <input type="tel" name="prospect_phone" class="bg-white" id="prospectPhone" value="<?= e($data['prospect_phone']); ?>">
            </div>
          </div>  
          
          
          <!-- SECTION PHYSICAL ADDRESS -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs"> 
              Adresse Physique:
            </h3>
            
            <p class="txt-content--small mb-xs">
              <span class="fontW700">Ajoutez ici l'adresse complète</span> de votre prospect. Notez que vous devez enregistrer l'adresse complète, <span class="fontW700">ou bien seulement la ville</span>.
            </p>
            
            <div>
              <!-- address-number -->
              <div class="form-admin-prospect--display address-nr">
                <label class="fontW700 txt-blue mb-xxs" for="prospectAddressNr" >Numéro:</label>
                <input type="number" name="prospect_address_nr" class="bg-white mb-xxs" id="prospectAddressNr" value="<?= e($data['prospect_address_nr']); ?>">
              </div>
              
              <!-- address-street -->
              <div class="form-admin-prospect--display address-str">
                <label class="fontW700 txt-blue mb-xxs" for="prospectAddressStr" >Rue:</label>
                <input type="text" name="prospect_address_str" class="bg-white mb-xxs" id="prospectAddressStr" value="<?= e($data['prospect_address_str']); ?>">
              </div>
            </div>
            
            
            <div>
              <!-- postal code -->
              <div class="form-admin-prospect--display location-code">
                <label class="fontW700 txt-blue mb-xxs" for="prospectPostalCode" >Code Postal:</label>
                <input type="number" name="prospect_postal_code" class="bg-white mb-xxs" id="prospectPostalCode" value="<?= e($data['prospect_postal_code']); ?>">
              </div>
              
              <!-- city -->
              <div class="form-admin-prospect--display location-city">
                <label class="fontW700 txt-blue mb-xxs" for="prospectCity" >Ville:</label>
                <input type="text" name="prospect_city" class="bg-white mb-xxs" id="prospectCity" value="<?= e($data['prospect_city']); ?>">
              </div>
            </div>
            
          </div>
          
          <!-- SECTION COACHING INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs"> 
              Coaching Informations:
            </h3>
            
            <p class="txt-content--small mb-xs">
              <span class="fontW700"></span> de votre prospect. Notez que vous devez enregistrer l'adresse complète, <span class="fontW700"></span>.
            </p>            
            
            <!-- type coaching -->
            <div class="form-admin-prospect--display type-coaching">
              <label class="fontW700 txt-blue mb-xxs" for="prospectCoaching" >
                Coaching
              </label>
              <div>
                <select name="coaching_subject" id="prospectCoaching" class="bg-white"> 
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
                <input class="bg-white" id="isCustomer" type="checkbox" name="is_customer" value="<?= e($data['is_customer']); ?>">
                <label for="isCustomer" >Client</label>
              </div>
            </div>
            
            <!-- had-free-course -->
            <div class="form-admin-prospect--display free-course">
              <div>
                <input class="bg-white" id="freeCourse" type="checkbox" name="free_course" value="<?= e($data['free_course']); ?>">
                <label for="freeCourse" >Essai gratuit</label>
              </div>
            </div>
          </div>
          
          <div class="form-admin-prospect--display">
            <span class="txt-content--xsmall txt-blue">
              <?= 'Le prospect' . askFreeCourseHandler($data['ask_free_course']) ; ?>
            </span>
          </div>


          <!-- SECTION INPUT SUBMIT -->
          <div>
            <input type="submit" class="btn btn-hover btn-hover--dark btn25 mt-xs mb-xs" value="Enregistrez">
          </div>

        </form>

      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
