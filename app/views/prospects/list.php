<!-- HEADER --->
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- FLASH  MESSAGES -->
<?php require APP_ROOT . '/views/inc/flashmessages.php'; ?>

<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>



 <!-- SECTION HERO PROSPECTS LIST -->
<section class="hero--fullW bg-white">
  <div>
    <picture>
      <img src="<?php echo URL_ROOT; ?>/img/site/full-width/customers.jpg" alt="Set of dumbbells in various colors"/>
    </picture>
  </div>
  <div class="hero--fullW__heading hero--fullW__heading--left">
    <h4 class="subheading fontW700 txt-upp txt-blue">Listes</h4>
    <h1 class="heading-primary txt-dark-gray fontW500 font-garamond">
      <?= $data['title']; ?>
    </h1>
    <p class="txt-content txt-dark mt-xxs">
      <?= $data['description']; ?>
    </p>
  </div>
</section>
  
<!-- SECTION PROSPECTS-LIST -->
<section>
  <div class="container container--mb">
    <h4 class="heading-secondary txt-center txt-dark mt-lg mb-sm">Prospects Détails</h4>
  </div>

  <div class="container container--md grid--1-col">

      <!-- TABLE -->
      <table id="myTable" class="hover box-shad1 mt mb-md pb-sm">
        <thead class="mb-xs">
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Nom</th>
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Email</th>
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Date</th>
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Liens</th>
        </thead>


        <tbody>  

          <?php foreach($data['prospects'] as $prospect) : ?>
          <tr>
            <td class="cell cell--main">
              <a class="link link--underline mb-xs"
                href="<?php echo URL_ROOT; ?>/prospects/show/<?php echo $prospect->prospect_id; ?>">
                <?php echo $prospect->prospect_name; ?>
              </a>
            </td> 
            
            <td class="cell cell--email">
              <a class=" mb-xs"
                href="#">
                <?php echo $prospect->prospect_email; ?>
              </a>
            </td> 
            <td class="cell cell--date">
              <?php 
              echo getDateFormatted($prospect->prospect_created_at); 
              ?>
            </td> 
            <td class="cell cell--btn">
              <a class="btn-table btn-table--blue"
                href="<?php echo URL_ROOT; ?>/prospects/edit/<?php echo $prospect->prospect_id; ?>"> 
                Editer
              </a>
              <form action="<?php echo URL_ROOT . '/prospects/delete/' . $prospect->prospect_id; ?>" method="POST">
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
