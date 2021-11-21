    </main>

    <!-- FOOTER -->
    <footer class="footer bg-dark">
      <div class="container container--md grid grid--footer">
        <div class="col-logo">
          <span>
            <img
              class="logo--footer"
              alt="DBCS logo company"
              src="<?= URL_ROOT; ?>/img/site/logos/logo-dbcs/logo-square-light-500.png"
            />
          </span>


          <p class="copyright txt-light txt-content--small mt-xs">
            Copyright &copy; <span class="year"></span> par DBCS. Tout droits
            réservés.
            Site propulsé par &mdash; JOWD &mdash; version Beta
            <?= APP_VERSION; ?>
          </p>
        </div>

        <div class="col-address txt-light">
          <h4 class="heading-footer fontW700 mb-sm">Contact</h4>
          <address class="contacts txt-content--small pb-xs">
            <p class="address pb-xs">
              Adresse: <br />
              Rue Louis Pasteur, Loire s/Rhône 69700
            </p>
            <p>
              Mail: <br />
              <a class="link-light" href="mailto:contact@dbcs.com"
                >contact@dbcs.com</a
              >
            </p>
          </address>
          
          <ul class="social-links txt-light">
            <li>
              <a class="link-light" href="#"
                ><ion-icon class="icon-xs" name="logo-instagram"></ion-icon
              ></a>
            </li>
            <li>
              <a class="link-light" href="#"
                ><ion-icon class="icon-xs" name="logo-facebook"></ion-icon
              ></a>
            </li>
            <li>
              <a class="link-light" href="#"
                ><ion-icon class="icon-xs" name="logo-snapchat"></ion-icon
              ></a>
            </li>
          </ul>
        </div>

        <nav class="col-nav">
          <h4 class="heading-footer txt-light fontW700 mb-sm">Entreprise</h4>
          <ul>
            <li>
              <a class="link-light not-allowed" href="#">A propos</a>
            </li>
            <li>
              <a class="link-light not-allowed" href="#">Partenariat</a>
            </li>
            <li>
              <a class="link-light not-allowed" href="#">Entreprises & Associations</a>
            </li>
            <li>
              <a class="link-light not-allowed" href="#"
                >Termes et conditions</a
              >
            </li>
            <li>
              <button class="link-light <?php if(isset($_SESSION['user_id'])) {echo "not-allowed";} ?>" id="adminLink">Admin</button>
            </li>
          </ul>
        </nav>

        <nav class="col-nav">
          <h4 class="heading-footer txt-light fontW700 mb-sm">Ressources</h4>
          <ul>
            <li>
              <a class="link-light not-allowed" href="#">Road map</a>
            </li>
            <li>
              <a class="link-light not-allowed" href="#">Plan d'exercices</a>
            </li>
            <li>
              <a class="link-light not-allowed" href="#"
                >Préparation Physique</a
              >
            </li>
          </ul>
        </nav>
      </div>
    </footer>

    
  
  <!-- SCRIPTS CDN -->
  <script
    type="module"
    src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
  ></script>
  <script
    nomodule=""
    src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
  ></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
  
  <!-- SCRIPT -->
  <script type="module" src="<?= URL_ROOT; ?>/js/script.js"></script>

  </body>
</html>