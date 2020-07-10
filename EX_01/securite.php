
    <?php
 
 try
 {
     $bdd = new PDO ('mysql:host=localhost;dbname=base-site-rooting', 'root', 'root');
     $bdd -> exec("set names utf8");
     echo 'co reussi';
 }
 catch (Exception $e)
 {
     die('Erreur : ' . $e->getMessage());
 }
  

$query = $bdd->query("SELECT * FROM utilisateurs WHERE login = $login.");
$count = $query->rowCount();
if($count == 1)
{

echo 'Ce login est déjà utilisé';
}

else
{

echo 'login libre';
}
?>