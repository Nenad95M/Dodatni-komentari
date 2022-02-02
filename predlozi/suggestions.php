<?php
$existingNames=array("Nenad", "Aleksandra","Milen","Radmila"); //napravljen je niz sa podacima
if(isset($_POST['suggestion'])){ // gleda da li je postavljeno ime u
    $name=$_POST['suggestion'];

    
    foreach($existingNames as $existingName){
        if(strpos($existingName, $name)!==false){
            echo $existingName;
            echo "<br>";
        }
    }
}