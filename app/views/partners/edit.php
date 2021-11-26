
<!-- HEADER -->
<?php 
  require APP_ROOT . '/views/inc/header.php'; 
  // var_dump($data);
  // $phone_data = strlen($data['prospect']->prospect_phone);
  // echo $phone_data;
  // die();
?>


<!-- SECTION EDIT PARTNER -->
<section class="edit-post pb-lg pt-lg">
  <!-- BACK BTN -->
  <div class="container container--lg">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/partners/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <!-- EDIT PARTNER -->
  <div class="container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="post-content txt-dark txt-content">
        <h3 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Modifier la fiche partenaire
        </h3>
        <p class="txt-content--small mb">
          Vous pouvez dans cette section modifier la fiche partenaire sélectionnée. Il peut être judicieux d'établir des partenariat afin d'optimiser votre acitvité. 
        </p> 
        
        <!-- FORM-ADMIN-PARTNER -->
        <form 
        action="<?php echo URL_ROOT; ?>/partners/edit/<?php echo ($data['partner']->partner_id); ?>" method="post">

          <!-- SECTION BASE-INFO -->
          <div>
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-center txt-danger mb-xxs"><?php echo ($data['partner_main_err']);?></p>
            </span>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mb-xs" tabindex="0"> 
            Base d'information:
            </h3>
              
            <p class="txt-content--small mb-xs">
              Modifier ici les informations nécessaires à vos partenariats.  Il est judicieux que de <span class="fontW700">créer des collaborations afin d'optimser votre acitvité et d'agrandir votre réseau</span>.
            </p>

            <!-- company-name -->
            <div class="form-admin-partner--display partner-company-name">
              <label class="fontW700 txt-blue mb-xxs" for="">Nom de l'entreprise partenaire *</label>
              
              <input 
                type="text" 
                name="partner_company_name" 
                class="bg-white mb-xxs" 
                value="<?php echo ($data['partner']->partner_company_name); ?>">

              <span class="b-radius4">
                <p class="txt-content--xsmall txt-danger"><?php echo ($data['partner_company_name_err']);?></p>
              </span>
              
            </div>
          
            <!-- email -->
            <div class="form-admin-partner--display partner-email">
              <label class="fontW700 txt-blue mt mb-xxs" for="">Email de votre partenaire *</label>

              <span class="b-radius4">
                <p class="txt-content--xsmall txt-danger"><?php echo ($data['partner_email_err']); ?></p>
              </span>
            
              <input 
                type="email" 
                name="partner_email" 
                class="bg-white mb-xxs" 
                value="<?php echo ($data['partner']->partner_email); ?>">
            </div>

            <div class="txt-content--xsmall txt-blue mb-xs">
              * Ces champs sont obligatoires.
            </div>

            <!-- phone -->
            <div class="base-info-phone">
              <label class="fontW700 txt-blue">Numéro de téléphone</label>
              <p class="txt-content--small mt-xs mb-xxs">
                Le numéro de téléphone doit <span class="fontW700">impérativement commencer par "0"</span> et <span class="fontW700">contenir 10 chiffres</span>. Notez que vous pouvez laisser ce champs vide si vous le souhaitez.
              </p>

              
              <span class="b-radius4">
                <p class="txt-content--xsmall txt-danger"><?php echo ($data['partner_phone_err']); ?></p>
              </span>
            
              <input 
                type="tel" 
                name="partner_phone" 
                class="bg-white" 
                value="<?php echo $data['partner']->partner_phone; ?>">
            </div>
          </div>
          <!-- SECTION BUSINESS INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs">
              Business informations:
            </h3>

            <p class="txt-content--small mb-xs" tabindex="0">
              Modifier ici les <span class="fontW700">informations business</span> de votre partenaire.
            </p>

            <div>
              <!-- city -->
              <div class="form-admin-partner--display partner-city">
                <label class="fontW700 txt-blue mb-xxs" tabindex="0">Ville:</label>
                <input type="text" name="partner_city" class="bg-white mb-xxs" value="<?php echo $data['partner']->partner_city; ?>">
              </div>
                    
              <!-- type activity -->
              <div class="form-admin-partner--display type-activity">
                <label class="fontW700 txt-blue mb-xxs" tabindex="0">
                  Activité principale
                </label>
                <div>
                  <select name="" class="bg-white"> 
                    <option value="default"></option>
                    <option value="coaching">Coaching / Prépa</option>
                    <option value="blogging">Blogging</option>
                    <option value="shop">Magasin</option>
                    <option value="event">Evènement</option>
                    <option value="health">Nutrition / Santé</option>
                    <option value="other">Autre</option>
                  </select>
                </div>
              </div>
  
              <!-- is-web-business -->
              <div class="form-admin-partner--display is-web-business">
                <div>
                  <input class="bg-white" name="" type="checkbox" value="is-web-business">
                  <label tabindex="0">Activité Web</label>
                </div>
              </div>
            </div>
          </div>

          <!-- SECTION PARTNERSHIP INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs" tabindex="0"> 
              Partenariat informations:
            </h3>
            
            <p class="txt-content--small mb-xs" tabindex="0">
              Ajoutez ici les <span class="fontW700">informations de base sur le type de partenariat</span>. Notez que vous devez convenir avec l'entreprise partenaire et obtenir un accord avec celle-ci.
            </p>

            <!-- type partnership -->
            <div class="form-admin-prospect--display type-partnership">
              <label class="fontW700 txt-blue mb-xxs" tabindex="0">
                Type de partenariat
              </label>
              <div>
                <select name="" class="bg-white"> 
                  <option value="default"></option>
                  <option value="collaboration">Collaboration</option>
                  <option value="blogging">Blog & SEO</option>
                  <option value="shop">Commercial</option>
                  <option value="event">Evènement</option>
                </select>
              </div>
            </div>

            
            <!-- have-a-deal -->
            <div class="form-admin-partner--display have-deal">
              <div>
                <input class="bg-white" name="" type="checkbox" value="have-deal">
                <label tabindex="0">Accord</label>
              </div>
            </div>
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