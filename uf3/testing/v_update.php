<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<?php
include_once 'm.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
    $result = select($id);
   $ro = json_decode($result,true);

}
?>
<div class="container">
    <form role="form" method="post" enctype="multipart/form-data" action="v_read.php">
        <div class="form-group " >
            <label class="control-label"  for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $ro['name'];?>">
        </div>
        <div class="form-group ">
            <label class="control-label"  for="surname">Surname</label>
            <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $ro['surname'];?>">
        </div>
        <div class="form-group ">
            <label class="control-label"  for="email">email</label>
            <input type="text" class="form-control" id="email" name="email" value="<?php echo $ro['email'];?>">
        </div>
        <div class="form-group mb-5">
            <label class="control-label"  for="tlf">tlf</label>
            <input type="text" class="form-control" id="tlf" name="tlf" value="<?php echo $ro['tlf'];?>">
        </div>

        <div class=" form-group mb-4">
            <button type="submit" name="ok_u" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script >

</script>
</body>
</html>