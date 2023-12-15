<!DOCTYPE html>
<html>
<head>
    <title>Pasar Variables por GET</title>
</head>
<body>
<?php
echo"Ex1";
echo "<br><br>";

if (isset($_GET['v1']) && isset($_GET['v2'])) {
    $v1 = $_GET['v1'];
    $v2 = $_GET['v2'];
    echo "Variable 1: " . $v1 . "<br>";
    echo "Variable 2: " . $v2 . "<br>";
}
?>
<a href="p00.php?v1=Hola&v2=Mundo">Pasar Variables</a>
<br><br>
<?php
echo"Ex2";
echo "<br><br>";
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];

    echo "<p>Datos recibidos:</p>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
} else {
    echo "<form method='post' action='p00.php'>
          <label for='nombre'>Nombre:</label>
          <input type='text' name='nombre'>
          <br>
          <label for='apellido'>Apellido:</label>
          <input type='text' name='apellido'>
          <br>
          <input type='submit' name='submit' value='Enviar'>
          </form>";
}
echo "<br><br>";

?>
<?php
echo"Ex3";
echo "<br><br>";
echo "<h3>GET:</h3>";
if (!empty($_GET)) {
    echo "<ul>";
    foreach ($_GET as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "</ul>";
} else {
    echo "No s'han rebut variables via GET.";
}

echo "<h3>POST:</h3>";
if (!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        echo "$key: $value <br>";
    }
} else {
    echo "No s'han rebut variables via POST.";
}
echo "<br><br>";
?>
<?php
echo"Ex4";
echo "<br><br>";
if (isset($_POST['color'] )&& isset($_POST['nom'])) {
    $color = $_POST['color'];
    $nom = $_POST['nom'];
    echo "<p>El color preferit de $nom  és el $color</p>";
}else if (isset($_POST['submit1']) || isset($_POST['submit2'])) {
    echo "<form method='post' action=''>
          <input type='hidden' name='color' value=".$_POST['color'].">
          <label for='nom'>Quin és el teu nom?</label>
          <input type='text' name='nom'>
          <input type='submit' name='submit2' value='Enviar'>
          </form>";
}else {
    echo "<form method='post' action=''>
          <label for='color'>Quin és el teu color preferit?</label>
          <input type='text' name='color'>
          <input type='submit' name='submit1' value='Enviar'>
          </form>";
}
echo "<br><br>";

?>
<?php
echo"Ex5";
echo "<br><br>";
echo "
<form method='post' >
    <label for='text_input'>Text:</label>
    <input type='text' id='text_input' name='text_input' required placeholder='Introdueix text aquí'>
    <br><br>

    <label>Radio:</label>
    <input type='radio' name='radio' value='Opció 1' required> Opció 1
    <input type='radio' name='radio' value='Opció 2' required> Opció 2
    <br><br>

    <label for='checkbox'>Checkbox:</label>
    <input type='checkbox' id='checkbox' name='checkbox' value='Sí'>
    <br><br>

    <label for='password'>Contrasenya:</label>
    <input type='password' id='password' name='password' required placeholder='Introdueix la contrasenya'>
    <br><br>

    <label for='color'>Color:</label>
    <input type='color' id='color' name='color'>
    <br><br>

    <label for='email'>Email:</label>
    <input type='email' id='email' name='email' required placeholder='example@example.com'>
    <br><br>

    <label for='date'>Data:</label>
    <input type='date' id='date' name='date'>
    <br><br>

    <label for='tel'>Telèfon:</label>
    <input type='tel' id='tel' name='tel'>
    <br><br>

    <label for='number'>Número:</label>
    <input type='number' id='number' name='number'>
    <br><br>

    <input type='reset' value='Restableix'>
    <br><br>

    <label for='textarea'>Àrea de text:</label>
    <textarea id='textarea' name='textarea' required placeholder='Escriu aquí...'></textarea>
    <br><br>

    <label for='select'>Selecció:</label>
    <select id='select' name='select'>
        <option value='Opció 1'>Opció 1</option>
        <option value='Opció 2'>Opció 2</option>
        <option value='Opció 3'>Opció 3</option>
    </select>
    <br><br>

    <input type='submit' value='Enviar'>
</form>";
echo "<br><br>";
foreach ($_POST as $key => $val) {
    echo "$key: $val <br>";
}
?>
</body>
</html>
