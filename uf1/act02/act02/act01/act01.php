<?php
echo "EX1";
function tabla($f, $c) {
    echo '<table border="1">';
    for ($i = 1; $i <= $f; $i++) {
        echo '<tr >';
        for ($j = 1; $j <= $c; $j++) {
            echo '<td >';
            echo  $i . " ". $j;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

tabla(10, 10);


echo "<br><br>";
echo "EX2";
$string = "awacate amarillo";
$ct = str_word_count($string);
echo "<br><br>";

echo  '$string = '."$string";
echo "<br><br>";

echo '$ct = str_word_count($string);';
echo "<br><br>";
echo $ct;

$s1 = "condena";
$s2= "candela";

$x = levenshtein($s1,$s2);
echo "<br><br>";
echo "EX3";
echo "<br><br>";

echo "la cantidad de diferencias entre  '$s1' y '$s2' son: $x";

echo "<br><br>";
echo "EX4";
echo "<br><br>";

$e = 20 ;
$edat= ($e >= 18) ? "Major d'edat" : "Menor d'edat";
echo "Es ".$edat;
echo "<br><br>";
echo "EX5";
echo "<br><br>";


$s1 = "mantequilla";
$s2 = "manteca";

$comparacio = strcmp($s1, $s2);

if ($comparacio < 0) {
    echo "$s1 és més petit que $s2";
} elseif ($comparacio == 0) {
    echo "$s1 i $s2 són iguals";
} else {
    echo "$s1 és més gran que $s2";
}

echo "<br><br>";

function comparaParaules($s1, $s2)
{
    $s1 = strtolower($s1);
    $s2 = strtolower($s2);

    $comparacio = strcmp($s1, $s2);

    if ($comparacio < 0) {
        return -1;
    } elseif ($comparacio == 0) {
        return 0;
    } else {
        return 1;
    }
}



$r = comparaParaules($s1, $s2);

echo "S1 es més gran: $r";


echo "<br><br>";
echo "EX6";
echo "<br><br>";


function incrementarPorReferencia(&$n) {
    $n++;
}

$n = 5;
echo "Valor inicial $n";
echo "<br><br>";

incrementarPorReferencia($n);

echo "Valor después de la función: $n";

echo "<br><br>";
echo "EX7";
echo "<br><br>";

echo "Es una funcio que retorna informacio de tipus array  dels valors que s'ha introduit previament ";

echo "<br><br>";
echo "EX8";
echo "<br><br>";
function check_mail($e)
{
    $e = strtolower($e);

    $e = str_replace(' ', '', $e);

    if (strpos($e, '@')) {
        $s = strlen($e);

        if ($s < 75) {
            return true;
        }
    }

    return false;
}
$e = "jumegejviladoms.cat";

if (check_mail($e)) {
    echo $e. " es correcto.";
} else {
    echo $e. " es incorrecto";
}


echo "<br><br>";
echo "EX9";
echo "<br><br>";
include "funcions.php";

$dmv = false;
    if (check_mail2($e,$dmv)) {
        echo $e. " es correcto.";
    } else {
        echo $e. " es incorrecto";
    }
echo "<br><br>";

if ($dmv) {
    echo $e. " es correcto.";
} else {
    echo $e. " es incorrecto";
}

echo "<br><br>";
echo "EX10";
echo "<br><br>";

$e = "jumegejviladoms";

if (check_dm($e)) {
    echo $e. " es correcto.";
} else {
    echo $e. " es incorrecto";
}


echo "<br><br>";
echo "EX11";
echo "<br><br>";
echo "time() retorna l'hora actual del sistema";
echo "<br><br>";

$f = "G:i l Y";
$ff = date($f);
echo "<br><br>";

echo "Fecha y hora : $ff";


?>