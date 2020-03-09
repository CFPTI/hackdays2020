<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/fontawesome.min.css">
     <link rel="stylesheet" href="css/all.css">
     <link id="nightCss" rel="stylesheet" href="css/styleW.css">
     <title>Home</title>
</head>
<body>
     <?php require_once 'nav.php'; ?>
     <div class="container">
          <div class="mx-auto search">  
               <form action="#" method="post">
                    <div id="searchInputRes" class="searchInput">
                         <span>
                              <input type="search" placeholder="Search Word" size="70">
                              <small class="form-text ml-3">System Status</small>
                              <i class="fas fa-search fa-lg fa-fw"></i>
                         </span>
                    </div>
               </form>
          </div>
          <div class="article">
          </div>
          <span id="fGlobal"><?php require_once 'footer.php'; ?></span>
     </div>
     <script src="js/nightmod.js" type="text/javascript"></script>
</body>
</html>
