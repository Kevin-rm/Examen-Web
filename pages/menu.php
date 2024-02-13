<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="?page=insertion-cueillette" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Gestion de thé</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item">
            <a href="?page=list-with-filters" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="">Liste</div>
            </a>
        </li>

        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Insertion</span>
        </li>
        <li class="menu-item active open">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="">Saisie</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="?page=insertion-cueillette" class="menu-link">
                        <div data-i18n="">Cueillette</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="?page=insertion-depenses" class="menu-link">
                        <div data-i18n="">Dépenses</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>