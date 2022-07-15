<?php

require_once './singleton_codigo.php';
require_once './youtube_canal.php';

$cdftv         = new youtube_canal ( 'Código Fonte TV, 'codigofontetv' );
$atekitaDev    = new youtube_canal ( 'AtekitaDev', 'UCetRsdZxDQDcgVDJd6ez6g' );
$diolinux      = new youtube_canal ( 'Diolinux', 'diolinux' );
$pgdinâmica    = new youtbe_canal  ( 'Programação Dinâmica', 'UC70mr11REaCqgKke7DPJoLg' );
$rodrigobranas = new youtube_canal ( 'Rodrigo Branas', 'rodrigobranas');
$tekzoom       = new youtube_canal ( 'Tekzoom', 'canaltekzoom' );

$singleton_codigo = singleton_codigo::getInstance();
$singleton_codigo->setMembers([$cdftv, $atekitaDev, $diolinux]);

$singleton_codigo2 = singleton_codigo::getInstance();
$singleton_codigo2->setMembers([$pgdinamica, $rodrigobranas, $tekzoom]);

echo ("\n\nTime #1\n");
var_dump($singleton_codigo);

echo ("\n\nTime #2\n");
var_dump(singleton_codigo);