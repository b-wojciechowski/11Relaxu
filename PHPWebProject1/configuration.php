<?php
$footerContent = 'footer.php';
$checkBoxLabelInfo = 'Dodaj do Jedenastki 50-lecia';
$time = date("Y-m-d H:i:s");
$img_dir = 'images/';
$player_images = scandir($img_dir);
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

?>