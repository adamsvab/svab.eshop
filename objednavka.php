<?php

require_once "layout/header.php";

?>

<link rel="stylesheet" href="css/style.css">

<h1>Detail objednávky</h1>

<h2>doručovací údaje</h2>
<form action="objednavka.php" method="post"> 
<div class="containerr"> <!--spatne napsany container schvalne -->
    <div class="box">
        <label for="delivery">doručení na adresu</label>
        <input type="checkbox" name="delivery" required><br>
        <label for="city">město:</label><br>
        <input type="text" name="city" required><br>
        <label for="street">ulice:</label><br>
        <input type="text" name="street" required><br>
        <label for="postcode">PSČ:</label><br>
        <input type="number" name="postcode" required><br>
        <label for="house_number">č.p:</label><br>
        <input type="number" name="house_number" required>
    </div>
    <h2>způsob platby</h2>
    <div class="box">
        <label for="payment">dobírka</label>
        <input type="checkbox" name="payment" required>
    </div>
        <input type="submit" name="submit" value="Potvrdit">
</div>
</form>






<?php
require_once "layout/footer.php";
?>