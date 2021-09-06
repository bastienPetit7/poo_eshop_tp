<div class="container mt-3">


    <a href="pantalon.php" class="btn btn-dark d-inline m-3"> < Voir tous les pantalons</a>
    
    <div class="d-flex flex-column align-items-center mt-3">
        <h1 class="mb-4 d-block"><?= $pantalon['nom'] ?></h1>
        
        <img src="Assets/images/pantalons/<?= $pantalon['image'] ?>.jpeg" alt="" style="width:300px; height:auto;" >
        
        <p class="mt-4"> <strong>Déscription: </strong> <?= $pantalon['description'] ?></p>
        <p> <strong>Prix: </strong> <?= $pantalon['prix'] ?>€</p>

        <a href="delete.php?id=<?=$pantalon['id'] ?>&type=<?=$pantalon['type'] ?>" class="btn btn-danger mb-5">Supprimer l'article</a>
    </div>

</div>