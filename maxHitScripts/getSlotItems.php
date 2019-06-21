<?php
if(isset($_POST['itemSlot'])){
	$itemSlot = $_POST['itemSlot'];
	if($itemSlot == 'Head'){
		echo '<option value="10">Head</option>';
	}
	elseif($itemSlot == 'Cape'){s
		echo '<option>Cape</option>';
	}
	elseif($itemSlot == 'Neck'){
		echo '<option>Neck</option>';
	}
	elseif($itemSlot == 'Weapon'){
		echo '<option>Weapon</option>';
	}
	elseif($itemSlot == 'Body'){
		echo '<option>Body</option>';
	}
	elseif($itemSlot == 'Shield'){
		echo '<option>Shield</option>';
	}
	elseif($itemSlot == 'Legs'){
		echo '<option>Legs</option>';
	}
	elseif($itemSlot == 'Hands'){
		echo '<option>Hands</option>';
	}
	elseif($itemSlot == 'Feet'){
		echo '<option>Feet</option>';
	}
	elseif($itemSlot == 'Ring'){
		echo '<option>Ring</option>';
	}
}
//For each slot will make a mysql query where strength > 0 and display all options in dropdown with value as the strength bonus so that we can get the str bonus by value getElementById('').value;



?>
