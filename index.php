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
 * this is an mvc framework created by pickman murimi.

 * The framework runs on core php and applies the mvc architecture
 * You may find some mvc rules violated ,pardon me for that-am still  learning- ,

 * In my implementation , every request runs through the index (this page),then
   to the router,controllers,models,then
   back to the view.

 * I have used other frameworks and libralies to help me archeve design and some other
   added functionality these are ,Bootstrap ,jquery ,symphony ,just to name a few. They
   are all under the vendor folder.

 *----------------------------------------------------------------------------------
               |--------------------------|
               |Lets now load the app     |
               |--------------------------|
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