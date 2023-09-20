<?php
$RandNum[0]=1;
$RandNum[1]=4;
$RandNum[2]=9;
//print "No.1".$RandNum[0].",".$RandNum[1].",".$RandNum[2]."</p>";
$Ans1=$RandNum[1]-$RandNum[0];
$Ans1=abs($Ans1);
$Ans2=$RandNum[2]-$RandNum[1];
$Ans2=abs($Ans2);
echo $Ans1.",".$Ans2;
$Fre=0;
do{
    for($j=0;$j<=10;$j++){
        $Fre=$Fre+1;
        for($i=0;$i<3;$i++){
            $RandNum[$i] = rand(0,9);
        };
    $Ans1=$RandNum[1]-$RandNum[0];
    $Ans1=abs($Ans1);
    $Ans2=$RandNum[2]-$RandNum[1];
    $Ans2=abs($Ans2);
    print_r($RandNum);
    print "</p>";
    print $Fre." = ".$RandNum[0]." , ".$RandNum[1]." , ".$RandNum[2]."</p>";
    echo $Ans1.",".$Ans2."</p>";
        break;
    };
}while($Ans1 !== $Ans2 && $Fre<=9);
print  "超過10次或已經找到數字了喔~";

?>
