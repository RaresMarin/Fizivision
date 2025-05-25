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
        <div style="display: block; margin-top:30vh;background-image:url('fizi.jpg');background-size:cover;height:300px">
        <div style="background-color:black;">
        <h2>Calcularea randamentului pentru motorul otto</h2></div>
        <div style="text-align:center">
        <label for="raporti">Raportul volumelor</label>
        <button><a href="termo.php" style="float:right;font-size:69px;">></a></button>
                <input type="number" placeholder="2" name="raporti" id="raporti">
        <label for="coefi">Coeficientul adiabatic</label>
        <input type="number" placeholder="2" name="coefi" id="coefi">
                <br>
        <button type="submit" onclick="schimba()" style="margin-right:500px;background-color:black;border-radius:20px;">Schimbă</button>
        <br>
    
        <p style="background-color:black;">Randamentul motorului otto este <span id="rezultat">0.5</span></p>
        </div>
</div>
</div>
<script>
function schimba()
{
    let n = parseFloat(document.getElementById('raporti').value);
    let m = parseFloat(document.getElementById('coefi').value);
    let randa = 1 - (1/n**(m-1));
    document.getElementById('rezultat').textContent = randa;
}
</script>
    </body>
</html>