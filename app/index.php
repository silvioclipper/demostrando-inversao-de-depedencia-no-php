<?php

declare(strict_types=1);

require_once './vendor/autoload.php';

use App\Venda;
use App\Whatapp;

$person = new Venda();
$person->jogar(new Whatapp);


