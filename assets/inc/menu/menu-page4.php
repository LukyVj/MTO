<?php include('menu-header.php'); ?>
				<div id="applied">Theme selected</div>

<?php
$a=array();
if ($handle = opendir('../../img/theme/menu/')) {
    while (false !== ($file = readdir($handle))) {
       if(preg_match("/\.png$/", $file)) 
            $a[]=$file;
    else if(preg_match("/\.jpg$/", $file)) 
            $a[]=$file;
    else if(preg_match("/\.jpeg$/", $file)) 
            $a[]=$file;
    else if(preg_match("/\.svg$/", $file)) 
            $a[]=$file;

    }
$server = $a;  
$find = (".png");
$replace = ("");
$res = str_replace($find, $replace, $server);

    closedir($handle);
}




foreach($res as $i){

    echo "<img src='assets/img/theme/menu/".$i.".png' class='themePreview' id='theme_".$i."' onClick=SetCookie('theme','".$i."','1'); />";
}
?>

<script charset="utf-8">
$("img[src*=monday]").click(function() { 
	$("#wrapper").attr('class','monday');	
});
$("img[src*=tuesday]").click(function() { 
	$("#wrapper").attr('class','thursday');	
});
$("img[src*=wednesday]").click(function() { 
	$("#wrapper").attr('class','wednesday');	
});
$("img[src*=thursday]").click(function() { 
	$("#wrapper").attr('class','tuesday');	
});
$("img[src*=friday]").click(function() { 
	$("#wrapper").attr('class','friday');	
});
$("img[src*=saturday]").click(function() { 
	$("#wrapper").attr('class','saturday');	
});
$("img[src*=sunday]").click(function() { 
	$("#wrapper").attr('class','sunday');	
});

	$("img.themePreview").click(function(){
			$("#applied").addClass('selected');
			setTimeout(function(){
            $('#applied').removeClass('selected');
      },1000);
	});


function SetCookie(c_name,value,expiredays)
	{
		var exdate=new Date()
		exdate.setDate(exdate.getDate()+expiredays)
		document.cookie=c_name+ "=" +escape(value)+
		((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
	}
</script>