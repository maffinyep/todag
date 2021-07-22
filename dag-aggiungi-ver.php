<?php
	$i=0;
	foreach(explode(PHP_EOL, $_POST["text"]) as $line)
	{
		$elem->desc= $line;
		$elem->deadline= '&nbsp';
		$list[$i] = $elem;
		$i++;
		unset($elem);
	}
	$in = json_decode(file_get_contents('data-base.json'));
	$in->$_POST["title"] = $list;
	file_put_contents('data-base.json', json_encode($in));
	header('Location: /');
?>