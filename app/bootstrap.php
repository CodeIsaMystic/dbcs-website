<?php
/*
 * Loading the config file
 */
require_once 'config/config.php';
/*
 * Load Helpers
 */
require_once 'helpers/session_helper.php';
require_once 'helpers/text.php';
require_once 'helpers/date_format.php';

require_once 'helpers/url_locations.php';
require_once 'helpers/url_string.php';
require_once 'helpers/url_links.php';



require_once 'helpers/address_format.php';
require_once 'helpers/is_valid_phone.php';

require_once 'helpers/convert_data.php';
require_once 'helpers/empty_field.php';


/**
 * autoload core libraries
 * Loading the libs files
 *  => `$className` needs that name's files and classes's name are matching
 */
spl_autoload_register(function($className) {
  require_once 'lib/' . $className . '.php';  
});