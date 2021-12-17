<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sorting hat game</title>
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
    </head>
    <body>
        <h1>
            Welkom bij de Sorting hat game!
        </h1>
        <h2>
            Schrijf je in  (Mij toevoegen) of wees de Sorting hat en verdeel de tovenaars in een huis  (Sorting hat zijn)
        </h2>
        
        <div class="photo"></div>

        <br>

        <div>
            <form action="addUser.php" method="GET">
                <input type="submit" value="Mij toevoegen" class="buttons">
            </form>
           
            <br>
            <br>
            <form action="selectHouse.php" method="GET" >
                <input type="submit" value="Sorting hat zijn" class="buttons">
            </form>
        </div>

        <?php
            //connectie met database
            include "components/connectie.php";
            
            //index (id) op 1 zetten zodat je de sorting hat game vanaf het begin (eerste persoon) kan spelen
            $insertSql = "UPDATE counter SET indx = 1;";    
            mysqli_query($dbConnectie, $insertSql);

            //connectie sluiten
            $dbConnectie->close();
        ?>
    </body>
</html>