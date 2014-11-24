<style>
	body{background:#333}
</style>
    <?php
$a=array();
if ($handle = opendir('.')) {
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
    closedir($handle);
}

foreach($a as $i){
    echo "<img src='".$i."' />";
}
?>