<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="/public/css/main.css">
 
</head>

<body>
    <?php
    if(isset($param)){
        echo "<h2>$param</h2>";
    }else{
        echo 'Huy!';
    }
    echo "<h1 class='first'>$name</h1>";
    ?>

</body>
</html>



