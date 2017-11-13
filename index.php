<?php

require_once('./Classes/Human.php');
require_once('./Classes/Hr.php');
require_once('./Classes/RegistryOffice.php');
require_once('./Classes/ChangePhone.php');

$klaus = new Human('Klaus');
$maria = new Human('Maria');

$registryOffice = new RegistryOffice();
$registryOffice->marry($klaus, $maria);

$hr = new Hr($klaus);
$hr2 = new Hr($maria);

$maria->getFamily()->changeFamilyPhone($maria, '11111');
$klaus->getFamily()->changeFamilyPhone($klaus, '11111555');