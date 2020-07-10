<html>
<head><title>Connexion</title></head>
<body>
<h1>Connexion</h1>
<form name="inscription" method="post" action="securite.php">
login : <input type="text" name="login"/> </br>
password : <input type="password" name="mdp"/> </br>
<input type="submit" name="valider" value="OK"/>
</form>
<?php
if(isset($_POST['mdp']) and $_POST['mdp']=2020){
setcookie($_SESSION['id'], $_POST['login'], time() + 365*24*3600);
}
?>
</body>
</html>