<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Insertion/</span>Configuration</h4>

    <!-- Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Saisie</h5>
                    <small class="text-muted float-end">admin</small>
                </div>
                <div class="card-body">
                    <form action="../../functions/admin/traitement_config.php" method="post">
                        <div class="mb-3">
                            <label class="form-label" for="Mois">Mois</label>
                            <div class="row gy-3">
                                <div class="col-md">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="01" id="mois" name="mois" />
                                        <label class="form-check-label" for="mois"> Janvier </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="02" id="mois" name="mois"/>
                                        <label class="form-check-label" for="mois"> Fevrier </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="03" id="mois" />
                                        <label class="form-check-label" for="mois"> Mars </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="04" id="mois" name="mois" />
                                        <label class="form-check-label" for="mois"> Avril</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="05" id="mois" name="mois"/>
                                        <label class="form-check-label" for="mois"> Mai </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="06" id="mois" name="mois" />
                                        <label class="form-check-label" for="mois"> Juin </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="07" id="mois"  name="mois"/>
                                        <label class="form-check-label" for="mois"> Juillet </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="08" id="mois" name="mois" />
                                        <label class="form-check-label" for="mois"> Aout </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="09" id="mois"  name="mois"/>
                                        <label class="form-check-label" for="name"> Septembre </label>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="10" id="mois" name="mois" />
                                        <label class="form-check-label" for="mois"> Octobre </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="11" id="mois" name="mois"/>
                                        <label class="form-check-label" for="defaultCheck2"> Novembre </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="mois" name="mois"/>
                                        <label class="form-check-label" for="mois"> Decembre </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="poids-minimal-journalier">Poids minimal journalier</label>
                            <input type="text" class="form-control" id="poids-minimal-journalier" name="poids-minimal-journalier"  placeholder="Poids minimal journalier des cueilleurs" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="salaire-cueilleur">Salaire cueilleur</label>
                            <input type="text" class="form-control" id="salaire-cueilleur" name="salaire-cueilleur"  placeholder="Par kilogramme" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="poids-min">Bonus</label>
                            <input type="text" class="form-control" id="bonus" name="bonus"  placeholder="bonus" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="mallus">Mallus</label>
                            <input type="text" class="form-control" id="mallus" name="mallus" placeholder="mallus" />
                        </div>
                        <input type="submit" value="Envoyer" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>