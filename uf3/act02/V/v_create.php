
<?php
include('../C/c.php');
include('../M/m.php');
//include('../V/v_style.css')
echo '<link rel="stylesheet" href="../V/v_style.css">
'
?>
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
