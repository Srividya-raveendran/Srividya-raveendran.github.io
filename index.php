<ul>
	<?php
		echo "inside index.php"
		$dirname = "img/";
		$images = scandir($dirname);
		shuffle($images);
		$ignore = array(".", "..");
		foreach($images as $curimg){
			if(!in_array($curimg, $ignore)) {
				echo "<li><a href=\"$dirname$curimg\"><img src='img.php?src=$dirname$curimg&w=300&zc=1' alt='' /></a></li>\n ";
			}
		} 				
	?>
</ul>

