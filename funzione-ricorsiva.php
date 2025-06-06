<?php
/*
Il PHP permette di richiamare le funzioni in modo ricorsivo, ovvero 
è possibile richiamare una funzione dal suo interno. Un classico 
esempio applicativo di questa tecnica è il calcolo del fattoriale. 
Come noto il fattoriale di un numero intero 
positivo n (indicato come n!) è 
pari a n*(n-1)*(n-2)*...*(n-(n-1)). Ad esempio:

fattoriale di 5= 5*4*3*2*1 = 120

fattoriale di 6
6*5=30
30*4=120
120*3=360
360*2=720
720*1 = 720

 */

function fattoriale($numero)
{

    if ($numero <= 1) {
        return 1; // abbandona la ricorsione
    } else {

          // echo "<br />Numero " . $numero ."<br />";
        return $numero * fattoriale($numero - 1); //la funzione richiama se stessa
         
    }

}
?>
<!DOCTYPE html>
<head>
<title>funzioni ricorsiva</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);
print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");

print("Funzione ricorsiva, calcolo del fattoriale<br />");

for ($i = -9; $i <= 10; $i++) {
    echo "<br>Il fattoriale di $i è: " . fattoriale($i);
}


print("</div>");


?>


</body>
</html>
