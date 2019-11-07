//Disable drop down values for monster type
$('#undead').prop('disabled', true);
$('#slayerTask').prop('disabled', true);
$('#demon').prop('disabled', true);
$('#demonSlayerTask').prop('disabled', true);

function getRequirements(diary) {
	table = "#table"+diary;
	data ={diary: diary};

	if(document.getElementById('radioChar1')){//Check if exists
		if(document.getElementById('radioChar1').checked){
	  		char = document.getElementById('radioChar1').value;
			data ={diary: diary, char: char};
		}
	}	
	if(document.getElementById('radioChar2')){//Check if exists
		if(document.getElementById('radioChar2').checked){
	  		char = document.getElementById('radioChar2').value;

			data ={diary: diary, char: char};
		}
	}	
	if(document.getElementById('radioChar3')){//Check if exists
		if(document.getElementById('radioChar3').checked){
	  		char = document.getElementById('radioChar3').value;
			data ={diary: diary, char: char};
		}
	}	
	if(document.getElementById('radioChar4')){//Check if exists
		if(document.getElementById('radioChar4').checked){
	  		char = document.getElementById('radioChar4').value;
			data ={diary: diary, char: char};
		}
	}

		$.ajax({
			type: "POST",
			url: "cluescroll/cluescrollRequirements.php",
			data: data,
			cache: false,

			success: function(data) {
			$(table).html(data);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				       alert(xhr.status);
       				 alert(thrownError);
			}
		});
	}

function populateSlot(itemSlot,updateField) {
	data = {itemSlot: itemSlot};
	//updateField = '#itemSlotField';
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
		$('#maxHitSpec').hide();
		$('#maxHitSpec').hide();
	}

function getCharacterStrength() {
	if (document.getElementById('radioChar1').checked) {
		var characterName = document.getElementById('radioChar1').value;
	}
	else if (document.getElementById('radioChar2').checked) {
		var characterName = document.getElementById('radioChar2').value;
	}
	else if (document.getElementById('radioChar3').checked) {
		var characterName = document.getElementById('radioChar3').value;
	}
	else if (document.getElementById('radioChar4').checked) {
		var characterName = document.getElementById('radioChar4').value;
	}
	
	data = {characterName: characterName};
	updateField = '#strengthLevelDiv';
		$.ajax({
			type: "POST",
			url: "maxHitScripts/maxHitQueries.php",
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

function getSpecialAttack(weapon,maxHit,prayerMissing,maxHP,currentHP,enemyType,setName,berserkerNecklace) {
	data = {weapon: weapon, maxHit : maxHit, prayerMissing : prayerMissing,maxHP : maxHP,currentHP : currentHP,enemyType : enemyType,setName : setName,berserkerNecklace : berserkerNecklace};
		$.ajax({
			type: "POST",
			url: "maxHitScripts/specialAttacks.php",
			data: data,
			cache: false,

			success: function(data) {
			$('#maxHitSpec').html(data);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				       alert(xhr.status);
       				 alert(thrownError);
			}
		});
	}


function updateTotalStrength(strengthBonus, itemSlot) {//Needs to be called after each item is added and completely recalculated in-case items are rechosen
	totalStrength = document.getElementById('currentStrengthBonus').innerHTML;
	if(itemSlot=='2h-weapon')//Cannot have a shield with a 2h weapon
	{
		if(document.getElementById('WeaponPlaceholder')){
			strengthToSubtract = document.getElementById('WeaponPlaceholder').innerHTML;
			strengthToSubtract = strengthToSubtract.substring(strengthToSubtract.indexOf(":")+3);
			totalStrength = parseInt(totalStrength) - parseInt(strengthToSubtract);
		}
		if(document.getElementById('ShieldPlaceholder')){
			subtractShieldBonus = document.getElementById('ShieldPlaceholder').innerHTML;
			subtractShieldBonus = subtractShieldBonus.substring(subtractShieldBonus.indexOf(":")+3);
			totalStrength = parseInt(totalStrength) - parseInt(subtractShieldBonus);
		}
		$('#ShieldSlot').text('Unavailable: 2 handed weapon');
		$('#ShieldSlot').addClass('text-danger');
		$('#prayerMissing').val("");
		$('#prayerDiv').hide();
	}

	if(itemSlot=='Shield')//Cannot have a 2h weapon with a shield
	{
		$('#ShieldSlot').removeClass('text-danger');
		if(document.getElementById('2h-weaponPlaceholder')){
			//var test = document.getElementById('2h-weaponPlaceholder');
			subtract2HandedBonus = document.getElementById('2h-weaponPlaceholder').innerHTML;
			subtract2HandedBonus = subtract2HandedBonus.substring(subtract2HandedBonus.indexOf(":")+3);

			totalStrength = parseInt(totalStrength) - parseInt(subtract2HandedBonus);
			$('#WeaponSlot').text('None');
		}
		$('#prayerMissing').val("");
		$('#prayerDiv').hide();
	}
	if(itemSlot=='Weapon')
	{
		$('#ShieldSlot').removeClass('text-danger');
		if(document.getElementById('2h-weaponPlaceholder')){
			strengthToSubtract = document.getElementById('2h-weaponPlaceholder').innerHTML;
			strengthToSubtract = strengthToSubtract.substring(strengthToSubtract.indexOf(":")+3);
			totalStrength = parseInt(totalStrength) - parseInt(strengthToSubtract);
			$('#ShieldSlot').text('None');
		}
		$('#prayerMissing').val("");
		$('#prayerDiv').hide();
	}


	if(document.getElementById(itemSlot+'Placeholder')){//This slot has already been selected so we need to subtract the prior strength value
		strengthToSubtract = document.getElementById(itemSlot+'Placeholder').innerHTML;
		strengthToSubtract = strengthToSubtract.substring(strengthToSubtract.indexOf(":")+3);
		totalStrength = parseInt(totalStrength) - parseInt(strengthToSubtract);
	}
	totalStrength = parseInt(totalStrength) + parseInt(strengthBonus);
	document.getElementById('currentStrengthBonus').innerHTML=totalStrength; 
}

function addActive(diary){	
	$('#table'+diary).removeClass('hidden');
	$('#'+diary).addClass('active');
	$('#'+diary).attr("onclick","hide(this.id)");
}

function hide(diary){
	$('#table'+diary).addClass('hidden');
	$('#'+diary).removeClass('active');
	$('#'+diary).attr("onclick","getRequirements(this.id)");
}

function hideElement(elementId)
{
	$( "#table"+elementId).hide();

	$( "#hidebutton"+elementId).hide();
	$( "#showbutton"+elementId).show();

}
function showElement(element)
{
	$(element).removeClass('hidden');
	$(element).show();
}

function calculateMaxHit(){

	var strengthBonus = parseInt(document.getElementById('currentStrengthBonus').innerHTML);
	var strengthLevel = parseInt(document.getElementById('strengthLevel').value);
	var boost = document.getElementById('boost').value;
	var prayer = document.getElementById('prayer').value;
	var attackStyle = document.getElementById('attackStyle').value;
	var enemyType = document.getElementById('enemyType').value;
	var otherBonus = parseFloat('1.00');
	var salveBonus = parseFloat('1.00');
	var slayerBonus = parseFloat('1.00');
	var strengthLevelBool = false;
	var attackStyleBool = false;
	var specialAttack = parseFloat('1.00');
	var prayerMissing = document.getElementById('prayerMissing').value;
		var maxHP = parseInt(document.getElementById('maxHP').value);	
		var currentHP = parseInt(document.getElementById('currentHP').value);	
	var setName = 'None';
	var salve=false;
	var slayerHelm=false;
	var berserkerNecklace=false;
	if(strengthLevel==''){
		document.getElementById('strengthLevelMessage').innerHTML = 'Please enter a number 1-99';
	}
	else
	{
		if(isNaN(strengthLevel)){
			document.getElementById('strengthLevelMessage').innerHTML = 'Please enter a number 1-99';
		}	
		else
		{
			if((strengthLevel > 0)&&(strengthLevel < 100)){//Valid Strength level
				document.getElementById('strengthLevelMessage').innerHTML = "";
				strengthLevelBool = true;
			}
			else{
				document.getElementById('strengthLevelMessage').innerHTML = 'Strength must be between 1-99';
			}
		}
	}

	if(attackStyle =="Select style"){
		$('#attackStyleMessage').removeClass('hidden');
	}
	else{
		$('#attackStyleMessage').addClass('hidden');
		attackStyleBool = true;
		
	}

	if((attackStyleBool)&&(strengthLevelBool))//Good to calculate the max hit
	{		
		//Calculate potion bonus
		if(boost=="None"){
			boost = parseFloat('0.00');
		}
		else if((boost=="Strength potion")||(boost=="Combat potion")){
			boost = parseFloat(strengthLevel*0.10)+parseFloat(3);
		}
		else if((boost=="Super strength potion")||(boost=="Super combat potion")||(boost=="Overload potion(Nightmare Zone)")){
			boost = parseFloat(strengthLevel*0.15)+parseFloat(5);
		}
		else if(boost=="Zamorak brew"){
		boost = parseFloat(strengthLevel*0.12)+parseFloat(2);
		}
		else if(boost=="Overload potion(-)"){
			boost = parseFloat(strengthLevel*0.10)+parseFloat(4);
		}
		else if(boost=="Overload potion(Chambers of Xeric)"){
			boost = parseFloat(strengthLevel*0.13)+parseFloat(5);
		}
		else if(boost=="Overload potion(+)"){
			boost = parseFloat(strengthLevel*0.16)+parseFloat(6);
		}
		boost = parseInt(Math.floor(boost));

		switch(attackStyle){//Convert attackStyle to integer value
			case 'Accurate':
			attackStyle = parseInt('0');
			break;
			case 'Aggressive':
			attackStyle = parseInt('3');
			break;
			case 'Controlled':
			attackStyle = parseInt('1');
			break;
			case 'Defensive':
			attackStyle = parseInt('0');
			break;
		}

		switch(prayer){//Convert prayer bonus to integer value
			case 'None':
			prayer = parseFloat('1.00');
			break;
			case 'Burst of Strength':
			prayer = parseFloat('1.05');
			break;
			case 'Superhuman Strength':
			prayer = parseFloat('1.10');
			break;
			case 'Ultimate Strength':
			prayer = parseFloat('1.15');
			break;
			case 'Chivalry':
			prayer = parseFloat('1.18');
			break;
			case 'Piety':
			prayer = parseFloat('1.23');
			break;
		}		

		if(($('#WeaponPlaceholder').length == 0)&&($('#2h-weaponPlaceholder').length == 0)){//Calculate special attack max hit
			//alert('there is no weapon');
		}
		else{
			if($('#WeaponPlaceholder').length > 0){
				var weapon=document.getElementById('WeaponPlaceholder').innerHTML;
			}
			if($('#2h-weaponPlaceholder').length > 0){
				var weapon=document.getElementById('2h-weaponPlaceholder').innerHTML;
			}
			if(weapon=='Dragon hunter lance: +70'){
				otherBonus+=0.20;
			}
			weapon = weapon.substr(0, weapon.indexOf(':'));

			if(weapon=='Dragon hunter lance'){
				if(enemyType=='Undead'){
					enemyText='When fighting an undead dragon';
				}
				else if(enemyType=='Slayer Task'){
					enemyText='When fighting a dragon slayer assignment';
				}
				else{
					enemyText='When fighting a dragon';
				}
			}
			else{
				if(enemyType=='Undead'){
					enemyText='When fighting undead enemies';
				}
				else if(enemyType=='Slayer Task'){
					enemyText='When fighting a slayer assignment';
				}
				else if(enemyType=='Demon Slayer Task'){
					enemyText='When fighting a demon slayer assignment';
				}
				else if(enemyType=='Demon'){
					enemyText='When fighting a demon';
				}

				else{
					enemyText="";
				}
			}
			document.getElementById('enemyText').innerHTML=enemyText;

			//Need special case for Dharok set, Berserker neck with obby armor and obby weapon

		}	
	
		//Calculate set bonus if any

		if($('#NeckPlaceholder').length > 0){//If the div exists
			var neck = document.getElementById('NeckPlaceholder').innerHTML;
		}
		else{
			var neck = 'None';
		}
		
		if((neck==="Salve amulet (e): +0")||(neck==="Salve amulet (ei): +0"))
		{	
			salveBonus= parseFloat('1.20');
		}
		else if(neck==="Salve amulet: +0"){
			salveBonus = parseFloat('1.15')
		}
		else if(neck==="Berserker necklace: +7"){
			berserkerNecklace = true;
		}

		//Helmet percent bonus
		if($('#HeadPlaceholder').length > 0){//If the div exists
			var helm = document.getElementById('HeadPlaceholder').innerHTML;
		}
		else{
			var helm = 'None';
		}

		if(helm==='Slayer helmet: +0'){
			slayerBonus = parseFloat('1.1667');	
		}
		else if(helm==='Void melee helm: +0')//Need to check to see if the void melee set is chosen
		{
			if($('#HandsPlaceholder').length > 0){//If the div exists
				var gloves = document.getElementById('HandsPlaceholder').innerHTML; 
			}
			else{
				var gloves = 'None';
			}

			if($('#BodyPlaceholder').length > 0){//If the div exists
				var body = document.getElementById('BodyPlaceholder').innerHTML;
			}
			else{
				var body = 'None';
			}

			if($('#LegsPlaceholder').length > 0){//If the div exists
				var legs = document.getElementById('LegsPlaceholder').innerHTML;
			}
			else{
				var legs = 'None';
			}

			if((gloves==='Void knight gloves: +0')&&((body==='Void knight top: +0')||(body==='Elite void top: +0'))&&((legs==='Void knight robe: +0')||(legs==='Elite void robe: +0')))
			{	
				otherBonus +=parseFloat(0.10);
			}
		}
		else if(helm==='Obsidian helmet: +3')//Need to check to see if the obsidian set is chosen
		{
			if($('#BodyPlaceholder').length > 0){//If the div exists
				var body = document.getElementById('BodyPlaceholder').innerHTML;
			}
			else{
				var body = 'None';
			}

			if($('#LegsPlaceholder').length > 0){//If the div exists
				var legs = document.getElementById('LegsPlaceholder').innerHTML;
			}
			else{
				var legs = 'None';
			}

			if((body==='Obsidian platebody: +3')&&(legs==='Obsidian platelegs: +1'))
			{	
				setName='obsidian';
			}
		}
		else if((helm==="Dharok's helm: +0")&&(weapon))//Need to check to see if the obsidian set is chosen
		{
			if($('#BodyPlaceholder').length > 0){//If the div exists
				var body = document.getElementById('BodyPlaceholder').innerHTML;
			}
			else{
				var body = 'None';
			}

			if($('#LegsPlaceholder').length > 0){//If the div exists
				var legs = document.getElementById('LegsPlaceholder').innerHTML;
			}
			else{
				var legs = 'None';
			}

			if((body==="Dharok's platebody: +0")&&(legs==="Dharok's platelegs: +0")&&(weapon==="Dharok's greataxe"))
			{	
				setName="dharok's";
			}
		}
			//Calculate effective strength
			effectiveStrength = Math.floor((strengthLevel+boost)*prayer);
			effectiveStrength += attackStyle;
			effectiveStrength += 8;
			effectiveStrength = Math.floor(effectiveStrength*otherBonus);
			//Calculate the base damage
			maxHit = Math.floor(0.5 + effectiveStrength * (strengthBonus + 64)/640);
			if(enemyType=="Undead"){
				maxHit = Math.floor(maxHit * salveBonus);
			}
			if((enemyType=="Slayer Task")||(enemyType=="Demon Slayer Task")){
				maxHit = Math.floor(maxHit * slayerBonus);
			}
			if(((enemyType=='Demon')||(enemyType=="Demon Slayer Task"))&&(weapon=='Arclight')){
				maxHit = Math.floor(maxHit * 1.70);
			}
			if(((enemyType=='Demon')||(enemyType=="Demon Slayer Task"))&&((weapon=='Darklight')||(weapon=='Silverlight'))){
				maxHit = Math.floor(maxHit * 1.60);
			}
			document.getElementById('currentMaxHit').innerHTML=maxHit;//Update max hit element

			if(maxHit>=10){
				$('#currentMaxHit').removeClass('maxHitText1Digit');
				$('#currentMaxHit').addClass('maxHitText2Digit');
			}
			else{
				$('#currentMaxHit').removeClass('maxHitText2Digit');
				$('#currentMaxHit').addClass('maxHitText1Digit');
			}
			showElement('#maxHit');
			showElement('#maxHitSpec');
			if(weapon){//If weapon is selected calc weapon spec
				getSpecialAttack(weapon,maxHit,prayerMissing,maxHP,currentHP,enemyType,setName,berserkerNecklace);
			}

	}


}


//Item Sets
$(document).ready(function () {//Grabs the values for the selected set to be assigned to the associated slots by calling selectedItemChanges

	$(function(){
		$("#sets").change(function () {
		var set = this.value;
		if(set=='Void'){
			selectedItemChanges('Void melee helm','0','Head');
			selectedItemChanges('Void knight gloves','0','Hands');
			selectedItemChanges('Void knight top','0','Body');
			selectedItemChanges('Void knight robe','0','Legs');
		}
		if(set=='Elite Void'){
			selectedItemChanges('Void melee helm','0','Head');
			selectedItemChanges('Void knight gloves','0','Hands');
			selectedItemChanges('Elite void top','0','Body');
			selectedItemChanges('Elite void robe','0','Legs');
		}
		if(set=='Obsidian'){
			selectedItemChanges('Obsidian helmet','3','Head');
			selectedItemChanges('Obsidian platebody','3','Body');
			selectedItemChanges('Obsidian platelegs','1','Legs');
		}
		if(set=="Dharok's"){
			selectedItemChanges("Dharok's helm",'0','Head');
			selectedItemChanges("Dharok's platebody",'0','Body');
			selectedItemChanges("Dharok's platelegs",'0','Legs');
			selectedItemChanges("Dharok's greataxe",'105','2h-weapon');
			$("#hpDiv").removeClass('hidden');
		}

		});
	});
});
//

////////////////////////////////////////////////////////////////////////////////////////////////Get Slot Items.php


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



