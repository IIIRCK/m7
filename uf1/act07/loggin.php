
<?php
include ("./functions.php");
    $v = 2;
    echo '<link rel="stylesheet" href="style.css">';
    echo '
<html>
<head>
<meta charset="UTF-8">
             <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                         <meta http-equiv="X-UA-Compatible" content="ie=edge">
             <title>Document</title>
</head>
<body>
  <div class="log">
     <form method="post">
        <input type="text" name="user" placeholder="users">
        <input type="password" name="psswd" placeholder="password">
        <input type="submit" name="loggin" value="Loggin" >
       </form>
     </div>   
</body>
</html>'

?>