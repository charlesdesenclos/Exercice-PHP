<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" type="image/png" sizes="16x16" href="/image/image.png">
<link rel="stylesheet" href="../phptd4/php.css">
<link href="main.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
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
  
    for ($i = 1; $i <= 5; $i++) {
        $table[$i] = rand ( 0 , 100 );
       ?>
<table>
   <tr>
       <td><?php echo"nombre ".$i;?></td>
       <td><?php echo"est".$table[$i];?></td>
   </tr>
</table>
<?php
} 

    ?>
</body>
</html>