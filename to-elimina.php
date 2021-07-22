<?php

	$in = json_decode(file_get_contents('data-base.json'),true);
	$mid=$_GET['mission'];
	array_shift($in[$mid]);
	if(empty($in[$mid]))
		unset($in[$mid]);
	file_put_contents('data-base.json', json_encode($in));
	header('Location: /');
?>