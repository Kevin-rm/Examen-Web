<nav
        class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
        id="layout-navbar"
>
    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <div class="d-flex">
            <div class="flex-grow-1">
                <span class="fw-semibold d-block"><?php echo 'Nom : ' . $_SESSION['membre']->nom . '. Pseudo : ' . $_SESSION['membre']->pseudo; ?></span>
                <small class="text-muted">
                    <?php
                    if ($_SESSION['membre']->is_admin === 0) {
                        echo 'Utilisateur';
                    } else echo 'Administrateur';
                    ?>
                </small>
            </div>
        </div>
        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="dropdown-item" href="../deconnexion.php">
                    <i class="bx bx-power-off me-2"></i>
                    <span class="align-middle">Déconnexion</span>
                </a>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>