 <?php  
setlocale(LC_ALL,'zh_CN');//linux系统下生效

$file = "ebook.csv";
if(!is_file($file)&&!file_exists($file))
{
    die('文件错误');
}
$cvs_file = fopen($file,'r'); //开始读取csv文件数据

$data = null;//返回的文件数据行
$i = 0;//记录cvs的行

while ($file_data = fgetcsv($cvs_file))
{
    if($file_data[0]!='')
    {
        $data[$i] = $file_data;
        $i++;
    }
    
}

$push = null;
fclose($cvs_file);
$len = count($data[0]);

for($x = 0; $x < $i; $x++){
    for($y = 0; $y < $len; $y++){
        $temp[$data[0][$y]] = $data[$x][$y];
    }
    $push[$x] = $temp;
}

$push_content = json_encode($push, JSON_UNESCAPED_UNICODE);

header('Content-Type:application/json');

echo $push_content;

fclose($myfile);

?>