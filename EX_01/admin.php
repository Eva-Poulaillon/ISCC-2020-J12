<html>
<body>
<?php
session_start();
if($_SESSION['image']['size']>2097152){
    $error="le fichier est trop lourd";
    echo $_SESSION['image']['size'];
    echo "octets";
};
$extension=strrchr($_SESSION['image']['name'],'.');
echo $extension;
$tailleextension=strlen($extension);
if($extension!='.jpg' or '.jpeg' or '.png'){
    $error="L'extension de votre fichier n'est pas acceptée.";
}

$nom=strlen($_SESSION['image']['name']);
$taillenom = $nom-$tailleextenstion;
if($taillenom <=4){
    echo 'Nombre de caracteres : '.$taillenom.'';
    echo "Le nom de l'image doit faire minimum 4 caractères hors extension.";

}
?>
<div>
<p>
<?php
if(isset($error)) echo $error; ?>
</p>
</div>
<form
method="post" enctype="multipart/form-data">
<input type="file" name="image">
<input type="texte" name="titre" placeholder="Titre de la photo">
<input type="texte" name="description" placeholder="description de la photo">
<input type="submit" name="bouton" value="Charger">
</form>
