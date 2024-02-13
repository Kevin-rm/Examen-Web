<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Insertion/</span> Ceuilleur</h4>

    <!-- Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Saisie</h5>
                    <small class="text-muted float-end">admin</small>
                </div>
                <div class="card-body">
                    <form action="../../functions/admin/traitement.php" method="post">
                        <input type="hidden" name="to-insert" value="cueilleur">
                        <input type="hidden" name="page" value="<?= $_GET['page'] ?>">
                        <div class="mb-3">
                            <label class="form-label" for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="nom" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="pseudo">Pseudo</label>
                            <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="pseudo" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="genre">Genre</label>
                            <select name="genre" id="genre" class="form-select">
                                <option value="M" selected>Homme</option>
                                <option value="F">Femme</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="date-naissance">Date de naissance</label>
                            <input type="date" class="form-control" id="date-naissance" name="date-naissance" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="password">Mot de passe</label>
                            <input type="password" class="form-control" id="password" name="password" />
                        </div>
                        <input type="submit" value="Envoyer" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>