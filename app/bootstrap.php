<?php
/*
 * Loading the config file
 */
require_once 'config/config.php';
/*
 * Load Helpers
 */
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';
require_once 'helpers/text.php';


/**
 * autoload core libraries
 * Loading the libs files
 *  => `$className` needs that name's files and classes's name are matching
 */
spl_autoload_register(function($className) {
  require_once 'lib/' . $className . '.php';  
});