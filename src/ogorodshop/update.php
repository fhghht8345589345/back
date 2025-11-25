<?php
include "config.php";

if(isset($_GET["id"])){
     $stmt->prepare("UPDATE `ogororodshop` SET `id`='[value-1]',`kyltura`='[value-2]',`price`='[value-3]',`opisanie`='[value-4] WHERE 1");
     $stmt->execute()
}
?>


<form method="post">
    <input type="text" name="kyltura">
    <input type="number" name="price">
    <input type="text" name="opisanie">
    <input type="submit" name="save">
</form>