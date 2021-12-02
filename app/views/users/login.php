<!-- HEADER --> 
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- FLASH  MESSAGES -->
<?php require APP_ROOT . '/views/inc/flashmessages.php'; ?>

  
<!-- SECTION LOGIN -->
<section class="bg-white pb-xl pt-lg mt-sm">

  <div class="container container--xs pX">
    <div class="grid--1-col b-radius4 linear-grad-lightBlue box-shad pt-xs">
      <h2 class="heading-secondary txt-center txt-dark mb-sm">
        Connexion
      </h2>

      <div class="txt-dark txt-content mb-xs pX">
        <p class="mb-xs">
          Connectez-vous à votre site (seul l'administrateur peut avoir
          accès).
        </p>
        <form class="form-small" name="login" action="<?= URL_ROOT; ?>/users/login" method="post">
          <div>
            <label class="fontW700 mt-xxs" for="email">Adresse mail</label>
            <input
              class="b-radius4 bg-white"
              id="email"
              type="email"
              name="email"
              value="<?= e($data['email']); ?>"            
            />
            <span class="b-radius4">
              <span class="txt-content--xsmall txt-danger"><?= e($data['email_err']); ?></span>
            </span>
          </div>
          <div>
            <label class="fontW700 mt-xxs" for="password">Mot de passe</label>
            <input
              class="b-radius4 bg-white"
              id="password"
              type="password"
              name="password"
              value="<?= e($data['password']); ?>"             
            />
            <span class="b-radius4">
              <span class="txt-content--xsmall txt-danger"><?= e($data['password_err']); ?></span>
            </span>
          </div>
          <div class="txt-center mt-xs">
            <button type="submit" class="btn btn-hover btn-hover--dark btn40">
              Se connecter
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>

<!-- FOOTER --> 
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
