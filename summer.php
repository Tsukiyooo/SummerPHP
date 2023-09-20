<?php
//if()
for($j=0;$j<10;$j++){
for($i=0;$i<3;$i++){
    $RandNum[$i] = rand(0,9);
};
print_r($RandNum);
echo "\r\n";
print $RandNum[0].",".$RandNum[1].",".$RandNum[2];
echo "\r\n";

};
?>
