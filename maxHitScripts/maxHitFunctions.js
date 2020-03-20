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
					$('#selectMenu2').empty();
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
	$('#maxHit').hide();
	$('#maxHitSpec').hide();
	$('#enemyText').hide();
	if(itemSlot=='2h')//Cannot have a shield with a 2h weapon
	{
		if(document.getElementById('WeaponPlaceholder')){
			strengthToSubtract = document.getElementById('WeaponPlaceholder').innerHTML;
			strengthToSubtract = strengthToSubtract.substring(strengthToSubtract.indexOf(" +")+1);
			totalStrength = parseInt(totalStrength) - parseInt(strengthToSubtract);
		}
		if(document.getElementById('ShieldPlaceholder')){
			subtractShieldBonus = document.getElementById('ShieldPlaceholder').innerHTML;
			subtractShieldBonus = subtractShieldBonus.substring(subtractShieldBonus.indexOf(" +")+1);
			totalStrength = parseInt(totalStrength) - parseInt(subtractShieldBonus);
		}
		$('#ShieldSlot').text('Unavailable: 2h');
		$('#ShieldPlaceholder').addClass('text-danger border-left border-right border-bottom border-dark');
		$('#ShieldSlotImageDiv').addClass("darkBg border-left border-right border-top border-dark");
		$('#ShieldIcon').attr("src","images/slot_images/Shield_slot.png")
           		 .width('32px')
           		 .height('32px');
		$('#prayerMissing').val("");
		$('#prayerDiv').hide();
		$('#ShieldSlot').addClass('text-danger');
	}

	if(itemSlot=='Shield')//Cannot have a 2h weapon with a shield
	{
		$('#ShieldSlot').removeClass('text-danger');
		if(document.getElementById('2hPlaceholder')){
			//var test = document.getElementById('2hPlaceholder');
			subtract2HandedBonus = document.getElementById('2hPlaceholder').innerHTML;
			subtract2HandedBonus = subtract2HandedBonus.substring(subtract2HandedBonus.indexOf(" +")+1);

			totalStrength = parseInt(totalStrength) - parseInt(subtract2HandedBonus);
			$('#WeaponSlot').text('None');
			$('#WeaponSlotImageDiv').addClass("darkBg border-left border-right border-top border-dark");
			$('#2hIcon').attr("src","images/slot_images/Weapon_slot.png")
			.width('32px')
			.height('32px');
		}
		$('#prayerMissing').val("");
		$('#prayerDiv').hide();
	}
	if(itemSlot=='Weapon')
	{
		//$('#ShieldSlot').removeClass('text-danger');
		if(document.getElementById('2hPlaceholder')){
			strengthToSubtract = document.getElementById('2hPlaceholder').innerHTML;
			strengthToSubtract = strengthToSubtract.substring(strengthToSubtract.indexOf(" +")+1);
			totalStrength = parseInt(totalStrength) - parseInt(strengthToSubtract);
			$('#ShieldSlot').text('None');
			$('#ShieldIcon').attr("src","images/slot_images/Shield_slot.png");
		}
		$('#prayerMissing').val("");
		$('#prayerDiv').hide();
	}

	if(document.getElementById(itemSlot+'Placeholder')){//This slot has already been selected so we need to subtract the prior strength value
		strengthToSubtract = document.getElementById(itemSlot+'Placeholder').innerHTML;
		strengthToSubtract = strengthToSubtract.substring(strengthToSubtract.indexOf(" +")+1);
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

		if(($('#WeaponPlaceholder').length == 0)&&($('#2hPlaceholder').length == 0)){//Calculate special attack max hit
			//there is no weapon
		}
		else{
			if($('#2hValue').length > 0){
				var weapon=document.getElementById('2hValue').innerHTML;
			}
			if($('#WeaponValue').length > 0){
				var weapon=document.getElementById('WeaponValue').innerHTML;
			}
			if(weapon=='Dragon hunter lance'){
				otherBonus+=0.20;
				enemyText='When fighting a dragon';
			}
		}
		
		if($('#NeckValue').length > 0){//If the div exists
			var neck = document.getElementById('NeckValue').innerHTML;
		}
		else{
			var neck = 'None';
		}
		
		
		//Helmet percent bonus
		if($('#HeadValue').length > 0){//If the div exists
			var helm = document.getElementById('HeadValue').innerHTML;
		}
		else{
			var helm = 'None';
		}
		
		if(enemyType=='undead'){
			if(weapon=='Dragon hunter lance'){
				enemyText='When fighting an undead dragon';
			}
			else{
				enemyText='When fighting undead enemies';
			}
			if((neck==="Salve amulet (e)")||(neck==="Salve amulet(ei)"))
			{	
				salveBonus= parseFloat('1.20');
			}
			else if(neck==="Salve amulet"){
				salveBonus = parseFloat('1.15')
			}
		}
		else if((enemyType=='slayerTask')||(enemyType=='demonSlayerTask')){
			if(weapon=='Dragon hunter lance'){
				enemyText='When fighting a dragon slayer assignment';
			}
			else{
				enemyText='When fighting a slayer assignment';
			}
			if(helm==='Slayer helmet'){
				slayerBonus = parseFloat('1.1667');	
			}
		}
		else if(enemyType=='demonSlayerTask'){
			enemyText='When fighting a demon slayer assignment';
		}
		else if(enemyType=='demon'){
			enemyText='When fighting a demon';
		}
		else{
			if(weapon!=='Dragon hunter lance'){
				enemyText="";
			}
			salveBonus = parseFloat('1.00')
			slayerBonus = parseFloat('1.00');
		
		}
		document.getElementById('enemyText').innerHTML=enemyText;
		
		//Calculate set bonus if any
		
		if ( (neck==="Berserker necklace")||(neck==="Berserker necklace (or)") ){
			berserkerNecklace = true;
		}
		
		if(helm==='Void melee helm')//Need to check to see if the void melee set is chosen
		{
			if($('#HandsValue').length > 0){//If the div exists
				var gloves = document.getElementById('HandsValue').innerHTML; 
			}
			else{
				var gloves = 'None';
			}

			if($('#BodyValue').length > 0){//If the div exists
				var body = document.getElementById('BodyValue').innerHTML;
			}
			else{
				var body = 'None';
			}

			if($('#LegsValue').length > 0){//If the div exists
				var legs = document.getElementById('LegsValue').innerHTML;
			}
			else{
				var legs = 'None';
			}

			if((gloves==='Void knight gloves')&&((body==='Void knight top')||(body==='Elite void top'))&&((legs==='Void knight robe')||(legs==='Elite void robe')))
			{	
				otherBonus +=parseFloat(0.10);
			}
		}
		else if(helm==='Obsidian helmet')//Need to check to see if the obsidian set is chosen
		{
			if($('#BodyValue').length > 0){//If the div exists
				var body = document.getElementById('BodyValue').innerHTML;
			}
			else{
				var body = 'None';
			}

			if($('#LegsValue').length > 0){//If the div exists
				var legs = document.getElementById('LegsValue').innerHTML;
			}
			else{
				var legs = 'None';
			}

			if((body==='Obsidian platebody')&&(legs==='Obsidian platelegs'))
			{	
				setName='obsidian';
			}
		}
		else if((helm==="Dharok's helm")&&(weapon))//Need to check to see if the dharok set is chosen
		{
			if($('#BodyValue').length > 0){//If the div exists
				var body = document.getElementById('BodyValue').innerHTML;
			}
			else{
				var body = 'None';
			}

			if($('#LegsValue').length > 0){//If the div exists
				var legs = document.getElementById('LegsValue').innerHTML;
			}
			else{
				var legs = 'None';
			}

			if((body==="Dharok's platebody")&&(legs==="Dharok's platelegs")&&( (weapon==="Dharok's greataxe") || (weapon==="Dharok's greataxe 100") || (weapon==="Dharok's greataxe 75") || (weapon==="Dharok's greataxe 50") || (weapon==="Dharok's greataxe 25") ))
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
			if(enemyType=="undead"){
				maxHit = Math.floor(maxHit * salveBonus);
			}
			if((enemyType=="slayerTask")||(enemyType=="demonSlayerTask")){
				maxHit = Math.floor(maxHit * slayerBonus);
			}
			if(((enemyType=='demon')||(enemyType=="demonSlayerTask"))&&(weapon=='Arclight')){
				maxHit = Math.floor(maxHit * 1.70);
			}
			if(((enemyType=='demon')||(enemyType=="demonSlayerTask"))&&((weapon=='Darklight')||(weapon=='Silverlight'))){
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
			showElement('#enemyText');
			if(weapon){//If weapon is selected calc weapon spec
				getSpecialAttack(weapon,maxHit,prayerMissing,maxHP,currentHP,enemyType,setName,berserkerNecklace);
			}
	}
}
	function selectedItemChanges(itemName,strengthBonus,itemSlot) {//This is where the text and str bonuses for slots are updated
		if (itemSlot=='2h'){
			var updateField = '#WeaponSlot';
		}
		else{
			var updateField = '#'+itemSlot+'Slot';
		}
		
		if (itemSlot=='Head'){
			if(itemName=="Slayer helmet"){
				$("#enemyType").append('<option id="slayerTask" value="slayerTask">Slayer Task</option>');
				ifExists=$("#enemyType option[value='demon']").length > 0;
				if(ifExists){
					$("#enemyType").append('<option id="demonSlayerTask" value="demonSlayerTask">Demon Slayer Task</option>');
				}
			}
			else{
				$("#enemyType option[value='slayerTask']").remove();
				$("#enemyType option[value='demonSlayerTask']").remove();
			}
		}
		
		if (itemSlot=='Neck'){
			if((itemName=="Salve amulet")||(itemName=="Salve amulet (e)")||(itemName=="Salve amulet(ei)")||(itemName=="Salve amulet(i)")){
				$("#enemyType").append('<option id="undead" value="undead">Undead</option>');
			}
			else{
				$("#enemyType option[value='undead']").remove();	
			}
		}
		
		if ((itemSlot=='Weapon')||(itemSlot=='2h')){
			if((itemName=="Arclight")||(itemName=="Darklight")||(itemName=="Silverlight")){
				$("#enemyType").append('<option id="demon" value="demon">Demon</option>');
				ifExists=$("#enemyType option[value='slayerTask']").length > 0;
				if(ifExists){
					$("#enemyType").append('<option id="demonSlayerTask" value="demonSlayerTask">Demon Slayer Task</option>');
				}
			}
			else{
				$("#enemyType option[value='demonSlayerTask']").remove();
				$("#enemyType option[value='demon']").remove();
			}
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
//Item Sets

//Grabs the values for the selected set to be assigned to the associated slots by calling selectedItemChanges

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
			selectedItemChanges("Dharok's greataxe",'105','2h');
			$("#hpDiv").removeClass('hidden');
		}
		if(set=="Max Strength"){
			selectedItemChanges("Neitiznot faceguard",'6','Head');
			selectedItemChanges("Avernic defender",'8','Shield');
			selectedItemChanges("Infernal cape",'8','Cape');
			selectedItemChanges("Bandos tassets",'2','Legs');
			selectedItemChanges("Amulet of torture",'10','Neck');
			selectedItemChanges("Ferocious gloves",'14','Hands');
			selectedItemChanges("Ghrazi rapier",'89','Weapon');			
			selectedItemChanges("Primordial boots",'5','Feet');		
			selectedItemChanges("Bandos chestplate",'4','Body');	
			selectedItemChanges("Berserker ring (i)",'8','Ring');				
		}
		});



