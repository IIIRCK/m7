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

function select()
{
    $cnx = connect();
    $sql = "select * from persona";
    $res = mysqli_query($cnx, $sql);
    $data = array();
    while ($f = mysqli_fetch_assoc($res)){
    $rowdata = array();
    foreach ($f as $k => $v){
        $rowdata[$k] = $v;
    }
    $data = $rowdata;
    }
    mysqli_close($cnx);
    return json_encode($data);
}
function select_id($id)
{
    $cnx = connect();
    $sql = "select * from persona where id = $id";
    $res = mysqli_query($cnx, $sql);
    $data = array();
    $f = mysqli_fetch_assoc($res);
    mysqli_close($cnx);
    return $f;

}
function next_id()
{
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
function delete($id){
    $cnx = connect();
    $sql = "delete from persona where codi = $id";
    mysqli_query($cnx, $sql);
    if (!mysqli_error($cnx)){
        mysqli_close($cnx);
        return true;
    }
    mysqli_close($cnx);
    return false;
}
function insert($n,$nn,$e,$tlf,$f,$fp){
    $cnx = connect();
    $fs = mysqli_real_escape_string($cnx, $f);
    $sql = "insert into persona (name, surname, email, tlf, file, file_path) values ('$n','$nn','$e','$tlf','$fs','$fp');";
    mysqli_query($cnx,$sql);
    if (!mysqli_error($cnx)){
        mysqli_close($cnx);
        return true;
    }
    mysqli_close($cnx);
    return false;
}
function update($c,$d,$id)
{
 $cnx = connect();
 $sql = "update persona set $c = '$d' where id = '$id'";
    mysqli_query($cnx,$sql);
    if (!mysqli_error($cnx)){
        mysqli_close($cnx);
        return true;
    }
    mysqli_close($cnx);
    return false;
}

?>
