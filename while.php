<!DOCTYPE html>
<head>
<title>Ciclo  while</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

print("<center>ciclo while</center>");

/*
do {
codice da eseguire se la condizione è vera

}

while (condizione)

 */

print("<div style='text-align:center;margin-top:50px;'>");

$i = 20;
while ($i > 10) {
    print(--$i . "<br />");

    if ($i == 13) {

        print("sono arrivato a " . $i . "<br />");

    }

}

print("</div>");

?>


</body>
</html>
