<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pokemon: <?= getName($pokemon);?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./vista/styles/normalize.css">
    <link rel="stylesheet" href="./vista/styles/styles.css">
</head>
<body>
    <div class="wrap <?= clasNature($pokemon)?>">
        <header class="header">
            <div class="container">
                <form class="searchForm" action="<?= $_SERVER['PHP_SELF'];?>">
                    <input class="search" type="search" name="search" placeholder="Search here">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </form>
            </div>
        </header>
        <main class="main">
            <div class="container">
                <section class="up">
                    <div class="layer1">
                        <article class="brief">
                            <p><?= getNature($pokemon);?></p>
                            <h1><?= getName($pokemon);?></h1>
                            <div class="description">
                                <div class="row">
                                    <h3>Height</h3>
                                    <p><?= getHeight($pokemon)?> M</p>
                                </div>
                                <div class="row">
                                    <h3>Weight</h3>
                                    <p><?= getWeight($pokemon)?> KG</p>
                                </div>
                                <div class="row">
                                    <h3>Abilities</h3>
                                    <p><?= getAbilities($pokemon)?></p>
                                </div>
                            </div>
                        </article>
                        <article class="imgContainer">
                            <img src="<?= getImg($pokemon)?>" alt="<?= getName($pokemon);?>" width="200px">
                        </article>
                    </div>
                    <div class="layer2">
                        <p><?= getId($pokemon)?></p>
                    </div>
                </section>
                <section class="down">
                    <h3>Stats</h3>
                    <article class="stats">
                        <!-- <script>
                            let ancho = document.getElementsByClassName('level');
                        </script> -->
                        <?php foreach(getStats($pokemon) as $stat => $s):?>
                            <!-- <script>
                                this.ancho.clientWidth = <?= $s?>;
                            </script> -->
                            <div class="row">
                                <p class="stat"><?= $stat;?></p>
                                <div class="level">
                                    <div class="amount" style="width: <?= $s * 1.90969;?>px ;"></div>
                                </div>
                                <p class="amount"><?= $s;?></p>
                            </div>
                        <?php endforeach;?>
                        <table>
                        </table>
                    </article>
                </section>
            </div>
        </main>
    </div>
</body>
<script src="https://use.fontawesome.com/d034c4f984.js"></script>
</html>