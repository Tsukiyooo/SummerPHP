<?php
session_start();
$Fre=0;
$RandNum=array();
do{
    for($j=0;$j<=10;$j++){
        $Fre=$Fre+1;
        for($i=0;$i<3;$i++){
            $Run=rand(0,9);
            if(!in_array($Run,$RandNum)){
                $RandNum[$i]=$Run;
            }
                print $RandNum[$i];            
        };
    $Ans1=$RandNum[1]-$RandNum[0];
    $Ans1=abs($Ans1);
    $Ans2=$RandNum[2]-$RandNum[1];
    $Ans2=abs($Ans2);
    print_r($RandNum);
    print "</p>";
    print $Fre." = ".$RandNum[0]." , ".$RandNum[1]." , ".$RandNum[2]."</p>";
    echo $Ans1.",".$Ans2."</p>";
    $_SESSION["Fre"]=$Fre;//session項次,紀錄總共幾次了
    //print "</p>".$_SESSION["Fre"]."</p>";
        break;
    };
}while($Ans1 !== $Ans2 && $Fre<=9);
print  "超過10次或已經找到數字了喔~";

?>
