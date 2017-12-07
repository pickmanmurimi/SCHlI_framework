<?php
/**
 * User: pick
 * Date: 11/14/2017
 * Time: 12:05 AM
 * autoload
 *@param $class_name
 *@param directories
 */
spl_autoload_register( function ($class_name){

//    directories, where to look for the  class
    $directories = [
        SCHlI_MODELS,
        SCHlI_CONTROLLERS,
        SCHlI_ROUTES_URL,
        SCHlI_SESSIONS,
        SCHlI_FRAMEWORK_LIBS,
        SCHlI_SERVICES,
        SCHlI_APP,
        SCHlI_HANDLER,
        SCHlI_DATA_PROCESSORS,
    ];
//    for each directory
    foreach ($directories as $directory){
//        check if the file exists
        if (file_exists($directory.$class_name.'.php')){
            require_once($directory.$class_name.'.php');

            return;
        }
    }
    
});