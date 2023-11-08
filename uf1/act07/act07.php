<?php
include ("./functions.php");
echo "<h1>EX1</h1>";

echo "<h2>a</h2>";
$v = 1.2;
echo disk_free_space("/")/1024000 . " GB" ;

echo "<h2>b</h2>";

echo disk_total_space("/")/1024000 . "GB";

echo "<h2>c</h2>";

echo getcwd();

echo "<h1>EX2</h1>";
echo "<h2>a</h2>";
$dir = scandir(getcwd(),0);



foreach ($dir as $k => $v) {
    echo $v;
    echo "<br>";
}

?>
<?php
function e2b(){

}


//loggin
    //restringir acceso solo ha usuarios dentro del json
    //psswd encriptado con md5

//administracion de archivos en carpetas
    //mostrar dir / archivos del directorio de trabajo data | select
    //contendo listado  para selecionar | radio btn
    //acciones |
        //permitir entrar en directorios
        //editar archivos txt
        //copiar a una ruta concrata solo carpetas dentro del data
        //crear carpetas




