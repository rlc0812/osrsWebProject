<?php
if(isset($_POST['itemSlot'])){
	include ('getItemStrength.php');
	$itemSlot = $_POST['itemSlot'];
	if ($itemSlot == 'WeaponMenu'){
		echo '<div class="container-fluid w-60">';
			
			echo'
			<div id="selectOption1" name="selectOption1" class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn btn-primary darkBg">
				<input type="radio" value="Weapon" name="weapon" id="option1" autocomplete="off"><div class="itemText2">One handed weapon</div>
				</label>	
				<label class="btn btn-primary darkBg">
				<input type="radio" value="2h" name="weapon" id="option2"autocomplete="off"><div class="itemText2">Two handed weapon</div>
				</label>	
			</div>';
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
			echo '<option id="None" value="0">None</option>';
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Neck'){
			echo '<option>Select item: Neck</option>';
			echo '<option id="None" value="0">None</option>';
			echo '<option id="Salve amulet" value="0">Salve amulet</option>';
			echo '<option id="Salve amulet (e)" value="0">Salve amulet (e)</option>';
			echo '<option id="Salve amulet (ei)" value="0">Salve amulet (ei)</option>';
			getStrengthBonus($itemSlot);
			
		}
		elseif($itemSlot == 'Weapon'){
			echo '<option>Select item: Weapon</option>';
			echo '<option id="None" value="0">None</option>';
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == '2h'){
			echo '<option>Select item: 2h</option>';
			echo '<option id="None" value="0">None</option>';
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Body'){
			echo '<option>Select item: Body</option>';
			echo '<option id="None" value="0">None</option>';
			echo '<option id="Void knight top" value="0">Void knight top</option>';	
			echo '<option id="Elite void top" value="0">Elite void top</option>';	
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Shield'){
			echo '<option>Select item: Shield</option>';
			echo '<option id="None" value="0">None</option>';
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Legs'){
			echo '<option>Select item: Legs</option>';
			echo '<option id="None" value="0">None</option>';
			echo '<option id="Void knight robe" value="0">Void knight robe</option>';	
			echo '<option id="Elite void robe" value="0">Elite void robe</option>';	
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Hands'){
			echo '<option>Select item: Hands</option>';
			echo '<option id="None" value="0">None</option>';
			echo '<option id="Void knight gloves" value="0">Void knight gloves</option>';	
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Feet'){
			echo '<option>Select item: Feet</option>';
			echo '<option id="None" value="0">None</option>';
			getStrengthBonus($itemSlot);
		}
		elseif($itemSlot == 'Ring'){
			echo '<option>Select item: Ring</option>';
			echo '<option id="None" value="0">None</option>';
			getStrengthBonus($itemSlot);
		}

	echo '<div id="currentSlot" value="'.$itemSlot.'"></div>';
	echo '</select>';
	}
}
//For each slot will make a mysql query where strength > 0 and display all options in dropdown with value as the strength bonus so that we can get the str bonus by value getElementById('').value;



?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">

$('#selectOption1 .btn').on('click', function(event) {
	console.log($(this).find('input').val());
	var itemSlot = $(this).find('input').val();
	if(itemSlot==='Weapon'){
		populateSlot(itemSlot,'#selectMenu2');
	}
	if(itemSlot==='2h'){
		populateSlot(itemSlot,'#selectMenu2');
	}
});

	$("#selectOption2").change(function () {
		var strengthBonus = this.value;
		itemName = $(this).children(":selected").attr("id");
		itemSlot = $(this).children('option:first').val();
		itemSlot = itemSlot.substring(itemSlot.indexOf(":")+2);
		$('#itemSlotField').empty();
		$('#selectMenu2').empty();
		selectedItemChanges(itemName,strengthBonus,itemSlot);
		//Special cases for item dropdown selection
		if(itemName=='Abyssal bludgeon'){
			$('#prayerDiv').show();
		}

		if((itemSlot==='Weapon')||(itemSlot==='2h')){
			if((itemName=='Arclight')||(itemName=='Darklight')||(itemName=='Silverlight')){
				$('#demon').prop('disabled', false);
				var isDisabled = $('#slayerTask').is(':disabled');
				if(!(isDisabled)){
					$('#demonSlayerTask').prop('disabled', false);	
				}
			}
			else{
				$('#demon').prop('disabled', true);
				$('#demonSlayerTask').prop('disabled', true);
			}
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
				var isDisabled = $('#demon').is(':disabled');
				if(!(isDisabled)){
					$('#demonSlayerTask').prop('disabled', false);	
				}

			}
			else{
				$('#slayerTask').prop('disabled', true);
				$('#demonSlayerTask').prop('disabled', true);
			}
		}
	});

	function populateSlot(itemSlot,updateField) {//Gets the items by slot from the DB and assigns them to the dropdown selected
		//$('#selectMenu2').empty();
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
		//$('#selectOption2').empty();
	}
		/*
	function selectedItemChanges(itemName,strengthBonus,itemSlot) {//This is where the text and str bonuses for slots are updated
		if (itemSlot=='2h'){
			var updateField = '#WeaponSlot';
		}
		else{
			var updateField = '#'+itemSlot+'Slot';
		}

		//Dharok set special cases
		if(!((itemName=="Dharok's greataxe") || (itemName=="Dharok's greataxe 100") || (itemName=="Dharok's greataxe 75") || (itemName=="Dharok's greataxe 50") || (itemName=="Dharok's greataxe 25"))&&(updateField == '#WeaponSlot') )
		{
			$("#hpDiv").addClass('hidden');
		}
		else if( (document.getElementById("HeadValue")) && (document.getElementById("BodyValue")) && (document.getElementById("LegsValue")) )
		{
			if( (document.getElementById("HeadValue").innerHTML=="Dharok's helm")&&(document.getElementById('BodyValue').innerHTML=="Dharok's platebody")&&(document.getElementById('LegsValue').innerHTML=="Dharok's platelegs") )
			{
				$("#hpDiv").removeClass('hidden');
			}
		}
		
		if( (!(itemName=="Dharok's helm")) && (updateField == '#HeadSlot') ){
			$("#hpDiv").addClass('hidden');
		}
		if( (!(itemName=="Dharok's platelegs")) && (updateField == '#LegsSlot') ){
			$("#hpDiv").addClass('hidden');
		}
		if( (!(itemName=="Dharok's platebody")) && (updateField == '#BodySlot') ){
			$("#hpDiv").addClass('hidden');
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
			if(itemName=='None'){
				$(updateField+'ImageDiv').removeClass("darkBg border-left border-right border-top border-dark");
			}
			else{
				$(updateField+'ImageDiv').addClass("darkBg border-left border-right border-top border-dark");
			}
			updateTotalStrength(strengthBonus,itemSlot);
			updateIcon(itemName,itemSlot);
	}

	function updateIcon(itemNameIcon,itemSlot) {
		if (itemSlot=='2h'){
			var updateField = '#WeaponSlotImageDiv';
		}
		else{
			var updateField = '#'+itemSlot+'SlotImageDiv';
		}
		console.log(updateField);
		//$(updateField).empty();
		data = {itemNameIcon: itemNameIcon,itemSlot: itemSlot};
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
	}
*/

</script>


