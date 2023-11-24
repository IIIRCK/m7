<?php

//phpinfo();

function connect(){
    $srv = "localhost";
    $usr = "root";
    $psswd = "";
    $db = "daw";
    $cnx = mysqli_connect($srv,$usr,$psswd,$db);

    if(mysqli_connect_errno()){
        echo " error".mysqli_connect_error();
        exit();

    }
    return $cnx;
}

function select($t)
{
    $cnx = connect();
    $sql = "select * from $t";
    $res = mysqli_query($cnx, $sql);

    while ($f = mysqli_fetch_assoc($res)){

        foreach ($f as $k => $v){
            echo $k . ': ' . $v;
            echo '<br>';
        }
    }
    mysqli_close($cnx);
}
function delete($t,$id){
    $cnx = connect();
    $sql = "delete from $t where codi = $id";
    if(mysqli_query($cnx, $sql)){
        echo "deleted ".$id."from ". $t;
    }else{
        echo 'error'.mysqli_error($cnx);
    }


    mysqli_close($cnx);
}
function insert($n,$nn,$e,$tlf){
    $cnx = connect();

    $sql = "INSERT INTO persona(name, surname, email, telf)  VALUES('$n','$nn','$e','$tlf');";

    mysqli_query($cnx,$sql);

    mysqli_close($cnx);
}
?>
