<?php
$a=$_GET['a'];
print($a);
$db=mysqli_connect("127.0.0.1","root","123456","webttest");
$query="select * from users where name like %$a%";
$result=myslqi_query($db,$query);
$data=mysqli_fetch_assoc($result);
print_r($data);
?>