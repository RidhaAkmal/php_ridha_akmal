<?php

require __DIR__ . '/app/header.php';

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if ($request_method === 'GET') {
	require __DIR__ . '/app/soal1a.php';
} elseif ($request_method === 'POST') {
	require __DIR__ .  '/app/soal1b.php';
	if ($request_method === 'GET') {
		require __DIR__ . '/app/soal1c.php';
	}
}
//

require __DIR__ .  '/app/footer.php';
