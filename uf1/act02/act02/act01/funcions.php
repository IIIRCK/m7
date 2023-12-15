<?php
function check_dm($e){
    $dm = [
        "cat",
        "com",
        "es"
    ];
    foreach ($dm as $d){
        if (strpos($e,$d)){
            return true;
        }
    }
    return false;

}

function check_mail2($e,&$dm)
{
    $e = strtolower($e);

    $e = str_replace(' ', '', $e);

    if (strpos($e, '@')) {
        $s = strlen($e);

        if ($s < 75) {
            $dm = check_dm($e);
            return true;
        }
    }
    $dm = check_dm($e);
    return false;
}
