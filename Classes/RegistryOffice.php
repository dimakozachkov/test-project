<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 2:50
 */

require_once("./Classes/Human.php");
require_once("./Classes/Family.php");
require_once("./Classes/FamilyObserver.php");

/**
 * Class RegistryOffice
 */
class RegistryOffice
{
    /**
     * Marry two person
     * @param Human $husband
     * @param Human $wife
     */
    public function marry(Human &$husband, Human &$wife)
    {
        try {
            if ($husband->hasFamily() || $wife->hasFamily()) {
                throw new Exception('Somebody is married');
            }

            $family = new Family($husband, $wife);
            $family->attach(new FamilyObserver());

            $husband->setFamily($family);
            $wife->setFamily($family);

            echo "{$husband->getName()} and {$wife->getName()} is married!<br>";

        } catch (Exception $exception) {
            echo "RegistryOffice error: {$exception->getMessage()}<br>";
        }
    }
}