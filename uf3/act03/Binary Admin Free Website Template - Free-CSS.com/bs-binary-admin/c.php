<?php
 require_once 'm.php';

function filter_post($k,$v){

    switch ($k){
        case 'ok_c':
            insert_user();
            echo 'sss';
            break;

    }
}

function insert_user()
{
    $a = $_POST['name'];
    $b = $_POST['surname'];
    $c = $_POST['email'];
    $d = $_POST['telf'];
    $e = $_POST['img'];
    $f = $_FILES['img'][$e];
    $g = './img/';
    $h = next_id().'png';
    $i = $g.$h;
    $j = $_FILES['img']['type'];
    if(move_uploaded_file($f,$i))
    {
        echo  'nice';
    }else{
        echo 'bad';
    }
    insert($a,$b,$c,$d,$f,$j);
}
function _post(){
    foreach ($_POST as $k => $v ){
        filter_post($k,$v);
    }
}

_post();