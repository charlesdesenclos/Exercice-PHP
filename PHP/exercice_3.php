<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="16x16" href="/image/image.png">
<link rel="stylesheet" href="../phptd4/php.css">
<link href="main.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3</title>
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
   
        $table['NOM'][0] = ' desenclos';
        $table['PRENOM'][0] = ' charles';
        $table['motdepasse'][0] = ' ..';
        $table['NOM'][1] = ' di-camillo';
        $table['PRENOM'][1] = ' louca';
        $table['motdepasse'][1] = ' ..';
        $table['NOM'][2] = ' dupont';
        $table['PRENOM'][2] = ' yannis';
        $table['motdepasse'][2] = ' ..';
        for ($i = 0; $i <= 2; $i++) {
        echo "<br>Votre nom est ".$table['NOM'][$i];
        echo "<br>Votre prenom est ".$table['PRENOM'][$i];
        echo "<br>Votre mot de passe est ".$table['motdepasse'][$i];
            }
      
    ?>
</body>
</html>