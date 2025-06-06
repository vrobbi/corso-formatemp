<?php

/*
È possibile utilizzare le funzioni anonime per la creazione
 di closure (letteralmente chiusura). 
 Con una closure è possibile utilizzare variabili esterne all'interno di una funzione anonima, 
 anche se tali variabili non sono accessibili all'interno della stessa, 
 in quanto hanno ambito locale.

*/

 
function helloFunction() {

    $hello = "buongiorno";

    return function($name) use ($hello) {
        $hello = ucfirst($hello); 
        return "$hello $name!";
    };
};
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

 $helloFunction = helloFunction();
echo $helloFunction("Programmatori PHP");


?>


</body>
</html>
