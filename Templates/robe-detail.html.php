

<div class="container mt-3">


    <a href="robe.php" class="btn btn-dark d-inline m-3"> < Voir toutes les robes</a>
    
    <div class="d-flex flex-column align-items-center mt-3">
        <h1 class="mb-4 d-block"><?= $robe['nom'] ?></h1>
        
        <img src="Assets/images/robes/<?= $robe['image'] ?>.jpeg" alt="" style="width:300px; height:auto;" >
        
        <p class="mt-4"> <strong>Déscription: </strong> <?= $robe['description'] ?></p>
        <p> <strong>Prix: </strong> <?= $robe['prix'] ?>€</p>

        <a href="delete.php?id=<?=$robe['id'] ?>&type=<?=$robe['type'] ?>" class="btn btn-danger mb-5">Supprimer l'article</a>
    </div>
</div>


