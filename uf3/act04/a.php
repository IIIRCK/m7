
<?php
require_once './cnx.php';

try {
    $cnx = new cnx();
    $r= $cnx ->select('test');

    if ($r){
        foreach ($r as $rr){
            echo "Column1: " . $rr['name'] . ", Column2: " . $rr['surname'] . "<br>";
        }
    }

}catch (Exception $e){
    echo 'Error:'.$e->getMessage();
}

?>

<form method="post" enctype="multipart/form-data" >
    <input type="text" placeholder="name" name="name">
    <input type="text" placeholder="surname" name="surname">
    <input type="file" name="img">
    <button type="submit" name="ok00">ok</button>
</form>

