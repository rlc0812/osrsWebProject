<?php
if(isset($_POST['itemSlot'])){
	include ('getItemStrength.php');
	$itemSlot = $_POST['itemSlot'];
	if ($itemSlot == 'WeaponMenu'){
		echo '<select class="w-60" id="selectOption1">';
	}
	else{
		echo '<select class="w-60" id="selectOption2">';
	}
	if($itemSlot == 'WeaponMenu'){
		echo '<option>Select: Weapon type</option>';
		echo '<option value="Weapon">Single handed weapon</option>';
		echo '<option value="Two_handed_weapon">Two handed weapon</option>';
	}
	elseif($itemSlot == 'Head'){
		echo '<option id="Head">Select item: Head</option>';
		getStrengthBonus($itemSlot);
		echo '<option id="Slayer helmet" value="0">Slayer helmet</option>';
		echo '<option id="Void melee helm" value="0">Void melee helm</option>';	
	}
	elseif($itemSlot == 'Cape'){
		echo '<option>Select item: Cape</option>';
		getStrengthBonus($itemSlot);
	}
	elseif($itemSlot == 'Neck'){
		echo '<option>Select item: Neck</option>';
		echo '<option id="Salve amulet" value="0">Salve amulet</option>';
		echo '<option id="Salve amulet (e)" value="0">Salve amulet (e)</option>';
		getStrengthBonus($itemSlot);
		
	}
	elseif($itemSlot == 'Weapon'){
		echo '<option>Select item: Weapon</option>';
		getStrengthBonus($itemSlot);
	}
	elseif($itemSlot == 'Two_handed_weapon'){
		echo '<option>Select item: 2h-weapon</option>';
		getStrengthBonus($itemSlot);
	}
	elseif($itemSlot == 'Body'){
		echo '<option>Select item: Body</option>';
		getStrengthBonus($itemSlot);
	}
	elseif($itemSlot == 'Shield'){
		echo '<option>Select item: Shield</option>';
		getStrengthBonus($itemSlot);
	}
	elseif($itemSlot == 'Legs'){
		echo '<option>Select item: Legs</option>';
		getStrengthBonus($itemSlot);
	}
	elseif($itemSlot == 'Hands'){
		echo '<option>Select item: Hands</option>';
		getStrengthBonus($itemSlot);
	}
	elseif($itemSlot == 'Feet'){
		echo '<option>Select item: Feet</option>';
		getStrengthBonus($itemSlot);
	}
	elseif($itemSlot == 'Ring'){
		echo '<option>Select item: Ring</option>';
		getStrengthBonus($itemSlot);
	}
}
echo '<div id="currentSlot" value="'.$itemSlot.'"></div>';
echo '</select>';
//For each slot will make a mysql query where strength > 0 and display all options in dropdown with value as the strength bonus so that we can get the str bonus by value getElementById('').value;



?>

<script type="text/javascript">

	$(document).ready(function () {
		$(function(){
			$("#selectOption1").change(function () {
				var slot = this.value;
				if(slot==='Weapon'){
					populateSlot(slot,'#selectMenu2');
				}
				if(slot==='Two_handed_weapon'){
					populateSlot(slot,'#selectMenu2');
				}
			});
		});
	});

	$(document).ready(function () {//Grabs the values for the selected item to be assigned to the slot next to the image by calling selectedItemChanges
		$(function(){
			$("#selectOption2").change(function () {
				var strengthBonus = this.value;
				var itemName = $(this).children(":selected").attr("id");
				var itemSlot = $(this).children('option:first').val();
				itemSlot = itemSlot.substring(itemSlot.indexOf(":")+2);
				//alert(strengthBonus);
				//alert(itemName);
				//alert(itemSlot);
				$('#itemSlotField').empty();
				$('#selectMenu2').empty();
				
				selectedItemChanges(itemName,strengthBonus,itemSlot);
			});
		});
	});

	function populateSlot(itemSlot,updateField) {//Gets the items by slot from the DB and assigns them to the dropdown selected
		$('#selectMenu2').empty();
		data = {itemSlot: itemSlot};
			$.ajax({
				type: "POST",
				url: "maxHitScripts/getSlotItems.php",
				data: data,
				cache: false,

				success: function(data) {
				$(updateField).html(data);
				},
				error: function(xhr, ajaxOptions, thrownError) {
						alert(xhr.status);
						alert(thrownError);
				}
			});
		$('#selectOption2').remove();
	}

	function selectedItemChanges(itemName,strengthBonus,itemSlot) {//This is where the text and str bonuses for slots are updated
		if (itemSlot=='2h-weapon'){
			var updateField = '#WeaponSlot';
		}
		else{
			var updateField = '#'+itemSlot+'Slot';
		}
		data = {itemName: itemName,strengthBonus: strengthBonus,itemSlot: itemSlot};
			$.ajax({
				type: "POST",
				url: "maxHitScripts/updateSelectedItem.php",
				data: data,
				cache: false,

				success: function(data) {
				$(updateField).html(data);
				},
				error: function(xhr, ajaxOptions, thrownError) {
						alert(xhr.status);
						alert(thrownError);
				}
			});
			updateTotalStrength(strengthBonus,itemSlot);
	}

</script>


