<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 18:03
 */

require_once("./Classes/Human.php");
require_once("./Classes/Phone.php");

require_once("./Classes/Abstract/FamilyAbstract.php");

class Family extends FamilyAbstract
{

    private $familyMembers = [];

    private $phone = null;

    public function __construct(Human $husband, Human $wife)
    {
        $this->familyMembers['husband'] = $husband;
        $this->familyMembers['wife'] = $wife;

        $this->phone = new Phone();
    }

    public function getPhone(): string {
        return $this->phone->getNumber();
    }

    public function changeFamilyPhone(Human $person, string $number)
    {
        $this->phone->setNumber($number);
        $this->notify($person);
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