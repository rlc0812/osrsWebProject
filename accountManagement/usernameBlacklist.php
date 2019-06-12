<?php
function blackList(){
$blacklist = file_get_contents("blacklist.txt");
$blacklist = explode(PHP_EOL,$blacklist,521);
return $blacklist;
}
?>
