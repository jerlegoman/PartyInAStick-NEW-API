<?php

namespace jerlegoman\PartyInAStick;

use pocketmine\plugin\PluginBase;

class PartyInAStick extends PluginBase{
public function onEquip(PlayerItemHeldEvent $e){
    if($e->getItem() instanceof Stick){
      $e->getLevel()->dropItem($e->getPlayer(), Item::get(264));
    }
}