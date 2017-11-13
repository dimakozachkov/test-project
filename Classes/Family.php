<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 18:03
 */

require_once("./Classes/Human.php");
require_once("./Classes/Phone.php");

class Family
{

    private $familyMembers = [];

    private $phone = null;

    public function __construct(Human $husband, Human $wife)
    {
        $this->familyMembers['husband'] = $husband;
        $this->familyMembers['wife'] = $wife;

        $this->phone = new Phone();
    }

    public function changeFamilyPhone(Human $person, string $number)
    {
        $personFamily = $person->getFamily();

        if ($personFamily->personIsWife($person)) {
            $personHusband = $personFamily->getHusband();

            if ($personHusband->hasWork()) {
                $this->phone->setNumber($number);
                $personHusband->getWork()->advert("{$person->getName()} changed family phone($number)");
            }
        } else {
            $personWife = $personFamily->getWife();

            if ($personWife->hasWork()) {
                $this->phone->setNumber($number);
                $personWife->getWork()->advert("{$person->getName()} changed family phone($number)");
            }
        }
    }

    public function getHusband(): Human
    {
        return $this->familyMembers['husband'];
    }

    public function getWife(): Human
    {
        return $this->familyMembers['wife'];
    }

    public function personIsHusband(Human $person): bool
    {
        return $this->familyMembers['husband'] == $person;
    }

    public function personIsWife(Human $person): bool
    {
        return $this->familyMembers['wife'] == $person;
    }

}