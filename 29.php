<html>
<form action:"" method="GET">
        <input type="number" name="ID"> ID<br>
        <input type="text" name="name"> Name<br>
        <input type="text" name="surname"> Surname<br>
        <input type="text" name="score"> Score<br>
        <input type="submit" value="sub" name="sub"><br>
</form>
</html>

<?php

 $user= 'root';

 $pass= '';

 $host = 'localhost';

 $base = 'ludzie2'; //tutaj nazwa twojej bazy

 $con= mysqli_connect($host,$user,$pass, $base);
 mysqli_select_db($con,$base);

 if(isset($_GET['sub']))
 {
 $ID = $_GET['ID'];
 $name = $_GET['name'];
 $surname = $_GET['surname'];
 $score = $_GET['score'];

 $query = "Insert into ludzie2(ID, name, surname, score) values('$ID', '$name', '$surname', '$score')";
 $run =mysqli_query($con,$query) or die(mysqli_error());
 if($run){
  echo "Formularz zatwierdzony";
 }
 else{
  echo "formularz jest błędny";
 }
  }



  $wypis = "SELECT * FROM 'ludzie2'";
  echo $wypis;

?>