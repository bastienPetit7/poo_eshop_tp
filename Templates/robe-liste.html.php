

    <h1 class="text-center mb-4">Les Robes</h1>

    <a href="index.php" class="btn btn-dark m-2 d-block"> < Revenir sur la page d'accueil</a>

    <div class="row text-center">

        <div class="col-12">
            <a href="pantalon.php" class="btn btn-info  m-2 "> ^ Voir les pantalons</a>
            <a href="sneaker.php" class="btn btn-warning m-2 "> ^ Voir les sneakers</a>

        </div>
    </div>
    

    <div class="row justify-content-center">

            <?php foreach($robes as $robe) : ?>

                <div class="card col-md-4 m-2" style="width: 18rem;">

                        <img src="Assets/images/robes/<?=$robe['image']?>.jpeg" class="card-img-top" alt="<?= $robe['nom'] ?>">
                        <div class="card-body">
                                <h5 class="card-title"> <?= $robe['nom'] ?></h5>
                                
                                <a href="show.php?id=<?=$robe['id'] ?>&type=<?=$robe['type'] ?>" class="btn btn-primary">Voir details</a>
                        </div>

                </div>

            <?php endforeach ?>

        
    </div>