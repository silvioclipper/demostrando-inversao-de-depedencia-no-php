<?php

declare(strict_types=1);

namespace App;

class Email implements NotificacaoInterface
{
    public function notificar() : void
    {
        echo 'Notificando por email';
    }
}