<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>
  
<!-- SECTION REGISTER -->
<section class="bg-white pb-md pt-lg">

  <div class="container container--xs pX">
    <div class="grid--1-col b-radius4 linear-grad-lightBlue box-shad pt-xs">
      <h2 class="heading-secondary txt-center txt-dark mb-sm">
        Enregistrement
      </h2>

      <div class="txt-dark txt-content mb-xs pX">
        <p class="mb-xs">
          Enregistrez vos informations pour pouvoir vous connecter à votre
          "Dashboard".
        </p>
        <form class="form-small" name="register" action="<?= URL_ROOT; ?>/users/register" method="post">
          <div>
            <label class="fontW700 mt-xxs" for="name">Nom complet</label>
            <input
              class="b-radius4 bg-white"
              id="name"
              type="text"
              name="name"
              value="<?= e($data['name']); ?>"              
            />
            <span class="b-radius4">
              <span class="txt-content--xsmall txt-danger"><?= e($data['name_err']); ?></span>
            </span>
          </div>
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
          <div>
            <label class="fontW700 mt-xxs" for="confirmPassword">Confirmation mot de passe</label>
            <input
              class="b-radius4 bg-white"
              id="confirmPassword"
              type="password"
              name="confirm_password"
              value="<?= e($data['confirm_password']); ?>"           
            />
            <span class="b-radius4">
              <span class="txt-content--xsmall txt-danger"><?= e($data['confirm_password_err']); ?></span>
            </span>
          </div>
          <div class="txt-center mt-xs">
            <button type="submit" class="btn btn-hover btn-hover--dark btn40">S'enregistrer</button>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>

<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
