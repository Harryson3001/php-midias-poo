<?php

require_once __DIR__ . '/Midia.php';

class Musica extends Midia
{
    private string $album;

    public function __construct(string $titulo, string $autor, int $duracaoEmSegundos, string $album)
    {
        parent::__construct($titulo, $autor, $duracaoEmSegundos);
        $this->album = $album;
    }

    public function reproduzir(): string
    {
        return "Tocando musica: {$this->getDescricao()} | Album: {$this->album}";
    }
}
