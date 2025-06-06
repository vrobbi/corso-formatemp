<?php
function   writeh1($text)  {

    print("<h1>" . $text ."</h1>");

}

    function writeh2($text)
     {

       print("<h2>" . $text . "</h2>");

     }
       function writeh3($text) {


       print("<h3>" . $text . "</h3>");
     }






?>
<!DOCTYPE html>
<head>
<title>funzioni dinamiche</title>
<meta http-equiv="Content-Type" content="text/html; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);
print("<div style='text-align:center;margin-top:50px;font-size:24px;'>");

$funzione = "writeh1";

$funzione("questo testo è scritto utilizzando il tag &lth1&gt");

$funzione = "writeh2";

$funzione("questo testo è scritto utilizzando il tag &lth2&gt");

$funzione = "writeh3";

$funzione("questo testo è scritto utilizzando il tag &lth3&gt");




print("</div>");


?>


</body>
</html>
