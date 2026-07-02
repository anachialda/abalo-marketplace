<?php
require __DIR__ . '/../vendor/autoload.php';

use Ratchet\Client\WebSocket;

\Ratchet\Client\connect('ws://localhost:8080/app/local')->then(function($conn) {
    $conn->send(json_encode([
        'event' => 'test-event',
        'data'  => json_encode(['message' => 'Hallo von Abalo!']),
        'channel' => 'test-channel'
    ]));

    $conn->close();
}, function($e) {
    echo "Could not connect: {$e->getMessage()}\n";
});
