<!-- HEADER -->
<?php 
  require APP_ROOT . '/views/inc/header.php'; 
  // var_dump($data);
  // die();
?>

<!-- SECTION ADD-PARTNER -->
<section class="add-pagespb-lg pt-lg">
  <!-- BACK BTN -->
  <div class="container container--lg pX">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/partners/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <!-- ADD-PARTNER -->
  <div class="container container--md pX">
    <div class="grid--1-col b-radius4 box-shad">
      <div class="article-content txt-dark txt-content pX">
        <h2 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Ajoutez un partenaire potentiel
        </h2>
        <p class="txt-content--small mb">
          Un partenaire est un professionnel avec qui vous n'entrez pas en concurrence directe. Ainsi, de par vos activités, vous pouvez respectivement tirer des bénéfices moyennant une collaboration pour laquelle vous devez être en accord au préalable.
        </p>
        
        <!-- FORM ADDMIN-PARTNER -->
        <form class="form-admin-partner" action="<?php echo URL_ROOT; ?>/partners/add" method="post">

          <!-- SECTION BASE-INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs" tabindex="0"> 
              Base d'information:
            </h3>
            
            <p class="txt-content--small mb-xs" tabindex="0">
              Vous trouverez ici <span class="fontW700">les informations de base</span> pour contacter votre partenaire.
            </p>

            <!-- company-name -->
            <div class="form-admin-partner--display partner-company-name">
              <label class="fontW700 txt-blue mb-xxs" for="partnerCompanyName">Nom de l'entreprise *</label>
              
              <input type="text" name="partner_company_name" class="bg-white" id="partnerCompanyName" value="<?php echo $data['partner_company_name']; ?>">
              
              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?php echo $data['partner_company_name_err'];?></span>
              </span>
            </div>

            <!-- email -->
            <div class="form-admin-partner--display partner-email">
              <label class="fontW700 txt-blue mt-xs mb-xxs" for="partnerEmail" >Email de l'entreprise *</label>

              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?php  echo $data['partner_email_err']; ?></span>
              </span>
            
              <input type="email" name="partner_email" class="bg-white" id="partnerEmail" value="<?php echo $data['partner_email']; ?>">
            </div>

            <div class="txt-content--xsmall txt-blue mb-xs">
              * Ces champs sont obligatoires.
            </div>
            <!-- phone -->
            <div class="base-info-phone">
              <label class="fontW700 txt-blue" for="partnerPhone" >Numéro de téléphone</label>
              
              <p class="txt-content--small">
                Dès que vous pourrez, ajoutez ici le numéro de téléphone de votre partenaire.
              </p>
              
              <input type="tel" name="partner_phone" class="bg-white" id="partnerPhone" value="<?php echo $data['partner_phone']; ?>">
            </div>
          </div>

          <!-- SECTION BUSINESS INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs" tabindex="0"> 
              Business informations:
            </h3>
            
            <p class="txt-content--small mb-xs" tabindex="0">
              Ajoutez ici les <span class="fontW700">informations business</span> de votre partenaire.
            </p>

            <div>
              <!-- city -->
              <div class="form-admin-partner--display partner-city">
                <label class="fontW700 txt-blue mb-xxs" for="partnerCity" tabindex="0">Ville:</label>
                <input type="text" name="partner_city" class="bg-white mb-xxs" id="partnerCity" value="<?php echo $data['partner_city']; ?>">
              </div>
                    
              <!-- type activity -->
              <!-- <div class="form-admin-partner--display type-activity">
                <label class="fontW700 txt-blue mb-xxs" for="typeActivity" tabindex="0">
                  Activité principale
                </label>
                <div>
                  <select name="<?php //echo $data['type_activity'] ?>" class="bg-white" id="typeActivity"> 
                    <option value="default">Choisir</option>
                    <option value="coaching">Coaching / Prépa</option>
                    <option value="blogging">Blogging</option>
                    <option value="shop">Magasin</option>
                    <option value="event">Evènement</option>
                    <option value="health">Nutrition / Santé</option>
                    <option value="other">Autre</option>
                  </select>
                </div>
              </div> -->

              <!-- is-web-business -->
              <div class="form-admin-partner--display is-web-business">
                <div>
                  <input class="bg-white" id="isWebBusiness" name="<?php echo $data['is_web']?>" type="checkbox" value="is-web-business">
                  <label for="isWebBusiness" tabindex="0">Activité Web</label>
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
              <label class="fontW700 txt-blue mb-xxs" for="typePartnership" tabindex="0">
                Type de partenariat
              </label>
              <div>
                <select name="<?php echo $data['type_partnership'] ?>" class="bg-white" id="typePartnership" > 
                  <option value="default">Choisir</option>
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
                <input class="bg-white" id="haveDeal" name="<?php echo $data['have_deal'] ?>" type="checkbox" value="have-deal">
                <label for="haveDeal" tabindex="0">Accord</label>
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
