<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "riga finale aggiunta\n\n";
fwrite($myfile, $txt);
fclose($myfile);
?>