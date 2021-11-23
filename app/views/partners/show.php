
<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>


<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO PARTNER PAGE -->
<section class="hero--fullW bg-white">
  <div>
    <picture>
      <img src="<?php echo URL_ROOT; ?>/img/site/full-width/jogger.jpg" alt="Image of a jogger in the street"/>
    </picture>
  </div>
  <div class="hero--fullW__heading hero--fullW__heading--center">
    <h4 class="subheading fontW700 txt-upp txt-blue">Partenaire</h4>
    <h1 class="heading-primary txt-dark-gray txt-center fontW500 font-garamond">
      <?php echo $data['partner']->partner_company_name; ?>
    </h1>

    <p class="txt-content--xsmall mt-xs">
      Vous êtes entré en contact avec ce partenaire le  
      <span class="txt-blue">
        <?php  echo getDateFormatted($data['partner']->partner_created_at); ?>
      </span> 
    </p>
  </div>
</section>

<!-- SECTION PARTNER PAGE CONTENT -->
<section class="post-page bg-white pb-md">
  <!-- BACK BTN -->
  <div class="container container--lg">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/partners/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>

  </div>

  <!-- PARTNER INFO PAGE CONTENT -->
  <div class="container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="post-content txt-dark txt-content">
        <h3 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Informations sur le partenaire 
          <span class="txt-blue"><?= $data['partner']->partner_company_name ?></span>.
        </h3>
        <p class="txt-content--small mb">
          Vous trouverez dans cette section, toutes les informations que vous avez sauvegardées sur ce partenaire.
        </p> 
        


        <!-- COMPANY NAME PARTNER -->
        <div>
          <p class="">
            Nom de l'entreprise du Partenaire:
          </p>
          <span class="txt-content--xsmall txt-blue"> 
            <?= $data['partner']->partner_company_name; ?>
          </span>
        </div>
        
        <!-- EMAIL PARTNER -->
        <div>
          <p class="mt-sm">
            Email du partenaire:
          </p>
          <span class="txt-content--xsmall txt-blue"> 
            <?= $data['partner']->partner_email; ?>
          </span>
        </div>
          
        <!-- PARTNER BUSINESS INFOS ready to setup & test -->
        <!-- <div>
          <p class="mt-sm">
            Logo de l'entreprise:
          </p>
          <img src="<?php// echo blablabla ?>" />
        
          <p class="mt-sm">
            Ville de localisation de l'entreprise:
          </p>
          <span class="txt-content--xsmall txt-blue"> 
            <?php //echo $data['partner']->partner_city; ?>
          </span>
        
          <?php //if($data['partner']->is_web_business === 1) : ?>
            <p class="txt-content--xsmall mt-sm">  
              <span class="txt-blue">
                <?//= $data['partner']->partner_company_name; ?>
              </span> est principalement en activité sur le web.
            </p> 
          <?php //else : ?>
            <p class="txt-content--xsmall mt-sm">  
              <span class="txt-blue">
                <?//= $data['partner']->partner_company_name; ?>
              </span> a son activité partiellement sur le web et dans le réel!?.
            </p> 
          <?php //endif; ?>
        </div> -->


        <!-- PARTNERSHIP  ready to setup & test-->
        <!-- <div>
          <?php //if($data['partner']->have_deal === 1) : ?>
            <p class="txt-content--xsmall mt-sm">  
              <span class="txt-blue">
                Vous avez établi un partenariat de type  
                <?php //echo $data['partner']->type_partnership; ?>
              </span>...
            </p>  
            <p class="mt-xs">
              Date de début de ce partenariat:
            </p>
            <span class="txt-content--xsmall txt-blue"> 
              <?//= getDateFormatted($data['partner']->date_started_partnership); ?>
            </span>
          <?php //else : ?>
            <p class="mt-xs">
              Il n'y a pas d'accord pour le moment.
            </p>
            <span class="txt-content--xsmall txt-blue"> 
              <?php //echo getDateFormatted($data['partner']->date_started_partnership); ?>
            </span>
          <?php //endif; ?>
        </div> -->


      </div>
    </div>


  </div>

</section>

<!-- FOOTER --> 
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
