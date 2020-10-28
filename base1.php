<?php 
               //chemin du fichier db browser 
$pdo = new PDO('sqlite:client2.db');

               //selctionner totes les donnees table client
$query= $pdo->query('SELECT * FROM coordonnees');

if ($query === false) {
    var_dump($pdo->errorInfo());
    die('Erreur sql');
}
            //  cherche toutes les données 
$data = $query->fetchAll(PDO::FETCH_OBJ);

 var_dump($data);

?>