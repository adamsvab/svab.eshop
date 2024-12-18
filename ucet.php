<?php

require_once "layout/header.php";

?>

<link rel="stylesheet" href="css/style.css">

<h1>Můj účet</h1>


<div class="box">
<label>jméno:</label><br>
        Adam <br>
<label>příjmení</label><br>
        Šváb <br>
<label>email:</label><br>
    adam.svab@gym-tisnov.cz
    
</div>
<form action="ucet.php" method="post">
    <input type="submit" name="logout" value="odhlásit se">
</form>







<?php
require_once "layout/footer.php";
?>