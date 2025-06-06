
<!DOCTYPE html>
<head>
<title>corso forma temp</title>
<meta http-equiv="Content-Type" content="text/css; charset='UTF-8'">
<meta http-equiv="keywords" content="">
<meta name="description" content="corso php forma temp">
</head>
<body>
<?php
 $accedi   =   $_POST['accesso'];
if ($accedi == "bcd7905a") {

    $host = "localhost";
    $user = "francescouser";
    $pass = "francesco12345";
    $dbname = "francescodb";
    $link = mysql_connect($host, $user, $pass);

    echo $link;

    exit;

    if (isset($_POST[cancellahistory]) && is_numeric($_POST[cancellahistory])) {
        $pathcartella = "../history/" . $_POST[cancellahistory];
        if (file_exists($pathcartella)) {
            if ($dir = opendir("../history/" . $_POST[cancellahistory])) {
                while (($file = readdir($dir)) !== false) {
                    if ($file != "." && $file != "..") {
                        unlink($pathcartella . "/" . $file);
                    }}}
            closedir($dir);
            rmdir($pathcartella . "/");
        }

        mysql_select_db($dbname, $link);
        $richiesta = "delete from history where id='" . $_POST[cancellahistory] . "'";
        $query = mysql_query($richiesta, $link)
        or die("La cancellazione $richiesta � fallita");

    }

    mysql_select_db($dbname, $link);
    $richiesta = "select * from history order by id asc";
    $query = mysql_query($richiesta, $link)
    or die("La richiesta SQL $richiesta � fallita");
    if (mysql_num_rows($query) > 0) {

        $tabellahistory = "<br /><br /><table  width=95% border=1 align=center><tr><td colspan=4><p align=center><b>News history nel database</b></p></td></tr><tr><td><p align=center><b><center>Modifica</p></b></td><td width=60%><p align=center><b>Titolo history</b></p></td></tr>";
        $cancellahistory = "<hr /><form method=\"post\" action=\"connessione-db.php\"><select name=\"cancellahistory\">";

        while ($riga = mysql_fetch_assoc($query)) {
            $cancellahistory .= "<option  value=\"" . $riga["id"] . "\">" . $riga[titolo] . "</option>";
            $tabellahistory .= "<tr><td><form name=\"cambia\" method=\"post\" action=\"mod-history.php\"><p align=center><input type=\"hidden\" name=\"modihistory\" value=\"" . $riga[id] . "\" /></p></td><td>" . $riga[titolo] . "<input type=\"submit\" value=\"Modifica questa news history\">
 <input type=\"hidden\" name=\"accesso\" value=\"" . $_POST[accesso] . "\"></form></td></tr>";

        }
        $tabellahistory .= "</table>";
        $cancellahistory .= "<input type=\"hidden\" name=\"accesso\" value=\"" . $_POST[accesso] . "\" /><br /><input type=\"submit\" value=\"Cancella la history selezionata\"><br />
<span style=\"color:red;\"></span></form><hr />";
    } else {
        $tabellahistory = "<br /><br /><table width=\"600\" height=\"auto\" align=\"center\" cellpadding=\"4\" cellspacing=\"2\" border=\"0\"><tr><td colspan=\"3\" align=\"center\"><h1>nessuna news history presente</h1></td></tr></table>";
    }

    echo $tabellahistory;
    echo $cancellahistory;

    echo "<h1><br>Inserimento nuova news history</h1>\n
	 	  <h2>In questa sezione � possibile inserire i testi e files relativi ad un nuovo prodotto.
IMPORTANTE, IL FORMATO CORRETTO E' IL FORMATO JPG.</B><br>";

    echo "<form method='post' enctype='multipart/form-data' action='agg-history2.php'>
	       <table width=750 align='center' border=0 cellpadding=0 cellspacing=0>
		       	 <tr>
			   <td align='right'><b>Inserire il titolo di descrizione della history</b></td>
			   <td><input type=\"text\" name=\"titolo\" rows='5' cols='40' value=\"\" size=\"50\" /></td>
			 </tr>
			 <tr>
			   <td align='right'><b>Testo di descrizione della history</b></td>
			   <td><textarea name='testo' rows='5' cols='40'></textarea></td>
			 </tr>
			  <tr>
			   <td align='right'><b>Titolo in inglese</b></td>
			   <td><input type=\"text\" name=\"titoloeng\" rows='5' cols='40' value=\"\" size=\"50\" /></td>
			 </tr>
			  <tr>
			   <td align='right'><b>Testo in inglese</b></td>
			   <td><textarea name='testoeng' rows='5' cols='40'></textarea></td>
			 </tr>
			<tr>
			   <td align='right'><b>Titolo in francese</b></td>
			   <td><input type=\"text\" name=\"titolofra\" rows='5' cols='40' value=\"\" size=\"50\" /></td>
			 </tr>
			  <tr>
			   <td align='right'><b>Testo in francese</b></td>
			   <td><textarea name='testofra' rows='5' cols='40'></textarea></td>
			 </tr>
	       <tr>
			   <td align='right'><b>Titolo in spagnolo</b></td>
			   <td><input type=\"text\" name=\"titolospa\" rows='5' cols='40' value=\"\" size=\"50\" /></td>
			 </tr>
			  <tr>
			   <td align='right'><b>Testo in spagnolo</b></td>
			   <td><textarea name='testospa' rows='5' cols='40'></textarea></td>
			 </tr>
			  <tr>
			   <td align='right'>Foto</td>
			   <td> <input type='file' name='foto1' size=40></input><br /><input type='checkbox' name='inselogo1' value='false' />Applica il logo BOCEDI alla foto<br /></td>
			 </tr>

			 <tr>
			   <td colspan=2 align='center'>INVIA I DATI<button type='submit' class='agg'>Inserisci</button></td>
			 </tr>
		   </table>
		   <input type='hidden' name='accesso' value='" . $_POST[accesso] . "'>
		    </form>";

    echo "<hr><center><form method=\"post\" action=\"agg-applicazione.php\"><input type=\"submit\" value=\"Vai alla sezione applicazioni\"></center>
<input type=\"hidden\" name=\"accesso\" value=\"" . $_POST['accesso'] . "\"></input>
</form>";

    echo "<center><form method=\"post\" action=\"agg-macchina.php\"><input type=\"submit\" value=\"Vai alla sezione macchine\"></center>
<input type=\"hidden\" name=\"accesso\" value=\"" . $_POST['accesso'] . "\"></input>
</form>";

    echo "<center><form method=\"post\" action=\"gestionenews.php\"><input type=\"submit\" value=\"Vai alla sezione news\"></center>
<input type=\"hidden\" name=\"accesso\" value=\"" . $_POST['accesso'] . "\"></input>
</form>";
} else {
    echo "<form action='agg-history.php' method='post' style='text-align:center;margin-top:50px;'>\n
	         <p>Attenzione! Non si � abilitati a visualizzare questa pagina, per favore immettere la password :</p>\n
	         <input type='password' size=10 name='accesso'>&nbsp;&nbsp;<button type=submit style='font-size:11px'>Accedi</button>\n
		   </form>";
}
?>
</body>
</html>



