<?php

namespace console\controllers;

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use common\components\SocketServer;

class SocketController extends  \yii\console\Controller
{
    /**
     *
     */
    public function actionStartSocket()
    {
        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new SocketServer()
                )
            ),
            8080
        );
        $server->run();
    }
}