<!-- HEADER -->
<?php 
require APP_ROOT . '/views/inc/header.php'; 
?>

<!-- SECTION EDIT POST -->
<section class="edit-pages pb-lg pt-lg">
  <!-- BACK BTN -->
  <div class="container container--lg pX">

    <div class="txt-dark mb">
      <a href="<?= URL_ROOT; ?>/posts/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <!-- EDIT FORM -->
  <div class="container container--md pX">
    <div class="grid--1-col b-radius4 box-shad">
      <div class="article-content txt-dark txt-content pX">
        <h3 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Modifier votre article
        </h3>
        <p class="txt-content--small mb">
          Vous pouvez dans cette section modifier l'article que vous aviez sélectionné.
        </p> 
        
        <!-- FORM EDIT POST -->
        <form 
        action="<?= URL_ROOT; ?>/posts/edit/<?= ($data['post']->post_id); ?>" method="post" 
        enctype="multipart/form-data">

          <!-- TITLE ARTICLE -->
          <div>
            <label class="fontW700 txt-blue mb-xxs" for="postTitle">Titre de l'article</label>
            
            <span class="b-radius4">
              <span class="txt-content--xsmall txt-danger"><?= e($data['title_err']);?></span>
            </span>
            
            <input 
              type="text" 
              name="title" 
              class="bg-white mb-xxs"
              id="postTitle" 
              value="<?= e($data['post']->post_title); ?>">
          </div>
          
          <!-- IMAGE ARTICLE -->
          <div>
            <label class="fontW700 txt-blue mt mb-xxs" for="postImage">Sélectionner des images à uploader (PNG, JPG)</label>
            
            <p class="txt-content--xsmall mb-xs">
              Essayez d'ajouter <span class="fontW700">une image aux dimensions adaptées</span> afin d'éviter les problèmes d'affichage. Pensez également à <span class="fontW700">la taille du fichier</span> qui à terme pourrait affecter le chargement de vos pages dès lors que vous aurez ajouté un certain nombre d'articles.
              Pour information, une image de 1,5mo endommagera à terme la performance de votre site après ajout de plusieurs articles. 
            </p>
            <ul>
              <li>
                <p class="txt-content--xsmall mb-xxs">
                  &mdash; <span class="fontW700"> ratio de "2/1" soit 1200x600</span> ou bien <span class="fontW700">800x400</span>.
                </p>
              </li>
              <li>
                <p class="txt-content--xsmall mb-xs">
                  &mdash; <span class="fontW700"> essayez d'ajouter des images de 50ko équivalent à 0,5mo</span>.
                </p>
              </li>
            </ul>
            
            <span class="b-radius4">
              <span class="txt-content--xsmall txt-danger"><?= e($data['image_err']);?></span>
            </span>

            <input 
              type="file" 
              id="postImage" 
              name="image"
              accept=".png, .jpg, .jpeg"
              value="<?= e($data['post']->post_image); ?>"
              />
          </div>

          <!-- PREVIEW IMAGE -->
          <div>
            <?php $img_path = URL_ROOT . '/public/img/uploads/' . $data['post']->post_image; ?> 
             
            <?php if(!empty($data['post']->post_image)) : ?>  
              <img src="<?= $img_path; ?>" alt="selected upload image's preview"/>
            <?php else : ?>
              <p class="txt-content--small mt-xxs">
                Aucun fichier sélectionné pour le moment
              </p>
            <?php endif; ?>
          </div>

          <!-- BODY TEXT CONTENT -->
          <div>
            <label class="fontW700 txt-blue mt mb-xxs" for="editor">Textes & Paragraphes</label>

            <p class="txt-content--xsmall">
              Modifier le contenu dans la section "Textes
              & Paragraphes" 
            </p>
            <p class="txt-content--xsmall mb-xxs"> 
              Il est préférable de faire une synthèse de
              l'article, voir un extrait, afin d'optimiser le temps de
              lecture de votre utilisateur.
            </p>

            <span class="b-radius4">
              <span class="txt-content--xsmall txt-danger"><?= e($data['body_err']); ?></span>
            </span>
          
            <textarea id="editor" class="b-radius4 bg-white mb-xxs" name="body">
              <?= e($data['post']->post_body); ?>
            </textarea>
          </div>
          
          <!-- SOURCE LINK ARTICLE -->
          <div class="source-link">
            <label class="fontW700 txt-blue mt mb-xxs" for="postSourceLink">Lien vers l'article</label>
            
            <p class="txt-content--xsmall">
              Ajoutez le lien vers l'article source de votre site
              "partenaire". <span class="fontW700">Copiez directement l'url</span> de la page contenant l'article.
            </p>
            <p class="txt-content--xsmall mb-xxs">
              Le lien doit contenir <span class="fontW700">"https://"</span> ou bien <span class="fontW700">"http://"</span> suivi du reste de l'url. 
            </p>
            
            <input class="bg-white mb-xxs" id="postSourceLink" type="text" name="source_link" value="
            <?php 
             if($data['post']->post_source_link !== null) {
              echo e($data['post']->post_source_link); 
            } else {
              echo ('');
            }
            ?>"/>
          </div>
          
          <!-- INPUT SUBMIT -->
          <div>
            <input type="submit" class="btn btn-hover btn-hover--dark btn25 mt-xs mb-xs" value="Publiez le Post">
          </div>

        </form>

      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>