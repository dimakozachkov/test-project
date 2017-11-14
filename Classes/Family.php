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
    const CHANGE_PHONE_EVENT = 'OnChangePhoneEvent';

    /**
     * Family constructor.
     * @param Human $husband
     * @param Human $wife
     */
    public function __construct(Human $husband, Human $wife)
    {
        $this->familyMembers['husband'] = $husband;
        $this->familyMembers['wife'] = $wife;

    }

}