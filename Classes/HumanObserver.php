<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 20:13
 */

require_once("./Classes/Human.php");

require_once("./Interfaces/ObserverInterface.php");

/**
 * Class FamilyObserver
 */
class HumanObserver implements ObserverInterface
{

    const CHANGE_PHONE_EVENT = 'OnChangePhoneEvent';

    /**
     * @param Human $human
     */
    private function changePhoneEvent(Human &$person)
    {
        $person->getFamily()->notify($person, self::CHANGE_PHONE_EVENT);
    }

    /**
     * Handle the observer
     * @param Human $person
     * @param string $message
     */
    function handle(Human $person, $message = '')
    {
        if ($message == self::CHANGE_PHONE_EVENT) {
            $this->changePhoneEvent($person);
        }
    }

}