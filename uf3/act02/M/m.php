<?php

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
            if ($k == 'file')
            {
                echo '<img src="data:' . 'image/png' . ';base64,' . base64_encode($v) . '">';
            }
            echo '<br>';
        }
    }

    mysqli_close($cnx);
}
function next_id(){
    $cnx = connect();
    $sql = "select max(id)AS max_id  from persona";
    $res = mysqli_query($cnx, $sql);
    if ($res) {
        $row = mysqli_fetch_assoc($res);
        $next_id = $row['max_id'] ? $row['max_id'] + 1 : 1;
        mysqli_close($cnx);
        return $next_id;
    } else {
        echo "Error: " . mysqli_error($cnx);
    }
    mysqli_close($cnx);
    return false;
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
function insert($n,$nn,$e,$tlf,$f,$fp){
    $cnx = connect();
    $fs = mysqli_real_escape_string($cnx, $f);
    $sql = "insert into persona (name, surname, email, telf, file, file_path) values ('$n','$nn','$e','$tlf','$fs','$fp');";

    mysqli_query($cnx,$sql);

    mysqli_close($cnx);
}
?>
