<?php
header('Access-Control-Allow-Origin: *');
header("Content-type: application/json; charset=utf-8");

$path = "https://techpl4y.000webhostapp.com/imagens/jogos/";

$games[1] = array(
    "id" => 1,
    "nome" => "ReaperGoblin",
    "play" => "plays/ReaperGoblin/index.html",
    "descricao" => "<p>
            GoblinReaper é um jogo de aventura e ação inspirado no universo sombrio de
            <strong>Goblin
                Slayer</strong>. Desenvolvido na engine <strong>Construct 3</strong> e disponível
            para
            PC, o jogo mergulha os jogadores em um mundo repleto de monstros e principalmente o que
            nosso personagem mais gosta de massacrar, <strong>GOBLINS!</strong>.
        </p>

        <p>
            Os jogadores assumem o papel de um Aventureiro assustador e turbulento
            <strong>GoblinReaper</strong>, embarcando em missões para recuperar e proteger os
            inocentes
            das investidas dos Goblins e para alimentar sua vontade de vingança e odio. Com uma
            jogabilidade dinâmica e intensa, o jogo oferece combates estratégicos, exploração de
            Masmorras sombrias e resolução de enigmas intrigantes.
        </p>

        <p>
            Utilizando o mouse o teclado, os jogadores mergulham em batalhas e confrontos
            Emocionantes
            enquanto desvendam os segredos e mistérios do mundo do jogo. Prepare-se para fazer
            massacre
            brutais e tornar-se o lendário <strong>Goblin Reaper</strong> neste jogo de ação.
        </p>",

    "poster" => "{$path}poster_reaperGoblin.jpg",
    "banner" => "{$path}banner1.gif",

);


$games[2] = array(
    "id" => 2,
    "nome" => "SpaceCapWay",
    "play" => "plays/ReaperGoblin/Star",
    "descricao" => "
            <p>Quesito: Ter um computador</p>

            <p>Engine: Construct 3</p>

            <p>Plataforma: Pc</p>

            <p>Mecânica: Shoot 'em up</p>

            <p>Dispositivo de entrada: (Mouse, Teclado)</p>

            <p>Formação:Rede Alfa de ensino, TADS integrado</p>",

    "poster" => "{$path}SpaceCapWay.jpg",
    "banner" => "{$path}SpaceCapWay.jpg",
);

$games[3] = array(
    "id" => 3,
    "nome" => "Wanted",
    "play" => "plays/Wanted/index.html",
    "descricao" => "<p>
            Wanted é um jogo de plataforma que pede ao jogador que resolva um problema, ajudar o perdido gatinho Bisoli a encontrar sua dona. O jogador nessa aventura de ajudar Bisoli é preciso tomar muito cuidado, existem algumas pessoas que se pegarem Bisoli não vão querer devolvê-lo para sua dona. Wanted é um jogo single player com gráficos 2D, venha se divertir nessa jornada!
        </p>",

    "poster" => "{$path}Wanted.jpeg",
    "banner" => "{$path}IMG-20240619-WA0020.jpg",

);
$games[4] = array(
    "id" => 4,
    "nome" => "JohnLennon",
    "play" => "plays/Jhon/index.html",
    "descricao" => "
    <p>Encontre Seu Caminho é um jogo de aventura e ação onde o jogador assume o papel de John Lennon, um personagem que acorda em um local desconhecido sem qualquer lembrança de seu passado.</p>

    <p>Ao despertar, ele se depara com um machado ao seu lado e é imediatamente atacado por estranhos monstros.
    Determinado a recuperar suas memórias e entender como chegou ali, John Lennon decide explorar o ambiente perigoso em que se encontra.</p>

    <p>Ao longo de sua jornada, ele enfrentará desafios e quebra-cabeças, além de combater diversos tipos de monstros que tentam impedi-lo de escapar daquel lugar terrível.</p>",

    "poster" => "{$path}JohnLennon.jpg",
    "banner" => "{$path}Jonh.jpg",
);
$games[5] = array(
    "id" => 5,
    "nome" => "MonsterHunter",
    "play" => "plays/MonsterHunter/index.html",
    "descricao" => "
    <p>Encontre Seu Caminho é um jogo de aventura e ação onde o jogador assume o papel de John Lennon, um personagem que acorda em um local desconhecido sem qualquer lembrança de seu passado.</p>

    <p>Ao despertar, ele se depara com um machado ao seu lado e é imediatamente atacado por estranhos monstros.
    Determinado a recuperar suas memórias e entender como chegou ali, John Lennon decide explorar o ambiente perigoso em que se encontra.</p>
    
    <p>Ao longo de sua jornada, ele enfrentará desafios e quebra-cabeças, além de combater diversos tipos de monstros que tentam impedi-lo de escapar daquel lugar terrível.</p>",

    "poster" => "{$path}MonsterHunter-personagem.jpg",
    "banner" => "{$path}MonsterHunter.jpg",
);
echo json_encode($games);
