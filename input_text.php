<?php

    require_once "./autoload.php";

    use  entities\FileStorage;
    use  entities\Text;

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input-text</title>
</head>
<body>
    <form action="input_text.php" method="POST">
        <label for="author">Author</label><input name="author" type="text"><br><br>
        <label for="text">Text</label><input name="text" type="text"><br><br>
    </form>
</body>
</html>