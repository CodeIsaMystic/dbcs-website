
<?php require APP_ROOT . '/views/inc/header.php'; ?>

<!-- HERO SECTION --->
<section class="contact-hero-bg hero-bg-img">
  <div class="hero grid--hero container container--md">
    <div class="mt-md mb-lg pb-lg pt-lg">
      <h4 class="subheading fontW700 txt-upp txt-blue mb-xs">Liste</h4>
      <h1 class="heading-primary txt-light mb-sm">
        Listes des articles
      </h1>
      <p class="txt-content txt-light">
        Vous trouverez ic la liste de tout vos articles...
      </p>
    </div>
  </div>
</section>

<section>
  <div class="container container-- mbsm-md">
    <h4 class="heading-secondary txt-center txt-dark mt-lg mb-sm">Détails</h4>
  </div>
</section>


<!--  TABLE LIST POSTS -->
<section>
  <div class="container container--sm">
    <div class="grid--1-col mb-md">

     
      <!-- TABLE -->
      <table id="myTable" class=" hover box-shad1 mt mb-md pb-sm">
        <!-- <caption class="heading-secondary font-garamond fontW500 txt-dark  pb-sm pt-sm">Liste des articles</caption> -->
        <thead class="mb-xs">
          <th class="heading-tertiary font-garamond fontW500 txt-dark pb-xs pt-xs">Titre</th>
          <th class="heading-tertiary font-garamond fontW500 txt-dark pb-xs pt-xs">Lien de l'article</th>
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
            <td>
              <a class="link mb-xs"
                href="#">
                Clickez &rarr;
              </a>
            </td>          
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>

      
    </div>

  </div>


  </div>
</section>

<?php require APP_ROOT . '/views/inc/footer.php'; ?>
