<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Jij bent de Sorting hat</title>
            <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
        </head>
        <body>

            <?php

                include "connectie.php";

                //waarden in database aanpassen

                $getIndx = "SELECT indx FROM `counter`;";
                $indx = mysqli_query($dbConnectie, $getIndx)->fetch_all(MYSQLI_ASSOC);
                foreach($indx as $var){
                    $index = $var["indx"];
                }
                
                include "text.php";
                
                $getCount = "SELECT gryffindor FROM `personen` WHERE id = $index;";   
                $count = mysqli_query($dbConnectie, $getCount)->fetch_all(MYSQLI_ASSOC);
            
                foreach($count as $var){
                    $number = $var["gryffindor"];
                }

                if($number == 0){
                    $number = 1;
                } else {
                    $number = $number + 1;
                }

                $insertSql = "UPDATE personen SET gryffindor = $number WHERE id = $index;";    
                mysqli_query($dbConnectie, $insertSql);

                //gemiddelde opvragen uit database

                include "gemiddelde.php";

                //index verhogen om volgende persoon te zien
                
                $index++;

                $insertSql = "UPDATE counter SET indx = $index;";    
                mysqli_query($dbConnectie, $insertSql);

            ?>
            <br>
            <form action="../selectHouse.php" method="GET">
                 <input type="submit" value="Volgende" class="buttons">
            </form>
            
    </body>

</html>