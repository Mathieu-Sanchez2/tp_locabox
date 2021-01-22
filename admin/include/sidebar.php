<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= URL_ADMIN; ?>">
        <div class="sidebar-brand-text mx-3">Administration Locabox</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= URL_ADMIN; ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Tableau de bord</span></a>
        <a class="nav-link" href="<?= URL; ?>">
            <i class="fas fa-globe"></i>
            <span>Site web</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Gestion locative
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#location"
           aria-expanded="true" aria-controls="location">
            <i class="fas fa-fw fa-cog"></i>
            <span>Location</span>
        </a>
        <div id="location" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Location :</h6>
                <a class="collapse-item" href="<?= URL_ADMIN; ?>/location/add.php">Créer une location</a>
                <a class="collapse-item" href="<?= URL_ADMIN; ?>/location/">Locations en cours</a>
                <a class="collapse-item" href="<?= URL_ADMIN; ?>/location/all.php">Historique de location</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#box"
           aria-expanded="true" aria-controls="box">
            <i class="fas fa-boxes"></i>
            <span>Box</span>
        </a>
        <div id="box" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Box:</h6>
                <a class="collapse-item" href="<?= URL_ADMIN; ?>/box/">Liste des boxs</a>
                <a class="collapse-item" href="<?= URL_ADMIN; ?>/box/disponible.php">Liste des boxs disponible</a>
                <a class="collapse-item" href="<?= URL_ADMIN; ?>/box/add.php">Ajouter un box</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#client"
           aria-expanded="true" aria-controls="client">
            <i class="fas fa-users"></i>
            <span>Client</span>
        </a>
        <div id="client" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Cient:</h6>
                <a class="collapse-item" href="<?= URL_ADMIN; ?>/client/add.php">Ajouter un clients</a>
                <a class="collapse-item" href="<?= URL_ADMIN; ?>/client/">Liste des clients</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="<?= URL_ADMIN; ?>/statistique/">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Statistiques</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Site Web
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
           aria-expanded="true" aria-controls="collapsePages">
            <i class="far fa-newspaper"></i>
            <span>Actualités</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Actualités :</h6>
                <a class="collapse-item" href="<?= URL_ADMIN; ?>/actualite/add.php">Créer une actualités</a>
                <a class="collapse-item" href="<?= URL_ADMIN; ?>/actualite/">Voir les actualités</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="<?= URL_ADMIN; ?>/action/">
            <i class="fas fa-info-circle"></i>
            <span>Actions</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#utilisateur"
                   aria-expanded="true" aria-controls="utilisateur">
                    <i class="far fa-newspaper"></i>
                    <span>Utilisateur</span>
                </a>
                <div id="utilisateur" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Utilisateur :</h6>
                        <a class="collapse-item" href="<?= URL_ADMIN; ?>/utilisateur/add.php">Créer un utilisateur</a>
                        <a class="collapse-item" href="<?= URL_ADMIN; ?>/utilisateur/">Voir les utilisateurs</a>
                    </div>
                </div>
            </li>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->