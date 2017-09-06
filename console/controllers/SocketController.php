<?php

namespace console\controllers;

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use common\components\SocketServer;
use Yii;

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
            Yii::$app->params['socket']['port']
        );
        $server->run();
    }
}