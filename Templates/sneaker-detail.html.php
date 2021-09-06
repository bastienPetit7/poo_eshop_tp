<div class="container mt-3">


    <a href="sneaker.php" class="btn btn-dark d-inline m-3"> < Voir toutes les sneakers</a>
    
    <div class="d-flex flex-column align-items-center mt-3">
        <h1 class="mb-4 d-block"><?= $sneaker['nom'] ?></h1>
        
        <img src="Assets/images/sneakers/<?= $sneaker['image'] ?>.jpeg" alt="" style="width:300px; height:auto;" >
        
        <p class="mt-4"> <strong>Déscription: </strong> <?= $sneaker['description'] ?></p>
        <p> <strong>Prix: </strong> <?= $sneaker['prix'] ?>€</p>

        <a href="delete.php?id=<?=$sneaker['id'] ?>&type=<?=$sneaker['type'] ?>" class="btn btn-danger mb-5">Supprimer l'article</a>
    </div>

</div>