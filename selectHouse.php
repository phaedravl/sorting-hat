<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Jij bent de Sorting hat</title>
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    </head>
    <body>
        <?php

            include "components/connectie.php";

            $getIndx = "SELECT indx FROM `counter`;";
            $indx = mysqli_query($dbConnectie, $getIndx)->fetch_all(MYSQLI_ASSOC);
            foreach($indx as $var){
                $index = $var["indx"];
            }

            include "components/text.php";

            if($index<=$max){
            
        ?>
                
        <!-- 4 optie buttons -->

        <div class="flex">
            <form action="components/afterSelectGR.php" method="GET"> 
                <input type="submit" name='.$index.' value='Gryffindor' class="buttons">
            </form>
                <br>
            <form action="components/afterSelectSL.php" method="GET"> 
                <input type="submit" value="Slytherin" class="buttons">
            </form>
                <br>
            <form action="components/afterSelectHU.php" method="GET"> 
                <input type="submit" value="Hufflepuff" class="buttons">
            </form>
                <br>
            <form action="components/afterSelectRA.php" method="GET"> 
                <input type="submit" value="Ravenclaw" class="buttons">
            </form>
        </div>

        <?php
            
            }   
                
            //als alle personen overlopen zijn
            if($index > $max){

        ?>

            <h2>
                Je hebt alle tovenaars een huis toegewezen!
            </h2>
            
            <form action="index.php" method="GET">
            <input type="submit" value="Terug naar startpagina" class="buttons">
            </form>
            <br>
            <br>
            <form action="addUser.php" method="GET">
                    <input type="submit" value="Een tovenaar toevoegen" class="buttons">
            </form>
            <br>
            <br>
            <form action="selectHouse.php" method="GET" >
                <input type="submit" value="Nog eens de Sorting hat zijn" class="buttons">
            </form>
            
            <?php
                //index terug op 1 zetten om het spel nog eens vanaf het begin te kunnen spelen        
                $insertSql = "UPDATE counter SET indx = 1;";    
                mysqli_query($dbConnectie, $insertSql);    
                    
            }   //einde van if
    
            //connectie sluiten
            $dbConnectie->close();
            ?> 
    </body>
</html>