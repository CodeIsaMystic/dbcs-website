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
  <!-- ADD FORM -->
  <div class="container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="post-content txt-dark txt-content">
        <h3 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Ajoutez un partenaire potentiel
        </h3>
        <p class="txt-content--small mb">
          Ajoutez & enregistrez un partenaire dans cette section.
        </p>
        
        <!-- FORM ADD-PARTNER -->
        <form action="<?php echo URL_ROOT; ?>/partners/add" method="post">
          <!-- PARTNER COMPANY NAME -->
          <div>
            <label class="fontW700 txt-blue mb-xxs" for="title">Nom de votre Partenaire</label>
            
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?php echo $data['partner_company_name_err'];?></p>
            </span>
            
            <input type="text" name="partner_company_name" class="bg-white mb-xxs" value="<?php echo $data['partner_company_name']; ?>">
          </div>
          

          <!-- PARTNER EMAIL -->
          <div>
            <label class="fontW700 txt-blue mt mb-xxs" for="body">Adresse email</label>

            <p class="txt-content--xsmall">
              <!-- Ajoutez l'email. -->
            </p>
            <p class="txt-content--xsmall mb-xxs">
              
            </p>

            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?php  echo $data['partner_email_err']; ?></p>
            </span>
          
            <input type="email" name="partner_email" class="bg-white mb-xxs" value="<?php echo $data['partner_email']; ?>">
          </div>
          
          <!-- INPUT SUBMIT -->
          <div class="">
            <input type="submit" class="btn btn-hover btn-hover--dark btn25 mt-xs mb-xs" value="Enregistrez">
          </div>

        </form>

      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
