<?php
/*
           |-------------------------------------------------------|
           |           * * SCHlI 1.1.x -  * improved *           |
           |-------------------------------------------------------|


           Lets define a few settings we will need for our framework to work
*/


/*themes settings*/
/*------------------------------------*/
	define('TEMPLATES',
		/*
		-----------------------------------------------------------
		the values below hold the paths for the theme base
		*you can easily alter the default template base by defining
		the path for your new template.
		CHANGE THE 'view' VALUE TO DEFINE YOUR NEW PATH
		-----------------------------------------------------------
		PLACE YOUR TEMPLATES UNDER THE RESOURCES FOLDER
		-----------------------------------------------------------
		-----------------------------------------------------------
		*/
		[

			'views' 	=> SCHlI_RESOURCES . 'views' . DIRECTORY_SEPARATOR,

		]);
	