

<?php require APP_ROOT . '/views/inc/header.php'; ?>


<!-- ADD POST SECTION -->
<section class="add-content pb-lg pt-xl">
  <!--  Alert Messages  -->
  <div class="container container--md">


    <!-- <div class="alert alert-success b-radius4">
      <p class="txt-content--small">Votre article a bien été publié.</p>
    </div> 
      => handling flash messages with modal !??? -->


  </div>


  <!--  Container add post  -->
  <div class="container container--md">
    <div class="grid--1-col b-radius4 box-shad1">
      <div class="text-box--add-post txt-dark txt-content">
        <h3 class="heading-secondary txt-dark-gray font-garamond pt-sm mt-xs mb-sm">
          Ajoutez un article
        </h3>
        <p class="txt-content--small mb-xxs">
          Ajoutez & Publiez un article dans cette section. Vous pouvez
          partager un article d'un site partenaire en y ajoutant un lien
          dans la section appropiée (avec accord du site partenaire).
        </p>
        
        <form action="<?php echo URL_ROOT; ?>/posts/add" method="post">
          <div>
            <label class="fontW700 mt-xxs" for="title">Titre de l'article</label>
            <input type="text" name="title" class="bg-white mt-xs mb-xxs" value="<?php echo $data['title']; ?>">


            <!-- <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?//=  $data['title_err']; ?></p>
            </span> -->


          </div>
          <div>
            <p class="txt-content--small mb-xxs">
              Ajoutez le lien vers l'article source de votre site
              "partenaire", puis copiez le contenu dans la section "Textes
              & Paragraphes" (il est préférable de faire une synthèse de
              l'article, voir un extrait, afin d'optimiser le temps de
              lecture de votre utilisateur).
            </p>
          </div>
          
          
          
          <div>
            <label class="fontW700 mb-xs mt-sm" for="body">Textes & Paragraphes</label>
            
            <textarea id="editor" class="b-radius4 bg-white mb-xxs" type="text" name="body">
              <?php   echo $data['body']; ?>
            </textarea>
          </div>
          
          <!-- SOURCE LINK SECTION -->
          <div>
            <?php
            // if(isset($data['source_link'])) {
            //   => input  echo $data['source_link']
            // } else {
            //   => null ????     
            // }  
            ?>
            <label class="fontW700 mt-xxs" for="sourceLink"
              >Lien vers l'article</label
            >
            <input class="b-radius4 bg-white mb-xxs" type="text" name="sourceLink" value="<?php // echo $data['source_link']; ?>"/>
          </div>
          
            <!-- <span class="b-radius4">
              <p class="txt-content--xsmall txt-danger"><?//= $data['body_err']; ?></p>
            </span> -->
            
          <div class="txt-center">
            <input type="submit" class="btn btn-hover btn-hover--dark btn25 mt-xs mb-xs" value="Publiez le Post">
          </div>


        </form>

      </div>
    </div>
  </div>
</section>



<?php require APP_ROOT . '/views/inc/footer.php'; ?>





<!-- <a href="<?php // echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> 
Back</a>


<div class="card card-body bg-light mt-5">
  <h2>Add Post</h2>
  <p>Create a post with this form</p>
  <form action="<?php // echo URLROOT; ?>/posts/add" method="post">
    <div class="form-group">
      <label for="title">Title: <sup>*</sup></label>
      <input type="text" name="title" class="form-control form-control-lg" value="<?php // echo $data['title']; ?>">
      <span class=""><?php // echo $data['title_err']; ?></span>
    </div>
    <div class="form-group">
      <label for="body">Body: <sup>*</sup></label>
      <textarea name="body" class="form-control form-control-lg"><?php // echo $data['body']; ?></textarea>
      <span class=""><?php // echo $data['body_err']; ?></span>
    </div>
    <input type="submit" class="btn btn-success" value="Submit">
  </form>
</div> -->