<?php require APP_ROOT . '/views/inc/header.php'; ?>
  
<!-- REGISTER SECTION -->
<section class="bg-white pb-md pt-lg">

  <!--  Container  register  -->
  <div class="container container--xs">
    <div
      class="grid--1-col b-radius4 linear-grad-lightBlue box-shad1 pt-xs"
    >
      <h2 class="heading-secondary txt-center txt-dark mb-sm">
        Enregistrement
      </h2>

      <div class="text-box--login txt-dark txt-content mb-xs">
        <p class="mb-xs">
          Enregistrez vos informations pour pouvoir vous connecter à votre
          "Dashboard".
        </p>
        <form name="register" action="<?= URL_ROOT; ?>/users/register" method="post">
          <div>
            <label class="fontW700 mt-xxs" for="name"
              >Nom complet</label
            >
            <input
              class="b-radius4 bg-white"
              type="text"
              name="name"
              value="<?= $data['name']; ?>"              
            />
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?= $data['name_err']; ?></p>
            </span>
          </div>
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
          <div>
            <label class="fontW700 mt-xxs" for="password"
              >Confirmation mot de passe</label
            >
            <input
              class="b-radius4 bg-white"
              type="password"
              name="confirm_password"
              value="<?= $data['confirm_password']; ?>"           
            />
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?= $data['confirm_password_err']; ?></p>
            </span>
          </div>
          <div class="txt-center">
            <!-- <button type="submit" class="btn btn--dark btn--form b-radius25 mb-xs">
              S'enregistrer
            </button> -->
            <input type="submit" name="submit" value="S'enregistrer" class="btn btn-hover btn--form b-radius25 mt-xs">
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>
