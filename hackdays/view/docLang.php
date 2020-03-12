<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <link id="nightCss" rel="stylesheet" href="css/styleW.css">
    <title>Home</title>
</head>
<body>
    <?php require_once 'nav.php'; ?>
    <div class="container">
        <div class="article">
            <div class="row justify-content-center align-middle">
                <div class="col-md-4">
                    <p class="keyword">NAT</p>
                    <p class="keyword">BOOL</p>
                    <p class="keyword">ADDSEARCH</p>
                    <p class="keyword">RMSEARCH</p>
                </div>
                <div class="col-md-4">
                    <p class="def">Une recherche avec l'expression naturel...</p>
                    <p class="def">Une recherche faite avec des expressions tels que le < > + - ...</p>
                    <p class="def">Ajouter une recherche dans la liste...</p>
                    <p class="def">Ajouter une recherche dans la liste...</p>
                </div>
            </div>
        </div>
        <div id="fHome"><?php require_once 'footer.php'; ?></div>
    </div>
    <script src="js/nightmod.js" type="text/javascript"></script>
</body>
</html>
