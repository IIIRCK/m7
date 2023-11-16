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
        case "f_selected":
           // echo $v;
            break;
        case "enter":
            $a= chdir('./'.$_POST["f_selected"]);
            if ($a){
                echo "done";
            }
            else{
                echo "no es un directorio";
            }
            break;
        case "return":
            chdir('.');
            break;
        case "edit":
            echo "edit";
            load_txt();
            break;
        case "rm":
            echo "remove";
            break;
        case 'save':
            $a = $_POST['textarea'];
            file_put_contents('./data/users.txt',$a);
            break;
        case 'cp':
            $a = $_POST['f_selected'];
            $b = $_POST['cp_path'];
            $s =  './'.$a;
            $d = $b.'/'.basename($a);
            if (copy($s,$d)){
                echo 'nice';
            }
            else{
                echo 'fuk';
            }
            echo $s."1";
            echo $d."2";
            break;
        case 'mkdir':
            $a= getcwd();
            $b = $_POST['cp_path'];
            $c= $a.'/'.$b;
            if (mkdir($c)){
                echo "nice";
            }else{
                echo 'fuk';
            }
            break;
        case 'rmdir':
            $a = $_POST['f_selected'];
            $b = './'.$a;
            rmdir($a);
            break;
        case 'unlink':
            $a = $_POST['f_selected'];
            $b = './'.$a;
            unlink($a);
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
            if ($GLOBALS['logged']) {
                echo "error";
            }else{
                echo "aawa";
            }
            break;
        }
    }

}
function load_txt(){
    if($_POST['f_selected'] === "users.txt") {
        chdir('./data');

        $a = $_POST['f_selected'];
        $b = './' . $a;
        if (file_exists($b)) {

                $data = file_get_contents($b);
                echo "<form method='post'>";

                echo "<textarea name='textarea' style='resize: none;width: 200px;height: 100px;' >$data</textarea>";
                echo "<input type='submit' name='save' value='save'>";
                echo "</form>";

        }else{
        echo "1";
    }

    }else{

    }
}

function check_logged(){
    $a = $GLOBALS['logged'];
    if ($a){
        header('location: loggin.php');
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

