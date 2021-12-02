
<!-- SECTION POSTS -->
<?php foreach($data['posts'] as $post) : ?>

<section class="index-pages bg-white pb-md">
  <div class="container container--md pX">
    <article class="grid--1-col b-radius4 box-shad">
      <div class="img b-radius4 with-parallax">
        <img
          class="b-radius4"
          src="<?= URL_ROOT . '/img/uploads/' . $post->post_image; ?>"
          alt="Post thumb photo uploaded"
        />
      </div>

      <div class="article-content">

        <div class="article-content__desc">
          <p class="txt-content--xsmall fontW500">
            Article publié le
            <span class="txt-blue">
              <?= getDateFormatted($post->postCreated); ?>
            </span> 
          </p>
          <p class="txt-content--xsmall fontW500 mb-sm">
            Depuis le site internet 
            <span class="txt-blue">
              <?= getLinkFormat(e($post->post_source_link)); ?>
            </span>
          </p>
        </div>
        
        <div class="article-content__basic-info txt-dark mt-md">
          <a href="<?= URL_ROOT; ?>/posts/show/<?= $post->post_id; ?>">
            <h3 class="heading-post txt-dark-gray font-garamond">
              <?= e($post->post_title); ?>
            </h3>
          </a>
          <p class="txt-content">
            <?= getExcerpt($post->post_body, 800); ?>
          </p>
          
          <a href="<?= URL_ROOT; ?>/posts/show/<?= $post->post_id; ?>" class="link link--underline mt-sm">
          Lire l'article &rarr;
          </a>
        </div>
      </div>
    </article>
  </div>
</section>

<?php endforeach; ?>

