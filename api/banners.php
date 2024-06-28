<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://techpl4y.000webhostapp.com/imagens/jogos/";

    $banners[0] = array("nome"=>"Reaper Goblin","imagem"=>"{$path}banner1.gif","id_game"=>1);
    $banners[1] = array("nome"=>"MonsterHunter","imagem"=>"{$path}banner2.jpg","id_game"=>5);
    $banners[2] = array("nome"=>"Wanted","imagem"=>"{$path}banner3.jpg","id_game"=>3);

    echo json_encode($banners);