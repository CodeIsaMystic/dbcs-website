<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- FLASH  MESSAGES -->
<?php require APP_ROOT . '/views/inc/flashmessages.php'; ?>

<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


 <!-- SECTION HERO PARTNERS LIST -->
<section class="full-width bg-white">
  <div>
    <picture>
      <img src="<?php echo URL_ROOT; ?>/img/site/hero/ropes.jpg" alt="image of a man with a light in his hands"/>
    </picture>
  </div>
  <div class="full-width__heading full-width__heading--left">
    <h4 class="subheading fontW700 txt-upp txt-blue">Listes</h4>
    <h1 class="heading-primary txt-dark-gray fontW500 font-garamond">
      <?= $data['title']; ?>
    </h1>
    <p class="txt-content txt-dark mt-xxs">
      <?= $data['description']; ?>
    </p>
  </div>
</section>
  
<!-- SECTION PARTNERS-LIST -->
<section>
  <div class="container container--mb pX">
    <h4 class="heading-secondary txt-center txt-dark mt-lg mb-sm">Partenaires Détails</h4>
  </div>

  <div class="container container--md grid--1-col pX">

      <!-- TABLE -->
      <table id="myTable" class="hover box-shad mt mb-md pb-sm">
        <thead class="mb-xs">
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Entreprise</th>
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Email</th>
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Date</th>
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Liens</th>
        </thead>


        <tbody>  
          <?php foreach($data['partners'] as $partner) : ?>
          <tr>
            <td class="cell cell--main">
              <a class="link link--underline mb-xs"
                href="<?php echo URL_ROOT; ?>/partners/show/<?php echo $partner->partner_id; ?>">
                <?php echo $partner->partner_company_name; ?>
              </a>
            </td> 
            
            <td class="cell cell--email">
              <a class=" mb-xs"
                href="#">
                <?php echo $partner->partner_email; ?>
              </a>
            </td> 
            <td class="cell cell--date">
              <?php 
              echo getDateFormatted($partner->partner_created_at); 
              ?>
            </td> 
            <td class="cell cell--btn">
              <a class="btn-table btn-table--blue"
                href="<?php echo URL_ROOT; ?>/partners/edit/<?php echo $partner->partner_id; ?>"> 
                Editer
              </a>
              <form action="<?php echo URL_ROOT . '/partners/delete/' . $partner->partner_id; ?>" method="POST">
                <input type="submit" class="btn-table btn-table--yellow" name="delete" value="Effacer"/>
              </form>
            </td>          
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
  
  </div>
</section>

<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
