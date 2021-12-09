<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../phptd4/php.css">
    <meta charset="UTF-8">
    <link href="main.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
<nav>

<ul>
    <li><a class="nav-color" href="../index.html">Accueil</a>
        
    </li>
    <li>
        <a class="nav-color" href="../PHP/index.php">PHP</a>
     
    </li>
    <li><a class="nav-color" href="../PHP_fonction/index.php">PHP Fonction</a>
       
    </li>
    <li><a class="nav-color" href="../PHP/index.php">PHP Objet</a>
      
    </li>
    <li><a class="nav-color" href="/../index.html">Retour</a>

    </li>
    
    
</ul>
</nav>
    <?php
  
    $a = 15; $b = 0; $c = 15; $result1; $result2; $result3; $result4; $x11; $x111; $x2; $x5; $x6; $x7;
    $result1 = $b * $b;
    $result2 = -4 * $a * $c;
    $result3 = $result1 + $result2;
   
    $x5 = sqrt($result3);
   
    if($result3 < 0)
    {
        echo"l'equation n'a pas de solution réel";
    } elseif ($result3 == 0)
    {
       $result4 = -$b/2*$a;
        echo"le resultat est égale à ".$result4;
    }
    else {
        $x11 = -$b -sqrt($result3);
        $x1 = 2*$a;
        $x6 = $x11 / $x1;


        $x111 = -$b +sqrt($result3);
        $x2 = 2*$a;
        $x7 = $x111 / $x2;


        echo"La valeur est S={ ".$x6; echo"  ;  ".$x7; echo"}";
    }

    ?>
</body>
</html>