<!-- HEADER -->
<?php 
// require APP_ROOT . '/views/inc/header.php'; 
var_dump($data);
die();
?>


<!-- SECTION EDIT POST -->
<section class="edit-post pb-lg pt-lg">
  <!-- BACK BTN -->
  <div class="container container--lg">

    <div class="txt-dark mb">
      <a href="<?php echo URL_ROOT; ?>/posts/list" class="link link-dark link--underline">
        &larr;Retour
      </a>
    </div>

  </div>
  <!-- EDIT FORM -->
  <div class="container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="post-content txt-dark txt-content">
        <h3 class="heading-secondary txt-dark-gray font-garamond mt-xs mb-xs">
          Modifier votre article
        </h3>
        <p class="txt-content--small mb">
          Vous pouvez dans cette section modifier l'article que vous aviez sélectionné.
        </p> 
        
        <!-- FORM EDIT POST -->
        <form 
        action="<?php echo URL_ROOT; ?>/posts/edit/<?php echo ($data['post']->post_id); ?>" method="post" 
        enctype="multipart/form-data">

          <!-- TITLE ARTICLE -->
          <div>
            <label class="fontW700 txt-blue mb-xxs" for="title">Titre de l'article</label>
            
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?php echo ($data['title_err']);?></p>
            </span>
            
            <input 
              type="text" 
              name="title" 
              class="bg-white mb-xxs" 
              value="<?php echo ($data['post']->post_title); ?>">
          </div>
          
          <!-- IMAGE ARTICLE -->
          <div>
            <label class="fontW700 txt-blue mt mb-xxs" for="image">Sélectionner des images à uploader (PNG, JPG)</label>
            
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
              <p class="txt-content--xsmall txt-danger"><?php echo $data['image_err'];?></p>
            </span>

            <input 
              type="file" 
              id="image" 
              name="image"
              accept=".png, .jpg, .jpeg"/>
          </div>

          <!-- PREVIEW IMAGE -->
          <div class="preview">
            <?php $img_path = URL_ROOT . '/public/img/uploads/' . $data['post']->post_image; ?> 
             
            <?php if(!empty($data['post']->post_image)) : ?>  
              <img src="<?php echo $img_path; ?>" alt="selected upload image's preview"/>
            <?php else : ?>
              <p class="txt-content--small mt-xxs">
                Aucun fichier sélectionné pour le moment
              </p>
            <?php endif; ?>
          </div>

          <!-- BODY TEXT CONTENT -->
          <div>
            <label class="fontW700 txt-blue mt mb-xxs" for="body">Textes & Paragraphes</label>

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
              <p class="txt-content--xsmall txt-danger"><?php echo ($data['body_err']); ?></p>
            </span>
          
            <textarea id="editor" class="b-radius4 bg-white mb-xxs" type="text" name="body">
              <?php  echo ($data['post']->post_body); ?>
            </textarea>
          </div>
          
          <!-- SOURCE LINK ARTICLE -->
          <div class="source-link">
            <label class="fontW700 txt-blue mt mb-xxs" for="source_link">Lien vers l'article</label>
            
            <p class="txt-content--xsmall">
              Ajoutez le lien vers l'article source de votre site
              "partenaire". Copiez directement l'url</span> de la page contenant l'article.
            </p>
            <p class="txt-content--xsmall mb-xxs">
              <span class="fontW700">Le lien doit contenir <span class="fontW700">"https://"</span> ou bien <span class="fontW700">"http://"</span> suivi du reste de l'url. 
            </p>
            
            <input class="bg-white mb-xxs" type="text" name="source_link" value="
            <?php 
             if($data['post']->post_source_link !== null) {
              echo ($data['post']->post_source_link); 
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