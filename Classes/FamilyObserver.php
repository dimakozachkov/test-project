<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 20:13
 */

require_once("./Classes/Human.php");
require_once("./Classes/Phone.php");

class FamilyObserver implements ObserverInterface
{

    private function sendMessageToWork(Human &$person) {
        if ($person->hasWork()) {
            $phone = $person->getFamily()->getPhone();

            $person->getWork()
                ->advert(
                    "{$person->getName()}: new family phone is $phone"
                );
        }
    }

    function handle(Human $person) {
        $family = $person->getFamily();

        $this->sendMessageToWork($person);

        $personSpouse =
            $family->personIsHusband($person)
            ? $family->getWife()
            : $family->getHusband();

        $this->sendMessageToWork($personSpouse);
    }

}