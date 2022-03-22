<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="main.css">
    </head>
    <body>

        <?php

            include "User.php";
            $perso = new User("Théo", "Maxence");
            $perso->Affiche();

        ?>


        <table class="Object">
            <thead>
                <tr>
                    <th>User</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>
                        <p>- Nom : String</p>
                        <p>- Prenom : String</p>
                    </td>
                </tr>
                <tr>
                    <td>+ Affiche() : void</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
