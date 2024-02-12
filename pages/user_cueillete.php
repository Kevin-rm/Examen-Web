<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Insertion/</span> Ceuillette</h4>

    <!-- Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Saisie</h5>
                    <small class="text-muted float-end">utilisateur</small>
                </div>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" />
                        </div>
                        <div class="mb-3">
                            <label for="Cueilleur" class="form-label">Cueilleur</label>
                            <select class="form-select" id="Cueilleur" aria-label="Default select example"
                                name="cueilleur">
                                <option selected>Choix</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="parcelle" class="form-label">Parcelle</label>
                            <select class="form-select" id="parcelle" aria-label="Default select example"
                                name="parcelle">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="poids-ceuilli">Poids ceuilli</label>
                            <input type="number" class="form-control" id="poids-ceuilli" name="poids-ceuilli" />
                        </div>
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>