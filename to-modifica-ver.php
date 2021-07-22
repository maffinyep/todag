<?php
	$in = json_decode(file_get_contents('data-base.json'));

	$tsk->desc = $_POST['desc'];
	$tsk->deadline = $_POST['deadline'];
	$tsk->geo = $_POST['geo'];
	$tsk->gravity = $_POST['gravity'];
	$tsk->mass = $_POST['mass'];

	array_shift($in->$_POST["mission"]);
	array_unshift($in->$_POST["mission"], $tsk);

	file_put_contents('data-base.json', json_encode($in));
	header('Location: /');
?>