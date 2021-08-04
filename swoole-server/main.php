<?php

declare(strict_types=1);

use Swoole\Http\Server as HttpServer;

$server = new HttpServer('0.0.0.0', 4000);

$server->on('request', function ($request, $response): void {
    $str = '   '.$request->header['user-agent'].'     ';

    $upper = $lower = $length = $rot13 = $ord = $trim = $hash = $json = '';

    for ($i = 0; $i < 100000; $i++) {
        $upper = mb_strtoupper($str);
        $lower = mb_strtolower($str);
        $length = mb_strlen($str);
        $rot13 = str_rot13($str);
        $ord = ord($str);
        $trim = trim($str);
        $hash = md5($str);
        $json = json_encode($str);
    }

    $response->header('Content-Type', 'application/json');
    $response->end(json_encode([
        'upper'  => $upper,
        'lower'  => $lower,
        'length' => $length,
        'rot13'  => $rot13,
        'ord'    => $ord,
        'trim'   => $trim,
        'hash'   => $hash,
        'json'   => $json,
    ]));
});

$server->on('start', function (): void {
    echo "Server started at http://0.0.0.0:4000\n";
});

$server->start();
