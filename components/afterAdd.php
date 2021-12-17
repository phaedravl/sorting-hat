<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mij toevoegen</title>
        <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    </head>
    <body>
        <?php
            //variabelen gegevens
            $voornaam = $_GET["voornaam"]; 
            $achternaam = $_GET["achternaam"]; 
            $geboortedatum = $_GET["geboortedatum"]; 
            $geslacht = $_GET["geslacht"]; 
            $dier = $_GET["dier"];
            $getal= $_GET["getal"];  

            include "connectie.php";

            //checken of ik connectie heb met de database sortinghat --> OK!
            // if ($dbConnectie == true){
            // echo "succesvolle verbinding";
            // die();
            // }  

            //query met gegevens van nieuwe gebruiker doorsturen naar database
            $insertSql = "INSERT INTO `personen` (`voornaam`, `naam`, `datum`, `geslacht`, `dier`, `getal`,`gryffindor`,`slytherin`,`hufflepuff`,`ravenclaw`) VALUES ('$voornaam', '$achternaam', '$geboortedatum', '$geslacht', '$dier', '$getal',0,0,0,0);";    
            mysqli_query($dbConnectie, $insertSql);

            //counter op 1 zetten als je naar de sorting hat wil gaan
            $insertSql = "UPDATE counter SET indx = 1;";    
            mysqli_query($dbConnectie, $insertSql);

            //connectie sluiten
            $dbConnectie->close();

        ?>

        <br>

        <form action="../index.php" method="GET">
            <input type="submit" value="Terug naar startpagina" class="buttons">
        </form>
        <br>
        <br>
        <form action="../addUser.php" method="GET">
                <input type="submit" value="Nog iemand toevoegen" class="buttons">
        </form>
        <br>
        <br>
        <form action="../selectHouse.php" method="GET" >
            <input type="submit" value="De Sorting hat zijn" class="buttons">
        </form>
    </body>
</html>