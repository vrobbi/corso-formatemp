<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
$numlines=0;
while(!feof($myfile)) {
  if($numlines > 4) {
 break;
}
  echo fgets($myfile) . "<br><br>";
  $numlines++; 
}
fclose($myfile);
?>