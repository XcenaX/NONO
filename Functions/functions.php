<?php
function CheckForHor($gridJsonFinal, $gridJsonUser){
$gridFinal = json_decode($gridJsonFinal, true);
$gridUser = json_decode($gridJsonUser, true);
$result=[];
$colCount = count($gridFinal[0]);
$rowCount = count($gridFinal);
for($i=0; $i<$rowCount; $i++){
$result[]=[0];
for($k=0;$k<$colCount; $k++){
if($gridUser[$i][$k]!=$gridFinal[$i][$k]){
array_push($result[$i], 2);
}
else{
array_push($result[$i], 0);
}
}
}
return $result;
}

function CheckForVer($gridJsonFinal, $gridJsonUser){
$gridFinal = json_decode($gridJsonFinal, true);
$gridUser = json_decode($gridJsonUser, true);
$result=[];
$colCount = count($gridFinal[0]);
$rowCount = count($gridFinal);
for ($x = 0; $x< $colCount;$x++){
$result[]=[0];
for ($y = 0; $y< $rowCount;$y++){
if($gridUser[$y][$x]!=$gridUser[$y][$x]){
array_push($result[$x] , 2);
}
else{
array_push($result[$x],0);
}

}
}
return $result;
}
?>