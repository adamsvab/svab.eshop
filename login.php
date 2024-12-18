<?php


require_once "layout/header.php";
?>

<h1>Přihlášení</h1>


    
<form action="login.php" method="post">
<div class="box">
    <label>email:</label><br>
    <input type="email" name="email" required><br>
    <label>heslo:</label><br>
    <input type="password" name="password" required><br>    
</div>
    <input type="submit" name="login" value="Přihlásit se">
</form>

<div>
Nemáte ještě účet?
<a href="registrace.php">Zaregistrujte se</a>
</div>





<?php
require_once "layout/footer.php";
?>