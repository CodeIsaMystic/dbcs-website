<?php 
// echo 'PROSPECT EDIT PAGE';

// var_dump($data);
// die();

?>

<!-- HEADER -->
<?php 
require APP_ROOT . '/views/inc/header.php'; 
?>


<!-- SECTION EDIT PROSPECT -->
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
          Vous pouvez dans cette section modifier le prospect que vous aviez sélectionné.
        </p> 
        
        <!-- FORM EDIT PROSPECT -->
        <form 
        action="<?php echo URL_ROOT; ?>/prospects/edit/<?php echo ($data['prospect']->prospect_id); ?>" method="post">

          <!-- NAME PROSPECT -->
          <div>
            <label class="fontW700 txt-blue mb-xxs" for="title">Nom de votre prospect</label>
            
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?php echo ($data['prospect_name_err']);?></p>
            </span>
            
            <input 
              type="text" 
              name="prospect_name" 
              class="bg-white mb-xxs" 
              value="<?php echo ($data['prospect']->prospect_name); ?>">
          </div>
        
          <!-- EMAIL PROSPECT -->
          <div>
            <label class="fontW700 txt-blue mt mb-xxs" for="body">Email de votre prospect</label>

            <p class="txt-content--xsmall">
              Modifier l'email de votre prospect si vous avez fait une erreur. 
            </p>

            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?php echo ($data['prospect_email_err']); ?></p>
            </span>
          
            <input 
              type="email" 
              name="prospect_email" 
              class="bg-white mb-xxs" 
              value="<?php echo ($data['prospect']->prospect_email); ?>">
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