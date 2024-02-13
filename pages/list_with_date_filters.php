<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-8 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Liste</h5>
                            <p class="mb-4">
                                Recherche globale du coût de revient, poids de cueillette total, poids restant sur les parcelles
                                entre deux dates données
                            </p>
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Date de début</label>
                                    <input type="date" class="form-control" name="date-min"/>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Date de fin</label>
                                    <input type="date" class="form-control" name="date-max"/>
                                </div>
                                <input type="submit" value="Envoyer" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img
                                    src="../../assets/img/illustrations/man-with-laptop-light.png"
                                    height="140"
                                    alt="View Badge User"
                                    data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                    data-app-light-img="illustrations/man-with-laptop-light.png"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 order-1">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <!-- cout de revient-->
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                            src="../../assets/img/icons/unicons/chart-success.png"
                                            alt="chart success"
                                            class="rounded"
                                    />
                                </div>
                            </div>
                            <span>Coût de revient par kg</span>
                            <h3 class="card-title text-nowrap mb-1">/</h3>
                        </div>
                    </div>
                </div>
                <!--/ cout de revient-->
                <!-- Poids total ceuillette -->
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                            src="../../assets/img/icons/unicons/wallet-info.png"
                                            alt="Credit Card"
                                            class="rounded"
                                    />
                                </div>
                            </div>
                            <span>Poids total cueillette</span>
                            <h3 class="card-title text-nowrap mb-1">/</h3>
                        </div>
                    </div>
                </div>
                <!--/ Poids total ceuillette -->
                <!-- Poids restant -->
                <div class="col-lg-6 col-md-12 col-6 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-flex align-items-start justify-content-between">
                                <div class="avatar flex-shrink-0">
                                    <img
                                            src="../../assets/img/icons/unicons/wallet-info.png"
                                            alt="Credit Card"
                                            class="rounded"
                                    />
                                </div>
                            </div>
                            <span>Poids restant sur les parcelles</span>
                            <h3 class="card-title text-nowrap mb-1">/</h3>
                        </div>
                    </div>
                </div>
                <!--/ Poids restant -->
            </div>
        </div>
    </div>
</div>

<script src="../js/list_with_date_filters.js"></script>