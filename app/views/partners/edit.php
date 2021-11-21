
<!-- HEADER -->
<?php 
require APP_ROOT . '/views/inc/header.php'; 
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
  <!-- EDIT FORM -->
  <div class="container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="post-content txt-dark txt-content">
        <h3 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Modifier votre fiche partenaire
        </h3>
        <p class="txt-content--small mb">
          Vous pouvez dans cette section modifier la fiche partenaire sélectionnée.
        </p> 
        
        <!-- FORM EDIT PARTNER -->
        <form 
        action="<?php echo URL_ROOT; ?>/partners/edit/<?php echo ($data['partner']->partner_id); ?>" method="post">

          <!-- NAME PARTNER -->
          <div>
            <label class="fontW700 txt-blue mb-xxs" for="title">Nom de l'entreprise partenaire</label>
            
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?php echo ($data['partner_company_name_err']);?></p>
            </span>
            
            <input 
              type="text" 
              name="partner_company_name" 
              class="bg-white mb-xxs" 
              value="<?php echo ($data['partner']->partner_company_name); ?>">
          </div>
        
          <!-- EMAIL PARTNER -->
          <div>
            <label class="fontW700 txt-blue mt mb-xxs" for="body">Email de votre partenaire</label>

            <p class="txt-content--xsmall">
              Modifier l'email de l'entreprise partenaire si vous avez fait une erreur. 
            </p>

            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?php echo ($data['partner_email_err']); ?></p>
            </span>
          
            <input 
              type="email" 
              name="partner_email" 
              class="bg-white mb-xxs" 
              value="<?php echo ($data['partner']->partner_email); ?>">
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