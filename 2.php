<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div id="comments">
    <?php
    $sql="SELECT * FROM comments LIMIT 2"; //ovde je limit postavljen na dva, kako se ne bi ucitali svi komentari na pocetku
    $results=mysqli_query($conn, $sql);
    if(mysqli_num_rows($results)>0){ 
        while($row=mysqli_fetch_assoc($results)){
            echo "<p>";
                echo $row['author'];
                echo "<br> <br>";
                echo $row['message'];
            echo "</p>";
        }
    } 
    else {
        echo "No comment";
    }
    ?>
   </div> 
   <button id="showComments">Prikazi komentare</button>
   
   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

   <script>
$(document).ready(()=>{ //ajax
    var commentCount=2; //deklarisana su 2 komentara na pocetku, ali se uvecavaju za dva svakim klikom, toliko se komentara povlaci iz baze
    $("#showComments").click(()=>{
        commentCount=commentCount+2;

        $("#comments").load("load-comments.php", {//ovo ucitava load-comment.php u kome se nalazi kod koji ponovo povlaci komentare
            commentNewCount: commentCount //drugi argument je inkrementirani broj komentara koji se dovlaci iz baze
         });
    })
})
   </script>
</body>
</html>