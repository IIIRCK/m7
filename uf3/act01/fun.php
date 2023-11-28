<?php
function filter_post($k,$v){

    switch ($k){
        case 'ok':
            insert_form();
            break;
    }
}

function insert_form() {
    $a = $_POST['name'];
    $b = $_POST['surname'];
    $c = $_POST['email'];
    $d = $_POST['telf'];

    insert($a,$b,$c,$d);
}
function _post(){
    foreach ($_POST as $k => $v ){
        filter_post($k,$v);
    }
}

_post();