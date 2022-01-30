<?php
//kod koji ucitava ponovo komentare,
//limit je $commentNewCount koji je prosledjen kao kljuc iz objekta koji je drugi argument iz jquery koda
include 'dbh.php'; //povezuje se sa kodom koji ide kaserveru

$commentNewCount=$_POST['commentNewCount']; //kupi se inkrementirani broj putem post metode

$sql="SELECT * FROM comments LIMIT $commentNewCount"; //kupe se svi komentari iz baze do ovog limita
    $results=mysqli_query($conn, $sql); //vrsi se upit na bazi
    if(mysqli_num_rows($results)>0){ //ako je rezultat veci od nule, ima nekih komentara, onda ide ovaj kod
        while($row=mysqli_fetch_assoc($results)){  //ispisuje rezultate
            echo "<p>";
                echo $row['author'];
                echo "<br> <br>";
                echo $row['message'];
            echo "</p>";
        }
    } 
    else { //ako nema komentara, to i pise
        echo "No comment";
    }