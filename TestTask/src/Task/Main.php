<?php
/**
 * Created by PhpStorm.
 * User: PCink
 * Date: 2018/06/10
 * Time: 17:47
 */

namespace Task;


use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\CallbackTask;
use Task\Task\Task;

class Main extends PluginBase
{
    public function onEnable()
    {
        $this->getScheduler()->scheduleRepeatingTask(new CallbackTask([$this, 'test'], []), 20);
        $this->getScheduler()->scheduleRepeatingTask(new Task($this, $this), 20);
    }
    function test() {
        $this->getLogger()->info('CallbackTask');
    }
}