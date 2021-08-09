<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="style.css" rel="stylesheet" type="text/css" media="all" />
    <title>Ex5</title>
</head>
<body>

<div class="enter">
    <div>
        <form action="start.php" method="post">
            <label for="name"><b>Подключение к БД</b></label><br><br>
            <div class="center">
                <button class="button" type="submit">Начать</button>
            </div>
        </form>
    </div>
</div>

<?php

require "functions.php";
//require "start.php";

echo <<<html

    

html

?>
    
</body>
</html>
