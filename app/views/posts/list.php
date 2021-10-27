<?php// var_dump($post); die(); ?>
<!-- HEADER --->
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- FLASH  MESSAGES -->
<?php require APP_ROOT . '/views/inc/flashmessages.php'; ?>

<!-- SIDE BUTTONS MENU --> 
<?php if(isset($_SESSION['user_id'])) : ?>
  <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
<?php endif; ?>


<!-- SECTION HERO --->
<section class="contact-hero-bg hero-bg-img">
  <div class="hero grid--hero container container--md">
    <div class="mt-md mb-lg pb-lg pt-lg">
      <h4 class="subheading fontW700 txt-upp txt-blue mb-xs">Liste</h4>
      <h1 class="heading-primary txt-light mb-sm">
          <?= $data['title']; ?>
      </h1>
      <p class="txt-content txt-light">
          <?= $data['description']; ?>
      </p>
    </div>
  </div>
</section>
  
  
<!-- SECTION POSTS-LIST -->
<section>
  <div class="container container--mb sm-md">
    <h4 class="heading-secondary txt-center txt-dark mt-lg mb-sm">Détails</h4>
  </div>

  <div class="container container--md">
    <div class="grid--1-col mb-md">

      <!-- TABLE -->
      <table id="myTable" class="hover box-shad1 mt mb-md pb-sm">
        <thead class="mb-xs">
          <th class="heading-tertiary font-garamond fontW500 txt-dark pb-xs pt-xs">Titre</th>
          <th class="heading-tertiary font-garamond fontW500 txt-dark pb-xs pt-xs">Liens</th>
        </thead>


        <tbody>  

          <?php foreach($data['posts'] as $post) : ?>
          <tr>
            <td class="">
              <a class="link link--underline mb-xs"
                href="<?php echo URL_ROOT; ?>/posts/show/<?php echo $post->postId; ?>">
                <?php echo $post->title; ?>
              </a>
            </td> 
            <td class="td-links">
              <a class="td-link-blue txt-center"
                href="<?php echo URL_ROOT . '/posts/edit/' . $post->postId; ?>"> 
                Editer
              </a>
              <form action="<?php echo URL_ROOT . '/posts/delete/' . $post->postId; ?>" method="POST">
                <input type="submit" class="td-link-yellow txt-center" name="delete" value="Effacer"/>
              </form>
            </td>          
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
  
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>
