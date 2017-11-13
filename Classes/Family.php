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

/**
 * Class Family
 */
class Family extends FamilyAbstract
{
    /**
     * Family phone
     * @var null|Phone
     */
    private $phone = null;

    /**
     * Family constructor.
     * @param Human $husband
     * @param Human $wife
     */
    public function __construct(Human $husband, Human $wife)
    {
        $this->familyMembers['husband'] = $husband;
        $this->familyMembers['wife'] = $wife;

        $this->phone = new Phone();
    }

    /**
     * Get a family phone number
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone->getNumber();
    }

    /**
     * Change a family phone number
     * @param Human $person
     * @param string $number
     */
    public function changeFamilyPhone(Human $person, string $number): void
    {
        $this->phone->setNumber($number);
        $this->notify($person);
    }

}