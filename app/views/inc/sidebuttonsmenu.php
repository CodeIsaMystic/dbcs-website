<?php 
  $query_str = getQueryStr(); 
?>


<!-- FLOAT MENU WRAPPER -->
<div class="side-menu-wrapper b-radius4">

  <!--  MENU  -->
  <div class="menu">
    <ul class="toggle">
      <li class="ico01"></li>
      <li class="move-ico ico02"></li>
      <li class="move-ico ico03"></li>
      <li class="move-ico ico04"></li>
      <li class="move-ico ico05"></li>
    </ul>
    <!-- filters -->
    <svg
    xmlns="http://www.w3.org/2000/svg"
    version="1.1"
    width="0"
    height="0"
    >
    <defs>
      <filter id="goo">
        <feGaussianBlur
        in="SourceGraphic"
        result="blur"
        stdDeviation="12"
        />
        <feColorMatrix
        in="blur"
        mode="matrix"
        values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
        result="joint"
        />
      </filter>
    </defs>
  </svg>
  </div>
  <!--  MENU OBJECT  -->
  <div class="menu-object">

    <?php if(
              strpos($_SERVER['QUERY_STRING'], 'pages') || 
              $_SERVER['QUERY_STRING'] == ''
            ) : ?>

      <!-- FLOAT PAGES MENU -->
      <ul class="toggle">
        <li class="ico01">
          <ion-icon class="icon-xs" name="chevron-forward-outline"></ion-icon>
        </li>
        <li class="move-ico ico02">
            <a href="<?php echo URL_ROOT; ?>/pages/index" class="link link01">
              <ion-icon class="icon-xs" name="planet-outline"></ion-icon>
            </a>
          </li>
        <li class="move-ico ico03">    
          <a href='<?php echo URL_ROOT . "/pages/coaching/"; ?>' 
            class="link link02">
            <ion-icon class="icon-xs" name="barbell-outline"></ion-icon>
          </a>
        </li> 

        <li class="move-ico ico04">
          <a href="<?php echo URL_ROOT; ?>/pages/blog" class="link link03">
            <ion-icon class="icon-xs" name="book-outline"></ion-icon>
          </a>
        </li>
        
        
        <li class="move-ico ico05">
          <a href="<?php echo URL_ROOT; ?>/pages/contact" class="link link03">
            <ion-icon class="icon-xs" name="people-outline"></ion-icon>
          </a>
        </li>
      </ul>

    <?php else : ?>

      <!-- FLOAT CRUD MENU -->
      <ul class="toggle">
        <!-- add operation -->
        <li class="ico01">
          <ion-icon class="icon-xs" name="chevron-forward-outline"></ion-icon>
        </li>
        <li class="move-ico ico02">
          <?php if(stringMatchURL($query_str, 'posts') === 'posts') : ?> 
            <a href="<?php echo URL_ROOT; ?>/posts/add" class="link link01">
              <ion-icon class="icon-xs" name="add-outline"></ion-icon>
            </a>
          <?php elseif(stringMatchURL($query_str, 'prospects') === 'prospects') : ?>
            <a href="<?php echo URL_ROOT; ?>/prospects/add" class="link link01">
              <ion-icon class="icon-xs" name="add-outline"></ion-icon>
            </a>          
          <?php else : ?>
            <a href="<?php echo URL_ROOT; ?>/partners/add" class="link link01">
              <ion-icon class="icon-xs" name="add-outline"></ion-icon>
            </a>
          <?php endif; ?>
        </li>
        
        <!-- edit operation -->
        <?php if(stringMatchURL($query_str, 'list') === 'list') : ?>
          <li class="move-ico ico03 move-ico--is-not-active">
            <a href="#" class="link link02">
              <ion-icon class="icon-xs" name="pencil-outline"></ion-icon>
            </a>  
          </li> 

          
        <?php elseif(stringMatchURL($query_str, 'prospects/show') === 'prospects/show') : ?>
            <li class="move-ico ico03">
              <a href="
                <?php echo URL_ROOT . "/prospects/edit/" . $data["prospect"]->prospect_id; ?>" 
                class="link link02">
                <ion-icon class="icon-xs" name="pencil-outline"></ion-icon>
              </a>  
          </li> 

        <?php elseif(stringMatchURL($query_str, 'partners/show') === 'partners/show') : ?>
          <li class="move-ico ico03">
            <a href="
              <?php echo URL_ROOT . "/partners/edit/" . $data["partner"]->partner_id; ?>" 
              class="link link02">
              <ion-icon class="icon-xs" name="pencil-outline"></ion-icon>
            </a>  
        </li> 

        <?php else : ?>
            <li class="move-ico ico03">
              <a href="
                <?php echo URL_ROOT . "/posts/edit/" . $data["post"]->post_id; ?>" 
                class="link link02">
                <ion-icon class="icon-xs" name="pencil-outline"></ion-icon>
              </a>  
          </li> 

        <?php endif; ?>

        <!-- list operation -->
        <?php if(stringMatchURL($query_str, 'list') === 'list') : ?>
          <li class="move-ico ico04 move-ico--is-not-active">
            <a href="#" class="link link03">
              <ion-icon class="icon-xs" name="list-outline"></ion-icon>
            </a>
          </li>

        <?php elseif(stringMatchURL($query_str, 'prospects/show') === 'prospects/show') : ?>
          <li class="move-ico ico04">
            <a href="<?php echo URL_ROOT . "/prospects/list"; ?>" 
              class="link link03">
              <ion-icon class="icon-xs" name="list-outline"></ion-icon>
            </a>
          </li>

          
        <?php elseif(stringMatchURL($query_str, 'partners/show') === 'partners/show') : ?>
          <li class="move-ico ico04">
            <a href="<?php echo URL_ROOT . "/partners/list"; ?>" 
              class="link link03">
              <ion-icon class="icon-xs" name="list-outline"></ion-icon>
            </a>
          </li>
        
        <?php else : ?>
          <li class="move-ico ico04">
            <a href="<?php echo URL_ROOT . "/posts/list"; ?>" class="link link03">
              <ion-icon class="icon-xs" name="list-outline"></ion-icon>
            </a>
          </li>

        <?php endif; ?>
      
        <!-- delete operation -->
        <?php if(stringMatchURL($query_str, 'list') === 'list') : ?>
          <li class="move-ico ico05 move-ico--is-not-active">
            <form class="link link03" 
                action="" 
                method="POST">
                <button type="submit">
                  <ion-icon class="icon-xs" name="trash-outline"></ion-icon>
                </button>
            </form>
          </li>

        <?php elseif(stringMatchURL($query_str, 'prospects/show') === 'prospects/show') : ?>
          <li class="move-ico ico05">
            <form class="link link03" 
                action="<?php echo URL_ROOT . '/prospects/delete/' . $data['prospect']->prospect_id; ?>" 
                method="POST">
                <button type="submit" name="delete">
                  <ion-icon class="icon-xs" name="trash-outline"></ion-icon>
                </button>
            </form>
          </li>

          <?php elseif(stringMatchURL($query_str, 'partners/show') === 'partners/show') : ?>
            <li class="move-ico ico05">
              <form class="link link03" 
                  action="<?php echo URL_ROOT . '/partners/delete/' . $data['partner']->partner_id; ?>" 
                  method="POST">
                  <button type="submit" name="delete">
                    <ion-icon class="icon-xs" name="trash-outline"></ion-icon>
                  </button>
              </form>
            </li>
          
          <?php else : ?>
            <li class="move-ico ico05">
              <form class="link link03" 
                  action="<?php echo URL_ROOT . '/posts/delete/' . $data['post']->post_id; ?>" 
                  method="POST">
                  <button type="submit" name="delete">
                    <ion-icon class="icon-xs" name="trash-outline"></ion-icon>
                  </button>
              </form>
            </li>
            
            

        <?php endif; ?>
      </ul>

    <?php endif; ?>

  </div>

</div>


