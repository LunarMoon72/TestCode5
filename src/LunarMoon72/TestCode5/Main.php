<?php

namespace LunarMoon72\TestCode5;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

use pocketmine\Player;
use pocketmine\Server;
use pocketmine\player\Inventory;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

class TestCode5 extends PluginBase {
	public function onEnabled(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
	public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool{
		switch($cmd->getName()){
			case "test5":
			  if($sender instanceof Player){
			  	$sender->sendMessage("Please use this command ingame!");
			  }
			  $sender->getInventory()->addItem(Item::get(1, 0, 1));
			  $sender->sendMessage("You have been given id 1!");
			  
		}
	}
}
