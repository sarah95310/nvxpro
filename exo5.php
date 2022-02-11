<?php

$jmois = array (
'janvier'=> array ('num'  =>1, 'nb' => 31), 
'février' => array ('num'  =>2, 'nb' => 28), 
'mars'=>array ('num'  =>3, 'nb' => 31), 
'avril'=>array ('num'  =>4, 'nb' => 30), 
'mai'=>array ('num'  =>5, 'nb' => 31),
'juin'=>array ('num'  =>6, 'nb' => 30),
'juillet'=>array ('num'  =>7, 'nb' => 31),
'août'=>array ('num'  =>8, 'nb' => 31),
'septembre'=>array ('num'  =>9, 'nb' => 30),
'octobre'=>array ('num'  =>10, 'nb' => 31),
'novembre'=>array ('num'  =>11, 'nb' => 30), 
'décembre'=>array ('num'  =>12, 'nb' => 31));


echo "pour janvier il y a ".$jmois['janvier']['nb'] ." nours pour le mois numero ".$jmois['janvier']['nb'];

 //$jmois = array('janvier '=>31,'février'=>28,'mars'=>31,'avril'=>30,'mai'=>31,'juin'=>30,
 //'juillet'=>31,'août'=>31,'septembre'=>30,'octobre'=>31,'novembre'=>30,'décembre'=>31);

 //echo '<table>';
 //foreach($jmois as $m =>$nbj)
    //echo '<tr><td>'. $m.       '</td><td>'.$nbj.'</td></tr>';
//echo '</table>';
 
?>
