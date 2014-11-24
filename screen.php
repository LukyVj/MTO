
	<body>
		<section id="wrapper" class="monday" >   
		<p>Hello</p>
 		</section>
<form method="POST" enctype="multipart/form-data" action="save.php" id="myForm">
    <input type="hidden" name="img_val" id="img_val" value="" />
</form>
                            <input type="submit" value="Take Screenshot Of Div Below" onclick="capture();" />
<script src="assets/js/jquery-1.9.1.min.js"></script>

<script>
function capture() {
    $('#wrapper').html2canvas({
        onrendered: function (canvas) {
            //Set hidden field's value to image data (base-64 string)
            $('#img_val').val(canvas.toDataURL("image/png"));
            //Submit the form manually
            document.getElementById("myForm").submit();
        }
    });
}
</script>

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
	<script src="assets/js/html2canvas.js"></script>
<script src="assets/js/jquery.plugin.html2canvas.js"></script>

<?php //include('footer.php')?>
