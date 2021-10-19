<?php require APP_ROOT . '/views/inc/header.php'; ?>
  
<!-- LOGIN SECTION -->
<section class="bg-white pb-xl pt-lg mt-sm">
    <!--  Alert Messages  -->
    <div class="container container--xs">
      <?php flash('register_success'); ?>
    </div>

  <!--  Container  login  -->
  <div class="container container--xs">
    <div
      class="grid--1-col b-radius4 linear-grad-lightBlue box-shad1 pt-xs"
    >
      <h2 class="heading-secondary txt-center txt-dark mb-sm">
        Connexion
      </h2>

      <div class="text-box--login txt-dark txt-content mb-xs">
        <p class="mb-xs">
          Connectez-vous à votre site (seul l'administrateur peut avoir
          accès).
        </p>
        <form name="login" action="<?= URL_ROOT; ?>/users/login" method="post">
          <div>
            <label class="fontW700 mt-xxs" for="email"
              >Adresse mail</label
            >
            <input
              class="b-radius4 bg-white"
              type="email"
              name="email"
              value="<?= $data['email']; ?>"            
            />
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?= $data['email_err']; ?></p>
            </span>
          </div>
          <div>
            <label class="fontW700 mt-xxs" for="password"
              >Mot de passe</label
            >
            <input
              class="b-radius4 bg-white"
              type="password"
              name="password"
              value="<?= $data['password']; ?>"             
            />
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?= $data['password_err']; ?></p>
            </span>
          </div>
          <div class="txt-center mt-xs">
            <button type="submit" class="btn btn--dark btn--form b-radius25">
              Se connecter
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>
