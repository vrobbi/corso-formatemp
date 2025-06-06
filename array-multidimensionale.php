<!DOCTYPE html>
<head>
<title>array multidimensionale</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
</head>
<body>

<?php
echo "<center><h2> arrai multidimensionale </h2></center>";


print("<div style='text-align:center;margin-top:50px;'>");



$elenco['colori'] = array("mela"=>"rosso",   "prato"=>"verde",   "cielo"=>"blu",   "notte"=>"nero",   "muro"=>"bianco");     
$elenco['auto'] = array("Fiat"=>"500", "Lancia"=>"Delta", "Ferrari"=>"Testarossa", "Maserati"=>"biturbo");   

echo count($elenco['colori']) ."<br />";

echo  var_dump($elenco) ."<br /><br />***************************<br /><br /><br />";


echo count($elenco) ."<br /><br /><br /><br />";


foreach ($elenco as $key => $value) {
    echo $key . ": ";
    foreach ($value as $sub_key => $sub_val) {
                  
               
            echo $sub_key . " === " . $sub_val . " " ;
        }

        echo "<br />";
    }

    echo "<br /><br /><br />";
    echo $elenco['auto']['Maserati'];


    echo  "<br /><br /><br />";

    print_r($elenco['auto']);
  
  print("</div>");

  ?>

</body>
</html>
   

    