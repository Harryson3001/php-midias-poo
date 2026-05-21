<?php

require_once __DIR__ . '/Musica.php';
require_once __DIR__ . '/Podcast.php';
require_once __DIR__ . '/VideoCurto.php';
require_once __DIR__ . '/Playlist.php';

$playlist = new Playlist('Minhas Midias');

$playlist->adicionar(new Musica('Noite Clara', 'Ana Souza', 215, 'Horizonte'));
$playlist->adicionar(new Podcast('Tecnologia em Foco', 'Carlos Lima', 1800, 12));
$playlist->adicionar(new VideoCurto('Dica de PHP', 'Dev Rapido', 58, 'TikTok'));

foreach ($playlist->reproduzirTodos() as $linha) {
    echo $linha . PHP_EOL;
}
