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
                <div class="col-1 fadeIn">
                    <div class="icon">
                        <img src="pixel_art/car.png">
                    </div>
                    <div class="icon">
                        <img src="pixel_art/cinema.png">
                    </div>
                    <div class="icon">
                        <img src="pixel_art/economy.png">
                    </div>
                    <div class="icon">
                        <img src="pixel_art/health.png">
                    </div>
                    <div class="icon">
                        <img src="pixel_art/music.png">
                    </div>
                    <div class="icon">
                        <img src="pixel_art/nature.png">
                    </div>
                    <div class="icon">
                        <img src="pixel_art/photography.png">
                    </div>
                    <div class="icon">
                        <img src="pixel_art/realstate.png">
                    </div>
                    <div class="icon">
                        <img src="pixel_art/science.png">
                    </div>
                    <div class="icon">
                        <img src="pixel_art/stockexchange.png">
                    </div>
                </div>
                <div class="col-7 fadeIn">
                    <p class="def">car</p>
                    <p class="def">cinema</p>
                    <p class="def">economy</p>
                    <p class="def">health</p>
                    <p class="def">music</p>
                </div>
            </div>
        </div>
        <div id="fHome"><?php require_once 'footer.php'; ?></div>
    </div>
    <script src="js/nightmod.js" type="text/javascript"></script>
</body>
</html>
