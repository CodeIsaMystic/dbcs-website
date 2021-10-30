
<!-- SECTION POSTS --->
<?php foreach($data['posts'] as $post) : ?>
<section class="posts bg-white pb-md">
  <div class="container container--md">
    <article class="post grid--1-col b-radius4 box-shad1">
      <div class="img b-radius4 with-parallax">
        <img
          class="b-radius4"
          src="<?= URL_ROOT; ?>/img/uploads/posts/thumb/natural-oil-min.png"
          alt="Post thumb photo uploaded"
          srcset=""
        />
      </div>
      
      <div class="post-content txt-dark">
        <h3 class="heading-post txt-dark-gray font-garamond mb-sm">
          <?php echo $post->title; ?>
        </h3>
        <p class="txt-content mb">
          <?php  echo getExcerpt($post->body, 1200); ?>
        </p>
        
        <a href="<?php echo URL_ROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="link link--underline mt-sm">
          Lire l'article &rarr;
        </a>
      </div>
    </article>
  </div>
</section>
<?php endforeach; ?>

