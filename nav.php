<?php
echo'
<nav class="navbar navbar-expand-xl navbar-expand-lg navbar-expand-md p-0 pl-2 itemText2">

<div class="navbar-header">
<a class="navbar-brand yellowText">Osrs Life</a>
</div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMobile" aria-controls="navbarMobile" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarMobile">
        <ul class="nav navbar-nav">
        <li class="nav-item" id="indexNav">
        <a class="nav-link" href="index.php"><img class="pr-1" src="images/spell_icons/Teleport_to_House_icon.png">Home</a>
        </li>
        <li class="nav-item" id="loginNav">
        <a class="nav-link" href="loginPage.php"><img class="pr-1 maxHeightIcon" src="images/Brass_key.png">Login</a>
        </li>
        <li class="nav-item" id="registrationNav">
        <a class="nav-link" href="registrationPage.php"><img class="pr-1 maxHeightIcon" src="images/Scroll.png">Registration</a>
        </li>
        <li class="nav-item" id="achievementNav">
        <a class="nav-link" href="achievementDiary.php"><img class="pr-1" src="images/Achievement_Diaries_icon.png">Achievement Diary</a>
        </li>
        <li class="nav-item" id="pkingBuildsNav">
        <a class="nav-link" href="pkingBuilds.php"><img class="pr-1 maxHeightIcon" src="images/item_icons/Dragon_claws.png">Pking Builds</a>
        </li>
        <li class="nav-item" id="equipsNav">
        <a class="nav-link" href="equipsPage.php"><img class="pr-1" src="images/untradeable_icons/Graceful_top.png">Useful Untradeable Items</a>
        </li>
        <li class="nav-item" id="exchangeNav">
        <a class="nav-link" href="grandExchange.php"><img class="pr-1" src="images/coin_icons/Coins_250.png">Exchange</a>
        </li>
        <li class="nav-item" id="alchNav">
        <a class="nav-link" href="alchPage.php"><img class="pr-1" src="images/spell_icons/High_Level_Alchemy_icon.png">High Alchemy Calculator</a>
        </li>
        <li class="nav-item" id="slotNav">
        <a class="nav-link" href="slotPage.php"><img class="pr-1 maxHeightIcon" src="images/Worn_equipment.png">Equipment Tables</a>
        </li>
		<li class="nav-item" id="cluescrollNav">
        <a class="nav-link" href="cluescroll.php"><img class="pr-1 maxHeightIcon" src="images/untradeable_icons/Clue_scroll_(master).png">Clue Scroll Requirements</a>
        </li>
        <li class="nav-item" id="maxHitNav">
        <a class="nav-link" href="maxHitCalc.php"><img class="pr-1 maxHeightIcon" src="images/Red_hitsplat.png">Max Hit Calculator</a>
        </li>
    </ul>';



    if(isset($_SESSION['u_userID'])){
        echo '
        <div class="text-left">
        <form action="accountManagement/logout.inc.php" method="POST">
        <button type="submit" name="submit" class="submit btn-primary" ><img class="pr-2" src="images/Logout.png"/>Log Out</button>
        </form>
        </div>
        ';
        }
echo '
 </div>
</nav>';
?>
 <script type="text/javascript">
    function addActiveNav(id){
        $("#"+id).addClass("active");
    }
</script>