<?php
include('cluescrollRequirementArray.php');

if(isset($_POST['diary'])){
	
	if(isset($_POST['char'])){
		include_once('../achievementScripts/achievementQueries.php');
		include_once('../homeScripts/combatCalc.php');
		$char = htmlspecialchars($_POST['char']);
		$statsArr=getLevels($char);
		//var_dump($statsArr);
		$combatLevel = getCombatLevel($statsArr['attack'],$statsArr['defence'],$statsArr['strength'],$statsArr['hitpoints'],$statsArr['ranged'],$statsArr['prayer'],$statsArr['magic']);
		//var_dump($combatLevel);
		$statsArr['combat']=$combatLevel[0];
	$skillsArray =array("Overall","Attack","Defence","Strength","Hitpoints","Ranged","Prayer","Magic","Cooking","Woodcutting","Fletching","Fishing","Firemaking","Crafting","Smithing","Mining","Herblore","Agility","Thieving","Slayer","Farming","Runecraft","Hunter","Construction");
	
	$miscArray=array("Combat","Attack/Strength","Any99");
	}
	$diary = $_POST['diary'];
	$result = getArray($diary);
	$path ="../images/ability_icons/";

	$i=1;


	///////////////////////////////////////////////////////////////
	if(sizeof($result[0])=='4'){//4 columns in table (task/quest/skill/item)
		echo '
		<div class="container-fluid w-100 p-0 text-left">	
		<div class="table-responsive">
		<table class="table-dark table-sm w-100">';
		if(isset($_POST['char']))
		{
			echo '
			<tr class="border">
				<td colspan="4"><h5 class="text-center text-primary pt-2">Using character '."'".$statsArr['username']."'".'</h5></td>
			</tr>
			';
		}
		echo'
		<tr>
		<th class="border-right text-center">Tasks</th>
		<th class="border-right text-center">Quest(s)</th>
		<th class="border-right text-center">Skill(s)</th>
		<th class="text-center">Items/Notes</th>
		</tr>';
		$level = 0;
		foreach($result as $task){
		if(is_array($task)){//If it is an array it is a task, if it is not it is the reward 
			$skills = explode(',',$task['skill']);	
				echo'
				<tr>
				<td width="10%" class="border pl-2">'.$i.". ".$task['task'].'</td>
				<td width="4%" class="border text-center">'.$task['quest'].'</td>
				<td width="4%" class="border text-center">';
				if($skills[0]=="None"){
				echo $skills[0];
				}
				else{
					foreach($skills as $skill){
						$skill = explode(':',$skill);
			
						foreach($skill as $stat){
							$statLower = strtolower($stat);
							if(file_exists($path.$stat.'.png')){
								echo'<img src="images/ability_icons/'.$stat.'.png">';
								$currentStat=$stat;
							}
							elseif($stat=="Attack/Strength"){//Recommended not required level
								echo'<img src="images/ability_icons/Attack.png">';
								echo'+ ';
								echo'<img src="images/ability_icons/Strength.png">';
							}
							else{
								if($level == 0){
									if($stat=="High recommended"){
									echo($stat.'</br>');
									}
									else{
										echo($stat.'</br>');
									}
								}
								else{
									if($level>=$stat){
										if(($stat=="High recommended")||($stat=="Decent recommended")){//Recommended not required level
											echo $stat.'</br>';
											echo '<div>Current level '.$level.'</div>';
										}								
										else{
											echo '<s>'.$stat.'</s></br>';
											echo '<div class="text-success">Current level '.$level.'</div>';
										}
									}
									elseif(($level+5)>=$stat){
										echo($stat.'</br>');
										if($currentStat=='Attack'||$currentStat=='Strength'||$currentStat=='Defence'||$currentStat=='Ranged'||$currentStat=='Prayer'||$currentStat=='Hitpoints')//Unboostable Stats
										{
											echo '<div class="text-danger">Current level '.$level.'</div>';
										}
										else
										{
											echo '<div class="text-warning">Current level '.$level.'</div>';
										}
									}
									else{
										echo($stat.'</br>');
										echo '<div class="text-danger">Current level '.$level.'</div>';
									}

								}
								
							}
							if(isset($_POST['char']))
							{
								if( (in_array($stat,$skillsArray)) || (in_array($stat,$miscArray)) ){
									if($stat=="Attack/Strength"){//Special case for warrior's guild requirement
										$level = ($statsArr['attack']+$statsArr['strength']);
									}						
									elseif($stat=="Any99"){//Special case for warrior's guild requirement
											foreach($skillsArray as $temp){
												$temp = strtolower($temp);
												if($statsArr[$temp]==99){
													$level = 99;
													break;
												}
												$level = 'Not 99';
											}
									}
									elseif($statsArr[$statLower]){
										$level = $statsArr[$statLower];//Level of the current requirement on selected character
									}

								}
								else{
									$level = 0;
								}
							}
						}
					}
				}
				echo
				'</td>
				<td width="15%" class="border pl-2">'.$task['item'].'</td>
				</tr>
				';
			$i++;
			}
			
		}
	}
	//////////////////////////////////////////////////////////////////////////////////////////
	if(sizeof($result[0])=='2'){//2 columns in table (Task/Skill required)
		echo '
	
		<div class="container-fluid w-100 p-0 text-left">	
		<div class="table-responsive">
		<table class="table-dark table-sm w-100">';
		if(isset($_POST['char']))
		{
			echo '
			<tr class="border">
				<td colspan="4"><h5 class="text-center text-primary pt-2">Using character '."'".$statsArr['username']."'".'</h5></td>
			</tr>
			';
		}
		if($diary=="falo"){//Falo needs special headers
			echo'
			<tr>
			<th class="border-right text-center" style="width: 60%">Lyrics</th>
			<th class="border-right text-center" style="width: 40%">Required Items</th>
			</tr>';
		}
		else{
			echo'
			<tr>
			<th class="border-right text-center" style="width: 60%">Requirement(s)</th>
			<th class="border-right text-center" style="width: 40%">Skill(s)</th>
			</tr>';
		}
		$level = 0;
		foreach($result as $task){
		if(is_array($task)){//If it is an array it is a task, if it is not it is the reward 
			$skills = explode(',',$task['skill']);	
				echo'
				<tr>
				<td class="border pl-2 text-center">'.$task['task'].'</td>
				<td class="border text-center">';
				if($skills[0]=="None"){
				echo $skills[0];
				}
				else{
					foreach($skills as $skill){
						$skill = explode(':',$skill);
			
						foreach($skill as $stat){
							$statLower = strtolower($stat);
							if(file_exists($path.$stat.'.png')){
								echo'<img src="images/ability_icons/'.$stat.'.png">';
								$currentStat=$stat;
							}
							elseif($stat=="Attack/Strength"){//Recommended not required level
								echo'<img src="images/ability_icons/Attack.png">';
								echo'+ ';
								echo'<img src="images/ability_icons/Strength.png">';
							}
							else{
								if($level == 0){
									if($stat=="High recommended"){
									echo($stat.'</br>');
									}
									else{
										echo($stat.'</br>');
									}
								}
								else{
									if($level>=$stat){
										if(($stat=="High recommended")||($stat=="Decent recommended")){//Recommended not required level
											echo $stat.'</br>';
											echo '<div>Current level '.$level.'</div>';
										}								
										else{
											echo '<s>'.$stat.'</s></br>';
											echo '<div class="text-success">Current level '.$level.'</div>';
										}
									}
									elseif(($level+5)>=$stat){
										echo($stat.'</br>');
										if($currentStat=='Attack'||$currentStat=='Strength'||$currentStat=='Defence'||$currentStat=='Ranged'||$currentStat=='Prayer'||$currentStat=='Hitpoints')//Unboostable Stats
										{
											echo '<div class="text-danger">Current level '.$level.'</div>';
										}
										else
										{
											echo '<div class="text-warning">Current level '.$level.'</div>';
										}
									}
									else{
										echo($stat.'</br>');
										echo '<div class="text-danger">Current level '.$level.'</div>';
									}

								}
								
							}
							if(isset($_POST['char']))
							{
								if( (in_array($stat,$skillsArray)) || (in_array($stat,$miscArray)) ){
									if($stat=="Attack/Strength"){//Special case for warrior's guild requirement
										$level = ($statsArr['attack']+$statsArr['strength']);
									}						
									elseif($stat=="Any99"){//Special case for warrior's guild requirement
											foreach($skillsArray as $temp){
												$temp = strtolower($temp);
												if($statsArr[$temp]==99){
													$level = 99;
													break;
												}
												$level = 'Not 99';
											}
									}
									elseif($statsArr[$statLower]){
										$level = $statsArr[$statLower];//Level of the current requirement on selected character
									}

								}
								else{
									$level = 0;
								}
							}
						}
					}
				}
			$i++;
			}
			
		}
	}
	//////////////////////////////////////////////////////////////////////////////
	
	echo'
	</table>
	</div>
	</div>
	';
}
?>
