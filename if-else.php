<!DOCTYPE html>
<head>
<title>Corso Forma TEMP</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php

echo "<h2> if   else </h2>";

/*

if (condizione)  {

codice eseguito se  condizione è vera
}
else {

codice eseguito se  condizione è falsa

}




*/


$vecchio ="no";

$nome = "Roberto";

if ($nome === "Paolo") {




 echo $nome ." - insegnante";  






} else {


    if ($vecchio != "no") {

echo $nome ." - allievo vecchio";

}else{

echo $nome ." - allievo giovane";

}


}


?>

</body>
</html>
