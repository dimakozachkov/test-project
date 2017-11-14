<?php

require_once('./Classes/Human.php');
require_once('./Classes/Hr.php');
require_once('./Classes/RegistryOffice.php');

$klaus = new Human('Klaus');
$maria = new Human('Maria');

$registryOffice = new RegistryOffice();
$registryOffice->marry($klaus, $maria);

$hr = new Hr($klaus);

$maria->changePhone('11111');