<?php

namespace OnlyMyWay;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;

class OnlyMyWay extends PluginBase implements Listener {
	public function onLoad() {
		$this->getLogger()->info(TextFormat::GRAY . "> " . TextFormat::GREEN . "OnlyMyWay Plugin being prepared...");
		$this->getLogger()->info(TextFormat::GRAY . "> " . TextFormat::GREEN . "OnlyMyWay Plugin prepared.");
	}
	public function onEnable() {
		$this->getLogger()->info(TextFormat::GRAY . "> " . TextFormat::GREEN . "OnlyMyWay Plugin enabled.");
		$this->getLogger()->info(TextFormat::RED . "This plugin's license can be found at: https://github.com/ZINGDING/ZINGDING-EULA.git.");
		$this->getLogger()->info(TextFormat::RED . "This plugin's license is ZINGDING-EULA");
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onKick(PlayerKickEvent $event) {
		if ($event->getReason () === "disconnectionScreen.serverFull")
			if ($event->getPlayer ()->isOp())
				$event->setCancelled ();
	}
}

?>