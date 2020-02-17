<?php
if(isset($_POST['info'])){
    if(($_POST['info'][16])==NULL)
    {   
        $_POST['info'][16]="NULL";
    }
    $_POST['info'][0]=str_replace(' ','_',$_POST['info'][0]);
    echo "INSERT INTO itemStats
    (itemName,itemSlot,stabAttack,slashAttack,crushAttack,magicAttack,rangeAttack,stabDefence,slashDefence,crushDefence,magicDefence,rangeDefence,meleeStrength,magicStrength,rangeStrength,prayer,attackSpeed)
     VALUES 
     ('".$_POST['info'][0].'\',\''.$_POST['info'][1].'\',\''.$_POST['info'][2].'\',\''.$_POST['info'][3].'\',\''.$_POST['info'][4].'\',\''.$_POST['info'][5].'\',\''.$_POST['info']
    [6].'\',\''.$_POST['info'][7].'\',\''.$_POST['info'][8].'\',\''.$_POST['info'][9].'\',\''.$_POST['info'][10].'\',\''.$_POST['info'][11].'\',\''.$_POST['info'][12].'\',\''
    .$_POST['info'][13].'\',\''.$_POST['info'][14].'\',\''.$_POST['info'][15].'\',\''.$_POST['info'][16].'\');';

}
?>