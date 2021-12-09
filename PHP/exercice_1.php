<!DOCTYPE html>
    <html lang="en">
    <head>
    <link rel="icon" type="image/png" sizes="16x16" href="/image/image.png">
        <link rel="stylesheet" href="../phptd4/php.css">
        <link href="main.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>exo1</title>
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


        $NombreAleatoire = rand ( 0 , 100 );
        echo "le nombre est ".$NombreAleatoire;
        if($NombreAleatoire%2 == 1)
        {
            echo"<div id=style1> ce nombre est impair <div>";
        }
        else
        {
            echo"<div id=style2> ce nombre est pair <div>";
        }


        ?>
    </body>
</html>