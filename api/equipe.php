<?php
    header('Access-Control-Allow-Origin: *');
    header("Content-type: application/json; charset=utf-8");

    $path = "https://techpl4y.000webhostapp.com/imagens/equipe/";

    $equipe[1] = array(
        "nome"=>"DemonSinox",
        "cargo"=>"Reaper Goblin & TechPlay",
        "foto"=>"{$path}DemonSinox.jpeg",
        "portifolio"=>"");

    $equipe[2] = array(
        "nome"=>"Jamil Jose Daiko Junior",
        "cargo"=>"Monster Hunter",
        "foto"=>"{$path}Jamil.jpeg",
        "portifolio"=>"");

    $equipe[3] = array(
        "nome"=>"Lucas De Fiori Viudes",
        "cargo"=>"Space Cap Way",
        "foto"=>
        "{$path}lucas.jpeg");

    $equipe[4] = array(
        "nome"=>"Miguel Pompilio De Camargo",
        "cargo"=>"John Lennon",
        "foto"=>"{$path}Miguel.jpeg",
        "portifolio"=>"");

    $equipe[5] = array(
        "nome"=>"Douglas(Wine)",
        "cargo"=>"Wanted",
        "foto"=>"{$path}wine.jpg",
        "portifolio"=>"");

    echo json_encode($equipe);