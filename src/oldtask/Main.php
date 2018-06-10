<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/06/10
 * Time: 17:39
 */

namespace oldtask;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable()
    {
        $this->getLogger()->info("OldTaskを読み込みました。\n使い方は https://github.com/InkoHX/OldTaskPlugin を見て下さい。");
    }
}
