<?php
include "data.php";
if(key_exists($_GET["id"],$img)){
    header("Content-Type:image/jpeg");
    header("Content-Disposition:attachment;filename=".$img[$_GET["id"]]);
    header("Content-Length:".filesize(__DIR__."/img/".$img[$_GET["id"]]));

    readfile(__DIR__."/img/".$img[$_GET["id"]]);
}else {
    header("Location:".$_SERVER["HTTP_REFERER"]);
}