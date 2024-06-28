<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
$url = "https://techpl4y.000webhostapp.com/banners.php";

$dadosApi = file_get_contents($url);
$dadosBanner = json_decode($dadosApi);

?>
<div id="carouselExample" class="carousel slide" data-aos="fade">
    <div class="carousel-inner">
        <?php
            foreach($dadosBanner as $dados) {
                ?>
                <div class="carousel-item active">
                    <a href="game/<?=$dados->id_game?>">
                        <img src="<?=$dados->imagem?>" class="d-block w-100" alt="<?=$dados->nome?>">
                    </a>
                </div>
                <?php
            }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container">
    <h1 class="text-center">
        Principais Novos Laçamentos
    </h1>

    <div class="row">
        <?php
        foreach ($dadosJogos as $dados) {
        ?>
            <div class="col-12 col-md-4">
                <div class="card" data-aos="fade-right">
                    <a href="game/<?= $dados->id ?>">
                        <img src="<?= $dados->poster ?>" alt="<?= $dados->nome ?>" class="card-img-top">
                    </a>
                    <div class="card-text text-center">
                        <p><strong><?= $dados->nome ?></strong>
                            <a href="<?= $dados->play ?>" class="play-button">
                                <i class="fas fa-play"></i>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>