<?php

namespace bbo51dog\pmtwitter;

use bbo51dog\pmtwitter\bot\Bot;
use bbo51dog\pmtwitter\bot\BotImpl;
use pocketmine\plugin\PluginBase;

class PMTwitterAPI extends PluginBase{

    public static function createBot(): Bot{
        return new BotImpl();
    }
}