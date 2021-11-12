
<!-- SECTION POSTS --->
<?php foreach($data['posts'] as $post) : ?>
<?php  
  // var_dump($data);
  // die();
?>
<section class="posts bg-white pb-md">
  <div class="container container--md">
    <article class="post grid--1-col b-radius4 box-shad1">
      <div class="img b-radius4 with-parallax">
        <img
          class="b-radius4"
          src="<?= URL_ROOT . '/img/uploads/' . $post->image; ?>"
          alt="Post thumb photo uploaded"
          srcset=""
        />
      </div>

      <div class="post-content">

        <div class="post-content__details">
          <p class="txt-content--xsmall fontW500">
            Article publié le
            <span class="txt-blue">
              <?php  echo getDateFormatted($post->postCreated); ?>
            </span> 
          </p>
          <p class="txt-content--xsmall fontW500 mb-sm">
            Depuis le site internet 
            <span class="txt-blue">
              <?php  echo getLinkFormat($post->source_link); ?>
            </span>
          </p>
        </div>
        
        <div class="post-content__article txt-dark mt-md">
          <a class="" href="<?php echo URL_ROOT; ?>/posts/show/<?php echo $post->postId; ?>">
            <h3 class="heading-post txt-dark-gray font-garamond">
              <?php echo $post->title; ?>
            </h3>
          </a>
          <p class="txt-content">
            <?php  echo getExcerpt($post->body, 800); ?>
          </p>
          
          <a href="<?php echo URL_ROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="link link--underline mt-sm">
          Lire l'article &rarr;
          </a>
        </div>
      </div>
    </article>
  </div>
</section>
<?php endforeach; ?>

