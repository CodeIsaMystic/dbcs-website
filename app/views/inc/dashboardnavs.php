
<!-- Dashboard logged Top -->
<div class="dashboard-logged bg-dark">
  <h4 class="subheading">Dashboard</h4>
  <nav class="dashboard-logged-nav">
    <ul class="dashboard-logged-list">      
      <li>
        <a class="link txt-light" href="#">
          <ion-icon class="icon-xs" name="add-outline"> </ion-icon>
          Contact
        </a>
      </li>
      <li>
        <a class="link txt-light" href="<?php echo URL_ROOT; ?>/posts">
          <ion-icon class="icon-xs" name="list-circle-outline">
          </ion-icon>
          Posts
        </a>
      </li>      
      <li>
        <a class="link txt-light" href="#">
          <ion-icon class="icon-xs" name="list-circle-outline">
          </ion-icon>
          Partners
        </a>
      </li>
      <li>
        <a class="link txt-light" href="#">
          <ion-icon class="icon-xs" name="list-circle-outline">
          </ion-icon>
          Contacts
        </a>
      </li>
      <li><a class="link txt-light" href="<?php echo URL_ROOT; ?>/users/logout">Logout</a></li>
    </ul>
  </nav>
</div>
<!-- Dashboard logged Bottom -->
<div class="dashboard-logged bg-dark">
  <p class="txt-content--small">Welcome 
    <?php echo $_SESSION['user_name']; ?>
  </p>
  <p class="txt-content--small">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus Expedita possimus.
  </p>
</div>