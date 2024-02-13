<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Liste/</span>Catégorie dépenses</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header"></h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>Catégorie</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php
                foreach (get_all_categorie_depense() as $categ) { ?>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $categ->id ?></strong></td>
                        <td><?= $categ->categorie ?></td>
                    </tr>
                <?php }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>