<!DOCTYPE html>
<head>
<title>Array 2</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php

print("<div style='text-align:center;margin-top:50px;'>");

$ruolo["amministratore"] = "paolo";
$ruolo["direttore"] = "francesco";
$ruolo["caporeparto"] = "maria";
$ruolo["inserviente"] = "marco";
$ruolo["collaboratore"] = "antonio";
$ruolo["operaio"] = "yeeieey";


echo "<br />***********************************************";


echo  "<h3>" . count($ruolo)   ."</h3>";

foreach ($ruolo as $rifer => $valore)  {

    echo  "<h3>Ruolo " . $rifer   ." - " .$valore  ."</h3>";

}



    for ($i=0;$i!= count($ruolo);$i++) {

        echo  "<h3>Ruolo " . $ruolo[$i]   ." - " .$valore  ."</h3>";


    }

    


print("</div>");
?>