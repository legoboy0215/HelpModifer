<?php

namespace TahaTheHacker\Anvil;

use pocketmine\scheduler\PluginTask;
use pocketmine\level\Level;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\item\item;
use pocketmine\tile\Sign;
use pocketmine\scheduler\ServerScheduler;
use pocketmine\level\Position;

class Timer extends PluginTask {


  public function __construct(Main $plugin, Player $player) {
    parent::__construct($plugin, $player);
    $this->plugin = $plugin;
    $this->player = $player;
}
  public function onRun($tick) {
          $line1 = $this->line_1
          $this->plugin->event->setLine(0, "§c[§l§6SG§r§c]");
          $this->plugin->event->setLine(1, "Map :§l§a" . $line1);
          $this->plugin->event->setLine(2, "§l§b[" . count($level->getPlayers($line1)) . "/10]");
          $this->plugin->event->setLine(3, "§l§6Tap To Join");
}
}//Class
