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
print("<div style='text-align:center;margin-top:50px;font-size:24px'>");


if(isset($_POST['nuovavoce'])) {
 $numeroGiorno =   $_POST['nuovavoce'];
}else {

$numeroGiorno =7;
}



switch ($numeroGiorno) {
    case 1:
        echo "Lunedì";
        break;
    case 2:
        echo "Martedì";
        break;
    case 3:
        echo "Mercoledì";
       break;
    case 4:
        echo "Giovedì";
      break;
    case 5:
        echo "Venerdì";
       break;
    case 6:
       echo "Sabato";
     break;
    case 7:
        echo "Domenica";
     break;

    default:
        echo $numeroGiorno;
}
print("<br />questo testo viene stampato  sempre!");
print("</div>");

?>


<form action='switch1-form.php' method='POST' style='text-align:center;margin-top:50px;'>

	        
	        
             <span>inserisci un testo</span><input type='text' size=20 id='nuovavoce' name='nuovavoce' /><br />
             <button type=submit style='font-size:11px'>INSERISCI UN TESTO</button>

</form>


</body>
</html>
