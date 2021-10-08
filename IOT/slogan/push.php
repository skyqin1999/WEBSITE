<?php
$name = $_POST['name'];
$push = $_POST['push'];

$file_name = $name."-slogan.txt";

echo "<script>alert('即将将此内容推送到服务器\\n  “{$push}”\\n随后将由设备“{$name}”同步');</script>";
$slogan_file = fopen($file_name, "w+");

fwrite($slogan_file, $push);

fclose($slogan_file);
?>