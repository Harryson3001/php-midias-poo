<?php

require_once __DIR__ . '/Midia.php';

class Podcast extends Midia
{
    private int $episodio;

    public function __construct(string $titulo, string $autor, int $duracaoEmSegundos, int $episodio)
    {
        parent::__construct($titulo, $autor, $duracaoEmSegundos);
        $this->episodio = $episodio;
    }

    public function reproduzir(): string
    {
        return "Reproduzindo podcast: {$this->getDescricao()} | Episodio {$this->episodio}";
    }
}
