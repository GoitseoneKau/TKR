<?php

move_uploaded_file($_FILES["image"]["tmp_name"],"../images/".$_FILES["image"]["name"]);
$out=array();
$i=0;
$files = scandir("../images/",0);
foreach($files as $file){
	if($file=='.' or $file=='..'){continue;}
	else{
		$out[$i]="images/".$file;
	}
	$i++;
}

print( json_encode($out));
?>