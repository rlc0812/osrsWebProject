<?php
//function getPkBuilds(){

if(isset($_POST['buildName']))
{
	$build = $_POST['buildName'];
	include('connect.inc');
	$conn=connectToDb();
	//$stmt=$conn->prepare("SELECT * from pkBuilds");
	$stmt=$conn->prepare("SELECT * from pkBuilds where (buildName = ?)");
	$stmt->bind_param('s', $build);
	$stmt->execute();
	$stmt->bind_result($buildName,$buildIcon,$health,$attack,$strength,$defence,$ranged,$prayer,$mage,$notes);
	
	//$count =0;

	while($stmt->fetch()){
	echo '<div class="table-responsive">';
	echo '<table class="table-striped table-dark table-sm">';
		echo '<tr class="text-center">';
		echo '<th>Build</th>';
		echo '<th>Health</th>';
		echo '<th>Attack</th>';
		echo '<th>Strength</th>';
		echo '<th>Defence</th>';
		echo '<th>Ranged</th>';
		echo '<th>Prayer</th>';
		echo '<th>Magic</th>';
		echo '<tr>';

		echo '<tr class="text-center">';
		echo '<td><img src="'.$buildIcon.'">'.$buildName.'</td>';
		echo '<td><img src="images/ability_icons/Hitpoints.png">'.$health.'</td>';
		echo '<td><img src="images/ability_icons/Attack.png">'.$attack.'</td>';
		echo '<td><img src="images/ability_icons/Strength.png">'.$strength.'</td>';
		echo '<td><img src="images/ability_icons/Defence.png">'.$defence.'</td>';
		echo '<td><img src="images/ability_icons/Ranged.png">'.$ranged.'</td>';
		echo '<td><img src="images/ability_icons/Prayer.png">'.$prayer.'</td>';
		echo '<td><img src="images/ability_icons/Magic.png">'.$mage.'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td class="border-top text-left pl-2" colspan="8">Additional comments: '.$notes.'</td>';
		echo '</tr>';
	echo '</table>';

	}
	echo '</div>';
	echo '</div>';
}

?>
