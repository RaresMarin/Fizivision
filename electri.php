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
        <div style="display: block; margin-top:30vh;background-image:url('fizi3.jpg');background-size:cover;height:300px">
        <div style="background-color:black;">
        <h2>Calcularea rezistenței unui fir</h2></div>
        <div style="text-align:center">
            <label for="coefi1">Rezistența circuitului</label>
        <input type="number" placeholder="20" name="coefi1" id="coefi1">
        <label for="raporti">Lungimea firului</label>
        <button><a href="roboti.php" style="float:right;font-size:69px;">></a></button>
        <button><a href="opti.php" style="float:right;font-size:69px;"><</a></button>
                <input type="number" placeholder="3" name="raporti" id="raporti">
        <label for="coefi">Aria firului</label>
        <input type="number" placeholder="4" name="coefi" id="coefi">
                <br>
        <button type="submit" onclick="schimba()" style="margin-right:500px;background-color:black;border-radius:20px;">Schimbă</button>
        <br>
    
        <p style="background-color:black;">Rezistența firului este <span id="rezultat">15</span></p>
        </div>
</div>
</div>
<script>
function schimba()
{
    let n = parseFloat(document.getElementById('raporti').value);
    let m = parseFloat(document.getElementById('coefi').value);
    let r = parseFloat(document.getElementById('coefi1').value);
    let randa = r*n/m;
    document.getElementById('rezultat').textContent = randa;
}
</script>
    </body>
</html>