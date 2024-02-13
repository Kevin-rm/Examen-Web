<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Liste/</span>Variété de thé</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header">Les variétés de thé</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Occupation</th>
                    <th>Rendement</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php
                foreach (get_all_variete_the() as $variete) { ?>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $variete->nom ?></strong></td>
                        <td><?= $variete->occupation ?></td>
                        <td><?= $variete->rendement ?></td>
                    </tr>
                <?php }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>