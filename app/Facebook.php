<?php

declare(strict_types=1);

namespace App;

class Facebook implements NotificacaoInterface
{
    public function notificar() : void
    {
        echo 'Notificando venda por facebook';
    }
}