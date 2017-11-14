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
            $phone = $person->getPhone();

            $person->getWork()
                ->advert(
                    "{$person->getName()}: new phone is $phone"
                );
        }
    }

    private function sendMessageToSpouseWork(Human &$person, Human &$spouse)
    {
        if ($spouse->hasWork()) {
            $phone = $person->getPhone();



            $spouse->getWork()
                ->advert(
                    "{$spouse->getName()}: new spouse phone is $phone"
                );
        }
    }

    private function changePhoneEvent(Human &$person)
    {
        $this->sendMessageToWork($person);

        $family = $person->getFamily();

        $personSpouse =
            $family->personIsHusband($person)
                ? $family->getWife()
                : $family->getHusband();

        $this->sendMessageToSpouseWork($person, $personSpouse);
    }

    /**
     * Handle the observer
     * @param Human $person
     * @param string $message
     */
    function handle(Human $person, $message = '')
    {
        if ($message == 'OnChangePhoneEvent') {
            $this->changePhoneEvent($person);
        }
    }

}