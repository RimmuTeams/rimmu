<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| CSS Main file
	|--------------------------------------------------------------------------
	|
	|	Path to your main css file here.
	| Because you ARE concatenating and minifying your css files, aren't you?
	| Or at least using sass?
	| 
	| If not, you will need to go to the 'head.blade.php' file and add the css
	| files you are using in there.
	| 
	*/
	'css' => array(

			'visualize' => 'css/plugins/jquery.visualize.css',
			'visualize' => 'css/plugins/jquery.jgrowl.css',
			'visualize' => 'css/plugins/jquery.fullcalendar.css',
			'visualize' => 'css/dark.css',

			),

	/*
	|--------------------------------------------------------------------------
	| JS Files (In the <head>)
	|--------------------------------------------------------------------------
	|
	| Define the path to the script files that should be loaded
	| before anything else in the page.
	|
	| Add them as if you were starting from the root of your site.
	| Here is an example:
	|
	|		'scripts' => array(
	|			'polyfills'  => 'js/polyfills.min.js',
	|			'plugins' 	 => 'js/plugins.js'
	|		),
	|
	*/

	'scripts'	=> array(
					'jquery-ui' 	=> 'js/libs/jquery-ui-1.10.2.custom.min.js',
					'modernizr'		=> 'js/libs/modernizr.js',
					'selectivizr'	=> 'js/libs/selectivizr.js',
				),


	/*
	|--------------------------------------------------------------------------
	| Other JS files (at the bottom of the page)
	|--------------------------------------------------------------------------
	|
	| Define the path to your other javascript files here.
	| Because of the way Laravel works, the 'scripts' variable has to be
	| an associative array.
	|
	| Add them as if you were starting from the root of your site.
	| Here is an example:
	|
	|		'scripts' => array(
	|			'script'  => 'js/script.js',
	|			'plugins' => 'js/plugins.js'
	|		),
	|
	*/
	
	'other_scripts' => array(
			
			
			
		),
);

