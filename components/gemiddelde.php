<?php

    //index (id) van de huidige persoon opvragen 

    $getIndx = "SELECT indx FROM `counter`;";
    $indx = mysqli_query($dbConnectie, $getIndx)->fetch_all(MYSQLI_ASSOC);
    foreach($indx as $var){
        $index = $var["indx"];
    }

    //alle waarden uit database opvragen

    $getCountgr = "SELECT gryffindor FROM `personen` WHERE id = $index;";    
    $numbergr = mysqli_query($dbConnectie, $getCountgr)->fetch_all(MYSQLI_ASSOC);
    foreach($numbergr as $var){
        $countgr = $var["gryffindor"];
    }

    $getCountsl = "SELECT slytherin FROM `personen` WHERE id = $index;";  
    $numbersl = mysqli_query($dbConnectie, $getCountsl)->fetch_all(MYSQLI_ASSOC);
    foreach($numbersl as $var){
        $countsl = $var["slytherin"];
    }

    $getCounthuf = "SELECT hufflepuff FROM `personen` WHERE id = $index;";  
    $numberhuf = mysqli_query($dbConnectie, $getCounthuf)->fetch_all(MYSQLI_ASSOC);
    foreach($numberhuf as $var){
        $counthuf = $var["hufflepuff"];
    }

    $getCountrav = "SELECT ravenclaw FROM `personen` WHERE id = $index;";   
    $numberrav = mysqli_query($dbConnectie, $getCountrav)->fetch_all(MYSQLI_ASSOC);
    foreach($numberrav as $var){
        $countrav = $var["ravenclaw"];
    }

    //gemiddeldes aanpassen
    
    $gemgr = $countgr*100/($countgr+$countsl+$counthuf+$countrav);

    $gemsl = $countsl*100/($countgr+$countsl+$counthuf+$countrav);

    $gemhuf = $counthuf*100/($countgr+$countsl+$counthuf+$countrav);

    $gemrav = $countrav*100/($countgr+$countsl+$counthuf+$countrav);

?>

<!-- gemiddeldes weergeven op site -->

<div class="flex">
    <div class="result">
        Gryffindor: 
        <?php
        echo round($gemgr, 1);
        ?>
        %
    </div>
    <br>
    <div class="result">
        Slytherin:
        <?php
        echo round($gemsl, 1);
        ?>
        %
    </div>
    <br>
    <div class="result">
        Hufflepuff: 
        <?php
        echo round($gemhuf, 1);
        ?>
        %
    </div>
    <br>
    <div class="result">
        Ravenclaw: 
        <?php
        echo round($gemrav, 1);
        ?>
        %
    </div>
</div>

