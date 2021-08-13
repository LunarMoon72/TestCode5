<?php

namespace LunarMoon72\TestCode5;

use pocketmine\plugin\PluginBase;

use pocketmine\Player;
use pocketmine\Item;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{
    
    public function onLoad(){
    	$this->getLogger()->info("Plugin is loading");
    }
    public function onEnabled(){
    	$this->getLogger()->info("Plugin is Enabled");
    }
    public function onCommand(CommandSender $sender, Command $cmd, String $label, Array $args) : bool{
    	if(!$sender instanceof Player){
    		$sender->sendMessage("GET INGAME YOU MOTHER FUCKER CUNT NIGGER FUCKER");
    	}else{
    		if(!isset($args[0]) or (is_int($args[0]) and $args[0] > 0)){
    			$args[0] = 4;
    		}
    		$sender->getInventory()->addItem(Item::get(1,0,$args[0]));
    		$sender->sendMessage("YO MOTHER FUCKER YOU GOT GRASS YOU NIGGA");
    	}
    	return true;
    }
}
