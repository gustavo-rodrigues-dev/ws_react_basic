<?php
/**
 * Created by PhpStorm.
 * User: gustavo
 * Date: 5/28/14
 * Time: 12:28 AM
 */

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use MyApp\Chat;

require 'vendor/autoload.php';

$server = IoServer::factory(
    new HttpServer(
        new WsServer(
            new Chat()
        )
    ),
    1234
);

$server->run();