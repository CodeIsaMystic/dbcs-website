    </main>

    <!-- FOOTER -->
    <footer class="footer bg-dark">
      <div class="container container--md grid grid--footer">
        <div class="col-logo mt">
          <span class="footer-logo mt-xs mb">
            <img
              class="logo--footer"
              alt="DBCS logo company"
              src="<?= URL_ROOT; ?>/img/logos/logo-square-light-1200.png"
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
          <p class="heading-footer fontW700 mb">Contact</p>
          <address class="contacts txt-content mt pb-xs">
            <p class="address mb-sm">
              Adresse: <br />
              Rue Louis Pasteur, Loire s/Rhône 69700
            </p>
            <p>
              Mail: <br />
              <a class="link-light link-sm" href="mailto:contact@dbcs.com"
                >contact@dbcs.com</a
              >
            </p>
            
          </address>
          
          <ul class="social-links txt-light mt-xs">
            <li>
              <a class="link-light link-sm" href="#"
                ><ion-icon class="icon-xs" name="logo-instagram"></ion-icon
              ></a>
            </li>
            <li>
              <a class="link-light link-sm" href="#"
                ><ion-icon class="icon-xs" name="logo-facebook"></ion-icon
              ></a>
            </li>
            <li>
              <a class="link-light link-sm" href="#"
                ><ion-icon class="icon-xs" name="logo-snapchat"></ion-icon
              ></a>
            </li>
          </ul>
        </div>

        <nav class="col-nav">
          <p class="heading-footer txt-light fontW700 mb">Entreprise</p>
          <ul class="vertical-nav">
            <li>
              <a class="link-light link-sm not-allowed" href="#">A propos</a>
            </li>
            <li>
              <a class="link-light link-sm not-allowed" href="#">Partenariat</a>
            </li>
            <li>
              <a class="link-light link-sm not-allowed" href="#">Pour les entreprises</a>
            </li>
            <li>
              <a class="link-light link-sm not-allowed" href="#"
                >Termes et conditions</a
              >
            </li>
            <li>
              <button class="link-light link-sm" id="adminLink">Admin</button>
            </li>
          </ul>
        </nav>

        <nav class="col-nav">
          <p class="heading-footer txt-light fontW700 mb">Ressources</p>
          <ul class="vertical-nav">
            <li>
              <a class="link-light link-sm not-allowed" href="#">Road map</a>
            </li>
            <li>
              <a class="link-light link-sm not-allowed" href="#">Plan d'exercices</a>
            </li>
            <li>
              <a class="link-light link-sm not-allowed" href="#"
                >Préparation Physique</a
              >
            </li>
          </ul>
        </nav>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.0/ScrollTrigger.min.js"></script>
    <script type="module" src="<?= URL_ROOT; ?>/js/script.js"></script>

  </body>
</html>