<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "terza frase\n\n";
fwrite($myfile, $txt);
$txt = "quarta frase\n";
fwrite($myfile, $txt);
fclose($myfile);
?>