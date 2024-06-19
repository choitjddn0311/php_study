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
        <li><a href="get.php?id=HTML">HTML</a></li>
        <li><a href="get.php?id=CSS">CSS</a></li>
        <li><a href="get.php?id=JavaScript">JavaScript</a></li>  <!-- a태그를 통해 링크를 걸어 아이디를 설정해준다 -->
    </ol>
    <h2>
        <?php
            echo $_GET['id']; //위에 a태그로 걸어둔 id를 호출해 클릭하면 제목이 바뀌게한다
        ?>
    </h2>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea sed aliquid et! Ducimus maiores accusamus nesciunt modi quibusdam vel asperiores ipsum exercitationem ipsam, nobis quas harum non consequatur, tempore architecto?
</body>
</html>