<?php
session_start();
$Fre=$_SESSION["Fre"];
print $Fre;
    $link = @mysqli_connect(
        'localhost',
        'root',
        '',
        '107php'
    );
    if(!$link){
        echo "連接錯誤</br>";
        exit();
    }else{
        echo "成功</br>".$Fre;
    }
    mysqli_close($link);
    //測試連接


?>