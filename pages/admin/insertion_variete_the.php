<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Insertion/</span>Variété thé</h4>

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
                        <input type="hidden" name="to-insert" value="variete_the">
                        <input type="hidden" name="page" value="<?= $_GET['page'] ?>">
                        <div class="mb-3">
                            <label class="form-label" for="nom">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom"  placeholder="nom" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="occupation">Occupation</label>
                            <input type="number" class="form-control" id="occupation" name="occupation"  placeholder="Occupation en pieds" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="rendement">Rendement</label>
                            <input type="text" class="form-control" id="rendement" name="rendement" placeholder="Rendement par kilogrammes" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="prix-vente">Prix vente</label>
                            <input type="text" class="form-control" id="prix-vente" name="prix-vente" placeholder="Prix de vente" />
                        </div>
                        <input type="submit" value="Envoyer" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>