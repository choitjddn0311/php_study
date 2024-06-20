<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function</title>
</head>
<body>
    <h1>function</h1>
    <?php
        $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ullam dolor ipsam sunt aut
        

        em placeat modi aliquam molestias quis dolore vero vitae soluta excepturi odit iure quibusdam, ipsum laudantium consequuntur!";
        echo $str;
    ?>
    <h2>Strlen()</h2>
    <?php
        echo strlen($str);
    ?>
    <h2>nl2br</h2>
    <?php
        echo nl2br($str);
    ?>
</body>
</html>
func