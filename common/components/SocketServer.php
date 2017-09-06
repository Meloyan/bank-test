<?php

namespace common\components;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;

class SocketServer implements MessageComponentInterface
{
    protected $clients;

    /**
     * @param ConnectionInterface $conn
     */
    public function onOpen(ConnectionInterface $conn)
    {

    }

    /**
     * @param ConnectionInterface $from
     * @param string $msg
     */
    public function onMessage(ConnectionInterface $from, $msg)
    {
        $this->serverMessage($msg, $from);
    }

    public function onClose(ConnectionInterface $conn)
    {
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
    }

    private function serverMessage($message, $client)
    {
        $data = @json_decode($message, true);
    }
}

//        if (Sessions::checkSessionIsClosed($data['sessionId']) == false) {
//            return $from->close();
//        }