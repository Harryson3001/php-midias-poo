<?php

require_once __DIR__ . '/Midia.php';

class VideoCurto extends Midia
{
    private string $plataforma;

    public function __construct(string $titulo, string $autor, int $duracaoEmSegundos, string $plataforma)
    {
        parent::__construct($titulo, $autor, $duracaoEmSegundos);
        $this->plataforma = $plataforma;
    }

    public function reproduzir(): string
    {
        return "Exibindo video curto: {$this->getDescricao()} | Plataforma: {$this->plataforma}";
    }
}
