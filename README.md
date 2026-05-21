# Sistema de Midias em PHP

Exercicio de programacao orientada a objetos com classe abstrata, interface, heranca, polimorfismo e playlist.

## Estrutura

- `Reproduzivel.php`: interface com o metodo `reproduzir(): string`.
- `Midia.php`: classe abstrata com atributos e comportamentos comuns.
- `Musica.php`, `Podcast.php`, `VideoCurto.php`: classes filhas de `Midia`.
- `Playlist.php`: armazena objetos `Reproduzivel` e reproduz todos.
- `index.php`: exemplo de uso com polimorfismo.

## Como executar

```bash
php index.php
```
