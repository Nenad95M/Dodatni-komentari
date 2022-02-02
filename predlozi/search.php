<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<input id="unos" type="text" name="ime">
<p id="ispis"></p>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
$(document).ready(()=>{ 
    $("#unos").keydown(()=>{ //kada se pritisne dugme event
        let name=$("#unos").val();  //promenjiva u kojoj se smesta unos iz inputa
        $.post("suggestions.php",{
            suggestion:name
        }, (data, status)=>{
          $("#ispis").html(data);
        });
        } );
    })
</script>
</body>
</html>