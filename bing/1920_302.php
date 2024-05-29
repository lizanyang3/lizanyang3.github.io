<?php
    $str=file_get_contents('https://cn.bing.com/HPImageArchive.aspx?idx=0&n=1');
if (preg_match("/<urlBase>(.+?)<\/urlBase>/ies", $str, $matches)) {
    $imgurl='https://cn.bing.com'.$matches[1].'_1920x1080.jpg';
}
if ($imgurl) {
    header("Location: $imgurl");    //输出302跳转
} else {
    exit('error');
}
?>
