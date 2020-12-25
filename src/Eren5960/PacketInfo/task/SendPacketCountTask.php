<?php

namespace Eren5960\PacketInfo\task;

use pocketmine\scheduler\Task;
use Eren5960\PacketInfo\PacketInfo;

class SendPacketCountTask extends Task {

	private $plugin;

	public function __construct(PacketInfo $plugin) {
		$this->plugin = $plugin;
	}

	public function onRun(int $currentTick) {
		$this->plugin->sendReceivedPacketCount();
	}

}
