<?php
include("meniu.html")
?>
<div style="color:white;text-align:center;font-size:20px;margin-top:100px;color:pink;">
Bine ai revenit pe Fizivision,
Adresa ta de email este <?php echo $_POST["Email"]; ?><br>
Parola ta este <?php echo $_POST["Parolă"]; ?>
</div>
<h2>Rewiev</h2>
<form action="note.php" method="post">
<label>Aspectul site-ului</label>
<input type="number" name="aspect" placeholder="0" min="0" max="10" id="aspect" required></input>
<br>
<label>Calitatea informațiilor</label>
<input type="number" name="calitate" placeholder="0" min="0" max="10" id="calitate" required></input>
<br>
<label>Experimentelor</label>
<input type="number" name="experimente" placeholder="0" min="0" max="10" id="experimente" required></input>
<br>
<label>Varietatea Quizurilor</label>
<input type="number" name="varietate" placeholder="0" min="0" max="10" id="varietate" required></input>
<button style="border-radius:20px;background-color:blueviolet;color:pink">Trimite note</button>
</form>
</body>
</html>