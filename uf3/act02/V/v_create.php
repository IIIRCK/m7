
<?php
include('../C/c.php');
include('../M/m.php');
//include('../V/v_style.css')

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./v_style.css">
    <title>DDBB</title>
</head>
<body>
<form method="post" >
    <label for="name">name</>
    <input type="text" name="name">
    <label for="surname">surname</>
    <input type="text" name="surname">
    <label for="email">email</>
    <input type="text" name="email">
    <label for="telf">telf</>
    <input type="text" name="telf">
    <input type="submit" name="ok" >
</form>
<div class="select">
    <?php
    select('persona');
    ?>
</div>
</body>
</html>
