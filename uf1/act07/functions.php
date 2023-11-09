<?php
function loggin($k,$v){
    $users = new stdClass();
    $a = $_POST["user"];
    $b = $_POST["psswd"];
    $d =  md5($b);
    $users->$a =$b;
    //fopen("./data/users.txt","x+");

    if ($a !="" || $b !="" ){
        //file_put_contents("./data/users.txt",json_encode($users));
        $file = file_get_contents("./data/users.txt");
        $data = json_decode($file);
        foreach ($data as $k => $v){
            if($a == $k){
                if ($d != $v){
                    echo "error";

                }
                else{
                    echo "nice";
                    $logged = logg_check();
                    $url = "http://localhost:63342/m7/uf1/act07/act07.php";
                    header("Location: $url");

                }
            }
        }
    }
    else{
        /*$file = file_get_contents("./data/users.txt");
        $jesi = json_decode($file);
        foreach ($jesi as $k => $v) {
                echo $k , $v;
        }*/
        unset($_POST);

    }
}
function logg_check(){
        return true;
}
function filter($k,$v){
    switch ($k){
        case "loggin":
            loggin($k,$v);
            break;
        }
}
function get_post(){
    if ($_POST != "") {
        foreach ($_POST as $k => $v) {
            filter($k, $v);
        }
    }
}

get_post();
