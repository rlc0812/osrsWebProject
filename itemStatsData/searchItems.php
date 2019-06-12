<?php
if(isset($_POST['item'])&&(!(empty(trim($_POST['item']))))){
include_once('../connect.inc');
$conn = connectToDb();
	$item = mysqli_real_escape_string($conn,$_POST['item']);
	$item = trim($item);
	$stmt=$conn->prepare("SELECT * from exchange WHERE name LIKE concat('%', ?, '%')");
	$stmt->bind_param('s',$item);
	$stmt->execute();
//	$result=$stmt->get_result();
//	if($result){
	$stmt->bind_result($itemId, $name,$members,$store,$buyAvg,$buyQt,$sellAvg,$sellQt,$overAvg,$overQt);
echo '

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Members</th>
                    <th>Sell General Store</th>
                    <th>Buy Average</th>
                    <th>Buy Quantity</th>
                    <th>Sell Average</th>
                    <th>Sell Quantity</th>
                    <th>Overall Average</th>
                    <th>Overall Quantity</th>
                </tr>
            </thead>
            <tbody>
            ';
	
	while ($stmt->fetch()) {

		if($members=='1'){
			$members='Yes';
		}
		if($members=='0'){
			$members='No';
		}
		echo'
		<tr>
		<td>'.$name.'</td>
		<td>'.$members.'</td>
		<td>'.number_format(intval($store)).'</td>
		<td>'.number_format(intval($buyAvg)).'</td>
		<td>'.number_format(intval($buyQt)).'</td>
		<td>'.number_format(intval($sellAvg)).'</td>
		<td>'.number_format(intval($sellQt)).'</td>
		<td>'.number_format(intval($overAvg)).'</td>
		<td>'.number_format(intval($overQt)).'</td>
		</tr>
		';
	}
	echo '</tbody>';
}

?>
