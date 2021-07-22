<?php require_once('header.html'); ?>

<div class="container">
	<h1>To Do List</h1>
	<p>Non c'è nulla di divertente in questo sito, amenochè non ti diverta sapere cosa devo fare oggi...</p>
	<h2><button type="button" class="btn btn-dark btn-block" onclick="location.href='dag-aggiungi.php'">Aggiungi
			To-Dag</button></h2>
</div>

<div class="container">
	<div class="btn-group-vertical" style="width:100%">

<?php
	$in = json_decode(file_get_contents("data-base.json"), true);
	foreach($in as $mission=> $list)
	{
		$iv['mission'] = $mission;
		foreach($list[0] as $chiave => $valore)
			$iv[$chiave] = $valore;
		echo '
	<h3 style="width:100%">
		<div class="btn-group">
			<div class="btn-group-vertical" style="width:100%">
			<div class="btn-group">
				<button type="button" class="btn btn-primary"><strong>'.$iv['mission'].'</strong></button>
				<button type="button" class="btn btn-primary">'.$iv['desc'].'</button>
				</div>
				<div class="btn-group">
					<button type="button" class="btn btn-dark">'.$iv['deadline'].'</button>
					<button type="button" class="btn btn-dark">'.$iv['geo'].'</button>
					<button type="button" class="btn btn-dark">'.$iv['gravity'].'</button>
					<button type="button" class="btn btn-dark">'.$iv['mass'].'</button>
				</div>
			</div>
			<div class="btn-group-vertical">
				<button type="button" class="btn btn-success" onclick="location.href=\'to-elimina.php?mission='.$iv['mission'].'\'">✔️</button>
				<button type="button" class="btn btn-warning" onclick="location.href=\'to-modifica.php?mission='.$iv['mission'].'\'">✏️</button>
			</div>
		</div>
	</h3>';
	unset($iv);
	}
?>

	</div>
</div>
<?php require_once('footer.html'); ?>