<?php
function welcomeMessage($marginLeft) {
    echo '
    <div style="width: 20%; border-radius: 15px;"class="border border-dark mt-3 ml-'.$marginLeft.' blueBg ">
    <h3 class="itemText2 text-center pt-2">Welcome back <span class="text-primary">'.$_SESSION['u_firstName'].'</span></h3>
    </div>
    ';
}
?>