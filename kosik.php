
<?php

require_once "layout/header.php";

?>

<link rel="stylesheet" href="css/style.css">
<h1>Košík</h1>


<?php

?>

<table>
<tr>
    <th>číslo</th>
    <th>název</th>
    <th>cena</th>
    <th>množství</th>
    <th>celková cena</th>
    <th>odstranit</th>
</tr>
<tr>
    <td>01</td>
    <td>rolex</td>
    <td>2</td>    
    <td><input type="number"></td>
    <td>1000000</td>
    <td><input type="submit" name="remove" value="odstranit"></td>

</tr>
<tr>
    <td>02</td>
    <td>rolex</td>
    <td>1</td>    
    <td><input type="number"></td>
    <td>4s000</td>
    <td><input type="submit" name="remove" value="odstranit"></td>

</tr>


</table>
<br>
<input type="submit" name="submit" value="objednat">




<?php
require_once "layout/footer.php";
?>