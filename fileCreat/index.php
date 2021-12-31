<?php

    $hostName   = 'localhost';
    $dbUserName = 'root';
    $password   = '';
    $dbName     = 'test';
    $dbConnect  = mysqli_connect($hostName,$dbUserName,$password,$dbName);
    if($dbConnect){
        echo 'Connection successfull';
    }else{
        echo 'Connection failed';
    }


?>
<?php 
//  file creat 
$file = rand(99999,99999999999).date('Y-m-d-h-i-s-sa').'file.txt';
    $myFile = fopen($file,'w');
    $txt    = "Congratulaition..!";
    fwrite($myFile,$txt);
// // 
//     $myFile = fopen($file,'r');
//     echo fread($myFile,filesize($file));

die();
//  file creat

 $file = rand(99999,99999999999).date('Y-m-d-h-i-s-sa').'file.txt';

 $myFile = fopen($file,'w');
 $txt    = "<h2>Corngratuilation...! You created a new file with php</h2>";
 fwrite($myFile,$txt);

//  read file 

 $myFile = fopen($file,'r');
 echo fread($myFile,filesize($file));












?>