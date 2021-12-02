
<!-- HEADER -->
<?php 
  require APP_ROOT . '/views/inc/header.php'; 
?>


<!-- SECTION EDIT PARTNER -->
<section class="edit-pagespb-lg pb-lg pt-lg">
  <!-- BACK BTN -->
  <div class="container container--lg pX">

    <div class="txt-dark mb">
      <a href="<?= URL_ROOT; ?>/partners/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <!-- EDIT PARTNER -->
  <div class="container container--md pX">
    <div class="grid--1-col b-radius4 box-shad">
      <div class="article-content txt-dark txt-content pX">
        <h3 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Modifier la fiche partenaire
        </h3>
        <p class="txt-content--small mb">
          Vous pouvez dans cette section modifier la fiche partenaire sélectionnée. Il peut être judicieux d'établir des partenariat afin d'optimiser votre activité. 
        </p> 
        
        <!-- FORM-ADMIN-PARTNER -->
        <form 
        action="<?= URL_ROOT; ?>/partners/edit/<?= ($data['partner']->partner_id); ?>" method="post">

          <!-- SECTION BASE-INFO -->
          <div>
            <span class="b-radius4">
              <span class="txt-content--xsmall txt-center txt-danger mb-xxs"><?= e($data['partner_main_err']);?></span>
            </span>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mb-xs"> 
            Base d'information:
            </h3>
              
            <p class="txt-content--small mb-xs">
              Modifier ici les informations nécessaires à vos partenariats.  Il est judicieux que de <span class="fontW700">créer des collaborations afin d'optimser votre acitvité et d'agrandir votre réseau</span>.
            </p>

            <!-- company-name -->
            <div class="form-admin-partner--display partner-company-name">
              <label class="fontW700 txt-blue mb-xxs" for="partnerCompanyName">Nom de l'entreprise partenaire *</label>
              
              <input 
                type="text" 
                name="partner_company_name" 
                class="bg-white mb-xxs" 
                id="partnerCompanyName"
                value="<?= e($data['partner']->partner_company_name); ?>">

              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?= e($data['partner_company_name_err']);?></span>
              </span>
              
            </div>
          
            <!-- email -->
            <div class="form-admin-partner--display partner-email">
              <label class="fontW700 txt-blue mt mb-xxs" for="partnerEmail">Email de votre partenaire *</label>

              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?= e($data['partner_email_err']); ?></span>
              </span>
            
              <input 
                type="email" 
                name="partner_email" 
                class="bg-white mb-xxs" 
                id="partnerEmail"
                value="<?= e($data['partner']->partner_email); ?>">
            </div>

            <div class="txt-content--xsmall txt-blue mb-xs">
              * Ces champs sont obligatoires.
            </div>

            <!-- phone -->
            <div class="base-info-phone">
              <label class="fontW700 txt-blue" for="partnerPhone">Numéro de téléphone</label>
              <p class="txt-content--small mt-xs mb-xxs">
                Le numéro de téléphone doit <span class="fontW700">impérativement commencer par "0"</span> et <span class="fontW700">contenir 10 chiffres</span>. Notez que vous pouvez laisser ce champs vide si vous le souhaitez.
              </p>

              
              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?= e($data['partner_phone_err']); ?></span>
              </span>
            
              <input 
                type="tel" 
                name="partner_phone" 
                class="bg-white" 
                id="partnerPhone"
                value="<?= e($data['partner']->partner_phone); ?>">
            </div>
          </div>
          <!-- SECTION BUSINESS INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs">
              Business informations:
            </h3>

            <p class="txt-content--small mb-xs">
              Modifier ici les <span class="fontW700">informations business</span> de votre partenaire.
            </p>

            <div>
              <!-- city -->
              <div class="form-admin-partner--display partner-city">
                <label class="fontW700 txt-blue mb-xxs" for="partnerCity">Ville:</label>
                <input type="text" name="partner_city" id="partnerCity" class="bg-white mb-xxs" value="<?= e($data['partner']->partner_city); ?>">
              </div>
  
              <!-- is-web-business -->
              <div class="form-admin-partner--display is-web-business">
                <div>
                  <input 
                    class="bg-white" 
                    name="is_web_business" 
                    type="checkbox" 
                    value="<?= e($data['partner']->is_web_business) ?>" id="isWebBusiness" 
                    <?= $data['partner']->is_web_business === '1'  ?  'checked' :  ''?>  >
                  <label for="isWebBusiness">Activité Web</label>
                </div>
              </div>
            </div>
          </div>

          <!-- SECTION PARTNERSHIP INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs"> 
              Partenariat informations:
            </h3>
            
            <p class="txt-content--small mb-xs">
              Ajoutez ici les <span class="fontW700">informations de base sur le type de partenariat</span>. Notez que vous devez convenir avec l'entreprise partenaire et obtenir un accord avec celle-ci.
            </p>

            <!-- type partnership -->
            <div class="form-admin-prospect--display type-partnership">
              <label class="fontW700 txt-blue mb-xxs" for="typePartnership">
                Type de partenariat
              </label>
              <div>
                <select name="type_partnership" class="bg-white" id="typePartnership"> 
                  <option value="default" 
                    <?= applySelectedAttr($data['partner']->type_partnership) ?> >
                      Choisir
                  </option>
                  <option value="collaboration" 
                    <?= applySelectedAttr($data['partner']->type_partnership) ?> >
                      Collaboration
                  </option>
                  <option value="blogging" 
                    <?= applySelectedAttr($data['partner']->type_partnership) ?> >
                      Blog & SEO
                  </option>
                  <option value="shop" 
                    <?= applySelectedAttr($data['partner']->type_partnership) ?> >
                      Commercial
                  </option>
                  <option value="event" 
                    <?= applySelectedAttr($data['partner']->type_partnership) ?> >
                      Evènement
                  </option>
                </select>
              </div>
            </div>

            
            <!-- have-a-deal -->
            <div class="form-admin-partner--display have-deal">
              <div>
                <input 
                  class="bg-white" 
                  id="haveDeal" 
                  name="have_deal" 
                  type="checkbox" 
                  value="<?= e($data['partner']->have_deal); ?>" 
                  <?= $data['partner']->have_deal === '1'  ?  'checked' :  ''?> >
                <label for="haveDeal">Accord</label>
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