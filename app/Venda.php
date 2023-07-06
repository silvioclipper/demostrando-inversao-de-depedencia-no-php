<?php

declare(strict_types=1);

namespace App;

class Venda
{
    public function jogar(NotificacaoInterface $notificacao)
    {
        return $notificacao->Notificar();    
    }
}