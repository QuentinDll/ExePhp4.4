<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Exercice 4</title>
</head>
<body>
  <p>
    <?php
    // declaration des variables
    $numb1 = 12;
    $numb2 = 21;
    // declaration des fonctions
    function highLow($numb1, $numb2){
      if ($numb1 > $numb2){
        $message = "Le premier nombre est plus grand";
      }elseif ($numb1 == $numb2){
        $message = "Les deux nombres sont identiques";
      }elseif ($numb1 < $numb2){
        $message = "Le premier nombre est plus petit";
      }
      return $message;
    }
    // declaration de la variable contenant la fonction
    $res = highLow($numb1, $numb2);
    echo $res;
    ?>
  </p>
</body>
</html>
