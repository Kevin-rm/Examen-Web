<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Saisie/</span>Dépenses</h4>

    <!-- Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Insertion dépenses</h5>
                    <small class="text-muted float-end">utilisateur</small>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" />
                        </div>
                        <div class="mb-3">
                            <label for="categorie-depense" class="form-label">Catégorie de dépenses</label>
                            <select class="form-select" id="categorie-depense" aria-label="Default select example"
                                name="categorie-depense">
                                <option selected>Choix</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="montant">Montant</label>
                            <input type="number" class="form-control" id="montant" name="montant" />
                        </div>
                        <button type="submit" class="btn btn-primary">Confirmer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>