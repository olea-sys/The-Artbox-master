<!doctype html>
<html lang="fr">
    
<?php
    require_once 'oeuvres.php'; 
    // Récupérer et vérifier l'id
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    // Vérifier que l'ID est valide et présent dans le tableau
    if ($id === null || $id === false || !isset($oeuvres[$id])) {
        header('Location: index.php');
        exit('Œuvre introuvable.');
    }
?>

<!-- head -->
<?php require_once 'head.php'; ?>

<body>
    <!-- header -->
    <?php include_once('header.php'); ?>
<main>
    <?php
        // RécupérerAfficher l'œuvre demandée
        $oeuvre = $oeuvres[$id];
    ?>
    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="<?= htmlspecialchars($oeuvre['image'], ENT_QUOTES, 'UTF-8') ?>" alt="<?= htmlspecialchars($oeuvre['titre'], ENT_QUOTES, 'UTF-8') ?>">
        </div>
        <div id="contenu-oeuvre">
            <h1><?= htmlspecialchars($oeuvre['titre'], ENT_QUOTES, 'UTF-8') ?></h1>
            <p class="description"><?= htmlspecialchars($oeuvre['artiste'], ENT_QUOTES, 'UTF-8') ?></p>
            <p class="description-complete"><?= htmlspecialchars($oeuvre['description'], ENT_QUOTES, 'UTF-8') ?></p>
        </div>
    </article>
</main>
<!-- footer -->
    <?php include_once('footer.php'); ?>
</body>
</html>
