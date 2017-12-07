<?php
/**
 * @author  pick
 * Date: 9/26/2017
 * Time: 9:34 PM
 */
// @NOTE this file is currently not being used anywhere within our framework

/*
 *All the important files will be loaded in this page
*/
require_once ( __DIR__ . DIRECTORY_SEPARATOR . 'paths.php');

/*load the configuration files
*database connection
*/
//config
require_once( SCHlI_CONFIG_URL . 'config.php' );
// database connection
require_once ( SCHlI_CONFIG_URL . 'connection.php');
//sessions
require_once ( SCHlI_SESSIONS . 'sessions_controller.php');
///class validate
require_once( SCHlI_DATA_PROCESSORS . 'class.validate.php');
//class string
require_once ( SCHlI_DATA_PROCESSORS . 'class.string.php');
// error handler
require_once(SCHlI_HANDLER . 'error.php');
// controller
require_once ( SCHlI_LIBS . 'Controller.php');
//router
require_once (SCHlI_ROUTES_URL . 'router.php');
