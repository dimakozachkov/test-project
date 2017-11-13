<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 13.11.2017
 * Time: 18:26
 */

require_once("./Classes/Human.php");

interface WorkInterface
{

    function setWorker(Human $worker);

    function hasWorker(): bool;

    function getWorker(): Human;

    function advert(string $message);

}