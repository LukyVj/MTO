	<body>
	<?php
if ( isset($_COOKIE["theme"]) == "sunday" ):
?>

 <?php //<script>alert(\"Welcome back! <br> You last visited on ".$last."\");</script> 
 if(isset($_COOKIE['theme']) == "sunday")
 { 
 $last = $_COOKIE['theme']; 
 echo "" ?>
 <script charset="utf-8" src="http://code.jquery.com/jquery-latest.min.js">
 </script>
 <script charset="utf-8">
 	$('#wrapper').addClass('<?php echo "$last" ?>');
 </script>
  <?php ""; 
 } 
 else 
 { 
  echo "<script>alert(\"Welcome to our site!\")</script>";  
 } 

endif;
?> 
<?php include('menu.php')?>
		<section id="wrapper" class="monday" >   
		 <p id="hour" class="opacity"></p>   
 		</section>
		<?php include('assets/inc/error.php'); ?>
			<?
	if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"iphone")) {
	if (strpos(strtolower($_SERVER['HTTP_USER_AGENT']),"safari")) {
	 include('assets/inc/tooltip.php');
	 
	}else{

	  	}
	}else{
	 	//  @header('Location: w_index.html');

	}
		
	?>
