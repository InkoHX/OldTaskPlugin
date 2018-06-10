<?php
/**
 * Created by PhpStorm.
 * User: InkoHX
 * Date: 2018/06/10
 * Time: 17:56
 */

namespace Task\Task;

use pocketmine\plugin\Plugin;
use pocketmine\scheduler\PluginTask;

class Task extends PluginTask
{
    public function __construct(Plugin $owner)
    {
        parent::__construct($owner);
    }
    public function onRun(int $currentTick)
    {
        $this->owner->getLogger()->info("PluginTask");
    }
}