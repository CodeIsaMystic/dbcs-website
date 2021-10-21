
<!-- FLASH MESSAGE --->
<section class="bg-white pb pt-md">
  <div class="container container--md">
    <?php flash('post_message'); ?>
  </div>
</section>

<!-- POSTS SECTION --->
<?php foreach($data['posts'] as $post) : ?>
<section class="bg-white pb-md">
  <div class="container container--md">
    <article class="post grid--1-col b-radius4 box-shad1">
      
      <div class="text-box--post txt-dark">
        <h3 class="heading-post txt-dark-gray font-garamond mb-sm">
          <?php echo $post->title; ?>
        </h3>
        <p class="txt-content mb">
          <?php echo $post->body; ?> ...
        </p>
        
        <a href="<?php echo URL_ROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="link link--underline">
          Lire l'article &rarr;
        </a>
      </div>
    </article>
  </div>
</section>
<?php endforeach; ?>

