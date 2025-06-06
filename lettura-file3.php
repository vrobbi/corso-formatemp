<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
$numchars=0;
while(!feof($myfile)) {
if($numchars > 100) {
 break;
}
  echo fgetc($myfile);
$numchars++;  
}
fclose($myfile);
?>