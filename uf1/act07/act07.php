<?php
include ("./functions.php");

check_logged();



echo "<h2>Espacio libre</h2>";
check_free_space();
echo "<h2>Espacio total</h2>";
check_total_space();
echo "<h2>Ruta actual</h2>";
get_abs_path();

echo "<h2>Directorio</h2>";

echo "<form method='post'>";
     show_dirs();
echo "<input type='submit' name='enter' value='enter'>";
echo "<input type='submit' name='return' value='return'>";
echo "<input type='submit' name='cp' value='copy'>";
echo "<input type='text'  name='cp_path' placeholder='copy path/filename'>";
echo "<input type='submit' name='rm' value='remove'>";
echo "<input type='submit' name='edit' value='edit'>";
echo "<input type='submit' name='mkdir' value='mkdir'>";
echo "<input type='submit' name='unlink' value='delfile'>";
echo "<input type='submit' name='rmdir' value='rmdir'>";

echo "</form>";

?>



<!--//loggin
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
-->



