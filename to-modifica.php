<?php require_once('header.html')?>

<?php
	$in = json_decode(file_get_contents('data-base.json'),true);
	foreach($in[$_GET['mission']][0] as $key => $value)
		$iv[$key] = $value;

echo '
<div class="container">
<h2>Aggiungi dati al tuo Task</h2>
	<form action="to-modifica-ver.php" method="POST">
		<div class="form-group">
			<label for="desc">Descrizione</label>
			<input type="text" class="form-control" name="desc" value="'.$iv['desc'].'">
		</div>
		<div class="form-group">
			<label for="deadline">Deadline</label>
			<input type="text" class="form-control" name="deadline" value="'.$iv['deadline'].'">
		</div>
		<div class="form-group">
			<label for="geo">Registrazione</label>
			<input type="text" class="form-control" name="geo" value="'.$iv['geo'].'">
		</div>
		<div class="form-group">
			<label for="gravity">Gravità</label>
			<input type="number" class="form-control" name="gravity" value="'.$iv['gravity'].'">
		</div>
		<div class="form-group">
			<label for="mass">Massa</label>
			<input type="number" class="form-control" name="mass" value="'.$iv['mass'].'">
		</div>
		<input type="hidden" name="index" value="0">
		<input type="hidden" name="mission" value="'.$_GET['mission'].'">
		<button type="submit" class="btn btn-primary">Modifica</button>
		<button type="reset" class="btn btn-default pull-right" onclick="location.href=\'/\'">Annulla</button>
	</form>
</div>
';

?>


<?php require_once('footer.html')?>