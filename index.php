<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <table border="1">
    <?php
    for($i=1;$i<=9;$i++){
      echo "<tr>";
      for($a=1;$a<=9;$a++){
        echo"<td>" . $i*$a . "</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
  
</body>
</html>