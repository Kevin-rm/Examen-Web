<?php

if (isset($_SESSION['success'])) {
    ?>
    <!-- Success pop -->
    <div class="static-toast">
        <div class="bs-toast toast fade show bg-success" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-semibold">Succès!</div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $_SESSION['success'] ?>
            </div>
        </div>
    </div>
    <!--/Success pop -->
    <?php
    unset($_SESSION['success']);
}
?>

<!--Error pop -->
<?php
if (isset($_SESSION['flash_messages'])) {
    ?>
    <div class="static-toast">
        <div class="bs-toast toast fade show bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <i class="bx bx-bell me-2"></i>
                <div class="me-auto fw-semibold">Erreur</div>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                <?= $_SESSION['flash_messages'] ?>
            </div>
        </div>
    </div>
    <?php
    unset($_SESSION['flash_messages']);
}
?>
<!--/Error pop-->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Saisie/</span>Dépenses</h4>

    <!-- Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Insertion des dépenses</h5>
                    <small class="text-muted float-end">utilisateur</small>
                </div>
                <div class="card-body">
                    <form action="../../functions/cueilleur/traitement_depenses.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="date">Date</label>
                            <input type="date" class="form-control" id="date" name="date" />
                        </div>
                        <div class="mb-3">
                            <label for="categorie-depense" class="form-label">Catégorie de dépenses</label>
                            <select class="form-select" id="categorie-depense" aria-label="Default select example"
                                name="categorie-depense">
                                <option selected>Choix</option>
                                <?php
                                foreach (get_all_categorie_depense() as $categorie_depense) { ?>
                                    <option value="<?= $categorie_depense->id ?>"><?= $categorie_depense->categorie ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="montant">Montant</label>
                            <input type="number" class="form-control" id="montant" name="montant" min="0" />
                        </div>
                        <button type="submit" class="btn btn-primary">Confirmer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>