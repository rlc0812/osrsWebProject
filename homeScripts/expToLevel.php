<?php
function getLevelExperience(){
$levelDifference = [];

for($i=2;$i<127;$i++){
$power=(($i-1)/7);
$y=pow(2,$power);
$x=((floor($i-1+300*$y))/4);
array_push($levelDifference,$x);
}
$expArray =[];
array_push($expArray,0);
for($i=2;$i<128;$i++){
	$experience = 0;
	for($z=2;$z<$i;$z++){
		$experience+=$levelDifference[$z-2];
	}
	array_push($expArray,intval($experience));
}
array_push($expArray,200000000);
return $expArray;
}

function getLevelOver99($experience){
	$expTable = getLevelExperience();
	for($i=99;$i<127;$i++){
		if($experience < $expTable[$i]){
			$level = $i-1;
			return $level;
		}
	}
	return 99;
}
?>
