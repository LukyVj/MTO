<!-- HTML2Canvas
Notice that, with our app architechture, this plugin does not work correctly with chrome.
Otherwise, it's an application so it's only for ios  / android  -->
<form method="POST" enctype="multipart/form-data" action="save.php" id="myForm">
    <input type="hidden" name="img_val" id="img_val" value="" />
</form>

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
<script src="assets/js/html2canvas.min.js"></script>
<script src="assets/js/jquery.plugin.html2canvas.min.js"></script>
<!-- -->