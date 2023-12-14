
<?php
include_once ('../C/c.php');
include_once ('../M/m.php');
//include('../V/v_style.css')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<form method="post"  enctype="multipart/form-data" >
    <label for="name">name</>
    <input type="text" name="name">
    <label for="surname">surname</>
    <input type="text" name="surname">
    <label for="email">email</>
    <input type="text" name="email">
    <label for="telf">telf</>
    <input type="text" name="telf">
    <label for="img"></label>
    <input type="file" name="img">
    <input type="submit" name="ok" >
</form>
<div class="select">
    <?php
    select('persona');

    ?>
</div>

