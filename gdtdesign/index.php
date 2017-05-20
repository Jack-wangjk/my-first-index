<?php 
$name = $_GET["name"];
$password = $_GET["password"];

$mysql = array(
        0=>array(
            'name'=>"swr",
            'password' =>"520"
            ),
        1=>array(
            'name'=>"wjk",
            'password'=>"1314"
            )
    );
$link = array(
    "bool" => "1",
    "link1" => "./mymap.html",
    "link2" => "./cityquerymap.html"
    );
$error = array(
    "bool"=>"0",
    "oalert"=>"账号或密码错误"
    );

for ($i=0; $i <count($mysql); $i++) 
    { 
        if ($mysql[$i]['name'] == $name) 
        {
            if ($mysql[$i]['password'] == $password) 
            {
                echo json_encode($link);
                break;
            }
            else
            {
                echo json_encode($error);
                break;
            };
        }
        
    };


?>