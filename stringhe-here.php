<!DOCTYPE html>
<head>
<title>stringhe</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>



<?php
// questo e un commeto su una riga


error_reporting(E_ALL ^ E_NOTICE);



$stringa = "Ciao";
$lunghezza = strlen($stringa);

echo "<div style='color:red;background-color:yellow;text-align:center;width:400px;margin: 0 auto;font-size:26px'>";

print <<< HERE

Questo è un testo che contiene indipendentemente apici singoli e apici doppi, posso inserire l'apostrofo e
contemporaneamente le " doppie virgolette ".
Qualsiasi elemento di impaginazione inserito nel testo, si tratti di spazi, di tabulazioni o di ritorni 
a capo, vengono ignorati.

HERE;





echo "</div>";



?>




<div style='text-align:center;margin-top:50px;'>
  <?php



?>
</div>
</body>
</html>