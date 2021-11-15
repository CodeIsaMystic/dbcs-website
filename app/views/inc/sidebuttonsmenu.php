<!-- SIDE MENU WRAPPER -->
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
    <ul class="toggle">
      <li class="ico01">
        <ion-icon class="icon-xs" name="chevron-forward-outline"></ion-icon>
      </li>
      <li class="move-ico ico02">
        <a href="<?php echo URL_ROOT; ?>/posts/add" class="link link01">
          <ion-icon class="icon-xs" name="add-outline"></ion-icon>
        </a>
      </li>
      
      <?php 
        // Allows display and func for side menu btn
        $query_string = $_SERVER['QUERY_STRING'];
        $str_matcher   = 'show';

        $result = strpos($query_string, $str_matcher);
      ?>

      <li class="move-ico ico03 
        <?php if ($result === false) {
          echo 'move-ico--is-not-active'; 
        } else {
          echo '';
        }
        ?>">    
        <a href='
          <?php if ($result === false) {
            echo "#"; 
          } else {
            echo URL_ROOT . "/posts/edit/" . $data["post"]->post_id;  
          }
          ?>' 
          class="link link02">

          <ion-icon class="icon-xs" name="pencil-outline"></ion-icon>
        </a>
      </li> 

      <li class="move-ico ico04">
        <a href="<?php echo URL_ROOT; ?>/posts/list" class="link link03">
          <ion-icon class="icon-xs" name="list-outline"></ion-icon>
        </a>
      </li>
      
      <li class="move-ico ico05
        <?php if ($result === false) {
          echo 'move-ico--is-not-active'; 
        } else {
          echo '';
        }
        ?>">
        <form class="link link03" action="
          <?php if ($result === false) {
            echo '#'; 
          } else {
            echo URL_ROOT . '/posts/delete/' . $data['post']->post_id;  
          }?>" method="POST">
            <button type="submit">
              <ion-icon class="icon-xs" name="trash-outline"></ion-icon>
            </button>
        </form>
      </li>
    </ul>
  </div>


</div>
