<?php
// crée des variables 
$prenom='martin';
$nom='dupont';
$email='dupont@hhh.fr';

// connexion la base de donnee

$cln = new PDO('mysql:host=localhost;dbname=client4','root','');

// verification de la connexion
if ($cln === false) {
        var_dump($pdo->errorInfo());
        die('Erreur sql');
    }else {
            echo "c bon";
    }

// requête qui sera executée dans la table préablement créee(coordonnee4) ici l

$sql= "INSERT INTO coordonnee4(prenom, nom, email) VALUES(:prenom, :nom, :email)";

// prepare la requete sur le serveur
$sth=$cln->prepare($sql);
$sth->bindParam(';prenom', $prenom ,PDO::PARAM_STR);
$sth->bindParam(':nom', $nom ,PDO::PARAM_STR);
$sth->bindParam(':email', $email ,PDO::PARAM_STR);
$sth->execute();

// var_dump($sth);

// la fonction binParam protege les donnees inserees
// correspondance entre le marqueur et la variable contenant la donnee a inserer

// $sth->binParam(':prenom', $prenom,PDO::PARAM_STR);

// $sth->binParam(':nom', $nom,PDO::PARAM_STR);

// $sth->binParam(':email', $email,PDO::PARAM_STR);

var_dump($sth);

//execute la requete




$sql = 'select prenom, nom, email, from coordonnee4';
$sth = $clt->prepare( $sql );
$sth->execute();



// resultat requete est stochker dans la variable users
$clients = $clt->fetchAll( PDO::FETCH_ASSOC);

echo $clients

?>