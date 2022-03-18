<html>
<form action:"" method="Post">
        <input type="text" name="Imie"> Imie<br>
        <input type="text" name="Nazwisko"> Nazwisko<br>
        <input type="number" name="Nr"> Nr<br>
        <input type="submit" value="submit"><br>
</form>
</html>
<?php
$Imie=$_POST['Imie'];
$Nazwisko=$_POST['Nazwisko'];
$Nr=$_POST['Nr'];

$Wytnij = substr($Imie, 0, $Nr-1);
$Wytnij2 = substr($Imie, $Nr, null);
echo $Wytnij.$Wytnij2;

?>