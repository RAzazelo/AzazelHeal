<?php

declare(strict_types=1);

namespace Azazel\AzazelHeal;

use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
	
  public function onCommand(CommandSender $sender,Command $cmd,string $label,array $args) : bool{
           if ($sender instanceof Player) {
               if ($cmd->getName() == "heal") {
                       $sender->setHealth($sender->getMaxHealth());
                       $sender->sendMessage("§bServer §8» §7Du wurdest erfolgreich geheilt.");
               }
              if ($cmd->getName() == "feed") {
                       $sender->getHungerManager()->setFood(20);
                       $sender->getHungerManager()->setSaturation(20);
                       $sender->sendMessage("§bServer §8»§7 Deine Hungerkeulen wurden aufgefüllt.");
              }
           } else {
               $sender->sendMessage("Du kannst diesen Befehl nur im Spiel ausführen.");
           }
          return true;
		}
}