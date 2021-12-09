<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="16x16" href="/image/image.png">
<link rel="stylesheet" href="../phptd4/php.css">
<link href="main.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2.2</title>
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
   
    $NOM; $AGE; $PRENOM;
        $table['NOM'] = 'desenclos';
        $table['PRENOM'] = 'charles';
        $table['AGE'] = '19';
        echo "Votre nom est".$table['NOM'];
        echo "<br>Votre nom est".$table['PRENOM'];
        echo "<br>Votre nom est".$table['AGE'];
     
    ?>
</body>
</html>