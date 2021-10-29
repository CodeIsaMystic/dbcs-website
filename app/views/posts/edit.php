<!-- HEADER -->
<?php require APP_ROOT . '/views/inc/header.php'; ?>


<!-- SECTION EDIT POST -->
<section class="edit-post pb-lg pt-xl">
  
  <div class="container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="post-content txt-dark txt-content">
        <h3 class="heading-secondary txt-dark-gray font-garamond pt-sm mt-xs mb-sm">
          Modifier votre article
        </h3>
        <p class="txt-content--small mb-xxs">
          Vous pouvez dans cette section modifier l'article que vous aviez sélectionné.
        </p> 
        
        <!-- FORM EDIT POST -->
        <form 
        action="<?php echo URL_ROOT; ?>/posts/edit/<?php echo ($data['post']->id); ?>" method="post" 
        enctype="multipart/form-data">

          <!-- TITLE ARTICLE -->
          <div>
            <label class="fontW700 mt mb-sm" for="title">Titre de l'article</label>
            
            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?php echo ($data['title_err']);?></p>
            </span>
            
            <input 
              type="text" 
              name="title" 
              class="bg-white mb-xxs" 
              value="<?php echo ($data['post']->title); ?>">
          </div>
          
          <!-- IMAGE ARTICLE -->
          <div>
            <label class="fontW700 mt mb-sm" for="image_uploads">Sélectionner des images à uploader (PNG, JPG)</label>
            <input type="file" id="image_uploads" name="image_uploads" accept=".jpg, .jpeg, .png">
          </div>
          <div class="preview">
            <p class="txt-content--small mt-xxs" >Aucun fichier sélectionné pour le moment</p>
          </div>

          <!-- BODY TEXT CONTENT -->
          <div>
            <label class="fontW700 mt mb-sm" for="body">Textes & Paragraphes</label>

            <p class="txt-content--small mb-xs">
              Modifier le contenu dans la section "Textes
              & Paragraphes" (il est préférable de faire une synthèse de
              l'article, voir un extrait, afin d'optimiser le temps de
              lecture de votre utilisateur).
            </p>

            <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?php echo ($data['body_err']); ?></p>
            </span>
          
            <textarea id="editor" class="b-radius4 bg-white mb-xxs" type="text" name="body">
              <?php  echo ($data['post']->body); ?>
            </textarea>
          </div>
          
          <!-- SOURCE LINK ARTICLE -->
          <div class="source-link">
            <label class="fontW700 mt mb-xs" for="source_link">Lien vers l'article</label>
            
            <p class="txt-content--small mb-xs">
              Ajoutez le lien vers l'article source de votre site
              "partenaire".
            </p>
            <p class="txt-content--small mb-sm">
              <span class="fontW700">Copiez directement l'url</span> de la page contenant l'article. Le lien doit contenir <span class="fontW700">"https://"</span> ou bien <span class="fontW700">"http://"</span> suivi du reste de l'url. 
            </p>
            
            <input class="bg-white mb-xxs" type="text" name="source_link" value="
            <?php 
             if($data['post']->source_link !== null) {
              echo ($data['post']->source_link); 
            } else {
              echo ('');
            }
            ?>"/>
          </div>
          
          <!-- INPUT SUBMIT -->
          <div class="txt-center">
            <input type="submit" class="btn btn-hover btn-hover--dark btn25 mt-xs mb-xs" value="Publiez le Post">
          </div>

        </form>

      </div>
    </div>
  </div>
</section>



<!-- FOOTER -->
<?php require APP_ROOT . '/views/inc/footer.php'; ?>

