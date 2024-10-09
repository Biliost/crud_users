<?php
$serv ='localhost';
$username ='root';
$passw ='';
$bd ='crud';

// creation d'une nouvelle connexion

$cxn = new mysqli($serv,$username,$passw,$bd);

/* 

verification de connexion

if ($cxn){
    echo'connexion succes';
}else{
    echo'connexion failled';
}
*/

?>