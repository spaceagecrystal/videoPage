<?php
 if ($handle = opendir('.')) {
   while (false !== ($file = readdir($handle)))
      {
          if ($file != "." && $file != ".." && $file != "index.php" && strpos($file,".html"))
	  {
          	$thelist .= '<a href="'.$file.'">'.$file.'</a><BR>';
          }
       }
  closedir($handle);
  }
?>
<P>List of files:</p>
<P><?=$thelist?></p>

