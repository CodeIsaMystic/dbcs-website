<!-- HEADER -->
<?php 
require APP_ROOT . '/views/inc/header.php'; 
?>

<!-- FLASH  MESSAGES -->
<?php require APP_ROOT . '/views/inc/flashmessages.php'; ?>

<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>



 <!-- SECTION HERO POSTS LIST -->
<section class="full-width bg-white">
  <div>
    <picture>
      <img src="<?= URL_ROOT; ?>/img/site/hero/idea.jpg" alt="Set of dumbbells in various colors"/>
    </picture>
  </div>
  <div class="full-width__heading full-width__heading--left">
    <h4 class="subheading fontW700 txt-upp txt-blue">Listes</h4>
    <h1 class="heading-primary txt-dark-gray fontW500 font-garamond">
      <?= e($data['title']); ?>
    </h1>
    <p class="txt-content txt-dark mt-xs">
      <?= e($data['description']); ?>
    </p>
  </div>
</section>
  
<!-- SECTION POSTS-LIST -->
<section>
  <div class="container container--mb pX">
    <h4 class="heading-secondary txt-center txt-dark mt-lg mb-sm">Détails</h4>
  </div>

  <div class="container container--md grid--1-col pX">

      <!-- TABLE -->
      <table id="myTable" class="hover box-shad mt mb-md pb-sm">
        <thead class="mb-xs">
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Titre</th>
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Date</th>
          <th class="heading-tertiary txt-dark pb-xs pt-xs">Liens</th>
        </thead>


        <tbody>  

          <?php foreach($data['posts'] as $post) : ?>
          <tr>
            <td class="cell cell--main">
              <a class="link link--underline mb-xs"
                href="<?= URL_ROOT; ?>/posts/show/<?= e($post->postId); ?>">
                <?= getExcerpt($post->post_title, 30); ?>
              </a>
            </td> 
            <td class="cell cell--date">
              <?= getDateFormatted($post->postCreated); ?>
            </td> 
            <td class="cell cell--btn">
              <a class="btn-table btn-table--blue"
                href="<?= URL_ROOT . '/posts/edit/' . e($post->postId); ?>"> 
                Editer
              </a>
              <form action="<?= URL_ROOT . '/posts/delete/' . $post->postId; ?>" method="POST">
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
