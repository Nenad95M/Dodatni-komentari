<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p id="podaci"></p>
<button id="ispis">Daj podatke</button>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<script>
$(document).ready(()=>{ 
    $("#ispis").click(()=>{
        $.get("podaci.txt", (data, status)=>{ //get metoda pristupa fajlu podaci.txt, drugi argument je funckija sa parametrima data i status
        $("#podaci").html(data);  //u id podaci upisuje data, odnosno sadrzaj fajla
        console.log(status); //u konzoli ispisuje status get zahteva
        } );
    })
})
</script>
</body>
</html>