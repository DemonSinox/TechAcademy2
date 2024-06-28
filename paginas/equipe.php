<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
$url = "https://techpl4y.000webhostapp.com/api/equipe.php";

$dadosApi = file_get_contents($url);
$dados = json_decode($dadosApi);

?>

<h1 class="text-center">Equipe de Desenvolvimento</h1>


<div class="row" data-aos="fade-down">
        <?php
            foreach($dados as $equipe) {
                ?>
                <div class="col-12 col-md-4">
                    <div class="card" data-aos="fade-right">
                        <a style="text-decoration: none; "href="<?=$equipe->portifolio?>" target="_blank">
                        <img width="100%" height="350vh" src="<?=$equipe->foto?>"
                        alt="<?=$equipe->nome?>" class="card-img-top">
                        <div class="card-text text-center">
                            <p><strong><?=$equipe->nome?></strong></p>
                            <p class="card-text">DeV.<?=$equipe->cargo?></p>
                        </a>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
</div>
