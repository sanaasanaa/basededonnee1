<?php
// determine une variable puis on lui instancie une class avec le chemin
$clt= new PDO('mysql:host=localhost;dbname=client3' , 'root', '');
// essaye de voir si c connecté hehe
if ($clt) {
    
   echo "conecté";
   echo "";
}

$query=$clt->query('SELECT * FROM coordonnee3' );

$coor = $query->fetchAll(PDO::FETCH_ASSOC);
echo "<pre>";
var_dump($coor);
?>