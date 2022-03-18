<html>
<form action:"" method="Post">
        x: <input type="number" name="liczba"> <br>
        <input type="submit" value="submit"><br>
</form>
</html>

<?php
$liczba=$_POST['liczba'];

function silnia($n){ 
    if($n==1){
        return 1;
    }else{
        return $n * silnia($n-1);
    }
    }
    echo $liczba."! = ";
echo silnia($liczba)."<br>";
?>