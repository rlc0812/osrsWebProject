<?php
function getCombatLevel($atk,$def,$str,$hp,$range,$pray,$mage){
	//Index:27=atk,28=def,29=str,30=hitpoint,31=ranged,32=prayer,33=magic
	$atk=abs($atk);
	$def=abs($def);
	$str=abs($str);
	$hp=abs($hp);
	if($hp==1){$hp=10;}
	$range=abs($range);
	$pray=abs($pray);
	$mage=abs($mage);
	
	$baseCb=(0.25*($def+$hp+(floor($pray/2))));
	$meleeCb=(0.325*($atk+$str))+$baseCb;
	$rangeCb=(0.325*(floor($range/2)+$range))+$baseCb;
	$mageCb=(0.325*(floor($mage/2)+$mage))+$baseCb;
	$combatLevel = max($mageCb,$rangeCb,$meleeCb);

	if(($meleeCb>$mageCb)&&($meleeCb>$rangeCb)){
		$mainCombatType="Melee";
	}
	elseif(($rangeCb>$mageCb)&&($rangeCb>$meleeCb)){
		$mainCombatType="Range";
	}
	elseif(($mageCb>$rangeCb)&&($mageCb>$meleeCb)){
		$mainCombatType="Mage";
	}
	else{//Executes when two or more are equal
		if(($mageCb==$rangeCb)&&($mageCb==$meleeCb)){//All are equal
			$mainCombatType="All equal";
		}
		elseif($rangeCb==$mageCb){
			$mainCombatType="Range/Mage";
		}
		elseif($meleeCb==$mageCb){
			$mainCombatType="Melee/Mage";
		}
		elseif($rangeCb==$meleeCb){
			$mainCombatType="Melee/Range";
		}	
	}
	$levelAndType = [];
	array_push($levelAndType,$combatLevel);
	array_push($levelAndType,$mainCombatType);
	return $levelAndType;
}

?>
