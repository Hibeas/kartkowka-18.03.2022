<html>
<form action:"" method="Post">
        <input type="number" name="Nr"> Podaj ilosc znakow w ciagu<br>
        <input type="submit" value="submit"><br>
</form>
</html>
<?php
$Nr=$_POST['Nr'];

function fib($n)
{
   if($n == 0) return 0;
   else if ($n == 1) return 1;
   else
   {
      return fib($n-1) + fib($n-2);
   }
}
echo fib($Nr)."<br>";
//for($i=1;$i<$Nr+1;$i++){
//    echo fib($i)."<br>";
//}

?>