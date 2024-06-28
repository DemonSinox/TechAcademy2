<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
    $dados = $dadosJogos->$jogo; 
?>
<div class="banner">
    <img data-aos="fade-down" src="<?=$dados->banner?>" alt="<?=$dados->nome?>" class="w-100">
</div>
<div class="container">

    <h1 data-aos="fade-up" class="text-center"><strong><?=$dados->nome?></strong></h1>

    <div class="row" >
        <div class="col-12 col-md-5">
            <img data-aos="fade-left" src="<?=$dados->poster?>" alt="<?=$dados->nome?>" class="w-100">
        </div>
        <div class="col-12 col-md-7">
            <a data-aos="fade-right" href="<?= $dados->play?>" target="_blank" class="jogar">JOGAR!</a>
            <div data-aos="fade-right">
                <?=$dados->descricao?>
            </div>
        </div>
    </div>
    <Section></Section>
    <div class="row" data-aos="fade-down">
        <?php
            $dadosFotos = file_get_contents("https://techpl4y.000webhostapp.com/api/fotos.php");
            $dadosFotos = json_decode($dadosFotos);

            $dados = $dadosFotos->$jogo;

            $i = 1;
            foreach($dados as $foto) {
                ?>
                <div class="col-12 col-md-3">
                    <a href="<?=$foto->foto?>" title="Foto <?=$i?>"
                    data-fslightbox>
                        <img src="<?=$foto->foto?>"
                        alt="Foto <?=$i?>" class="w-100">
                    </a>
                </div>
                <?php
                $i++;
            }
        ?>
    </div>
</div> 