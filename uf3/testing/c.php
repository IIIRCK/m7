<?php
 require_once 'm.php';
function _post(){
    foreach ($_POST as $k => $v ){
        filter_post($k,$v);
    }
}
function filter_post($k,$v){
    switch ($k){
        case 'ok_c':
            insert_user();
            $_POST = array();
            break;
        case 'ok_u':
            update_user();
            $_POST = array();

            break;
        case 'ok_d':
            $id = $_POST['id'];
            delete($id);
            $_POST = array();

            echo 'aaa';
            break;

    }
}

function insert_user()
{
    $a = $_POST['name'];
    $b = $_POST['surname'];
    $c = $_POST['email'];
    $d = $_POST['tlf'];

    insertest($a,$b,$c,$d);

}

function update_user(){
    $id = $_POST['id'];
    $a = $_POST['name'];
    $b = $_POST['surname'];
    $c = $_POST['email'];
    $d = $_POST['tlf'];
    updatest($id,$a,$b,$c,$d);
}

function delete_user(){

}
_post();