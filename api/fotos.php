<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://techpl4y.000webhostapp.com/imagens/jogos/";

    $fotos[1] = array(
        array("foto"=>"{$path}image1.png"),
        array("foto"=>"{$path}image2.png"),
        array("foto"=>"{$path}image3.png"),
        array("foto"=>"{$path}image.png"),
    );

    $fotos[2] = array(
        array("foto"=>"{$path}star.jpg"),
        array("foto"=>"{$path}star2.jpg"),
    );

    $fotos[3] = array(
        array("foto"=>"{$path}IMG-20240619-WA0020.jpg"),
        array("foto"=>"{$path}IMG-20240619-WA0021.jpg"),
        array("foto"=>"{$path}IMG-20240619-WA0023.jpg"),
    );

    $fotos[4] = array(
        array("foto"=>"{$path}Jonh1.jpg"),
    );

    $fotos[5] = array(
        array("foto"=>"{$path}Monsterhunter-cenario.jpg"),
    );


    echo json_encode($fotos);

