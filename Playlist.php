<?php

require_once __DIR__ . '/Reproduzivel.php';

class Playlist
{
    private string $nome;

    /** @var Reproduzivel[] */
    private array $itens = [];

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }

    public function adicionar(Reproduzivel $midia): void
    {
        $this->itens[] = $midia;
    }

    public function reproduzirTodos(): array
    {
        $reproducoes = ["Playlist: {$this->nome}"];

        foreach ($this->itens as $item) {
            $reproducoes[] = $item->reproduzir();
        }

        return $reproducoes;
    }
}
