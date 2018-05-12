<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        img{
            height: 350px;
        }
        body{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .item{
            text-align: center;
            margin-bottom: 10px;
        }
        .cbalink{
            width:100%;
            margin-top: 50px;
        }
    </style>
</head>
<body>

<?php
    include "data.php";

    foreach ($img as $id=>$image):
?>
<div class="item">
    <img src="img/<?=$image?>" alt="<?=$image?>" id="<?=$id?>"><br>
    <a href="download.php?id=<?=$id?>">Скачать</a>
</div>
<?php
    endforeach;
?>
</body>
</html>