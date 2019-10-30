<?php
if(isset($_POST['itemSlot'])){
	include ('getItemStrength.php');
	$itemSlot = $_POST['itemSlot'];
	if ($itemSlot == 'WeaponMenu'){
		echo '<div class="container-fluid w-60">';
			echo '<input type="radio" value="Weapon" name="selectOption1">One handed weapon </br>';
			echo '<input type="radio" value="Two_handed_weapon" name="selectOption1">Two handed weapon';
			echo '<div id="currentSlot" value="'.$itemSlot.'"></div>';
		echo '</div>';
	}
	else{
		echo '<select class="w-60" id="selectOption2">';
		if($itemSlot == 'Head'){
			echo '<option id="Head">Select item: Head</option>';
			echo '<option id="None" value="0">None</option>';
			echo '<option id="Slayer helmet" value="0">Slayer helmet</option>';
			echo '<option id="Void melee helm" value="0">Void melee helm</option>';	
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Cape'){
			echo '<option>Select item: Cape</option>';
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Neck'){
			echo '<option>Select item: Neck</option>';
			echo '<option id="Salve amulet" value="0">Salve amulet</option>';
			echo '<option id="Salve amulet (e)" value="0">Salve amulet (e)</option>';
			echo '<option id="Salve amulet (ei)" value="0">Salve amulet (ei)</option>';
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
			echo '<option id="Void knight top" value="0">Void knight top</option>';	
			echo '<option id="Elite void top" value="0">Elite void top</option>';	
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Shield'){
			echo '<option>Select item: Shield</option>';
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Legs'){
			echo '<option>Select item: Legs</option>';
			echo '<option id="Void knight robe" value="0">Void knight robe</option>';	
			echo '<option id="Elite void robe" value="0">Elite void robe</option>';	
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Hands'){
			echo '<option>Select item: Hands</option>';
			echo '<option id="Void knight gloves" value="0">Void knight gloves</option>';	
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

	echo '<div id="currentSlot" value="'.$itemSlot.'"></div>';
	echo '</select>';
	}
}
//For each slot will make a mysql query where strength > 0 and display all options in dropdown with value as the strength bonus so that we can get the str bonus by value getElementById('').value;



?>

<script type="text/javascript">

	$(document).ready(function () {
		$(function(){
			$('input[type=radio][name=selectOption1]').change(function () {
				var itemSlot = this.value;
				if(itemSlot==='Weapon'){
					populateSlot(itemSlot,'#selectMenu2');
				}

				if(itemSlot==='Two_handed_weapon'){
					populateSlot(itemSlot,'#selectMenu2');
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
				$('#itemSlotField').empty();
				$('#selectMenu2').empty();
				selectedItemChanges(itemName,strengthBonus,itemSlot);

				//Special cases for item dropdown selection
				if(itemName=='Abyssal bludgeon'){
					$('#prayerDiv').show();
				}

				if(itemSlot==='Neck'){
					if((itemName=='Salve amulet')||(itemName=='Salve amulet (e)')||(itemName=='Salve amulet (ei)')){
						$('#undead').prop('disabled', false);
					}
					else{
						$('#undead').prop('disabled', true);
					}
				}

				if(itemSlot==='Head'){
					if((itemName=='Slayer helmet')||(itemName=='Slayer helmet (i)')){
						$('#slayerTask').prop('disabled', false);
					}
					else{
						$('#slayerTask').prop('disabled', true);
					}
				}
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


