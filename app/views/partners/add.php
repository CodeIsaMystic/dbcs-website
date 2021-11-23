<?php 
// echo 'PARTNER ADD PAGE';

// var_dump($data);
// die();

?>

<!-- HEADER -->
<?php 
require APP_ROOT . '/views/inc/header.php'; 
?>

<!-- SECTION ADD-PARTNER -->
<section class="add-post pb-lg pt-lg">
  <!-- BACK BTN -->
  <div class="container container--lg">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/partners/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <!-- FORM-ADMIN-PARTNER -->
  <div class="container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="post-content txt-dark txt-content">
        <h2 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Ajoutez un partenaire potentiel
        </h2>
        <p class="txt-content--small mb">
          Un partenaire est un professionnel avec qui vous n'entrez pas en concurrence, qui, de par vos activités, vous pouvez potentiellement tirer bénéfices en débutant un type de collaboration pour laquelle vous devez être d'accord au préalable.
        </p>
        
        <!-- FORM ADD-PARTNER -->
        <form class="form-admin-partner" action="<?php echo URL_ROOT; ?>/partners/add" method="post">
          <!-- SECTION BASE-INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs" tabindex="0"> 
              Informations de base:
            </h3>
            
            <p class="txt-content--small mb-xs" tabindex="0">
              Vous trouverez ici <span class="fontW700">les informations de base</span> pour contacter votre partenaire.
            </p>

            <!-- company-name -->
            <div class="form-admin-partner--display partner-company-name">
              <label class="fontW700 txt-blue mb-xxs">Nom de l'entreprise</label>
              
              <input type="text" name="partner_company_name" class="bg-white" value="<?php echo $data['partner_company_name']; ?>">
              
              <span class="b-radius4">
                <p class="txt-content--xsmall txt-danger"><?php echo $data['partner_company_name_err'];?></p>
              </span>
            </div>

            <!-- email -->
            <div class="form-admin-partner--display partner-email mb-xs">
              <label class="fontW700 txt-blue mt-xs mb-xxs">Email de l'entreprise</label>

              <span class="b-radius4">
                <p class="txt-content--xsmall txt-danger"><?php  echo $data['partner_email_err']; ?></p>
              </span>
            
              <input type="email" name="partner_email" class="bg-white" value="<?php echo $data['partner_email']; ?>">
            </div>
          </div>

          <!-- SECTION BUSINESS INFO -->
          <div>
            <!-- heading -->
            <h3 class="subheading txt-upp fontW700 mt mb-xxs" tabindex="0"> 
              Business informations:
            </h3>
            
            <p class="txt-content--small mb-xs" tabindex="0">
              <span class="fontW700"></span> de votre prospect. Notez que vous devez enregistrer l'adresse complète, <span class="fontW700"></span>.
            </p>

            <div>

              <!-- city -->
              <div class="form-admin-partner--display partner-city">
                <label class="fontW700 txt-blue mb-xxs" tabindex="0">Ville:</label>
                <input type="text" name="partner_city" class="bg-white mb-xxs" value="<?php //echo $data['partner_city']; ?>">
              </div>
                    
              <!-- type activity -->
              <div class="form-admin-prospect--display type-activity">
                <label class="fontW700 txt-blue mb-xxs" tabindex="0">
                  Activité principale
                </label>
                <div>
                  <select name="" class="bg-white"> 
                    <option value="default"></option>
                    <option value="basic">Coaching / Prépa</option>
                    <option value="fit">Blogging</option>
                    <option value="weight-loss">Magasin</option>
                    <option value="weight-loss">Evènement</option>
                    <option value="weight-loss">Nutrition / Santé</option>
                    <option value="weight-loss">Autre</option>
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
              <span class="fontW700"></span> de votre prospect. Notez que vous devez enregistrer l'adresse complète, <span class="fontW700"></span>.
            </p>

            <!-- type partnership -->
            <div class="form-admin-prospect--display type-partnership">
              <label class="fontW700 txt-blue mb-xxs" tabindex="0">
                Type de partenariat
              </label>
              <div>
                <select name="" class="bg-white"> 
                  <option value="default"></option>
                  <option value="basic">Pleine Collaboration</option>
                  <option value="fit">Blog & SEO</option>
                  <option value="weight-loss">Commercial</option>
                  <option value="weight-loss">Evènement</option>
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
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
