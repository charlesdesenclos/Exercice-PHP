<!DOCTYPE html>
<html >
<head>
<link rel="icon" type="image/png" sizes="16x16" href="/image/image.png">
<link rel="stylesheet" href="style.css">
<link href="main.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo 6</title>
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
<form action="" method="GET">
<p>
    <input type="text" name="prenom" />
    <input type="submit" value="Valider" />
</p>

<?php

if(isset($_GET["prenom"]))
{
    echo"<div class='style3'> ton prénom est :".$_GET['prenom'];
}
echo"</div>";
?>

</form>
</body>
</html>