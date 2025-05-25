<?php
include("meniu.html");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fizivision</title>
        <meta charset="utf-8">
        <style>
            input{
                width:5%;
                display:inline;
                margin:20px;
                
            }
            label{
                color:black;
                background-color:white;
            }
            </style>
    </head>
    <body>
        <div style="display: block; margin-top:30vh;background-image:url('fizi1.jpg');background-size:cover;height:300px">
        <div style="background-color:black;">
        <h2>Calcularea căldurii în transformarea izobară</h2></div>
        <div style="text-align:center">
        <label for="raporti">Numărul de moli</label>
        <button><a href="opti.php" style="float:right;font-size:69px;">></a></button>
        <button><a href="meca.php" style="float:right;font-size:69px;"><</a></button>
                <input type="number" placeholder="5" name="raporti" id="raporti">
        <label for="coefi">Căldura molară</label>
        <input type="number" placeholder="0.2" name="coefi" id="coefi">
        <label for="tempw">Temperatura</label>
        <input type="number" placeholder="100" name="tempe" id="tempe">
                <br>
        <button type="submit" onclick="schimba()" style="margin-right:500px;background-color:black;border-radius:20px;">Schimbă</button>
        <br>
    
        <p style="background-color:black;"> Căldurs în transformarea izobară este <span id="rezultat">100</span></p>
        </div>
</div>
</div>
<script>
function schimba()
{
    let n = parseFloat(document.getElementById('raporti').value);
    let m = parseFloat(document.getElementById('coefi').value);
    let p = parseFloat(document.getElementById('tempe').value);
    let randa = n*m*p;
    document.getElementById('rezultat').textContent = randa;
}
</script>
    </body>
</html>