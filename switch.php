<!DOCTYPE html>
<head>
<title>costrutto switch</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

print("<center>costrutto switch</center>");
print("<div style='text-align:center;margin-top:50px;'>");

$lettera = "E";

switch ($lettera) {
    case "a":
    case "e":
    case "i":
    case "o":
    case "u":
    case "A":            // print('56524624');
    case "E":          // print('dgdfafdaga');break;
    case "I": 
    case "O":
    case "U":
    $tipo = "vocale";

     
    default:
        $tipo = "consonante";

}
print("La lettera $lettera è una $tipo");
print("</div>");

?>
</div>

</body>
</html>
