<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- META TAGS -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="DBCS est un site web consacré au coaching sportif personnalisé. DBCS propose un coaching proche de son client et de ses problématiques. Il peut travailler sur des thématiques telles que le fitness, la musculation, la reprise d'activité physique, la ré-éducation, la préparation physique..."
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- LINKS -->
    <link rel="icon" href="<?= URL_ROOT; ?>/img/favicons/favicon.png" />
    <link rel="apple-touch-icon" href="<?= URL_ROOT; ?>/img/favicons/apple-touch-icon.png" />
    <link rel="manifest" href="<?= URL_ROOT; ?>/manifest.webmanifest" />
    <!-- EB Garamond -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <!-- DATATABLES CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

    <!-- LINKS CSS -->
    <link rel="stylesheet" href="<?= URL_ROOT; ?>/css/general.css" />
    <link rel="stylesheet" href="<?= URL_ROOT; ?>/css/modules.css" />
    <link rel="stylesheet" href="<?= URL_ROOT; ?>/css/style.css" />
    <link rel="stylesheet" href="<?= URL_ROOT; ?>/css/queries.css" />

    <!-- SCRIPTS CDN -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>
    <script
      defer
      src="https://unpkg.com/smoothscroll-polyfill@0.4.4/dist/smoothscroll.min.js"
    ></script>
    <!-- PAGE TITLE -->
    <title><?= SITE_NAME ?></title>
  </head>
  <body>

  <?php require APP_ROOT . '/views/inc/navbar.php'; ?>
  
  <!-- MAIN -->
  <main class="mainWrapper">
    
  
    <?php if(isset($_SESSION['user_id'])) : ?>
      <?php require APP_ROOT . '/views/inc/sidebuttonsmenu.php'; ?>
    <?php endif; ?>

    
