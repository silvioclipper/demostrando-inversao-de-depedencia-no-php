<?php

declare(strict_types=1);

namespace App;

class Whatapp implements NotificacaoInterface
{
    public function notificar() : void
    {
        echo 'Notificando venda por Whatapp';
    }
}