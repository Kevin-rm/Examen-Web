<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Liste/</span>Parcelle</h4>

    <!-- Basic Bootstrap Table -->
    <div class="card">
        <h5 class="card-header"></h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Numero parcelle</th>
                    <th>surface</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                <?php
                foreach (get_all_parcelle() as $parcelle) { ?>
                    <tr>
                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $parcelle->id ?></strong></td>
                        <td><?= $parcelle->surface ?> m²</td>
                    </tr>
                <?php }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
