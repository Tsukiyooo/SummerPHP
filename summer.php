
<!DOCTYPE html>
<html>
<head>
    <title>PHP 頁面上的按鈕</title>
</head>
<body>
<form method="post" action="">
        <button type="submit" name="submit">送出</button>
    </form>
    </br>
    <?php
     if (isset($_POST['submit'])){ 
session_start();
$Fre=0;
do{
    for($j=0;$j<=10;$j++){
        $RandNum=array();
        $Fre=$Fre+1;
        do{
            $Run=rand(0,9);
            if(!in_array($Run,$RandNum)){
                $RandNum[]=$Run;
            };

        }while(count($RandNum)<3);
        print_r ($RandNum);            
    $Ans1=$RandNum[1]-$RandNum[0];
    $Ans1=abs($Ans1);
    $Ans2=$RandNum[2]-$RandNum[1];
    $Ans2=abs($Ans2);
    //print_r($RandNum);
    print "</p>";
    print $Fre." = ".$RandNum[0]." , ".$RandNum[1]." , ".$RandNum[2]."</p>";
    echo $Ans1.",".$Ans2."</p>";
    $_SESSION["Fre"]=$Fre;//session項次,紀錄總共幾次了
    //print "</p>".$_SESSION["Fre"]."</p>";
        break;
    };
}while($Ans1 !== $Ans2 && $Fre<=9);
print  "超過10次或已經找到數字了喔~";
};


//include 'page.php';
?>


</body>
</html>
