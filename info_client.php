<?php require'partie/head.php';?>

  
<div class="container">
    <h3 class="alert alert-info">Informations du client</h3>
        <form action="" method="post">
                <div class="form-group">
                    <label for="adresse">Adresse</label>
                    <input type="text" class="form-control" name="adresse" required>
                    <label for="ville">Ville</label>
                    <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville" required>
                    <label for="tel">Téléphone</label>
                    <input type="number" class="form-control" name="tel" placeholder="Numéro de Téléphone">
                    <label for="mail">E-mail</label>
                    <input type="email" class="form-control" name="mail" id="mail" placeholder="info@info.com">
                    <label for="pays">Pays</label>
                    <input type="text" class="form-control" name="pays" id="pays" placeholder="Ex: Côte d'Ivoire">
                </div>
            
            <div class="row">
            <div class="col-md-6 form-group">
                <a href="identite_client.php" class="btn btn-danger">Retour</a>
            </div>
            <div class="col-md-6 form-group text-right">
                <a href="info_carte.php" class="btn btn-success">Suivant</a>
            </div>
            </div>
        </form>
    </div>
    <?php require'partie/footer.php';