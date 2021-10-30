<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO CONTACT -->
<section class="hero--fullW bg-white">
  <div>
    <picture>
      <source srcset="<?php echo URL_ROOT; ?>/img/site/full-width/contact.png" type="image/webp" />
      <source srcset="<?php echo URL_ROOT; ?>/img/site/full-width/contact.png" type="image/png" />

      <img src="<?php echo URL_ROOT; ?>/img/site/full-width/contact.png" alt="woman sitting on a car and boxing"/>
    </picture>
  </div>
  <div class="hero--fullW__heading hero--fullW__heading--left">
    <h4 class="subheading fontW700 txt-upp txt-blue pb-xxs">Article</h4>
    <h1 class="heading-primary txt-dark-gray fontW500 font-garamond pb-xs">
        <?= $data['title']; ?>
    </h1>
    <p class="txt-content txt-dark">
        <?= $data['description']; ?>
      </p>
  </div>
</section>

<!-- SECTION CONTACT-DETAILS  -->
<section class="contact-details bg pt-lg">
  <div class="container container--md">
    <h4 class="subheading fontW700 txt-upp txt-blue mb-sm">Détails</h4>
  </div>

  <div
    class="container container--md grid grid--3-cols mb"
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
<section class="bg-white mb-xl mt-xl">
  <div class="container container--lg">
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

<!-- SECTION CONTACT FORM --->
<section class="contact-form mb-lg">
  <div class="container container--md">
    <div class="contact-form__content b-radius4 box-shad1">
      <div class="txt-dark">
        <h2 class="heading-secondary font-garamond txt-dark-gray mb">
          Contactez-nous pour un partenariat
        </h2>
        <p class="txt-content--large mb">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur provident in rem praesentium laudantium, harum saepe recusandae repudiandae nemo dignissimos nihil vel dolorum nostrum aperiam molestiae fugiat dolorem iste reprehenderit quibusdam obcaecati consequuntur perspiciatis! Corporis fugiat sapiente autem vel dolore.
        </p>

      </div>
      <div>
        
        <form class="grid--form" name="sign-up">
          <div class="">
            <!-- name -->
            <div>
              <label class="mb-xxs" for="full-name"
                >Nom de l'entreprise</label
              >
              <input
                class="b-radius4 bg-white"
                id="full-name"
                type="text"
                placeholder="Nom..."
                name="full-name"
                required
              />
            </div>
  
            <!-- email -->
            <div class="mt-xs">
              <label class="mb-xxs" for="email"
                >Adresse Mail</label
              >
              <input
                class="b-radius4 bg-white"
                id="email"
                type="email"
                placeholder="Email..."
                name="email"
                required
              />
            </div>
            
            <!-- partnership -->
            <div class="mt-sm">
              <label class="mb-xxs" for="select-partnership"
                >Type de partenariat?</label
              >
              <select
                class="b-radius4 bg-white"
                id="select-partnership"
                name="select-partnership"
                required
              >
                <option value=""></option>
                <option value="blogging">Blogging</option>
                <option value="nutrition">Nutrition</option>
                <option value="preps">Préparation physique</option>
                <option value="entreprise">Entreprise</option>
                <option value="internet">Internet</option>
              </select>
            </div>            
          </div>

          <!-- message -->
          <div>
            <label class="mb-xxs"
            >Envoyez nous un message</label
            >
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
          </div>
          
          <!-- submit -->
          <button type="submit" class="btn btn--baseline btn-hover btn-hover--blue mt-xxs">
            Envoyez
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
