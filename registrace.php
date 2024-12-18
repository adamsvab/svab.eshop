<?php
require_once "layout/header.php";

?>
    

<h1>Registrace</h1>


<form action="registrace.php" method="post">
    <div class="box">
        <label for="name">jméno:</label><br>
        <input type="text" name="name"><br>
        <label for="surname">příjmení:</label><br>
        <input type="text" name="surname" required><br>
        <label for="email">email:</label><br>
        <input type="email" name="email" required><br>
        <label for="password">heslo:</label><br>
        <input type="password" name="password" required><br>    
    </div>
        <input type="submit" name="register" value="registrovat se">
</form>

<div>
Máte účet?
<a href="login.php">Přihlašte se</a>
</div>






<?php
require_once "layout/footer.php";
?>