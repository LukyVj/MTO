<?php include('menu-header.php'); ?>
<?php 
	$url = 'http://dev.web-gate.fr/MTO';
?>


<h2>Share</h2>
<!-- Share blocks -->
<span class="shareBlock entypo-facebook"><a href="https://www.facebook.com/sharer.php?u=<?php echo $url; ?>&t=Go%20check%20the%20weather%20with%20the%20MTO%20lightweight%20Web-Application" class="shareInnerLink"></a></span>
<span class="shareBlock entypo-twitter"><a href="https://twitter.com/share?url=<?php echo $url; ?>" class="shareInnerLink" onclick="window.open(this.href);return false;"></a></span>
<span class="shareBlock entypo-instagrem" ><a href="#" class="shareInnerLink" onclick="capture();" ></a></span>


<?php include('../screenCapture.php'); ?>





