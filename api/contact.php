<?php session_start();
?>

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
        <section class="mb-4">
            <h2 class="h1-responsive font-weight-bold text-center my-4 text-warning">Contactez-moi</h2>
            <!--Section description-->
            <p class=" text-center w-responsive mx-auto mb-5">Avez-vous une question? N'hésitez pas à me contacter. Je vous répondrais rapidement.</p>
            <?php
            if (!empty($_SESSION["alert"])) echo '<p class="text-danger text-center">' . $_SESSION["alert"] . '</p>';
            if (!empty($_SESSION["ok"]) && $_SESSION["ok"]) session_destroy();
            ?>
            <div class="row justify-content-center">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="validation/contact2.php" method="POST">

                        <div class="row m-3">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="mail" class="">Votre email</label>
                                    <input type="text" id="mail" name="mail" class="form-control" value="<?= isset($_SESSION['mail']) ? htmlspecialchars($_SESSION['mail']) : '' ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="sujet" class="">Sujet</label>
                                    <input type="text" id="sujet" name="sujet" class="form-control" value="<?= isset($_SESSION['sujet']) ? htmlspecialchars($_SESSION['sujet']) : '' ?>">
                                </div>
                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <label for="message">Votre message</label>
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" value="<?= isset($_SESSION['message']) ? htmlspecialchars($_SESSION['message']) : '' ?>"></textarea>
                                </div>

                            </div>
                        </div>

                        <div class="row m-3">
                            <div class="text-center text-md-left">
                                <input class="btn btn-sm btn-outline-warning" type="submit" name="envoyer" value="Envoyer">
                            </div>
                    </form>
        </section>
    </main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>