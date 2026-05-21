# Sistema de Midias em PHP

Projeto simples em PHP para demonstrar os principais conceitos de programacao orientada a objetos:

![PHP](https://img.shields.io/badge/PHP-8%2B-777BB4?style=for-the-badge&logo=php&logoColor=white)
![POO](https://img.shields.io/badge/POO-Heranca%20%7C%20Polimorfismo-blue?style=for-the-badge)
![Status](https://img.shields.io/badge/status-concluido-brightgreen?style=for-the-badge)

## Sobre o projeto

O sistema simula uma playlist capaz de armazenar diferentes tipos de midia e reproduzir todos os itens usando a mesma interface.

Foram implementados:

- Classe abstrata `Midia`, com atributos e comportamentos comuns.
- Interface `Reproduzivel`, com o metodo `reproduzir(): string`.
- Classes filhas `Musica`, `Podcast` e `VideoCurto`.
- Polimorfismo por meio da interface `Reproduzivel`.
- Classe `Playlist`, responsavel por armazenar e reproduzir as midias.

## Estrutura de arquivos

```text
php/
|-- index.php
|-- Reproduzivel.php
|-- Midia.php
|-- Musica.php
|-- Podcast.php
|-- VideoCurto.php
|-- Playlist.php
`-- README.md
```

## Classes

| Arquivo | Responsabilidade |
| --- | --- |
| `Reproduzivel.php` | Define o contrato `reproduzir(): string`. |
| `Midia.php` | Classe abstrata com titulo, autor, duracao e descricao. |
| `Musica.php` | Representa uma musica e informa o album. |
| `Podcast.php` | Representa um podcast e informa o episodio. |
| `VideoCurto.php` | Representa um video curto e informa a plataforma. |
| `Playlist.php` | Armazena objetos reproduziveis e executa todos. |
| `index.php` | Demonstra o uso do sistema. |

## Como executar

Tenha o PHP instalado e rode:

```bash
php index.php
```

## Exemplo de saida

```text
Playlist: Minhas Midias
Tocando musica: Noite Clara - Ana Souza (03:35) | Album: Horizonte
Reproduzindo podcast: Tecnologia em Foco - Carlos Lima (30:00) | Episodio 12
Exibindo video curto: Dica de PHP - Dev Rapido (00:58) | Plataforma: TikTok
```

## Conceitos usados

- **Abstracao:** `Midia` concentra o que todo tipo de midia possui.
- **Heranca:** `Musica`, `Podcast` e `VideoCurto` reaproveitam a base de `Midia`.
- **Interface:** `Reproduzivel` garante que toda midia tenha o metodo `reproduzir`.
- **Polimorfismo:** `Playlist` trabalha com qualquer objeto que implemente `Reproduzivel`.
