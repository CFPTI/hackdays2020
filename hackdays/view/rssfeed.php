<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link id="nightCss" rel="stylesheet" href="css/styleW.css">
</head>

<body>
    <?php require_once 'nav.php' ?>
    <div class="container">
        <div class="mx-auto search">
            <form method="post" action="#">
                <div id="searchInputRes" class="searchInput">
                    <span>
                        <input type="search" name="feedurl" placeholder="Enter website feed URL">
                        <i class="fas fa-search fa-lg fa-fw"></i>
                    </span>
                </div>
            </form>
            <?= empty($error) ? '' : $error ?>
            <div class="article">
                <h2><a class="feed_title" href="<?= empty($link) ? '' : $link ?>"><?= empty($title) ? '' : $title ?></a></h2>
                <span><?= empty($pubDate) ? '' : $pubDate ?></span>
            </div>
            <div class="mx-auto search">
                <?= html_entity_decode(empty($desc) ? '' : $desc) ?>
                <a href="<?= empty($link) ? '' : $link ?>"><?= empty($link) ? '' : 'Lien' ?></a>
            </div>
        </div>
        <span id="fGlobal"><?php require_once 'footer.php'; ?></span>
    </div>
    <script src="js/nightmod.js" type="text/javascript"></script>
</body>
</html>
