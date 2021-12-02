<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- FLASH  MESSAGES -->
<?php require APP_ROOT . '/views/inc/flashmessages.php'; ?>

<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO CONTACT -->
<section class="full-width bg-white">
  <div>
    <picture>
      <img src="<?= URL_ROOT; ?>/img/site/hero/contact.jpg" alt="woman sitting on a car and boxing"/>
    </picture>
  </div>
  <div class="full-width__heading full-width__heading--left">
    <h4 class="subheading fontW700 txt-upp txt-blue pb-xxs">Article</h4>
    <h1 class="heading-primary txt-dark-gray fontW500 font-garamond pb-xs">
        <?= e($data['title']); ?>
    </h1>
    <p class="txt-content txt-dark">
        <?= e($data['description']); ?>
      </p>
  </div>
</section>

<!-- SECTION CONTACT-DETAILS  -->
<section class="contact-details bg pt-lg">
  <div class="container container--md pX">
    <h4 class="subheading fontW700 txt-upp txt-blue mb-sm">Détails</h4>
  </div>

  <div
    class="container container--md grid grid--3-cols pX mb"
  >
    <div class="contact-details__div">
      <div class="col-address">
        <h4 class="heading-secondary font-garamond txt-dark-gray">
          Adresses
        </h4>
        <p class="txt-content">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea
          aliquid atque sapiente inventore dolores nam expedita ducimus
          sed, quis, neque architecto, delectus id. Harum, ipsum?
        </p>

        <ul class="social-links">
          <li>
            <a class="link" href="#"
              ><ion-icon class="icon-xs" name="logo-instagram"></ion-icon
            ></a>
          </li>
          <li>
            <a class="link" href="#"
              ><ion-icon class="icon-xs" name="logo-facebook"></ion-icon
            ></a>
          </li>
          <li>
            <a class="link" href="#"
              ><ion-icon class="icon-xs" name="logo-snapchat"></ion-icon
            ></a>
          </li>
        </ul>
        <address class="contacts txt-content">
          <p>
            <a class="link" href="mailto:contact@dbcs.com"
              >contact@dbcs.com</a
            >
          </p>
          <p class="address">
            Rue Louis Pasteur, Loire s/Rhône 69700
          </p>
        </address>
      </div>
    </div>
    <div class="contact-details__div">
      <nav class="col-nav">
        <h4 class="heading-secondary font-garamond txt-dark-gray">
          Partenariats
        </h4>
        <p class="txt-content">
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Voluptatum, saepe ducimus omnis rem qui, repellendus praesentium
          esse aliquam nihil obcaecati delectus excepturi nam dolor sed,
          earum dolorem possimus aliquid? Fuga reprehenderit sint corrupti
          nulla! Autem.
        </p>
        <ul>
          <li>
            <a class="link link--underline" href="#"
              >Partenariat &rarr;</a
            >
          </li>
        </ul>
      </nav>
    </div>
    <div class="contact-details__div">
      <nav class="col-nav">
        <h4 class="heading-secondary font-garamond txt-dark-gray">
          Préparation physique<br />
          & Entreprises
        </h4>
        <p class="txt-content">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. In qui
          nostrum culpa, id dolor ab? Lorem ipsum dolor sit amet
          consectetur adipisicing elit. In qui nostrum culpa, id dolor ab?
        </p>
        <ul>
          <li>
            <a class="link link--underline mb-xs" href="#"
              >Préparation Physique &rarr;</a
            >
          </li>
          <li>
            <a class="link link--underline" href="#"
              >Pour les entreprises &rarr;</a
            >
          </li>
        </ul>
      </nav>
    </div>
  </div>
</section>


<!-- SECTION PARTNERS -->
<section class="bg-white mt-xl">
  <div class="container container--lg pX">
    <h2 class="subheading txt-upp txt-center fontW500 mb-sm">
      Nos partenaires
    </h2>
    <div class="partners-logo">
      <img src="<?= URL_ROOT; ?>/img/site/logos/logos-partners/decathlon.png" alt="Decathlon logo" />
      <img
      src="<?= URL_ROOT; ?>/img/site/logos/logos-partners/cep-gilles-cometti.png"
        alt="CEP Gilles Cometti logo"
      />
      <img src="<?= URL_ROOT; ?>/img/site/logos/logos-partners/hbx-noir.png" alt="HBX logo" />
      <img
        src="<?= URL_ROOT; ?>/img/site/logos/logos-partners/naturacademy.png"
        alt="Naturacademy logo"
      />
      <img
        src="<?= URL_ROOT; ?>/img/site/logos/logos-partners/lappart.png"
        alt="L'Apprt Fitness logo"
      />
    </div>
  </div>
</section>

<!-- SECTION CONTACT FORM -->
<section class="form-contact mt-xl mb-lg">
  <div class="container container--md pX">
    <div class="form-contact__content b-radius4 box-shad">
      <div class="txt-dark">
        <h2 class="heading-secondary font-garamond txt-dark-gray mb">
          Contactez-nous pour un partenariat
        </h2>
        <p class="txt-content--large mb">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur provident in rem praesentium laudantium, harum saepe recusandae repudiandae nemo dignissimos nihil vel dolorum nostrum aperiam molestiae fugiat dolorem iste reprehenderit quibusdam obcaecati consequuntur perspiciatis! Corporis fugiat sapiente autem vel dolore.
        </p>

      </div>
      <div>
        
        <form action="<?= URL_ROOT; ?>/pages/contact" method="post">
          <div class="grid--form">
            <!-- name -->
            <div>
              <label class="mb-xxs" for="partnerCompanyName" >Nom de l'entreprise</label>
              
              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?= e($data['partner_company_name_err']);?></span>
              </span>

              <input
                class="b-radius4 bg-white"
                id="partnerCompanyName"
                name="partner_company_name"
                type="text"
                placeholder="Nom..."
                value="<?= e($data['partner_company_name']); ?>"
              />
            </div>
  
            <!-- email -->
            <div>
              <label class="mb-xxs" for="partnerEmail" >Adresse Mail</label>

              <span class="b-radius4">
                <span class="txt-content--xsmall txt-danger"><?= e($data['partner_email_err']); ?></span>
              </span>

              <input
                class="b-radius4 bg-white"
                id="partnerEmail"
                name="partner_email" 
                type="email"
                placeholder="Email..."
                value="<?= e($data['partner_email']); ?>"
              />
            </div>
            
            <!-- partnership -->
            <div class="mt-xs">
              <label class="mb-xxs" for="typePartnership">
                Type de partenariat
              </label>
              <select
                class="b-radius4 bg-white"
                id="typePartnership"
                name="type_partnership"
              >
                <option value="default">Choisir...</option>
                <option value="collaboration">Collaboration</option>
                <option value="blogging">Blog & Internet</option>
                <option value="shop">Commercial</option>
                <option value="event">Evènement</option>
              </select>
            </div>            
          </div>

          <!-- message -->
          <div>
            <label class="mb-xxs mt-xs" for="partnerMessage">
              Envoyez nous un message
            </label>
            <textarea id="partnerMessage" name="contact_email_message" cols="30" rows="10"></textarea>
          </div>

          <!-- submit -->
          <button type="submit" class="btn btn--baseline btn-hover btn-hover--blue mt-sm">
            Envoyez
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
