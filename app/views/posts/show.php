
<?php require APP_ROOT . '/views/inc/header.php'; ?>

 <!-- POST PAGE SECTION -->
<section class="post-page bg-white">
  <div class="img-box--postPage">
    <picture>
      <source srcset="<?php echo URL_ROOT; ?>/img/posts/pages/meal-fruit.png" type="image/webp" />
      <source srcset="<?php echo URL_ROOT; ?>/img/posts/pages/meal-fruit.png" type="image/png" />

      <img src="<?php echo URL_ROOT; ?>/img/posts/pages/meal-fruit.png" alt="photo on table with a meal of fruits"/>
    </picture>
  </div>
  <div class="txt-box--postPage">
    <h4 class="subheading fontW700 txt-upp txt-blue mb-xs">Article</h4>
    <h1 class="heading-primary txt-dark-gray txt-center fontW500 font-garamond">
      <?php echo $data['post']->title; ?>
    </h1>
  </div>
</section>


<!-- POST CONTENT SECTION -->
<section class="post-content bg-white mt-md">
  <div class="container container--md">
    <div class="text-box--post txt-dark mb">
        <?php echo $data['post']->body; ?>

      <a href="<?php echo $data['post']->source_link; ?>" target="_blank" class="link link-dark link--underline">
        <?php 
        if($data['post']->source_link != null) {
          echo $data['post']->source_link;  
        } else {
          echo '';
        }
          ?>
      </a>
    </div>
  </div>
</section>






<?php // if($data['post']->user_id == $_SESSION['user_id']) : ?>
<!-- 
  <a href="<?php echo URL_ROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-hover btn-hover--dark">Edit</a>

  <form class="pull-right" action="<?php // echo URL_ROOT; ?>/posts/delete/<?php // echo $data['post']->id; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-hover btn-hover--dark">
  </form> -->

<?php // endif; ?>



<?php require APP_ROOT . '/views/inc/footer.php'; ?>
