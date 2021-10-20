
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
    <div class="text-box--post txt-dark">
      <p class="txt-content mb">
        <?php echo $data['post']->body; ?>
      </p>

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
  <a href="<?php echo URL_ROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-hover">Edit</a>

  <form class="pull-right" action="<?php // echo URL_ROOT; ?>/posts/delete/<?php // echo $data['post']->id; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-hover">
  </form> -->

<?php // endif; ?>



<?php require APP_ROOT . '/views/inc/footer.php'; ?>







<!-- POST CONTENT SECTION -->
<!-- <section class="post-content bg-white mt-md">
  <div class="container container--md">
    <div class="text-box--post txt-dark">
      <p class="txt-content mb">
        Les vitamines du groupe B interviennent majoritairement comme
        coenzyme, c’est-à-dire qu’elles constituent la partie non
        protéique mais indispensable des enzymes, véritables
        biocatalyseurs des réactions chimiques réalisées au sein de notre
        organisme. Sans ces dernières, celui-ci mettrait probablement des
        jours, des semaines voire des mois, pour répondre à ses diverses
        fonctions (digestion des aliments, élaboration de
        neurotransmetteurs, synthèse de tissus, fabrication d’énergie,
        détox hépatique…).
      </p>

      <p class="txt-content mb">
        L’une d’entre elles, la vitamine B1, connue sous le nom
        scientifique de thiamine, joue un rôle bien spécifique dans le
        métabolisme des glucides et donc la production d’énergie. Elle
        intervient notamment dans la transformation du pyruvate en
        acétylcoenzyme A, molécule carrefour du métabolisme énergétique et
        à l’origine d’environ 90% de notre production d’ATP. Ses sources
        principales sont le germe de blé, la levure de bière, la viande de
        porc, les abats, les fruits et les légumes, les légumes secs, les
        céréales, les noisettes. Elle figure par conséquent parmi les
        micronutriments majeurs de l’alimentation des sportifs. Toutefois,
        il est nécessaire de souligner que les besoins en thiamine sont
        étroitement liés aux apports glucidiques soit 0,4 à 1,2 mg pour
        100 g de glucides consommés. De ce fait l’augmentation des besoins
        glucidiques chez les sportifs, a pour conséquence une majoration
        des quantités de vitamine B1 nécessaires.
      </p>

      <p class="txt-content mb">
        Les boissons de l’effort, dès lors qu’elles respectent les
        proportions précitées et qu’elles sont régulièrement utilisées,
        participent en partie à la couverture des besoins en vitamine B1
        des sportifs.
      </p>

      <p class="txt-content mb">
        Au risque de décevoir les partisans du fait maison, ce n’est pas
        forcément le cas des préparations artisanales réalisées par de
        nombreux pratiquants avec un peu de miel ou de sirop, du sel et
        quelques gouttes de jus de citron. Qui manque, bien souvent, d’un
        apport précis et adapté en thiamine. Dans pareil cas,
        l’utilisation des glucides à l’effort pourra malheureusement s’en
        trouver soudainement contrariée.
      </p>

      <a href="coaching.html" class="link link-dark link--underline"
        >Source de l'article &rarr;</a
      >
    </div>
  </div>
</section> -->