<h1>
    Jij bent de Sorting hat! 
</h1>
<h2>
    Wijs elke tovenaar een huis toe door op de knop met het gekozen huis te klikken
</h2>

<?php 
    
    include "connectie.php";

    //de id van de laatste persoon opvragen, zal de maximum id zijn
    $getmaxID = "SELECT max(id) FROM `personen`;";
    $maxid = mysqli_query($dbConnectie, $getmaxID)->fetch_all(MYSQLI_ASSOC);
    foreach($maxid as $var){
        $max = $var["max(id)"];
    }

    //index opvragen, deze zal weergeven bij welke id we zitten
    $getIndx = "SELECT indx FROM `counter`;";
    $indx = mysqli_query($dbConnectie, $getIndx)->fetch_all(MYSQLI_ASSOC);
    foreach($indx as $var){
        $index = $var["indx"];
    }

    //array maken van de aanwezige id nummers om te gebruiken in de in_array functie hieronder
    $getID = "SELECT id FROM `personen`;";
    $idnr = mysqli_query($dbConnectie, $getID)->fetch_all(MYSQLI_ASSOC);
    $ids = [];
    foreach($idnr as $var){
        array_push($ids, $var["id"]);
    }

    //controleren hoe de array eruit ziet:

    // foreach($ids as $var){
    //     echo $var;
    // }

    //controleren of de id aanwezig is van een bepaalde index (als je een persoon verwijdert uit de lijst, past de id zich niet aan en spring je bv van id 4 naar 6)
    $inArray = false;

    while($inArray == false){
        if(in_array($index,$ids) || $index > $max){
            $inArray = true;
            //echo "zit erin";
            //echo $index
        } else {
            $index++;
            //echo "zit er niet in";
        }
    }
   

    if($index<=$max){

        //de gegevens opvragen uit de database van persoon met id = index

        $insertSql = "UPDATE counter SET indx = $index;";    
        mysqli_query($dbConnectie, $insertSql);

        $getSql = "select * from personen where id = $index;";
        $info = mysqli_query($dbConnectie, $getSql)->fetch_all(MYSQLI_ASSOC);

        //de gegevens weergeven
        
        foreach($info as $waarde){
            
            echo "Tovenaar:";
            echo "<br>";
            echo $waarde["voornaam"]." ".$waarde["naam"];
            echo "<br>";
            echo "<br>";
            echo "Geboortedatum:";
            echo "<br>";
            echo $waarde["datum"];
            echo "<br>";
            echo "<br>";
            echo "Geslacht:";
            echo "<br>";
            echo $waarde["geslacht"];
            echo "<br>";
            echo "<br>";
            echo "Favoriete dier:";
            echo "<br>";
            echo $waarde["dier"];
            echo "<br>";
            echo "<br>";
            echo "Favoriete getal:";
            echo "<br>";
            echo $waarde["getal"];
            echo "<br>";
            echo "<br>";
        }  

    }
?>
    