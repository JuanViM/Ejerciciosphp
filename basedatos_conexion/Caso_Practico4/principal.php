<?php
  $mysqli = new mysqli("localhost","root","","sakila",3307);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="buscapelis.php" method="post">
        <p>Selecciona el actor que desea buscar sus peliculas</p>
        <select name="actor">
        <?php
          $query = $mysqli -> query ("SELECT * FROM actor");
          while ($valores = mysqli_fetch_array($query)) {
            echo '<option value="'.$valores['actor_id'].'">'.$valores['first_name'].' '.$valores['last_name'].'</option>';
            
        }
        ?>
        </select>
        <p><input type="submit" value="buscar"></p>
    </form>

</body>

</html>