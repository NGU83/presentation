<header class="navbar fixed-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="index.php">Nabil GUETTAF</a>
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="index.php">Mon profil</a>
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="sites.php">Mes sites web</a>
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="contact.php">Contact</a>
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="https://www.linkedin.com/in/nabil-guettaf-3a3871297/" accordion target="_blank">
        <img class="d-block m-auto" src="images/linkedin.svg?t=<?= time() ?>" alt="images/linkedIn" height="30">
    </a>


    <ul class="navbar-nav flex-row">
        <li>
            <button id="tableDesMatieres" class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                <i class="fas fa-align-justify">
                </i>
            </button>
        </li>
    </ul>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h4 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Menu</h4>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close">
            </button>
        </div>
        <div class="offcanvas-body">
            <?php include 'sidebar.php'; ?>
        </div>
    </div>
</header>