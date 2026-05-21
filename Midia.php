<?php

require_once __DIR__ . '/Reproduzivel.php';

abstract class Midia implements Reproduzivel
{
    protected string $titulo;
    protected string $autor;
    protected int $duracaoEmSegundos;

    public function __construct(string $titulo, string $autor, int $duracaoEmSegundos)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->duracaoEmSegundos = $duracaoEmSegundos;
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function getAutor(): string
    {
        return $this->autor;
    }

    public function getDuracaoFormatada(): string
    {
        $minutos = intdiv($this->duracaoEmSegundos, 60);
        $segundos = $this->duracaoEmSegundos % 60;

        return sprintf('%02d:%02d', $minutos, $segundos);
    }

    public function getDescricao(): string
    {
        return "{$this->titulo} - {$this->autor} ({$this->getDuracaoFormatada()})";
    }
}
