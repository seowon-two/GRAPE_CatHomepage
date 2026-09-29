<?php
echo "hello php!"; #웹페이지에 문자열 출력(print)
$name = "John"; # 변수 앞에는 $를 붙여야 함
$iq = 13;
echo "hello $name your IQ is $iq"; #변수 출력
?>

<?php
# localhost:8000/test.php?name=gaeun&iq=50
echo $_GET['name'];
echo  $_GET['iq'];
?>

<?php

$your_name = $_GET['name'];
$your_iq = $_GET['iq'];

echo "your name is $your_name, and your IQ : $your_iq"

?>