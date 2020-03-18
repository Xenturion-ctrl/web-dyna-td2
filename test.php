<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
    <h2><a href="?message=hi"> hi</a>
        <a href="?message=salut">salut</a>
        <a href="?message=chao">Chao</a>
    </h2>


    <?php
    echo "Message est:".$_GET["message"];
        ?>
</body>
</html>