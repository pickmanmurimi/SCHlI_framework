<?php
session_start();
/**
 *@author pick - pickmanmurimi@gmail.com
 * Date: 7/25/2017
 * Time: 10:40 PM
           |-------------------------------------------------------|
           |           * *  1.0.x -SCHlI  *  *                     |
           |-------------------------------------------------------|
 *
 * -----------------------------------------------------------------------------------
 * this is an mvc framework done by pickman murimi.

 * The framework runs on core php and applies the mvc architecture
 * You may find some mvc rules violated ,pardon me for that-am still  learning- ,
 *am ising |Twig| as my templating engine to ensure php does not get into the views

 * In my implementation , every request runs through the index (this page),then
   to the router,controllers,models,then
   back to the view.

 * I have used other frameworks and libralies to help me archeve design and some other
   added functionality these are
            -Bootstrap
            -jquery
 *----------------------------------------------------------------------------------
               |--------------------------|
               |Lets now load the app     |
               |--------------------------|
 * TODO : make an error log, make an access log that shows when the user logs in
 * TODO : make a db log, //all logs will be put in a storage or lib folder
 * TODO : use "/" to go to home page
 * TODO : improve error handling of the router
 * TODO : make an auto loader for the framework
 */
               /*we will define the root path for our project here*/
               $chop = -strlen(basename($_SERVER['SCRIPT_NAME']));
               define('URL_ROOT',substr($_SERVER['SCRIPT_NAME'],0,$chop));
               
               define('PATH', getcwd() . DIRECTORY_SEPARATOR );
               

  require_once (__DIR__ . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'bootstrap.php');
  require_once (__DIR__ . DIRECTORY_SEPARATOR . 'bootstrap' . DIRECTORY_SEPARATOR . 'autoload.php');
  require_once (__DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php');

  /*---------------------------------------------------------------------------------------
                |make an instance of our app|
  -----------------------------------------------------------------------------------------
  */

  $app = new bootstrap();

?>