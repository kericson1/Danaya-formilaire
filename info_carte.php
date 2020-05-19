<?php require'partie/head.php' ;?>

<div class="container">
<h3 class="alert alert-info">Informations sur la carte</h3>
<form action="" method="post">
    <fieldset>
        <legend>Info carte</legend>
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
            <label for="date_achat">Date d'achat</label>
            <input type="date" class="form-control" name="date_achat" id="date_achat">
        </div>
    </fieldset>
    
    <div class="row">
    <div class="col-md-6 form-group">
        <a href="info_client.php" class="btn btn-danger">Retour</a>
    </div>
    <div class="col-md-6 form-group text-right">
        <button type="submit" name="Enregistrer" class="btn btn-info">Enregistrer</button>
    </div>
    </div>
</form>