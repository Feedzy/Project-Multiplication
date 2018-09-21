<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project multiplication</title>
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<header>
	<h1>Atelier PHP - Étape 1</h1>
	<p>Afficher une table de multiplication</p>
</header>

<form method="GET" action="pages/operation.php">

<section class="contentbox">
	<div class="maincontent">
		
		<div class="fields" >
			<h3>Merci de sélectionner la table que vous voulez consulter:</h3>
			<select name="table" id="Tabble">
				<option value="0">Table de 0</option>
				<option value="1">Table de 1</option>
				<option value="2">Table de 2</option>
				<option value="3">Table de 3</option>
				<option value="4">Table de 4</option>
				<option value="5">Table de 5</option>
				<option value="6">Table de 6</option>
				<option value="7">Table de 7</option>
				<option value="8">Table de 8</option>
				<option value="9">Table de 9</option>
				<option value="10">Table de 10</option>
			</select>
		</div>
	
		<div class="action_buttons">
			<div class="button"><input type="submit" value="Voir la table" id="subit"></div>
			<div class="button"><input type="reset" value="Annuler"></div>
		</div>
	
	</div>	 
</section>
</form>
<div id="resultat">
</div>
	
<script src="js/operation.js"></script>
</body>
</html>