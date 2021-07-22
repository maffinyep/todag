<?php require_once('header.html')?>

<div class="container">
	<h2>Create DaG with CSV</h2>
	<form action="dag-aggiungi-ver.php" method="POST">
		<div class="form-group">

			<label for="title">Missione</label>
			<input type="text" class="form-control" name="title">

			<label for="text">Lista</label>
			<textarea class="form-control" name="text" style="height:350px"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Invia</button>
	</form>
</div>

<?php require_once('footer.html')?>