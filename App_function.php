<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>WEB</h1>
    <ol>
        <li><a href="App_function.php?id=html">HTML</a></li>
        <li><a href="App_function.php?id=css">CSS</a></li>
        <li><a href="App_function.php?id=javascript">JavaScript</a></li>
    </ol>
    <h2>
        <?php
            echo $_GET['id'];
        ?>
    </h2>
    <?php
    
    ?>
</body>
</html>