<?php
    $hostname = "ID362559_sortinghat.db.webhosting.be";
    $databaseUser = "ID362559_sortinghat";  
    $databasePassword = "sortinghatphaedra1";  
    $databaseName = "ID362559_sortinghat";  
    $port = 3306;    

    //databaseverbinding opzetten
    $dbConnectie = mysqli_connect($hostname, $databaseUser, $databasePassword, $databaseName, $port);