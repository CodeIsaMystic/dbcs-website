
<!-- DASHBOARD-LOGGED TOP -->
<div class="dashboard-logged bg-dark">
  <p class="txt-content--small">Welcome 
    <?php echo $_SESSION['user_name']; ?>
  </p>
  <nav class="dashboard-logged-nav">
    <ul class="dashboard-logged-list">      
      <li>
        <a class="link txt-light" href="<?php echo URL_ROOT; ?>/posts/list">
          <ion-icon class="icon-xs" name="list-circle-outline">
          </ion-icon>
          Articles
        </a>
      </li>      
      <li>
        <a class="link txt-light" href="#">
          <ion-icon class="icon-xs" name="list-circle-outline">
          </ion-icon>
          Partenaires
        </a>
      </li>
      <li>
        <a class="link txt-light" href="#">
          <ion-icon class="icon-xs" name="list-circle-outline">
          </ion-icon>
          Prospects
        </a>
      </li>
      <li><a class="link txt-light" href="<?php echo URL_ROOT; ?>/users/logout">Logout</a></li>
    </ul>
  </nav>
</div>
