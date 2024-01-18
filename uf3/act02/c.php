<?php
 require_once 'm.php';

function filter_post($k,$v){

    switch ($k){
        case 'ok_c':
            insert_user();
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
    $g = './'
    if (isset($_FILES['img'])){
        $path = './img';
        $uploadFile = $path  . basename($_FILES['file']['name']);
        $fileType = isset($_FILES['img']['type']) ? $_FILES['img']['type'] : null;
        $fileData = file_get_contents($_FILES['img']['tmp_name']);
        if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadFile)) {
            echo "File is valid, and was successfully uploaded.";
        } else {
            echo "File upload failed!";
        }
    }
    insert($a,$b,$c,$d,$fileData,$fileType);
}
function _post(){
    foreach ($_POST as $k => $v ){
        filter_post($k,$v);
    }
}

_post();