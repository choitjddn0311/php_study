<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String & String Operator</title>
</head>
<body>
    <h1>String & String Operator</h1>
    <?php
        echo "Hello \"w\"orld"; //역슬레쉬 안엔 아무역할을 안하게됨
    ?>
    <h2>concatenation operator</h2>
    <?php 
        echo "Hello" . "world" ; // . 은 좌항과 우항을 합쳐 하나에 문자열을 만듬
    ?>
    <h2>String length function</h2>
    <?php
        echo strlen("Hello world"); //문자의 길이를 재주는 내장함수
    ?>
</body>
</html>