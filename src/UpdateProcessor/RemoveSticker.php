<?php
namespace Hobot\UpdateProcessor;

use Hobot\UpdateProcessorInterface;
use Telegram\Bot\Api;
use Telegram\Bot\Objects\Update;

class RemoveSticker implements UpdateProcessorInterface
{   
    protected $chat_id = array('id1','id2');
    public function GetSticker(Update $update, Api $api)
    {
       if ($update->getMessage()->getSticker() && $chat->getChatId == in_array('id1', $chat_id)){

        $api->sendMessage([
            'chat_id' => $chat->getId(),
            'text' => "В группе нельзя использовать стикеры",
        ]);

        $api->kickchatmember([
            'chat_id' => $chat->getId(),
            'user_id' => $chat->getUserId // ??,
        ]);
    }
}
}