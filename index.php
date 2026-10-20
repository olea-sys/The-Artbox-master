<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
    <?php require_once 'oeuvres.php'; ?>
    <!-- header -->
    <?php include_once('header.php'); ?>
    <main>
        <div id="liste-oeuvres">
            <?php foreach ($oeuvres as $id => $oeuvre): ?>
            <article class="oeuvre">
                <a href="oeuvre.php?id=<?= urlencode((string) $id) ?>">
                    <img
                        src="<?= htmlspecialchars($oeuvre['image'], ENT_QUOTES, 'UTF-8') ?>"
                        alt="<?= htmlspecialchars($oeuvre['titre'], ENT_QUOTES, 'UTF-8') ?>"
                    >
                    <h2>
                        <?= htmlspecialchars($oeuvre['titre'], ENT_QUOTES, 'UTF-8') ?>
                    </h2>
                    <p class="description">
                        <?= htmlspecialchars($oeuvre['artiste'], ENT_QUOTES, 'UTF-8') ?>
                    </p>
                </a>
            </article>
        <?php endforeach; ?>
        </div>
    </main>

    <!-- footer -->
    <?php include_once('footer.php'); ?>
    
</body>
</html>