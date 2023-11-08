<?php


function loggin(){

}

function filter($k,$v){
    switch ($k){
        case "loggin":
            $a = $_POST("user");
            $b =  $_POST("psswd");
            echo $a ,$b ,$v;
        break;
        }
}
function get_post(){
    foreach ($_POST as $k => $v){
        filter($k,$v);
    }
}

get_post();