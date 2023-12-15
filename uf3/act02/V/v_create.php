<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<form action="../c.php" method="post"  enctype="multipart/form-data" >
    <label for="name">name</>
    <input type="text" name="name">
    <label for="surname">surname</>
    <input type="text" name="surname">
    <label for="email">email</>
    <input type="text" name="email">
    <label for="telf">telf</>
    <input type="text" name="telf">
    <label for="img"></label>
    <input type="file" name="img">
    <input type="submit" name="ok_c" >
    <a href="v_read.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> view table</a>

</form>


</body>
</html>