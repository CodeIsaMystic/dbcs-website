
<!-- DASHBOARD LOGGED -->
<div class="dashboard--logged bg-dark">
  <p class="txt-content--small">Bienvenue 
    <?= e($_SESSION['user_name']); ?>
  </p>
  <nav class="dashboard--logged__nav">
    <ul class="dashboard--logged__list">      
      <li>
        <a class="link txt-light" href="<?= URL_ROOT; ?>/posts/list">
          <ion-icon class="icon-xs" name="list-circle-outline">
          </ion-icon>
          Articles
        </a>
      </li>      
      <li>
        <a class="link txt-light" href="<?= URL_ROOT; ?>/partners/list">
          <ion-icon class="icon-xs" name="list-circle-outline">
          </ion-icon>
          Partenaires
        </a>
      </li>
      <li>
        <a class="link txt-light" href="<?= URL_ROOT; ?>/prospects/list">
          <ion-icon class="icon-xs" name="list-circle-outline">
          </ion-icon>
          Prospects
        </a>
      </li>
      <li><a class="link txt-light" href="<?= URL_ROOT; ?>/users/logout">Déconnexion</a></li>
    </ul>
  </nav>
</div>
