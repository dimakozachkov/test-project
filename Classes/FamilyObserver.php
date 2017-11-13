<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 20:13
 */

require_once("./Classes/Human.php");
require_once("./Classes/Phone.php");

require_once("./Interfaces/ObserverInterface.php");

/**
 * Class FamilyObserver
 */
class FamilyObserver implements ObserverInterface
{

    /**
     * Send message to work of a person
     * @param Human $person
     */
    private function sendMessageToWork(Human &$person)
    {
        if ($person->hasWork()) {
            $phone = $person->getFamily()->getPhone();

            $person->getWork()
                ->advert(
                    "{$person->getName()}: new family phone is $phone"
                );
        }
    }

    /**
     * Handle the observer
     * @param Human $person
     */
    function handle(Human $person)
    {
        $family = $person->getFamily();

        $this->sendMessageToWork($person);

        $personSpouse =
            $family->personIsHusband($person)
                ? $family->getWife()
                : $family->getHusband();

        $this->sendMessageToWork($personSpouse);
    }

}