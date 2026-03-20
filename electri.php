<!DOCTYPE html>
<html>
    <head>
    <link rel="icon" href="Fv.png" type="image/jpg">
    <link rel="stylesheet" href="Fizivision.css">
    <style>
    
    li a{
        color:white;
        display:inline-block;
        width:8%;
        text-align: center;
        
    }
    li {
        display:inline;
    }
    input{
        display:inline;
        margin:0 auto;
        width:8%;
    }
    label{
        font-size:20px;
    }
    button{
        height:60px;
        float:right;
    }
    </style>
    </head>
<body style="background-color:#29104a">
<li><a href="index.html">Acasă</a></li>
            <li><a href="Meca.html">Mecanică</a></li>
            <li><a href="Termodina.html">Termodinamică</a></li>
            <li><a href="Opti.html">Optică</a></li>
            <li><a href="Electri.html">Electricitate</a></li>
            <li><a href="LaboDigi.html">Laborator Digital</a></li>
            <li><a href="Contabili.html">Contact</a></li>
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