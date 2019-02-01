<?php 

require_once("vendor/autoload.php");
// $dotenv = Dotenv\Dotenv::create(__DIR__);
// $dotenv->load(__DIR__.'/.env');


echo "hello world heroku. now i am testing second time</br>";
echo "<pre>";
//print_r(getenv());

$a = new QueryBuilder;

$insert =[
    'username' => 'abc'.mt_rand('0000','9999'),
    'email' => 'abc'.mt_rand('0000','9999').'@something.com',
    'password' => sha1(mt_rand('0000','9999')),
    'created_on' => date('Y-m-d h:m:s'),
    'last_login' =>  date('Y-m-d h:m:s')
];

$a->create($insert);
echo "<table style='border: solid 1px black;' >";
echo "<tr><th>Id</th><th>Username</th><th>Email</th><th>Added date</th></tr>";
foreach($a->select()->fetchAll() as $k => $value){
    echo "<tr><td>".$value['id']."</td><td>".$value['username']."</td><td>".$value['email']."</td><td>".$value['created_on']."</td><</tr>"; 
}
die;