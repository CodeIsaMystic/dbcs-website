<?php
/*
 * Loading the config file
 */
require_once 'config/config.php';
/*
 * Load Helpers Functions
 */
require_once 'helpers/session_helper.php';
require_once 'helpers/text_helper.php';
require_once 'helpers/url_helper.php';
require_once 'helpers/date_format.php';

require_once 'helpers/apply_selected_attribute.php';

require_once 'helpers/send_email.php';


require_once 'helpers/address_handler.php';
require_once 'helpers/checkbox_handler.php';
require_once 'helpers/free_course_handler.php';
require_once 'helpers/is_customer_handler.php';
require_once 'helpers/coaching_subject_handler.php';
require_once 'helpers/type_partnership_handler.php';
require_once 'helpers/phone_handler.php';
require_once 'helpers/have_deal_handler.php';




/**
 * autoload core libraries
 * Loading the libs files
 *  => `$className` needs that name's files and classes's name are matching
 */
spl_autoload_register(function($className) {
  require_once 'lib/' . $className . '.php';  
});