<?php require'partie/head.php' ?>

    <div class="container">
    <h3 class="alert alert-info">Identité du client</h3>
        <form action="" method="post">
            <div class="form-group">
                <select name="genre" id="" class="form-control">genre
                    <option value="0" selected>Selectionner</option>
                    <option value="M">Monsieur</option>
                    <option value="mle">Mademoiselle</option>
                    <option value="mme">Madame</option>
                </select>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="nom">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control" placeholder="Nom du client">
                        </div>
                        <div class="col-8">
                            <label for="prenom">Prénom(s)</label>
                            <input type="text" name="prenom" id="prenom" class="form-control" placeholder="Prénom(s) du client">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-4">
                            <label for="date_naissance">Date de naissance</label>
                            <input type="date" name="date_naissance" id="date_naissance" class="form-control">
                        </div>
                        <div class="col-8">
                            <label for="lieu_naissance">Lieu de naissance</label>
                            <input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control" placeholder="Lieu de naissance">
                        </div>
                    </div>
                </div>

                <label for="profession">Profession</label>
                <input type="text" name="profession" id="profession" class="form-control" placeholder="Profession">
                <div class="form-group">
                    <div class="row">
                    <div class="col-6">
                        <label for="identite">Pièce d'identité</label>
                        <select name="identite" id="identite" class="form-control">
                            <option value="0" selected>Selectionner</option>
                            <option value="cni">Carte nationale d'identité</option>
                            <option value="att">Attestation d'identité</option>
                            <option value="pp">Passport</option>
                            <option value="autre">Autres(preciser)</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="numero_piece">Numéro de la pièce</label>
                        <input type="text" name="numeo_piece" id="numero_piece" class="form-control">
                    </div>
                </div>
                </div>
                
                <label for="nationalite">Nationalité</label>
                <input type="text" name="nationalite" class="form-control" placeholder="Nationalité">
            </div>
            <div class="row">
                <div class="col-md-6 form-group">
                    <a href="index.php" class="btn btn-danger">Annuler</a>
                </div>
                <div class="col-md-6 form-group text-right">
                    <a href="info_client.php" class="btn btn-success">Suivant</a>
                </div>
            </div>
        </form>
    </div>

    <?php require'partie/footer.php';