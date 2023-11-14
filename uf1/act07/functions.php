<?php

$logged = false;

get_post();
function get_post(){
    foreach ($_POST as $k => $v){
        if (is_array($k))
        {
            foreach ($k as $kk => $vv){
                filter($kk,$vv);
            }
        }else {
        filter($k,$v);
        }
    }
}
function filter($k,$v){
    switch ($k){
        case "loggin":
            loggin();
            break;
        case "cp":
            echo "ss";
            show_option();
            break;
        case "f_selected":
            echo $v;
            break;
    }
}

function show_option(){
echo "ss";
}
function loggin(){
    $a = $_POST["user"];
    $b =  $_POST["psswd"];
    check_user($a,$b);
}

function check_user($a,$b){
  /*  $users = new stdClass();
    $c = md5($b);
    $users->$a = $c;
    file_put_contents("./data/users.txt",json_encode($users));
  */
    $c = md5($b);

    $file = file_get_contents("./data/users.txt");
    $data = json_decode($file);
    foreach ($data as $k => $v){
        if ($k == $a && $v == $c){

            $GLOBALS['logged'] = true;
            header('location: act07.php');
            break;
        }
        else{
            $GLOBALS['logged'] = false;
            echo "error";

        }
    }

}
function check_logged(){
    $a = $GLOBALS['logged'];
    if ($a){
        header('location: loggin.php');
        exit();
    }
}

function check_free_space(){
    echo disk_free_space("/")/1024000 . " GB" ;

}
function check_total_space(){
    echo disk_total_space("/")/1024000 . "GB";
}
function get_abs_path(){
    echo getcwd();

}

function  show_dirs(){
    $dir = scandir(getcwd(),0);
    foreach ($dir as $k => $v) {
        if ($k >1) {
            echo "
         <input type='radio' name='f_selected' value='$v' id='f_$k'>
         <label for='f_$k'>$v</label>
         
    ";}
    }
}

