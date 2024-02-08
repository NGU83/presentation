<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site web</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Get your own code at fontawesome.com-->

</head>

<body>
    <?php include 'inc/header.php'; ?>
    <main class="container">
        <div class="row row-cols-sm-12 row-cols-lg-2">
            <div class="card" id="presentation">
                <div class="card-header text-bg-dark text-warning text-center border-bottom">
                    <img class="d-block m-auto" src="images/presentation.svg?t=<?= time() ?>" alt="images/presentation" height="150">
                    Presentation
                </div>
                <div class="card-body text-bg-dark">
                    <h5 class="card-title fs-1">Développeur web et mainframe</h5>
                    <!-- wrap text in a div -->
                    <div class="card-text collapse mb-3" id="collapseWidthPresentation">
                        <?php include 'inc/presentation.php'; ?>
                    </div>
                    <!-- wrap button in a div -->
                    <div>
                        <button class="btn btn-sm btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthPresentation" aria-expanded="false" aria-controls="collapseWidthPresentation">
                            Voir plus...
                        </button>
                    </div>
                </div>
            </div>
            <div class="card" id="competences">
                <div class="card-header text-bg-dark text-warning text-center border-bottom">
                    <img class="d-block m-auto" src="images/competences.svg?t=<?= time() ?>" alt="images/competences" height="150">
                    Compétences
                </div>
                <div class="card-body text-bg-dark">
                    <h5 class="card-title fs-1">Maîtrise environnement informatique, gestion de projet, les langages</h5>
                    <!-- wrap text in a div -->
                    <div class="card-text collapse mb-3" id="collapseWidthCompetences">
                        <?php include 'inc/competences.php'; ?>
                    </div>
                    <!-- wrap button in a div -->
                    <div>
                        <button class="btn btn-sm btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthCompetences" aria-expanded="false" aria-controls="collapseWidthCompetences">
                            Voir plus....
                        </button>
                    </div>
                </div>
            </div>
            <div class="card" id="experiences">
                <div class="card-header text-bg-dark text-warning text-center border-bottom">
                    <img class="d-block m-auto" src="images/experiences.svg?t=<?= time() ?>" alt="images/experiences" height="150">
                    Expériences
                </div>
                <div class="card-body text-bg-dark">
                    <h5 class="card-title fs-1">20 ans d'expérience en informatique.</h5>
                    <!-- wrap text in a div -->
                    <div class="card-text collapse mb-3" id="collapseWidthExperiences">
                        <?php include 'inc/experiences.php'; ?>
                    </div>
                    <!-- wrap button in a div -->
                    <div>
                        <button class="btn btn-sm btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExperiences" aria-expanded="false" aria-controls="collapseWidthExperiences">
                            Voir plus....
                        </button>
                    </div>
                </div>
            </div>
            <div class="card" id="formations">

                <div class="card-header text-bg-dark text-warning text-center border-bottom">
                    <img class="d-block m-auto" src="images/formations.svg?t=<?= time() ?>" alt="images/formations" height="150">
                    Formations
                </div>
                <div class="card-body text-bg-dark">
                    <h5 class="card-title fs-1">Formations en languages informatiques, études universitaires</h5>
                    <!-- wrap text in a div -->
                    <div class="card-text collapse mb-3" id="collapseWidthFormations">
                        <?php include 'inc/formations.php'; ?>
                    </div>
                    <!-- wrap button in a div -->
                    <div>
                        <button class="btn btn-sm btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthFormations" aria-expanded="false" aria-controls="collapseWidthFormations">
                            Voir plus....
                        </button>
                    </div>
                </div>
            </div>
            <div class="card" id="atouts">
                <div class="card-header text-bg-dark text-warning text-center border-bottom">
                    <img class="d-block m-auto" src="images/atouts.svg?t=<?= time() ?>" alt="images/atouts" height="150">
                    Atouts
                </div>
                <div class="card-body text-bg-dark">
                    <h5 class="card-title fs-1"></h5>
                    <!-- wrap text in a div -->
                    <div class="card-text collapse mb-3" id="collapseWidthAtouts">
                        <?php include 'inc/atouts.php'; ?>
                    </div>
                    <!-- wrap button in a div -->
                    <div>
                        <button class="btn btn-sm btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthAtouts" aria-expanded="false" aria-controls="collapseWidthAtouts">
                            Voir plus....
                        </button>
                    </div>
                </div>
            </div>
            <div class="card" id="loisirs">
                <div class="card-header text-bg-dark text-warning text-center border-bottom">
                    <img class="d-block m-auto" src="images/loisirs.svg?t=<?= time() ?>" alt="images/loisirs" height="150">
                    Loisirs
                </div>
                <div class="card-body text-bg-dark">
                    <h5 class="card-title fs-1"></h5>
                    <!-- wrap text in a div -->
                    <div class="card-text collapse mb-3" id="collapseWidthLoisirs">
                        <?php include 'inc/loisirs.php'; ?>
                    </div>
                    <!-- wrap button in a div -->
                    <div>
                        <button class="btn btn-sm btn-outline-warning" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthLoisirs" aria-expanded="false" aria-controls="collapseWidthLoisirs">
                            Voir plus....
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>