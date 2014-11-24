<?php
/* 
Main.JS.php file made with php to get all "plugins" 
A big thanks to @graphidev for helping me with this file
*/
$urls = array(
			  'assets/js/hour.js', 
			  'assets/js/geoT.js', 
			  'assets/js/actw.js', 
			  'assets/js/actions.js',
			  'assets/js/fastclick.js',
			  'assets/js/html2canvas.js',
			  'assets/js/jquery.plugin.html2canvas.js'
					  );
			  
foreach($urls as $i => $path) { echo('<script src="'.$path.'"></script>'); echo "\r\n"; }
?>
