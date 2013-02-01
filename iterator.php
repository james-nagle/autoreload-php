<?php
/**
* Example setup:
*
* $extensions = array(
* 'php',
* 'css',
* 'js'
* );
*
* $folders_to_watch = array(
* '/',                //Root folder relative to where in your project you added iterator.php
* 'app',              //All others relative to iterator.php
* 'app/controllers',
* 'app/views',
* 'app/views/mobile', 
* 'vendor',
* 'vendor/js'
* );  
*/
$extensions = array();
$folders_to_watch = array();

foreach ($folders_to_watch as $folder) {
	foreach ($extensions as $ext) {
		if ($folder == '/') {
			//If watching application base folder use this
			$get_files = glob(dirname(__FILE__)."/*.{$ext}", GLOB_BRACE);
		} else {
			//If watching sub-folders use this
			$get_files = glob(dirname(__FILE__)."/{$folder}/*.{$ext}", GLOB_BRACE);
		}
		if (!empty($get_files)) {
			foreach($get_files as $file) {
				//format file names
				$formated = substr(str_replace(dirname(__FILE__), "", $file), 1);
				//Get file's contents and hash it
				$content = file_get_contents('./'.$formated);
				$content_hash = sha1($content);
				//Hash the filename (make it alhpanumeric)
				$file_hash = sha1($formated);
				//Store filename hash in key and content hash as value
				$file_array[$file_hash] = $content_hash;      
			}
		}
	}
}
//echo array as json for autoreload.js to work on
echo json_encode($file_array);
?>