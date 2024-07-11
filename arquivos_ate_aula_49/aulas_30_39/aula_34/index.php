<?php

require_once 'sistema/configuracao.php';
include_once 'helpers.php';

echo "<b>Aula 034 Slug URL Amigável</b>";
echo '<hr><hr>';

echo slug("      Adão \"Negro\" - '2022'    ") . '<hr>';
echo slug("Avatar 2: O Caminho da Água") . '<hr>';
echo slug("Não! Não Olhe!") . '<hr>';
echo slug("Sonic 2 - O Filme") . '<hr>';
echo slug("NOVA SÉRIE NO DISNEY+!") . '<hr>';
echo slug("100 Melhores filmes") . '<hr>';
echo slug("teste!@###$6¨%%¨,*.:/?\|,") . '<hr>';