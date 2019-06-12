<?php
include('combatCalc.php');
include('expToLevel.php');
function tableCreation ($characterStats,$charNum){
	$skillsArray = array("Overall","Attack","Defence","Strength","Hitpoints","Ranged","Prayer","Magic","Cooking","Woodcutting","Fletching","Fishing","Firemaking","Crafting","Smithing","Mining","Herblore","Agility","Thieving","Slayer","Farming","Runecraft","Hunter","Construction");
		echo '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 w-100 nopadding">';
			if($characterStats==NULL)//Check for null character
			{

				echo '
				<h3 class="text-center">Character '.$charNum.' has not been registered.</h3>
				</div>';
				return NULL;
			}
		$combatArray=getCombatLevel($characterStats[27],$characterStats[28],$characterStats[29],$characterStats[30],$characterStats[31],$characterStats[32],$characterStats[33]);
		$combatOverall =($characterStats[27]+$characterStats[28]+$characterStats[29]+$characterStats[30]+$characterStats[31]+$characterStats[32]+$characterStats[33]);
		$skillOverall = ($characterStats[26]-$combatOverall);
		$combatExp =($characterStats[52]+$characterStats[53]+$characterStats[54]+$characterStats[55]+$characterStats[56]+$characterStats[57]+$characterStats[58]);
		$skillExp = ($characterStats[51]-$combatExp);
		$experienceArray=getLevelExperience();
		$count99 = 0;
		for($i = 2; $i <= 24; $i++)//Check for 99's (2 means trimmed capes)
		{
			if($characterStats[$i+25]==99){
				$count99 ++;
			}
			if($count99 >= 2){
				$imgLink='_cape_(t).png';
			}
			else{
				$imgLink='_cape.png';
			}
			}
			echo '<div class="container-fluid p-0" id="tableContainer'.$charNum.'">';
		echo '<div class="table-responsive pl-1 pr-1">';
		echo '<table class="table-striped table-dark table-sm text-center w-100">';
			

			echo '<tr class="text-center">';
			echo '<th class="text-center">#'.$charNum. ':</th>';
			echo '<td>'.$characterStats[0].'</td>';

		//BEGIN BUILD CHECKS//Index:27=atk,28=def,29=str,31=ranged
			if($characterStats[28]==45){
				echo '<th>Build:</th>
				<td>Zerker</td>
				<td><img src="images/item_icons/berserker_helm.png"></td>';

			}
			elseif(($characterStats[27]>=30)&&($characterStats[28]==1)&&($characterStats[29]>=40)){
				if($characterStats[27]>=50){//50 or greater attack
					echo '<th colspan="2">Build: 1 Defence Pure </th>';
					echo '<th><img src="images/item_icons/zamorak_halo.png"></th>';
				}
				else{
					echo '<th colspan="2">Build: Baby Pure </th>';
					echo '<th><img src="images/item_icons/iron_full_helm.png"></th>';

				}
			}
			elseif(($characterStats[28]==42)&&($characterStats[31]>=70)){
				echo '<th colspan="2">Build: Void Pure </th>';
				echo '<th><img src="images/item_icons/void_ranger_helm.png"></th>';
			}
			elseif(($characterStats[28]==70)||($characterStats[28]>=75)){
				echo '<th>Build:</th>
				<td class="text-center" colspan="2">Tank/Main <img src="images/item_icons/veracs_helm.png"></td>';


			}
			elseif(($characterStats[27]==1)&&($characterStats[28]==1)&&($characterStats[29]>=50)){
				echo '<th colspan="2">Build: Obby Mauler </th>';
				echo '<th><img src="images/item_icons/obby_maul.png"></th>';
			}
			elseif(($characterStats[27]==1)&&($characterStats[28]>=40)&&($characterStats[29]==1)){
				echo '<th colspan="2">Build: Defence Pure </th>';
				echo '<th><img src="images/item_icons/Defence.png"></th>';
			}
			elseif(($characterStats[27]==1)&&($characterStats[28]==1)&&($characterStats[29]==1)){
				echo '<th colspan="2">Build: Skill Pure </th>';
				echo '<th><img src="images/item_icons/graceful_hood.png"></th>';
			}
			elseif(($characterStats[27]>=60)&&($characterStats[28]==20)&&($characterStats[29]>=60)){
				echo '<th colspan="2">Build: Initiate Pure </th>';
				echo '<th><img src="images/item_icons/initiate_sallet.png"></th>';
			}
			else{
				echo '<th>Build:</th>
				<td class="text-center" colspan="2">Main/NA</td>';
			}
			switch($charNum)//To allow the same buttons to hold different values
			{
				case 1:
					echo '<th class="text-right"><button type="button" class="btn btn-danger" onclick="dropCharacter(1);">&times;</button></th>';
					break;
				case 2:
					echo '<th class="text-right"><button type="button" class="btn btn-danger" onclick="dropCharacter(2);">&times;</button></th>';
					break;
				case 3:
					echo '<th class="text-right"><button type="button" class="btn btn-danger" onclick="dropCharacter(3);">&times;</button></th>';
					break;
				case 4:
					echo '<th class="text-right"><button type="button" class="btn btn-danger" onclick="dropCharacter(4);">&times;</button></th>';
					break;
			}
			echo '</tr>';
			
			echo '<tr class="border-bottom">';
				echo '<th><img src="images/Combat.png"></th>';
				echo '<th>Combat:</th>';
				echo '<td>'.$combatArray[0].'</td>';
				echo '<th>Type:</th>';
				echo '<td>'.$combatArray[1].'</td>';
				echo "<td><u>Lvl.99:</u> ".$count99.'</td>';
			echo '</tr>';

			echo '<tr>';
			echo '<th scope="col">Icon</th>';
			echo '<th scope="col">Skill Name</th>';
			echo '<th scope="col">Rank</th>';
			echo '<th scope="col">Level</th>';
			echo '<th scope="col">Experience</th>';
			echo '<th scope="col">Exp to level</th>';
			echo '</tr>';
			for($i = 1; $i <= 24; $i++){
				//Calculate if level is over 99
				if($characterStats[$i+25]==99){
					$characterStats[$i+25]=getLevelOver99(intval($characterStats[$i+50]));
				}
		
				if($i!==1){
					//i+25 is level i+50 is experience
					$nextLevelExp =$experienceArray[intval($characterStats[$i+25]+1)];
					$expToLevel= (($nextLevelExp)-($characterStats[$i+50]));
				}
				echo '<tr>' ;
				echo '<td><img src="images/ability_icons/'.$skillsArray[$i-1].'.png"></td>';
				echo '<td>' .$skillsArray[$i-1].'</td>';
				if($characterStats[$i]==-1){//-1 is unranked so display as so
					echo '<td>Unranked</td>';
				}
				else{
					echo '<td>' .number_format($characterStats[$i]). '</td>';
				}
				echo '<td>' .$characterStats[$i+25];
				if( ($skillsArray[$i-1]!=='Overall')&&($characterStats[$i+25]>=99) )
				{
					echo '<img class="size25px" src="images/skill_capes/'.$skillsArray[$i-1].$imgLink.'">';
				}
				echo '</td>';
				if($characterStats[$i+25]==-1){
					echo '<td>Unranked</td>';
				}
				else{
					echo '<td>' .number_format($characterStats[$i+50]).'</td>';
				}
				if($i!==1){
					echo '<td>' .number_format($expToLevel).'</td>';
				}
				else{echo '<td>N/A</td>';}
				echo '</tr>';
			}
			
		echo '</table>';
		echo '</div>';

		echo '<div class="table-responsive p-5 pr-5 pt-5">';
		echo '<table class="table-striped table-dark table-sm text-center w-100">';
			echo'<tr>';
				echo'<th colspan="2">Type</th>';
				echo'<td>Level</td>';
				echo'<td>Experience</td>';

			echo'</r>';
			echo'<tr>';
				echo '<td class="text-left" colspan="2"><img src="images/Combat.png">
				<u>Combat</u></td>';
				echo'<td>'.$combatOverall.'</td>';
				echo'<td>'.number_format($combatExp).'</td>';

			echo'</tr>';	
			echo'<tr>';
				echo '<td class="text-left" colspan="2"><img src="images/item_icons/Hammer.png">
				<u>Skills</u></td>';
				echo'<td>'.$skillOverall.'</td>';
				echo'<td>'.number_format($skillExp).'</td>';
			echo'</tr>';	
		echo '</table>';
		echo '</div>';
		for($i = 76; $i <= 92; $i++){
			if($characterStats[$i]==-1){
				$characterStats[$i]="Unranked";
			}
		}
		echo '<div class="table-responsive pl-5 pr-5 pb-5">';
		echo '<table class="table-striped table-dark table-sm text-center w-100">';
			echo '<tr">';
				echo '<td colspan="3">'.$characterStats[75].'</td>';

			echo '</tr>';
			echo '<tr class="border-bottom border-top">';
				echo '<th colspan="3"><img src="images/Clue_scroll.png">Clue Stats</th>';	
			echo '</tr>';

			echo '<tr>';
				echo '<th>Type</th>';
				echo '<th>Rank</th>';	
				echo '<th>Completed</th>';	
			echo '</tr>';

			echo '<tr>';
				echo '<td>Beginner</td>';
				echo '<td>'.$characterStats[76].'</td>';	
				echo '<td>'.$characterStats[77].'</td>';	
			echo '</tr>';

			echo '<tr>';
				echo '<td>Easy</td>';
				echo '<td>'.$characterStats[76+2].'</td>';	
				echo '<td>'.$characterStats[77+2].'</td>';	
			echo '</tr>';

			echo '<tr>';
				echo '<td>Medium</td>';
				echo '<td>'.$characterStats[78+2].'</td>';	
				echo '<td>'.$characterStats[79+2].'</td>';	
			echo '</tr>';

			echo '<tr>';
				echo '<td>Hard</td>';
				echo '<td>'.$characterStats[80+2].'</td>';	
				echo '<td>'.$characterStats[81+2].'</td>';	
			echo '</tr>';

			echo '<tr>';
				echo '<td>Elite</td>';
				echo '<td>'.$characterStats[82+2].'</td>';	
				echo '<td>'.$characterStats[83+2].'</td>';	
			echo '</tr>';

			echo '<tr>';
				echo '<td>Master</td>';
				echo '<td>'.$characterStats[84+2].'</td>';	
				echo '<td>'.$characterStats[85+2].'</td>';	
			echo '</tr>';

			echo '<tr>';
				echo '<td>All Clues</td>';
				echo '<td>'.$characterStats[86+2].'</td>';	
				echo '<td>'.$characterStats[87+2].'</td>';	
			echo '</tr>';

			echo '<tr class="border-top">';
				echo '<th colspan="3"><img src="images/BH_skulls.png"></th>';	
			echo '</tr>';

			echo '<tr>';
				echo '<th colspan="3">Bounty Hunter</th>';	
			echo '</tr>';

			echo '<tr>';
				echo '<th>Type</th>';
				echo '<th>Rank</th>';	
				echo '<th>Kills</th>';	
			echo '</tr>';

			echo '<tr>';
				echo '<td>Hunter</th>';
				echo '<td>'.$characterStats[89+2].'</th>';	
				echo '<td>'.$characterStats[90+2].'</td>';	
			echo '</tr>';

			echo '<tr>';
				echo '<td>Rogue</th>';
				echo '<td>'.$characterStats[91+2].'</th>';	
				echo '<td>'.$characterStats[92+2].'</td>';	
			echo '</tr>';

		echo '</table>';
		echo '</div>';
	echo '</div>';
	echo '</div>';
}

?>

